<?php 
define("IMGDIR", "img/");

function retImgDir($fieldname)
{
	$dir = IMGDIR . (utf8_encode(strtolower($fieldname))) . "/";
	return $dir;
}



function insertDB($stmt, $conn)
{
	$statement = $conn->prepare($stmt);
	$statement->execute();
	
}
function return_shuffled_arr($arr){
	shuffle($arr);
	return $arr;
}


function shuffle_letters_of_words_in_Arr($arr)
{

	foreach ($arr as $key => $val) {
		$arr[$key] = str_split($val);
	}

	foreach ($arr as $key => $val) {
		shuffle($arr[$key]);
	}

	foreach ($arr as $key => $val) {
		$arr[$key] = str_put_together($val) ;
		
	}

	return $arr;
}

function str_put_together($array)
{
	$s = '';

	
	foreach ($array as  $value) {
		$s .= $value;
	}

	
	return $s;
}

function write_words_to_file($arr, $title, $ext, $shuffled){

	if($shuffled)
		$title .= "_shuffled";
	$myfile = fopen("./export/".$title . $ext, "w") or die("Unable to open file!");
	$title .= "\n_____________________\n\n\n";
	fwrite($myfile, $title);
	foreach ($arr as $key => $value) {
		$txt = ($key+1) . ".  " . $value . "\n\n";
		fwrite($myfile, $txt);

	}
	fclose($myfile);
}


function button_showStatus($session, $cat, $fieldID)
{
	$btnClss = '';

	if(isset($session[$cat]["fieldID"])){
			$btnClss = (in_array($fieldID,$session[$cat]["fieldID"])) ? "button w3-teal" : "button"; 
	}else{
		$btnClss = "button";
	}
	return $btnClss;
}

function get_Mistake_mssg($arr, $conn){
	$missguessedWords = [];
			$mssg = '';
			foreach ($arr as $key => $value) {
				$resMissguessedWord = queryDB("select meaning from imgset where imgID=$value", $conn)[0]["meaning"];
				array_push($missguessedWords, $resMissguessedWord);
			}

			$mssg .= '(';
			for ($i = 0; $i < count($missguessedWords); $i++) {
					$mssg .= $missguessedWords[$i] ;
				if ($i != (count($missguessedWords) -1) ) {
					$mssg .= ', ';
				}
			}
			$mssg .= ')';
			return $mssg;
}


function create_inputs($arr, $input_name){
	if(empty($arr)){
		return;
	}else{
		$inputs = '';
		foreach ($arr as $key => $value) {
			$inputs .= "<input type='hidden' name='{$input_name}[{$key}]' value='{$value}'>";
		}
		return $inputs;
	}
	
}


function reduce_ids($ids, $usedImgIDArr = []){

	// unset all previous guessed items in $assocArr
	if(!empty($usedImgIDArr)){
		$flippped_ids = array_flip($ids);
		foreach ($usedImgIDArr as $value) {
		unset($flippped_ids[$value]);
		}
		$reduced_ids = [];
		foreach ($flippped_ids as $key => $value) {
			array_push($reduced_ids, $key);
		}
		return $reduced_ids;
	}else{
		return $ids;
	}
	
	
}

function get_three_more($ids, $arr){
	while(1){
		shuffle($ids);
		$randNum = mt_rand(0, count($ids) -1);
		if(!in_array($ids[$randNum], $arr)){
			array_push($arr, $ids[$randNum]);
		}
		if((count($arr) > 3)){
			break;
		}
	}
	shuffle($arr);
	return $arr;
}