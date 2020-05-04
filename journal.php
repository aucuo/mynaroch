  <?php require 'basic.php';?>

  <link rel="stylesheet" href="css/basic.min.css">
  <link rel="stylesheet" href="css/journal.min.css">

  </head>
  <body>

<?php require 'menu.php';?>
<script>
	var menuStyle = localStorage.getItem('menuStyle');
	// $('menu').addClass('transparent')

	if(typeof menuStyle !== 'undefined') {
		$("menu").addClass(menuStyle);
	} else {
		$("menu").addClass('white');
	}
</script>

<div class="wrapper">

  <div class="mainArticles"></div>

</div>

  </body>
  </html>
