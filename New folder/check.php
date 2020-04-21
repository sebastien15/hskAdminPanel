<?php
date_default_timezone_set('Asia/Riyadh');
header('Content-Type: application'); 
@$id = $_GET["udid"];
@$user = $_GET["username"];
@$pw = $_GET["pw"];
if($id != "" and $id != " " and $user != "" and $user != " " and $pw != "" and $pw != " "){
$data = file_get_contents("data.json");
$dataj = json_decode($data,1);
if(strstr($data,$id)){
for($i=0; $i<count($dataj); $i++){
if($dataj[$i]["id"] == $id){
break;
}
}
$time = $dataj[$i]["time"];
if($time > time() and $dataj[$i]["name"] == $user and $dataj[$i]["pw"] == $pw){
echo json_encode(array("status"=>"true","uuid"=>$id));
}else{
echo json_encode(array("status"=>"false","uuid"=>$id));
}
}else{
for($i=0; $i<count($dataj); $i++){
$time = $dataj[$i]["time"];
if($time > time() and $dataj[$i]["name"] == $user and $dataj[$i]["pw"] == $pw and $dataj[$i]["id"] == null){
break;
}
}
if($time > time() and $dataj[$i]["name"] == $user and $dataj[$i]["pw"] == $pw and $dataj[$i]["id"] == null){
$dataj[$i]["id"] = $id;
$dataj = array_values($dataj);
file_put_contents("data.json",json_encode($dataj));
echo json_encode(array("status"=>"true","uuid"=>$id));
}else{
echo json_encode(array("status"=>"false","uuid"=>$id));
}
}
}else{
echo json_encode(array("status"=>"false","uuid"=>$id));
}