<?php 
	session_start(); 

	if ($_SESSION['user']) {
		header('Location: adminIndex.php');
	}

	require 'app/basic.php';
?>

<link rel="stylesheet" href="../css/adminAuth.min.css">

</head>
<body>


<div id="wrapper">

	<form id="authForm" action="app/auth.php" method="post" enctype="multipart/form-data">

		<label>Логин</label>	
		<input id="loginInput" type="text" name="login" placeholder="Введите логин">

		<label>Пароль</label>
		<input id="passwordInput" type="password" name="password" placeholder="Введите пароль">

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
