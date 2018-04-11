<?php 
$ori_map_lat = $_POST['ori_map_lat'];
$ori_map_lng  = $_POST['ori_map_lng'];

$des_map_lat = $_POST['des_map_lat'];
$des_map_lng = $_POST['des_map_lng'];

$url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins='.$ori_map_lat.','.$ori_map_lng.'&destinations='.$des_map_lat.','.$des_map_lng.'&key=AIzaSyD3XoztpkvcsKyEyHzII6rTZQcnK7eSEvM';

header("Content-Type: application/json");
header("accept: application/json");
echo file_get_contents($url);
exit;
?>