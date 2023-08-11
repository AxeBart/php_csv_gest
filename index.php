<?php

include('connect.php');


$res = fopen('dataset.csv', 'rb');
$data_array = [];
$final = [];

while(!feof($res)){
	$ligne = fgets($res);
	array_push($data_array, $ligne);
}

array_shift($data_array);
foreach ($data_array as $valeur) {
	$tmp = explode(",", $valeur);

	array_push($final, [
		"QuotaAmount" => $tmp[0],
		"StartDate" => $tmp[1],
		"OwnerName" => $tmp[2],
		"Username" => $tmp[3]
	]);
}

// array_map();
fclose($res);
echo json_encode($final);
