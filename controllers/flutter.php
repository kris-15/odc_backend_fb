<?php
require "../models/AmisModel.php";
use model\AmisModel;
$ami = new AmisModel();
$json = file_get_contents('php://input');
$flutter_data = json_decode($json);
$data = $ami->get_fake_friends();
header('Content-type: application/json');
echo json_encode($data);
?>