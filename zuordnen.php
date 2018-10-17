<?php 
include "lib/init.php";
// get data
$res = queryDB("select * from imgset where fieldID = $fieldID", $conn);
$fieldname = queryDB("select fieldname from lernfield where fieldID = $fieldID", $conn)[0]["fieldname"];

if(isset($_POST["nxt"]) && isset($usedImgIDArr) && (count($usedImgIDArr) == (count($res)-1))){
	// exercise has been completed
	if(!isset($_SESSION["zuordnen"]["fieldID"]))
			$_SESSION["zuordnen"]["fieldID"] =  array();
	if(!in_array($fieldID,$_SESSION["zuordnen"]["fieldID"]))
		array_push($_SESSION["zuordnen"]["fieldID"], $fieldID);
	
	$mssg = '';
	if(isset($missguessedArr)){
		$mssg = get_Mistake_mssg($missguessedArr, $conn);
	}
	include 'views/zrdnnsccss.view.php';
}else{ 
	// preparing exercise...
	// arrays
	$ids = [];
	$assocArrFile = [];
	$assocArrMeaning = [];
	// populate arrays from $res
	foreach ($res as  $val) {
		$assocArrFile[$val["imgID"]] = $val["filename"];
		$assocArrMeaning[$val["imgID"]] = $val["meaning"];
		array_push($ids, $val["imgID"]);
	}
	if(!isset($usedImgIDArr)) 
		$usedImgIDArr = [];
	if(!isset($missguessedArr))
		$missguessedArr = [];

	$ids_new = reduce_ids($ids,$usedImgIDArr);
	shuffle($ids_new);
	$randNum = mt_rand(0, count($ids_new) -1);
	$randImgID = $ids_new[$randNum];
	array_push($usedImgIDArr, $randImgID);
	if(isset($commitedMstk) && $commitedMstk) 
		array_push($missguessedArr, $usedImgIDArr[(count($usedImgIDArr)-1)]);
	$four[0] = $randImgID;
	$four = get_three_more($ids, $four);
	
	include 'views/zuordnen.view.php';
	}
?>