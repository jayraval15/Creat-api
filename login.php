<?php
require_once("conection.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata,true);

$uname = $data['uname'];
$pass = $data['pass'];

$query = "INSERT INTO $tablename where `uname`='$uname',`pass`='$pass' " ;

$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0){
    $status = 1;
    $massage = "LOGIN DONE";
}else{
    $status = 0;
    $massage = "LOGIN ERROR";
}
$arr=[
    'massage' => $massage,
    'status'=>$status
];

echo json_encode($arr,JSON_PRETTY_PRINT);
?>