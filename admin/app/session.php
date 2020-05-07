<?php 

session_start(); 

	if (!$_SESSION['user']) {

		$_SESSION['message'] = 'Сначала авторизуйтесь';
		header('Location: adminAuth.php');
		die();

	}

?>