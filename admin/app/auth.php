<? 
    session_start();
	require_once 'connect.php';

	$login = $_POST['login'];
	$password = $_POST['password'];

    $userCheck = mysqli_query($connect, "SELECT * FROM `admins` WHERE `login` = '$login' AND `password` = '$password'");

    if (mysqli_num_rows($userCheck) > 0) {

        $user = mysqli_fetch_assoc($userCheck);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "name" => $user['name'],
            "privilege" => $user['privilege']
        ];

        header('Location: ../adminIndex.php');

    } else {

        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../adminAuth.php');

    }
