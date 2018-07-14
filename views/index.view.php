<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="w3-container  w3-margin-top">
		<div class="w3-row">
			<div class="w3-card-4 w3-padding-8">
				<header class="">
					<img src="img/logo_new.png">
				</header>
				<section id="zuordnenBtns" class="">
					<div class="w3-panel w3-margin-top w3-sand  w3-opacity w3-xlarge">
						<p><strong>zuordnen</strong></p>
					</div>
					<form action="zuordnen.php" method="POST">
						<?php foreach ($lernfields as $value): ?>
							<button class="<?= button_showStatus($_SESSION, 'zuordnen', $value["fieldID"]); ?>" style="vertical-align:middle" type="submit" name="fieldID" value="<?=$value["fieldID"] ?>">
								<span>
								<?=$value["fieldname"] ?>
								</span>
							</button>
						<?php endforeach; ?>
					</form> 
				</section>
				<section id="artikel" class="">
					<div class="w3-panel w3-margin-top w3-sand  w3-opacity w3-xlarge">
						<p><strong>der - die - das</strong></p>
					</div>
					<form action="artikel.php" method="POST">
						<?php foreach ($lernfields as $value): ?>
							<button class="<?= button_showStatus($_SESSION, 'artikel', $value["fieldID"]); ?>" style="vertical-align:middle" type="submit" name="fieldID" value="<?=$value["fieldID"] ?>">
								<span>
								<?=$value["fieldname"] ?>
								</span>
							</button>
						<?php endforeach; ?>
					</form> 
					
				</section>
				<footer>
					<div class="w3-panel  w3-center w3-xlarge w3-opacity">
						<p><b>tkm-websolution.de 2018</b></p>
					</div>
				</footer>
			</div>
			
		</div>
		
	</div>
	<div class="w3-container">
		<div class="w3-row-padding">
			<div class="w3-panel">
				<button type="button" id="dstrSssn" class="w3-button w3-brown w3-xlarge w3-padding-large">destroy session</button>
				<button type="button" id="dstrSssn" class="w3-button w3-black w3-xlarge w3-padding-large" onclick="location.reload()">reload page</button>
			</div>
			<div id="ajaxBox"></div>
		</div>
	</div>
	<script src="js/dstrsssn.js"></script>
</body>
</html>
