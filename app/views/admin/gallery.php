<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<script>

$(document).ready(function() {
    var sizer = '.sizer';
    var container = $('#wrapper')

    container.imagesLoaded(function() {
        container.masonry({
            itemSelector: '.item-masonry',
            columnWidth: sizer,
            percentPosition: true
        });
    });
});

</script>

<div id="wrapper">

    <?php

		for ($i = 0; $i < count($vars); $i++) {
			echo '<div class="item-masonry sizer"><img id="'. $vars[$i]['id'] .'" src="/' . $vars[$i]['small'] . '"><div class="cover-item-gallery"><a href="/admin/gallery/edit/'. $vars[$i]['id'] .'">'. $vars[$i]['comment'] .'</a></div></div> ';
        } 

        
    ?>

</div>