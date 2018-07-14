<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	<link rel="stylesheet" type="text/css" href="css/zuordnen.css">
</head>
<body class="w3-container">
	<div class="w3-row">
		<div class="w3-card-4 w3-padding-8">
			<div id="wordBox"  class="w3-panel w3-margin-top w3-dark-grey" data-imgID='<?= $randWordImgID ?>'>
				<h1  class="w3-opacity"><b><?= $randWord ?></b></h1>
			</div>
			<div class="w3-panel w3-border-top w3-border-bottom w3-xlarge">
				<p>Welches Bild passt? Klicken Sie auf das Bild!</p>
			</div>
			<!-- test -->
			<button class="w3-btn" id="shuffler">shuffle imgs</button>
			<!-- test -->
			<section class="w3-padding-16">
			<?php foreach ($res as $img) : ?>
				<div class="imgBox w3-margin-left w3-margin-bottom w3-center" data-imgid = "<?= $img["imgID"] ?>">
					<img src='<?= retImgDir($fieldname) . $img["filename"] ?>' height='150' >
					<h2>&nbsp;</h2>
				</div>
			<?php endforeach; ?>
			</section>
			<footer id="nxt" class="w3-margin-left w3-margin-bottom">
				<form id="nxt-form" action="zuordnen.php" method="post">
					<input type="hidden" name="fieldID" value="<?= $fieldID ?>">
					<input type="hidden" name="fieldname" value="<?= $fieldname ?>">
					<input type="hidden" name="randWordImgID" value="<?= $randWordImgID ?>">
					<input type="hidden" name="commitedMstk" value="0">
					<?php if(isset($usedImgIDArr)) : ?>
						<?= create_inputs($usedImgIDArr, "usedImgIDArr") ?>
					<?php endif; ?>
					<?php if(isset($missguessedArr)) : ?>
						<?= create_inputs($missguessedArr, "missguessedArr") ?>
					<?php endif; ?>
					<input class="w3-btn w3-grey w3-round w3-padding" type="submit" name="nxt" value="weiter" disabled="disabled">
				</form>
			</footer>
		</div>
	</div>
	<script type="text/javascript" src="js/functions.js"></script>
	<script src="js/zuordnen.js"></script>
	<script src="js/shuffle.js"></script>
</body>
</html>