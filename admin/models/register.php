<?
    session_start();

    $login = $_POST['login'];
    $name = $_POST['name'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $privilege = $_POST['privilege'];

    if ($_SESSION['senior']['privilege'] !== 'administrator') {

        $_SESSION['message'] = 'У вас недостаточно прав';
        header("Location: ../views/register.php");
        die();

    }

    if (!$login) {

        $_SESSION['message'] = 'Введите логин';
        header("Location: ../views/register.php");
        die();

    } else if (!$name) {

        $_SESSION['message'] = 'Введите имя';
        header("Location: ../views/register.php");
        die();

    } else if (!$password1 or !$password2 or $password1 !== $password2) {

        $_SESSION['message'] = 'Пароли не совпадают';
        header("Location: ../views/register.php");
        die();

    } else if (!$privilege) {

        $_SESSION['message'] = 'Выберите привелегию';
        header("Location: ../views/register.php");
        die();

    }

    require '../models/connect.php';

    $connect = connect();

    $check = mysqli_query($connect, "SELECT * FROM `seniors` WHERE `login` = '$login'");

    if (mysqli_num_rows($check) > 0) {
        $_SESSION['message'] = 'Этот логин занят';
        header("Location: ../views/register.php");
        die();
    } else {

        $password = password_hash($password1, PASSWORD_BCRYPT);        

        $new_user = mysqli_query($connect, "INSERT INTO `seniors` (`login`, `password`, `name`, `privilege`) VALUES ('$login', '$password', '$name', '$privilege')");

        if($new_user) {

            $_SESSION['message'] = 'Сениор добавлен! Поздравляю с пополнением!';
            header("Location: ../views/register.php");
            die();

        } else {

            $_SESSION['message'] = 'Не удалось добавить сениора!';
            header("Location: ../views/register.php");
            die();

        }
    }

    