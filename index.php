<?php require 'basic.php';?>

	<script src="js/weather.js" crossorigin="anonymous"></script>
	<!-- <script src="js/time.js"></script> -->

	<link rel="stylesheet" href="css/basic.min.css">
	<link rel="stylesheet" href="css/index.min.css">

	</head>
	<body>

<?php require 'menu.php';?>
<script>$("menu").addClass('backgroundTransparent mobileBackgroundWhite');</script>

<div class="wrapper">

	<div class="background">
    <!-- <video preload="auto" autoplay="autoplay" loop="loop">
        <source src="media/6ff6b3e1ab.720.mp4" type="video/mp4"></source>
    </video> -->
	</div>

	<div class="centralWrapper">
		<div class="central">
			<div class="information">
				<h1>Нарочь</h1>
			</div>
			<div class="weather">
				<p>Самый популярный курорт Беларуси</p>
				<div class="type">
					<i class="weatherIcon"></i>
					<p class="temperature"></p>
					<p class="weatherType"></p>
				</div>
				<div class="date">
					<p class="time">
						<?php
							date_default_timezone_set('Europe/Minsk');
							$time = date('H:i');
							echo $time;
						?>
					</p>
					<p class="date">
						<?php
						rdate();
						function rdate() {
						$date=explode(".", date("d.m.Y"));
						switch ($date[1]){
							case 1: $m='января'; break;
							case 2: $m='февраля'; break;
							case 3: $m='марта'; break;
							case 4: $m='апреля'; break;
							case 5: $m='мая'; break;
							case 6: $m='июня'; break;
							case 7: $m='июля'; break;
							case 8: $m='августа'; break;
							case 9: $m='сентября'; break;
							case 10: $m='октября'; break;
							case 11: $m='ноября'; break;
							case 12: $m='декабря'; break;
						}
						echo $date[0].'&nbsp;'.$m.'&nbsp;';
						}
						?>
					</p>			
				</div>
			</div>
		</div>
	</div>
</div>

	</body>
	</html>
