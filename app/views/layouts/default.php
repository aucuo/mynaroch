<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="Cache-Control" content="private">
<meta name="format-detection" content="telephone=no">

<meta name="theme-color" content="#161616">
<meta name="description" content="Наш проект создан для того, чтобы помогать приезжим нашего курорта. Мы рады поделится с вами нашими знаниями о Нарочи!">
<meta name="keywords" content="Нарочь, отдых, Беларусь, курорт, здоровье, оздоровление, санаторий, национальный, парк, белорусское море, Mynaroch, моя Нарочь">

<meta name="Author" content="Jahor Šykaviec">
<meta name="Copyright" content="Jahor Šykaviec">
<meta name="Adress" content="Belarus, Minskaja voblasć, Miadzieĺski rajon, kurortny pasiolak Narač">

<title><? echo $title; ?></title>

<script src="https://kit.fontawesome.com/48a36d81b9.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/public/scripts/basic.js"></script>

<link rel="apple-touch-icon" sizes="180x180" href="/public/images/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/public/images/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/public/images/icons/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/public/styles/css/basic.min.css">
<link rel="stylesheet" href="/public/styles/css/menu.min.css">
<link rel="stylesheet" href="/public/styles/css/<? echo $this -> route['action'] .'.min.css' ?>">


</head>
<body>

	<div id="preloaderWrapper">
		<div id="preloader"></div>
	</div>

	<menu class="">
		<div id="mobileBackground"></div>
		<a id="burgerMenu"><span></span></a>

		<ul>
			<li id="logoWrapper"><a id="logo" href="/">Majanarač</a></li>
			<li><a href="/journal">Журнал</a></li>
			<li><a href="/problems">Проблемы</a></li>
			<li><a href="/gallery">Галерея</a></li>
		</ul>
	</menu>
	
	<? echo $content; ?>

</body>
</html>