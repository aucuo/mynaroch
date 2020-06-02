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

    <title>Document</title>

    <script src="https://kit.fontawesome.com/48a36d81b9.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="/public/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/public/styles/css/basic.min.css">
</head>
<body>


<div id="wrapper">
    <p>Страница не найдена</p>
</div>

<style>
    #wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        height: 100vh;

    }

    h1 {
        font-style: italic;
        font-size: 2rem;
    }

    p {
        z-index: 9999;
        color: #000;
        font-size: 1.7rem;
        font-weight: 900;
        font-style: italic;
        margin: 0;
    }

    p::after {
        z-index: -1;
        content: '404';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%);
        font-size: 6rem;
        font-style: italic;
        color: #dbb97b;
    }
</style>

<script>

setTimeout('window.history.back()', 3000);

</script>

</body>
</html>