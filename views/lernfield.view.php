<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	<link rel="stylesheet" type="text/css" href="css/lernfield.css">
</head>
<body>
	<h1>Lernfeld: <b><?= $fieldname ?></b></h1>
<a href="./index.php">back</a>
	<section>
		
<?php 
	foreach ($imgset as $img) {
		$src = $imgDir . "/" . $img["filename"];
		echo "<div id='item'><img src='" . $src . "' height='100' ></br>";
		echo "<h3>" . $img["meaning"] . "</h3></div>";
	}
?>

	</section>

	<br>
<h2>add item</h2>

<div id="addItem">
	<!-- Die Encoding-Art enctype MUSS wie dargestellt angegeben werden -->
<form enctype="multipart/form-data" action="" method="POST">

	<label>Bedeutung:</label>
    <input type="text" name="meaning">
    <input type="hidden" name="id" value="<?= $id ?>"  />
    <!-- MAX_FILE_SIZE muss vor dem Dateiupload Input Feld stehen -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
    <!-- Der Name des Input Felds bestimmt den Namen im $_FILES Array -->
    Diese Datei hochladen: <input name="addIMG" type="file" />
    <input type="submit" value="Send File" />
</form>
<form id="export" action="showlist.php" method="post">
	<input type="hidden" name="lernfield_id" value="<?= $id ?>"  />
	<input type="hidden" name="fieldname" value="<?= $fieldname ?>"  />
	<input type="submit" value="Export word list"/>
	<input type="submit" name="shuffle" value="Shuffle & export word list"/>

</form>
</div>
<br>
</body>
</html>

	  
 




