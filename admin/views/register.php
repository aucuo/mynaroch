<?php $basename = basename(__FILE__); session_start(); require 'basic/basic.php';?>

<link rel="stylesheet" href="css/register.min.css">

</head>
<body>
<?php require 'basic/menu.php';?>


<div id="wrapper">

    <form id="registerForm" action="../models/register.php" method="post" enctype="multipart/form-data">

        <label>Логин</label>	
        <input id="loginInput" type="text" name="login" placeholder="Введите логин">

        <label>Имя</label>	
        <input id="nameInput" type="text" name="name" placeholder="Введите имя">

        <label>Пароль</label>
        <input id="passwordInput" type="password" name="password1" placeholder="Введите пароль">

        <label>Пароль</label>
        <input id="passwordInput" type="password" name="password2" placeholder="Повторите пароль">

        <label>Привилегия</label>	
        <select name="privilege" id="">
            <option value="administrator">administrator</option>
            <option value="copywriter">copywriter</option>
            <option value="photographer">photographer</option>
        </select>

        <button type="submit">Зарегистрировать</button>

        <div id="messages">	
            <p>
                <?php 		
                    if ($_SESSION['message']) {
                        echo $_SESSION['message']; 
                    }
                    unset($_SESSION['message']);
                ?>
            </p>
        </div>

    </form>

</div>


</body>
</html>
