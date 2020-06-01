<?

namespace app\core;

class View {

    public $path;
    public $route;
    public $layout;

    public function __construct($route) {

        $this -> route = $route;
        $this -> path = $route['controller'] .'/'. $route['action'];
    }


    // Загрузка шаблона (layout) и контента (main)
    public function render($title, $vars = []) {

        extract($vars);

        $path = 'app/views/'. $this -> path .'.php';

        if ($this -> route['controller'] == 'admin') {

            $this -> layout = 'admin.php';

        } else {

            $this -> layout = 'default.php';

        }

        if (file_exists($path)) {

            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'app/views/layouts/'. $this -> layout;

        }      
    }


    // Редирект со страницы с ошибкой
    public function redirect($url) {

        header('Location:'. $url);
        exit;
    }


    // Страницы с error кодами
    public static function errorCode($code) {

        http_response_code($code);

        $path = 'app/views/errors/'. $code .'.php';

        if (file_exists($path)) {
            require $path;
        }
        exit;
    }


}
