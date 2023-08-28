<?php
$res = fopen('../csv/regideso_fake_data.csv', 'rb');
$data_array = [];
$final = [];

while(!feof($res)){
	$ligne = fgets($res);
	array_push($data_array, $ligne);
}

array_shift($data_array);
foreach ($data_array as $valeur) {
	$tmp = explode(",", $valeur);
	
	$tmp[6] = substr($tmp[6],0,-2);

	array_push($final, [
		"numClient" => $tmp[0],
		"numFact" => $tmp[1],
		"periodeFact" => $tmp[2],
		"montantFact" => $tmp[3],
		"nomAbo" => $tmp[4],
		"solde" => $tmp[5],
		"province" => strtoupper($tmp[6])
	]);
}
echo json_encode($final);