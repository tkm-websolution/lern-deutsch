<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
 <link rel="stylesheet" type="text/css" href="./css/artikel.css">
 <link rel="stylesheet" type="text/css" href="./css/shake.css">
</head>
<body>
	<div class="w3-container">
		<div class="w3-row">
			<div class="w3-panel w3-border-top w3-border-bottom w3-xlarge">
			  <p>Welcher Artikel passt wo?</p>
			</div>
			 <div class="w3-card-4 w3-padding-48">
				<header id="btnBox" class="w3-container w3-margin-bottom">
					<button class="w3-btn  w3-xxxlarge w3-green active" data-genus="1">das</button>
					<button class="w3-btn  w3-xxxlarge w3-blue" data-genus="2" >der</button>
					<button class="w3-btn  w3-xxxlarge w3-red" data-genus="3">die</button>
				</header>

				<div id="nomenBox" class="w3-container w3-padding-64">
				  	<?php foreach ($res as $val) : ?>
				  		<?php if($val["genus"] != 4) :?>
						<button class="w3-btn w3-white w3-border w3-border-grey w3-round w3-xxlarge w3-margin-bottom" data-genus='<?= $val["genus"] ?>'>
							<?= $val["meaning"] ?>
						</button>
					<?php endif; ?>
					<?php endforeach; ?>
				</div>

				<footer class="w3-container w3-sand  w3-padding-16  w3-xxlarge">
				  <div id="mstkBox" class="w3-panel">bla</div>
				</footer>
				<div id="Fehler" class="w3-container w3-padding-16  w3-xlarge">&nbsp;</div>
			</div> 
			<div id="back" class="w3-panel w3-border-top w3-border-bottom w3-large">
			 <p><a href="./index.php?cat=artikel&fieldID=<?=$fieldID?>" class="w3-xlarge">Zurück</a></p>
		</div>
			</div>
	</div>
	<script type="text/javascript" src="js/functions.js"></script>
	<script src="js/artikel.js"></script>
</body>
</html>