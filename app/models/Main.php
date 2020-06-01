<?

namespace app\models;

use app\core\Model;
use app\lib\Db;

class Main extends Model {

    public function getImages() {

        $db = new Db;
        $query = $db -> row("SELECT * FROM gallery");

        return $query;
    }


    public function getArticles() {
        
        $db = new Db;
        $query = $db -> row("SELECT `id`, `header`, `image`, `category`, `description`, `author`, `date`, `time` FROM `journal` WHERE 1");

        return $query;
    }


    public function isExists($table, $id) {

        $db = new Db;

        $params = [
            'id' => $id,
        ];

        return $db -> row("SELECT * FROM $table WHERE id = :id", $params);
    }
}