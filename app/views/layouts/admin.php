<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="Cache-Control" content="private">
<meta name="format-detection" content="telephone=no">
<meta name="robots" content="none"/>

<meta name="theme-color" content="#161616">

<title><? echo $title; ?></title>

<script src="https://kit.fontawesome.com/48a36d81b9.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/public/scripts/basic.js"></script>
<script src="/public/scripts/form.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/public/styles/css/basic.min.css">
<link rel="stylesheet" href="/public/styles/css/adminMenu.min.css">
<link rel="stylesheet" href="/public/styles/css/admin<? echo ucfirst($this -> route['action']) .'.min.css' ?>">


</head>
<body>
	<? if ($this -> route['action'] != 'login'): ?>
	<menu class="">
		<div id="mobileBackground"></div>
		<a id="burgerMenu"><span></span></a>

		<ul>
			<li id="logoWrapper"><a id="logo" href="/admin/">Majanarač</a></li>
			<li>
				<a>Časopis</a>
				<ul>
					<li><a href="">Добавить</a></li>
					<li><a href="">Редактировать</a></li>
				</ul>
			</li>
			<li>
				<a href="/admin/problems">Prablemy</a>
			</li>
			<li>
				<a>Halereja</a>
				<ul>
					<li><a href="/admin/gallery/add">Добавить</a></li>
					<li><a href="/admin/gallery">Редактировать</a></li>
				</ul>
			</li>
			<li id="exitButtonWrapper"><a href="/admin/logout" id="exitButton">Vyjści</a></li>
		</ul> 
	</menu>
	<? endif; ?>
	
	<? echo $content; ?>

</body>
</html>