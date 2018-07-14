<?php 
include "lib/init.php";
// get data
$res = queryDB("select * from imgset where fieldID = $fieldID", $conn);

// first time
if (!isset($_POST["nxt"])) {	
	$fieldname = queryDB("select fieldname from lernfield where fieldID = $fieldID", $conn)[0]["fieldname"];
	$randNum = mt_rand(0, count($res) -1);

	$wordArr = [];
	foreach ($res as $value) {
		array_push($wordArr, $value["meaning"]);
	}

	$randWord = $wordArr[$randNum];
	$randWordImgID = queryDB("select imgID from imgset where meaning = '$randWord'", $conn)[0]["imgID"];

	include 'views/zuordnen.view.php';
}else{//subsequent rounds...
	if(!isset($usedImgIDArr)) 
		$usedImgIDArr = [];
	array_push($usedImgIDArr, $randWordImgID);

	if($commitedMstk){
		if(!isset($missguessedArr))
			$missguessedArr = [];
		array_push($missguessedArr, $randWordImgID);
	}

	// make order random, so the user is getting each round a different order...
	shuffle($res);
	$assocArr = [];
	// populate assocArr...
	foreach ($res as  $value) {
		$assocArr[$value["imgID"]] = $value["meaning"];
	}
	
	// unset all previous guessed items in $assocArr
	foreach ($usedImgIDArr as $key => $value) {
		unset($assocArr[$value]);
	}

	$arrMeaning = [];
	// populate arrMeaning to retrieve new random meaning (is this the best way???)
	foreach ($assocArr as $value) {
		array_push($arrMeaning, $value);
	}
	// see how many rounds have been guessed
	if(count($assocArr) > 1){
		$randNum = mt_rand(0, count($assocArr) -1);
		$randWord = $arrMeaning[$randNum];
		$randWordImgID = queryDB("select imgID from imgset where meaning = '$randWord'", $conn)[0]["imgID"];
		include 'views/zuordnen.view.php';
	}elseif (count($assocArr) == 1) {
		$randWord = $arrMeaning[0];
		$randWordImgID = queryDB("select imgID from imgset where meaning = '$randWord'", $conn)[0]["imgID"];
		include 'views/zuordnen.view.php';
	} else {
		if(!isset($_SESSION["zuordnen"]["fieldID"]))
			$_SESSION["zuordnen"]["fieldID"] =  array();
		if(!in_array($fieldID,$_SESSION["zuordnen"]["fieldID"]))
			array_push($_SESSION["zuordnen"]["fieldID"], $fieldID);
		
		$mssg = '';
		if(isset($missguessedArr)){
			$mssg = get_Mistake_mssg($missguessedArr, $conn);
		}
		include 'views/zrdnnsccss.view.php';
	}
}
 ?>