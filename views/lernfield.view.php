	<div class="w3-panel w3-padding">
		<h1>Lernfeld: <b><?= $fieldname ?></b></h1>
	</div>
	<section class="w3-panel w3-padding">
		
	<?php foreach ($imgset as $img) : ?>
		<div id='item'><img src='<?= $imgDir . "/" . $img["filename"]  ?>' height='100' ></br>
		<h3><?=  $img["meaning"] ?></h3></div>
	<?php endforeach; ?>

	</section>

<div id="addItem" class="w3-panel w3-padding">
	<div class="w3-bar w3-black">
		<div class="w3-bar-item">add item</div>
	</div>
	<!-- Die Encoding-Art enctype MUSS wie dargestellt angegeben werden -->
	<form class="w3-padding-48 w3-border" enctype="multipart/form-data" action="" method="POST">

		<label>Bedeutung:</label>
	    <input type="text" name="meaning">
	    <input type="hidden" name="id" value="<?= $id ?>"  />
	    <!-- MAX_FILE_SIZE muss vor dem Dateiupload Input Feld stehen -->
	    <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
	    <!-- Der Name des Input Felds bestimmt den Namen im $_FILES Array -->
	    <fieldset class="w3-margin-top w3-margin-right">
	    	<legend>Genus</legend>
			<input type="radio" name="gender" value="2" checked> der<br>
			<input type="radio" name="gender" value="3"> die<br>
			<input type="radio" name="gender" value="1"> das  
	    </fieldset>
	    <fieldset class="w3-margin-top w3-margin-right">
	    <legend>Diese Datei hochladen:</legend>	
	     <input name="addIMG" type="file" />
	    </fieldset>
	    <button class="w3-margin-top" type="submit" value="Send File" >Add item</button>
	</form>
	
</div>
<div id="export" class="w3-panel w3-padding">
	<div class="w3-bar w3-black ">
		<div class="w3-bar-item">Export</div>
	</div>
	<form class="w3-padding-48 w3-border" action="showlist.php" method="post">
		<input type="hidden" name="lernfield_id" value="<?= $id ?>"  />
		<input type="hidden" name="fieldname" value="<?= $fieldname ?>"  />
		<input type="submit" value="Export word list"/>
		<input type="submit" name="shuffle" value="Shuffle & export word list"/>

	</form>
</div>
<div id="back" class="w3-panel w3-border-top w3-border-bottom w3-large">
 	<p>
 		<a href="
 		<?= $back ?>
 		" class="w3-xlarge">Zurück</a>
 	</p>
</div>

	  
 




