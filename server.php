<?php
$jsonData = file_get_contents('json.json');
$discs = json_decode($jsonData, true);


header('Content-Type: application/json');
echo json_encode($discs);
?>
