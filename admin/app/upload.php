<?php

    session_start();
    if(empty($_FILES['userfile'])) {

        $_SESSION['message'] = 'Прикрепите изображения';
        header('Location: ../adminGallery.php');
        die();

    }

    $name = $_FILES['userfile']['name'];
    $type = $_FILES['userfile']['name'];
    $tmp_name = $_FILES['userfile']['tmp_name'];
    $size = $_FILES['userfile']['size'];
    $files_count = sizeof($name);


    for ($i = 0; $i < $files_count; $i++) {
    
        if (substr($type[$i], 0, 5) !== 'image') {
            $_SESSION['message'] = 'Формат файлов не поддерживается';
            header('Location: ../adminGallery.php');
            die();
        }
    }
