<?
    session_start();
    
    unset($_SESSION['senior']);
    header('Location: ../views/auth.php');