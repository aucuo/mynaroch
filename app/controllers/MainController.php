<?

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller {

    public function indexAction() {

        $this -> view -> render('Maja Narač');
    }

    public function journalAction() {

        $list = $this -> model -> getArticles();
        $this -> view -> render('Журнал', $list);
    }

    public function articleAction() {

        $result = $this -> model ->  isExists('journal', $this -> route['id']);
        
        if (!$result) {
            $this -> view -> errorCode(404);
        }

        $this -> view -> render('Журнал', $result);
    }

    public function problemsAction() {

        $this -> view -> render('Проблемы');
    }

    public function galleryAction() {

        $list = $this -> model -> getImages();

        $this -> view -> render('Галерея', $list);
    }
}
