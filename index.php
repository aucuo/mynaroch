<?php require 'basic.php';?>

	<script src="js/weather.js" crossorigin="anonymous"></script>
	<script src="js/index.js"></script>

	<link rel="stylesheet" href="css/basic.min.css">
	<link rel="stylesheet" href="css/index.min.css">

	</head>
	<body>

<?php require 'menu.php';?>
<script>

	$('menu').addClass('transparent')

</script>

<div id="wrapper">

	<div id="background"></div>

	<div id="informationWrapper">
		<a href="https://www.accuweather.com/ru/by/narach/29723/weather-forecast/29723" target="_blank" title="Узнать более точную погоду"><div id="information">

			<h1>Нарочь</h1>
			<p id="quote"></p>

			<div id="weatherAndDate">

				<div id="weather">
					<i id="weatherIcon"></i>
					<p id="weatherTemperature"></p>
					<p id="weatherType"></p>
				</div>

				<div id="date">
					<p id="currentDate">
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
					<p id="currentTime"></p>		
				</div>

			</div>

		</div></a>

	</div>

</div>

	</body>
	</html>
