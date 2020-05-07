<?php require 'app/session.php'; session_start(); require 'app/basic.php';?>

<link rel="stylesheet" href="../css/adminGallery.min.css">

</head>
<body>
<?php require 'app/adminMenu.php';?>


<div id="wrapper">

    <form id="uploadForm" action="app/upload.php" method="post" enctype="multipart/form-data">

		<label id="lableForFile" for="fileInput">Выбрать файл</label>
		<input id="fileInput" type="file" name="userfile[]"  multiple  accept="image/*" >

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
