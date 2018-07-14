<?php 
include "lib/init.php";

$res = queryDB("select * from imgset where fieldID = $fieldID", $conn);

include "views/artikel.view.php";
 ?>