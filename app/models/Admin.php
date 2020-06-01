<?

namespace app\models;

use app\core\Model;
use app\lib\Db;

class Admin extends Model {

    public function loginValidate($post) {

        $db = new Db;

        $params = [
            'login' => $post['login'],
        ];

        $hash = $db -> column("SELECT password FROM seniors WHERE login = :login", $params);

        if (!$hash or !$post['password']) {

            return false;
        }

        if (password_verify($post['password'], $hash)) {

            $info = $db -> row("SELECT * FROM seniors WHERE login = :login", $params);
            $info = $info[0];
            
            $_SESSION['admin']['name'] = $info['name'];
            $_SESSION['admin']['login'] = $info['login'];
            $_SESSION['admin']['privilege'] = $info['privilege'];

            return true;
        }

        return false;
    }
    
    public function imageUpload($post, $files) {
        
        $files = $files['file'];
        $comment = $post['comment'];
        $type = substr($files['type'], 6, 100);

        if(!$post['comment'] or strlen($post['comment']) > 70 or empty($files['name'])) {

            return false;
        }

        $big_dir = 'public/images/gallery/big';
        $small_dir = 'public/images/gallery/small';
        $tmp_name = $files['tmp_name'];
        $name = uniqid() .".$type"; // Генерация уникального имени

        move_uploaded_file($tmp_name, "$big_dir/$name");

        copy("$big_dir/$name", "$small_dir/$name");

        // Магия сжатия картинки
        $filename = "$small_dir/$name";
        $source = imagecreatefromjpeg($filename);
        list($width, $height) = getimagesize($filename);
        $newwidth = 600;
        $newheight = $height/($width/$newwidth);

        $destination = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($destination, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
        imagejpeg($destination, "$small_dir/$name", 100);

        $params = [
            'comment' => $post['comment'],
            'big' => "$big_dir/$name",
            'small' => "$small_dir/$name",
        ];

        $db = new Db;
        $query = $db -> query("INSERT INTO gallery (comment, big, small) VALUES (:comment, :big, :small);", $params);
        
        return true;
    }

    public function getImages() {

        $db = new Db;
        $query = $db -> row("SELECT * FROM gallery");

        return $query;
    }

    public function imageEdit($post, $id) {

        if (empty($post['comment']) or strlen($post['comment']) < 5) {
            return false;
        }

        $db = new Db;

        $params = [
            'comment' => $post['comment'],
            'id' => $id,
        ];

        $query = $db -> query("UPDATE gallery SET comment = :comment  WHERE `gallery`.`id` = :id;", $params);

        return true;
    }

    public function imageDelete($big, $small, $id) {

        unlink("$big");
        unlink("$small");

        $params = [
            'id' => $id,
        ];

        $db = new Db;

        $query = $db -> query("DELETE FROM `gallery` WHERE `gallery`.`id` = :id;", $params);

        return true;
    }

    public function isExists($table, $id) {

        $db = new Db;

        $params = [
            'id' => $id,
        ];

        return $db -> row("SELECT * FROM $table WHERE id = :id", $params);
    }
    

    public function articleUpload($post, $files) {
        
        if (empty($post['header']) or empty($post['category']) or empty($post['description']) or empty($post['content']) or empty($files['file']['name'])) {
            return false;
        }

        $files = $files['file'];
        $type = substr($files['type'], 6, 100);

        $dir = 'public/images/journal';
        $tmp_name = $files['tmp_name'];
        $name = uniqid() .".$type"; // Генерация уникального имени

        move_uploaded_file($tmp_name, "$dir/$name");

        // Магия сжатия картинки
        $filename = "$dir/$name";
        $source = imagecreatefromjpeg($filename);
        list($width, $height) = getimagesize($filename);
        $newwidth = 800;
        $newheight = $height/($width/$newwidth);

        $destination = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($destination, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
        imagejpeg($destination, "$dir/$name", 100);

        $db = new Db;

        $params = [
            'header' => $post['header'],
            'image' => "$dir/$name",
            'category' => $post['category'],
            'description' => $post['description'],
            'content' => $post['content'],
            'author' => $_SESSION['admin']['name'],
            'date' => date('d.m.Y'),
            'time' => date('G:i'),
        ];

        $db -> row("INSERT INTO `journal` (`header`, `image`, `category`, `description`, `content`, `author`, `date`, `time`) VALUES (:header, :image, :category, :description, :content, :author, :date, :time );", $params);

        return true;
    }


    public function getArticles() {
        
        $db = new Db;
        $query = $db -> row("SELECT `id`, `header`, `image`, `category`, `description`, `author`, `date`, `time` FROM `journal` WHERE 1");

        return $query;
    }

    public function articleEdit($post, $id) {

        if (empty($post['header']) or empty($post['category']) or empty($post['description']) or empty($post['content'])) {
            return false;
        }

        $db = new Db;

        $params = [
            'id' => $id,
            'header' => $post['header'],
            'category' => $post['category'],
            'description' => $post['description'],
            'content' => $post['content'],
        ];

        

        $query = $db -> query("UPDATE `journal` SET `header` = :header, `category` = :category, `description` = :description, `content` = :content WHERE `journal`.`id` = :id;", $params);

        return $query;
    }


    public function articleDelete($dir, $id) {

        unlink("$dir");

        $params = [
            'id' => $id,
        ];

        $db = new Db;

        $query = $db -> query("DELETE FROM `journal` WHERE `journal`.`id` = :id;", $params);

        return true;
    }
}