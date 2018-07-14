<?php 
include 'lib/functions.php';

if(connect())
	$conn = connect();

if(isset($_POST["export"])){
	write_words_to_file($_POST["meaning"], $_POST["fieldname"], ".odt", $_POST ["shuffled"]);
}

// redirected from index.php
if(isset($_POST["fieldname"]))
	$fieldname= $_POST["fieldname"];

// if item gets added to db imgset 
if(!isset($_POST["fieldname"]))
{
	if(isset($_POST["id"])){
		$id = $_POST["id"];
	}
	
	if(isset($_POST["meaning"])){
		$meaning = $_POST["meaning"];
	}

	$fieldname = queryDB("select fieldname from lernfield where fieldID ='" . $id ."';", $conn);
	$filename = $_FILES["addIMG"]["name"];
	$target = "img/".(strtolower($fieldname[0]["fieldname"])) . "/" . $filename;

	move_uploaded_file( $_FILES['addIMG']['tmp_name'], $target); 
	

	insertDB("insert imgset (filename, meaning, fieldID) values ('$filename', '$meaning', '$id')", $conn);
	$fieldname = $fieldname[0]["fieldname"];
}



$fieldID = queryDB("select fieldID from lernfield where fieldname ='" . $fieldname ."';", $conn);

$id = $fieldID[0]["fieldID"];

$imgset = queryDB( "select * from imgset where fieldID = '" . $id . "';", $conn);

$imgDir = "img/" . (strtolower($fieldname));

	require 'views/lernfield.view.php';
?>
