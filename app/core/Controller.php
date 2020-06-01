<?

namespace app\core;

use app\core\View;

abstract class Controller {

    public $route;
    public $view;
    public $acl;

    public function __construct($route) {

        $this -> route = $route;

        if (!$this -> checkAcl()) {

            View::errorCode(403);
        }

        $this -> view = new View($route);
        $this -> model = $this -> loadModel($route['controller']);
    }


    // Загрузка модели
    public function loadModel($name) {

        $path = 'app\models\\'. ucfirst($name);
        
        if (class_exists($path)) {
            return new $path;
        } 
    }


    //
    public function checkAcl() {

        $this -> acl = require 'app/acl/'. $this -> route['controller'] .'.php';

        if ($this -> isAcl('all')) {

            return true;

        } else if (isset($_SESSION['authorize']) and $this -> isAcl('authorize')) {

            return true;

        } else if (!isset($_SESSION['authorize']) and $this -> isAcl('guest')) {

            return true;

        } else if (isset($_SESSION['admin']) and $this -> isAcl('admin')) {

            return true;

        }

        return false;
    }


    //
    public function isAcl($key) {
        return in_array($this -> route['action'], $this -> acl[$key]);
    }
}
