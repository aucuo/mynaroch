<?php require 'app/session.php'; session_start(); require 'app/basic.php';?>

<link rel="stylesheet" href="../css/adminIndex.min.css">

</head>
<body>
<?php require 'app/adminMenu.php';?>
<script>$('menu').addClass('transparent')</script>


<div id="wrapper">

	<div id="background"></div>
	
	<div id="informationWrapper">
		<div id="information">

			<h1><?php echo $_SESSION['user']['name'] ?></h1>

			<p>Stvaraj novaje, abnaŭlaj staroje</p>
			
			<div id="logoutButtonWrapper">
				<a href="app/logout.php" id="logoutButton">Vyjści z adminki</a>
			</div>

		</div>
	</div>

</div>


</body>
</html>
