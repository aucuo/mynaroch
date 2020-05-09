<?php $basename = basename(__FILE__); session_start(); require 'basic/basic.php';?>

<link rel="stylesheet" href="css/index.min.css">

</head>
<body>
<?php require 'basic/menu.php';?>
<script>$('menu').addClass('transparent')</script>


<div id="wrapper">

	<div id="background"></div>
	
	<div id="informationWrapper">
		<div id="information">

			<h1><?echo $_SESSION['senior']['name']?></h1>

			<p>Stvaraj novaje, abnaŭlaj staroje</p>

		</div>
	</div>

</div>


</body>
</html>
