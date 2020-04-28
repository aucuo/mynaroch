  <?php require 'basic.php';?>

  <link rel="stylesheet" href="css/basic.min.css">
  <link rel="stylesheet" href="css/auth.min.css">

  </head>
  <body>

  <?php require 'menu.php';?>

<div class="mainWrapper">
<div class="wrapper">

  <div class="background"></div>

  <form class="" action="auth.php" method="post">
    <legend>Пройдя, ты обретешь небывалую силу!</legend>
    <div>
      <input type="text" name="login" placeholder=" " required>
      <label for="login">Логин</label>
    </div>
    <div>
      <input type="password" name="password" placeholder=" " required>
      <label for="password">Пароль</label>
    </div>
    <button type="submit">Войти</button>
  </form>

</div>
</div>

<?php
  require 'db.php';
  if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $result = mysql_query("SELECT * FROM `users` WHERE `login` = '$login'") or die(mysqli_error($connection));

    $data = mysql_fetch_assoc($result);

    if($data['password'] === $password) {
      $_SESSION['login'] = $login;
      echo "таптаптап";
    } else {
      echo "шо то не так";
    }
  }
?>

  </body>
  </html>
