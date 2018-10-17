<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="w3-container  w3-margin-top">
		<div class="w3-row-padding">
			<div class="w3-card-4 w3-padding-8">
				<header class="">
					<img src="img/logo_new.png">
				</header>
				<section id="" class="w3-padding">
					<h1>Edit + Upload</h1>
				</section>
				<section id="lernfelderBtns" class="w3-padding">
					<h3>Lernfelder anschauen und exportieren</h3>
					<?php foreach ($lernfields as $val): ?>
						<form action="lernfield.php" method="POST">
							<input type="hidden" name="fieldname" value="<?=$val["fieldname"] ?>">
							<input type="submit" value="<?=$val["fieldname"] ?>">
						</form> 
					 <?php endforeach; ?>
				</section>
				<section id="artikel" class="w3-padding">
					<h3>add new Lernfeld</h3>
					<form action="" method="post">
						<input type="text" name="dir_name">
						<input type="submit" value="New Field">
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


</body>
</html>
