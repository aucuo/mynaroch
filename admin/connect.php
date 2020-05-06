<?php
	error_reporting();
	$dataBaseHost = 'localhost';
	$dataBaseUser = 'root';
	$dataBasePassword = 'root';
	$dataBase = 'mynaroch';
	
	$connect = mysqli_connect($dataBaseHost, $dataBaseUser, $dataBasePassword, $dataBase);

	if (!$connect) {
		die('<div id="dataBaseError">Error connect to database</div>');
	}