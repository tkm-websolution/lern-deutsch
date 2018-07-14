<?php 
session_start();
include 'lib/functions.php';
$conn = connect();

if(isset($_POST))
	extract($_POST);

if(isset($_GET))
	extract($_GET);

// only for index.html
if(isset($_GET["cat"])){
	if(!isset($_SESSION["artikel"]["fieldID"]))
		$_SESSION["artikel"]["fieldID"] =  array();
	if(!in_array($fieldID,$_SESSION["artikel"]["fieldID"]))
		array_push($_SESSION["artikel"]["fieldID"], $fieldID);
}

if(isset($_POST["dir_name"]))
{
	$path = "img/" . (strtolower($dir_name));
	if(!mkdir($path)) echo "<br>Directory could not be created!<br>";
	insertDB("insert lernfield (fieldname) values ( '$dir_name')", $conn);
}

 ?>