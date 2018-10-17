<?php 
include 'lib/init.php';
// var_dump($_SESSION);

$lernfields = queryDB('select * from lernfield', $conn);
$okurs = queryDB('select * from okurs', $conn);
include 'views/index.view.php';




?>




