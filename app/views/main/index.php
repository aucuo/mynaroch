
<script src="/public/scripts/weather.js" crossorigin="anonymous"></script>

<script>$('menu').addClass('transparent')</script>

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


<script>

$(document).ready(function() {
    var quotes = [
        "Самый Белорусский курорт",
        "У нас есть большое озеро",
        "Мы курорт с 1964 года",
        "По-настоящему прозрачный",
        "Родина Максима Танка",
        "Родина Марии Захаревич",
        "Здесь решили судьбу Франции",
        "Крутые берега, песчаные пляжи",
        "Поставщик хороших настроений"
    ];

    var quoteNumber = randomInteger(0, quotes.length - 1);
    document.getElementById('quote').innerHTML = quotes[quoteNumber];

    function randomInteger(min, max) {
        let rand = min - 0.5 + Math.random() * (max - min + 1);
        return Math.round(rand);
    }


    //Время на сайте
    function addZero(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    function getCurrentTime() {
        var time, h, m;
        time = new Date(Date.now());
        h = time.getUTCHours();
        m = addZero(time.getUTCMinutes());
        return (h + 3) + ':' + m;
    }

    function setTimer2() {
        document.getElementById('currentTime').innerHTML = getCurrentTime();
    }
    setInterval(setTimer2, 1000);

});

</script>