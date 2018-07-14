<?php 
include 'lib/functions.php';

if(isset($_POST["lernfield_id"])){
	$lernfieldID = $_POST["lernfield_id"];
	$fieldname = $_POST["fieldname"];
}else{
	echo "Something went wrong....";
	die;
}
if(connect())
	$conn = connect();

$res1 = queryDB("select meaning,imgID from imgset where fieldID = $lernfieldID", $conn);

$is_shuffled = false;

if(isset($_POST["shuffle"]))
{
	
	$meaningArr = [];
	foreach ($res1 as $k => $val) {
		$meaningArr[$k] = $val["meaning"];
	}

	$meaningArrShuffled = shuffle_letters_of_words_in_Arr($meaningArr);
	$is_shuffled = true;

	// replace words with the words with shuffled letters in $res1
	foreach ($res1 as $key => $value) {
		$res1[$key]["meaning"] = $meaningArrShuffled[$key];
	}
	// var_dump($meaningArrShuffled);
}


?>
 <h2>Export word list from learnfield: <pre><?= $fieldname ?></pre></h2>

<form action="lernfield.php" method="post">
	<?php foreach ($res1 as $key => $val) : ?>
		<input type="text" name="meaning[<?= $key ?>]" value="<?= $val['meaning'] ?>" readonly>
		<input type="hidden" name="imgID[<?= $key ?>]" value="<?= $val['imgID'] ?>">
		<br>
	 <?php endforeach ?>
	
	<input type="hidden" name="fieldname" value="<?= $fieldname ?>">
	<input type="hidden" name="id" value="<?= $lernfieldID ?>">
	<input type="hidden" name="shuffled" value="<?= $is_shuffled ?>">
	<input type="submit" name="export" value="Export">	
</form>
<?php 