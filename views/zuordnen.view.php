<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	<link rel="stylesheet" type="text/css" href="css/zuordnen.css">
</head>
<body >
	<div class="w3-row-padding">
		<div class="w3-card-4 w3-padding-8">
			<div id="wordBox"  class="w3-panel w3-dark-grey" data-imgID='<?= $randImgID ?>'>
				<h1  class="w3-opacity"><b><?= $assocArrMeaning[$randImgID] ?></b></h1>
			</div>
			<div class="w3-panel w3-border-top w3-border-bottom w3-xlarge">
				<p>Welches Bild passt? Klicken Sie auf das Bild!<em> (<?= count($usedImgIDArr) ?> von <?= count($ids) ?>)</em></p>
			</div>
			<section class="w3-padding-16">
				<?php foreach ($four as $value) : ?>
						<div class="imgBox w3-margin-left w3-margin-bottom w3-center" data-imgid = "<?= $value ?>">
							<img src='<?= retImgDir($fieldname) . $assocArrFile[$value] ?>' height='150' >
							<h2>&nbsp;</h2>
						</div>
				<?php endforeach; ?>
			</section>
			<footer id="nxt" class="w3-margin-left w3-margin-bottom">
				<form id="nxt-form" action="zuordnen.php" method="post">
					<input type="hidden" name="fieldID" value="<?= $fieldID ?>">
					<input type="hidden" name="commitedMstk" value="0">
					<?= create_inputs($usedImgIDArr, "usedImgIDArr") ?>
					<?= create_inputs($missguessedArr, "missguessedArr") ?>
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