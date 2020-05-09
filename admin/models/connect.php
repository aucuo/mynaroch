<?php
	error_reporting();
	
	function connect() {
		
		$dataBaseHost = 'localhost';
		$dataBaseUser = 'root';
		$dataBasePassword = 'root';
		$dataBase = 'mynaroch';

		$connect = mysqli_connect($dataBaseHost, $dataBaseUser, $dataBasePassword, $dataBase);

		if (!$connect) {

			$_SESSION['message'] = 'Не удалось подключится к базе данных';
			header('Location: ../views/auth.php');
			die('Не удалось подключится к базе данных');
		
		}

		return $connect;
	}