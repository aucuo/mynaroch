<?
    session_start();
    
    $login = $_POST['login'];
    $password = $_POST['password'];


    // Проверка правильности формы
    if (!$login and !$password) {

        $_SESSION['message'] = 'Заполните форму входа';
        header("Location: ../views/auth.php");
        die();

    } else if (!$login) {

        $_SESSION['message'] = 'Укажите логин';
        header("Location: ../views/auth.php");
        die();

    } else if (!$password) {

        $_SESSION['message'] = 'Укажите пароль';
        header("Location: ../views/auth.php");
        die();

    }


    // SQL запрос
    require_once 'connect.php';
    $connect = connect();

    $hashed_password = mysqli_fetch_array(mysqli_query($connect, "SELECT `password` FROM `seniors` WHERE `login` = '$login'"));


    // Проверка на правильность логина
    if (!$hashed_password) {
        
        $_SESSION['message'] = 'Неверный логин';
        header("Location: ../views/auth.php");
        die();

    }


    // Проверка на правильность пароля
    $hashed_password = $hashed_password['password'];

    if (password_verify($password, $hashed_password)) {

        $user_information = mysqli_query($connect, "SELECT * FROM `seniors` WHERE `login` = '$login' AND `password` = '$hashed_password'");

        $user = mysqli_fetch_assoc($user_information);
        
        $_SESSION['senior'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "name" => $user['name'],
            "privilege" => $user['privilege']
        ];

        header("Location: ../views/index.php");
        die();        

    } else {
        
        $_SESSION['message'] = 'Неверный пароль';
        header("Location: ../views/auth.php");
        die();

    }
