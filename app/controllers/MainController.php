<?

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller {

    public function indexAction() {

        $this -> view -> render('Maja Narač');
    }

    public function journalAction() {

        $this -> view -> render('Журнал');
    }

    public function articleAction() {

        $this -> view -> render('Журнал');
    }

    public function problemsAction() {

        $this -> view -> render('Проблемы');
    }

    public function galleryAction() {

        $list = $this -> model -> getImages();

        $this -> view -> render('Галерея', $list);
    }
}
