<?
    require_once 'models/connect.php';

    if(isset($_GET['action']))
        $model = $_GET['action'];
    else
        $model = '';

    switch ($model) {
        case '':
            header("Location: views/index.php");
            die();
        break;
    }