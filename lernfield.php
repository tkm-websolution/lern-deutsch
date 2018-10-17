<?php 
include 'lib/init.php';
include 'View.php';

if(isset($_POST["export"])){
	write_words_to_file($_POST["meaning"], $_POST["fieldname"], ".odt", $_POST ["shuffled"]);
}


// if item gets added to db imgset 
if(!isset($_POST["fieldname"]))
{
	
	$fieldname = queryDB("select fieldname from lernfield where fieldID ='" . $id ."';", $conn);
	$filename = $_FILES["addIMG"]["name"];
	$target = "img/".(strtolower($fieldname[0]["fieldname"])) . "/" . $filename;

	move_uploaded_file( $_FILES['addIMG']['tmp_name'], $target); 
	

	insertDB("insert imgset (filename, meaning, fieldID) values ('$filename', '$meaning', '$id')", $conn);
	$fieldname = $fieldname[0]["fieldname"];
}




$id = queryDB("select fieldID from lernfield where fieldname ='" . $fieldname ."';", $conn)[0]["fieldID"];

$imgset = queryDB( "select * from imgset where fieldID = '" . $id . "';", $conn);


$sub_view = new View('views/lernfield.view.php');
$sub_view->set('id', $id);
$sub_view->set('imgset', $imgset);
$sub_view->set('imgDir', "img/" . (strtolower($fieldname)));
$sub_view->set('fieldname', $fieldname);
$sub_view->set('back', './edit-upload.php');

$view = new View('views/basic.view.php');
$view->set('view', $sub_view->render());
$view->set('css','css/lernfield.css');
echo $view->render();

	// require 'views/lernfield.view.php';
?>
