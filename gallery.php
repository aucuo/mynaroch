<?php require 'basic.php';?>

    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="js/gallery.js"></script>

	<link rel="stylesheet" href="css/basic.min.css">
	<link rel="stylesheet" href="css/gallery.min.css">

	</head>
	<body>

<?php require 'menu.php';?>
<script>
</script>

<div id="wrapper">

    <?php
		$dir = 'media/gallery/';
		$file = scandir($dir);

		for ($i = 2; $i < count($file); $i++) {
			echo '<div class="item-masonry sizer"><img src="/media/gallery/' . $file[$i] . '"><div class="cover-item-gallery"><a href=""></a></div></div> ';
        } 
    ?>

    
    
</div>