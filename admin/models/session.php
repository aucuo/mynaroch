<?
    session_start();

    if ($basename !== 'auth.php') {
        if(!isset($_SESSION['senior'])) {

            $_SESSION['message'] = 'Сначала авторизуйтесь';
            header("Location: auth.php");
            die();
    
        }
    } else if ($basename == 'auth.php') {
        if(isset($_SESSION['senior'])) {

            header("Location: index.php");
            die();
    
        }
    }

    
        