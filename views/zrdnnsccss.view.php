<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	<link rel="stylesheet" type="text/css" href="css/zuordnen.css">
</head>
<body class="w3-container">
	<div class="w3-row-padding">
		<div class="w3-card-4 w3-padding-8">
			<div id="wordBox"  class="w3-panel w3-margin-top w3-dark-grey" data-imgID='<?= $randWordImgID ?>'>
				<h1  class="w3-opacity">Wortfeld: <b><?= $fieldname ?></b></h1>
			</div>
			<section class="w3-padding-16">
			<?php foreach ($res as $img) : ?>
				<div class="imgBox w3-margin-right w3-margin-left w3-margin-bottom" data-imgid = "<?= $img["imgID"] ?>">
					<img src='<?= retImgDir($fieldname) . $img["filename"] ?>' height='150' >
					<h2><?= $img["meaning"] ?></h2>
				</div>
			<?php endforeach; ?>
			</section>
			<div class="w3-container w3-sand  w3-padding-16  w3-xxlarge">
				<p class="w3-animate-left w3-panel">Bingo!</p>
			</div>
			<div id="Fehler" class="w3-container w3-padding-16  w3-xlarge">
				<?= (isset($missguessedArr)) ? count($missguessedArr) : '0'  ?> Fehler <?= $mssg ?></div>
		</div>
		<div class="w3-panel w3-border-top w3-border-bottom w3-xlarge">
		  <p><a href="./index.php" class="w3-xlarge">Zurück</a></p>
		</div>
		
	</div>
</body>
</html>