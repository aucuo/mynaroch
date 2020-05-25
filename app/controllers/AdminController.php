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

        $this -> view -> render('Главная');
    }


    public function galleryAction() {

        $list = $this -> model -> getImages();
        

        $this -> view -> render('Журнал', $list);
    }


    public function galleryAddAction() {

        if (!empty($_POST)) {
            if ($this -> model -> imageUpload($_POST, $_FILES)) {

                $_SESSION['message'] = 'Файл успешно загружен';

            } else {
                
                $_SESSION['message'] = 'Проверьте форму';
            }
        }

        $this -> view -> render('Журнал');
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

        $this -> view -> render('Журнал', $result[0]);
    }

}
