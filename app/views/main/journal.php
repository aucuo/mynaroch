<div id="wrapper">

    <div id="journalWindow">
    
        <section id="headerSection">
            <ul>
                <?
                
                    for ($i = 0; $i < 5; $i++) {
                        if (isset($vars[$i])) {
                            echo 
                            '
                            <li>
                                <a href="/journal/article/'. $vars[$i]['id'] .'" class="article" style="background-image: url(/'. $vars[$i]['image'] .');">
                                    <div class="description">
                                        <p class="header">'. $vars[$i]['header'] .'</p>
                                        <p class="category">'. $vars[$i]['category'] .'</p>
                                    </div>
                                </a>
                            </li>
                            ';
                        }
                    }
                
                ?>
            </ul>
        </section>

        <section id="mainSection">
            <ul>
                <?

                    for ($i = 5; $i < 7; $i++) {
                        if (isset($vars[$i])) {
                            echo 
                            '
                            <li>
                                <a href="/journal/article/'. $vars[$i]['id'] .'" class="article">
                                    <div class="img" style="background-image: url(/'. $vars[$i]['image'] .');"></div>
                                    <div class="description">
                                            <p class="header">'. $vars[$i]['header'] .'</p>
                                            <p class="text">'. $vars[$i]['description'] .'</p>
                                            <p class="category">'. $vars[$i]['category'] .'</p>
                                    </div>
                                </a>
                            </li>
                            ';
                        }
                    }

                ?>
            </ul>
        </section>
    
    </div>

</div>