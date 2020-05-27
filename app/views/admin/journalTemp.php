<?
    if (!isset($_SESSION['temp'])) {
        die();
    }
?>

<div id="wrapper">
    <?
        echo $_SESSION['temp']['content'];
    ?>
</div>