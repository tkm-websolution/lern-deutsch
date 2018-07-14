<?php 
include 'lib/init.php';
var_dump($_SESSION);

$lernfields = queryDB('select * from lernfield', $conn);

include 'views/index.view.php';




?>




