<?php session_start(); require 'adminBasic.php';?>

	<link rel="stylesheet" href="../css/adminAuth.min.css">

	</head>
	<body>

<?php require '../menu.php';?>

<div id="wrapper">

	<form id="authForm" action="auth.php" method="post" enctype="multipart/form-data">

		<label>Логин</label>	
		<input id="loginInput" type="text" name="login" placeholder="Введите логин">

		<label>Пароль</label>
		<input id="passwordInput" type="text" name="password" placeholder="Введите пароль">

		<button type="submit">Войти</button>

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
