  <?php require 'basic.php';?>

  <link rel="stylesheet" href="css/basic.min.css">
  <link rel="stylesheet" href="css/journal.min.css">

  </head>
  <body>

<?php require 'menu.php';?>
<script>

	var menuStyle = localStorage.getItem('menuStyle');
	// $('menu').addClass('transparent')

	if(menuStyle == null) {
		$("menu").addClass('white');
	} else {
		$("menu").addClass(menuStyle);
	}

</script>

<div class="wrapper">

  <div class="mainArticles"></div>

</div>

  </body>
  </html>
