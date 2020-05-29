<div id="wrapper">
    <div id="background" style="background-image: url(/<? echo $vars['image'] ?>);">
        <div id="articleInfo">
            <h1><? echo $vars['header']; ?></h1>
            <div id="char">
                <p id="author"><? echo $vars['author']; ?></p>
                <p id="date"><? echo $vars['date'] .', '. $vars['time']; ?></p>
            </div>
        </div>
    </div>
    
    <?
        echo $vars['content'];
    ?>
</div>