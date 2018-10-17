<!DOCTYPE html>
<html>
	<head>
	 <meta charset="UTF-8">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
		<link rel="stylesheet" href="<?= $css ?> "> 
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<div class="w3-container  w3-margin-top">
			<div class="w3-row">
				<div class="w3-card-4 w3-padding-8">
					<header class="">
						<img src="img/logo_new.png">
					</header>
					<?= $view ?>
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