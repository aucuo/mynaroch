<?php $basename = basename(__FILE__); session_start(); require 'basic/basic.php';?>

<link rel="stylesheet" href="css/gallery.min.css">

</head>
<body>
<?php require 'basic/menu.php';?>


<div id="wrapper">

    <form id="uploadForm" action="app/upload.php" method="post" enctype="multipart/form-data">

		<label id="lableForFile" for="fileInput">Выбрать файл</label>
		<input name="comment" id="commentInput" type="text" placeholder="Комментарий к фотографии">

		<label id="lableForFile" for="fileInput">Выбрать файл</label>
		<input name="image" id="fileInput" type="file" accept="image/*">

		<button type="submit">Загрузить</button>

		<div id="messages">	
			<p>
				<?php 		
					if ($_SESSION['message']) {
						echo $_SESSION['message']; 
					}
					unset($_SESSION['message']);
				?>
			</p>
		</div>

	</form>

</div>


</body>
</html>
