<?php 
$assocArr = [
	17 => "Schuh",
	8 => "Auto",
	5 => "Hut",
	27 => "Pilz",
	84 => "Arm",
];
$randWordImgID = 27;


$arr4items = [];
$i = 0;
	$randWordImgIdNOTincluded = true;
	while (1) {
		echo "counter: ". $i++;
		foreach ($assocArr as $k => $v) {
			$arr4items[$k] = $v;
			if(count($arr4items) > 3){
				break;
			}
				
		}
				
		if(!isset($arr4items[$randWordImgID])){
			$arr4items = [];
		}else{
				var_dump($arr4items);
				die;
			break 1;
		}
	}

	var_dump($arr4items);
	


 ?>