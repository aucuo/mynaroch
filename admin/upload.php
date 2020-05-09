<?php

use function PHPSTORM_META\type;

session_start();

    $name = $_FILES['image']['name'];
    $type = substr($_FILES['image']['type'], 0, 5);
    $files_count = sizeof($name);
    $comment = $_POST['comment'];

    if(!$_POST['comment']) {

        $_SESSION['message'] = 'Напишите комментарий';
        header('Location: ../adminGallery.php');
        die();

    } else if(strlen($comment) > 70) {

        $_SESSION['message'] = 'Комментарий слишком длинный';
        header('Location: ../adminGallery.php');
        die();

    } else if(empty($name)) {

        $_SESSION['message'] = 'Прикрепите изображение';
        header('Location: ../adminGallery.php');
        die();

    } 
    
    $big_dir = '../../media/gallery/big';
    $small_dir = '../../media/gallery/small';
    $tmp_name = $_FILES['image']['tmp_name'];
    $name = $_FILES['image']['name'];

    move_uploaded_file($tmp_name, "$big_dir/$name");


    copy("$big_dir/$name", "$small_dir/$name");

    $filename = "$small_dir/$name";
    $source = imagecreatefromjpeg($filename);
    list($width, $height) = getimagesize($filename);

    $newwidth = 600;
    $newheight = $height/($width/$newwidth);

    $destination = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($destination, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    imagejpeg($destination, "$small_dir/$name", 100);


    require_once 'connect.php';
    mysqli_query($connect, "INSERT INTO `gallery` (`comment`, `big`, `small`) VALUES ('$comment', '$big_dir/$name', '$small_dir/$name')");

    $_SESSION['message'] = 'Изображение успешно сохранено';
    header('Location: ../adminGallery.php');
    die();
