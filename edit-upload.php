<?php 
include 'lib/init.php';

$lernfields = queryDB('select * from lernfield', $conn);
if(isset($_POST["dir_name"]))
{
	$path = "img/" . (strtolower($dir_name));
	if(!mkdir($path)) echo "<br>Directory could not be created!<br>";
	insertDB("insert lernfield (fieldname) values ( '$dir_name')", $conn);
}
include 'views/edit-upload.view.php';

?>
