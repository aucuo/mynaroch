<?php $basename = basename(__FILE__); session_start(); require 'basic/basic.php';?>

<link rel="stylesheet" href="css/auth.min.css">

</head>
<body>


<div id="wrapper">

	<form id="authForm" action="../models/login.php" method="post" enctype="multipart/form-data">

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
