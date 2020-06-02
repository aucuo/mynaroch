<?

namespace app\controllers;

use app\core\Controller;

class AdminController extends Controller {

    public function loginAction() {

        if (!empty($_POST)) {
            if ($this -> model -> loginValidate($_POST)) {

                header('Location: /admin');

            } else {
                
                $_SESSION['message'] = 'Не правильный логин или пароль';
            }
        }

        $this -> view -> render('Вход');
    }


    public function logoutAction() {

        unset($_SESSION['admin']);
        header('Location: /admin/login');
    }


    public function indexAction() {

        $this -> view -> render('Maja Narač');
    }


    public function galleryAction() {

        $list = $this -> model -> getImages();
        

        $this -> view -> render('Галерея', $list);
    }


    public function galleryAddAction() {

        if (!empty($_POST)) {
            if ($this -> model -> imageUpload($_POST, $_FILES)) {

                $_SESSION['message'] = 'Файл успешно загружен';

            } else {
                
                $_SESSION['message'] = 'Проверьте форму';
            }
        }

        $this -> view -> render('Галерея');
    }

    
    public function galleryEditAction() {

        $result = $this -> model ->  isExists('gallery', $this -> route['id']);
        
        if (!$result) {
            $this -> view -> errorCode(404);
        }

        if (isset($_POST['edit'])) {
            
            if ($this -> model -> imageEdit($_POST, $this -> route['id'])) {

                header("Location: /admin/gallery");

            } else {
                
                $_SESSION['message'] = 'Проверьте форму';
            }

        } else if (isset($_POST['delete'])) {

            $this -> model -> imageDelete($result[0]['big'], $result[0]['small'], $this -> route['id']);
            header("Location: /admin/gallery");
        }

        $this -> view -> render('Галерея', $result[0]);
    }

    public function journalAction() {        

        $list = $this -> model -> getArticles();

        $this -> view -> render('Журнал', $list);
    }

    public function journalAddAction() {        

        if (isset($_POST['save'])) {

            $_SESSION['temp'] = $_POST;

            if ($this -> model -> articleUpload($_POST, $_FILES)) {

                $_SESSION['message'] = 'Файл успешно загружен';
                unset($_SESSION['temp']);
                header("Location: /admin/journal");

            } else {
                
                $_SESSION['message'] = 'Заполните все поля';
            }

        } else if (isset($_POST['temp'])) {

            $_SESSION['temp'] = $_POST;
            header("Location: /admin/journal/temp");

        } else if (isset($_SESSION['temp'])) {

            $this -> view -> render('Журнал', $_SESSION['temp']);
            die();
        }

        $this -> view -> render('Журнал');
    }

    public function journalTempAction() {    

        if (isset($_SESSION['temp'])) {
            
            $this -> view -> render('Журнал', $_SESSION['temp']);
            unset($_SESSION['temp']);

        } else {
            
            $this -> view -> render('Журнал');
        }
    }

    public function journalEditAction() {

        $result = $this -> model ->  isExists('journal', $this -> route['id']);

        
        if (!$result) {
            $this -> view -> errorCode(404);
        }

        if (isset($_POST['save'])) {

            if ($this -> model -> articleEdit($result[0]['image'], $_FILES, $_POST, $this -> route['id'])) {

                header("Location: /admin/journal");
                $_SESSION['message'] = 'Статья отредактирована';

            } else {
                
                $_SESSION['message'] = 'Заполните все поля';
            }

        } else if (isset($_POST['temp'])) {

            $_SESSION['temp'] = $_POST;
            $_SESSION['temp']['image'] = $result[0]['image'];
            $_SESSION['temp']['date'] = $result[0]['date'];
            $_SESSION['temp']['time'] = $result[0]['time'];
            $_SESSION['temp']['author'] = $result[0]['author'];
            
            header("Location: /admin/journal/temp");

        } else if (isset($_POST['delete'])) {

            $this -> model -> articleDelete($result[0]['image'], $this -> route['id']);
            header("Location: /admin/journal/");
        }

        $this -> view -> render('Журнал', $result[0]);
    }

}
