<?php
	session_start();
	error_reporting();
	$dataBaseHost = 'localhost';
	$dataBaseUser = 'root';
	$dataBasePassword = 'root';
	$dataBase = 'mynaroch';
	
	$connect = mysqli_connect($dataBaseHost, $dataBaseUser, $dataBasePassword, $dataBase);

	if (!$connect) {

		$_SESSION['message'] = 'Не удалось подключится к базе данных';
		header('Location: ../adminAuth.php');
		die('Не удалось подключится к базе данных');
	
	}