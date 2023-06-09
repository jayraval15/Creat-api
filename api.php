<?php
require_once("conection.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata,true);

$uname = $data['uname'];
$pass = $data['pass'];
$nob = $data['nob'];
$email = $data['email'];

$query = "INSERT INTO `$tablename` (`uname`,`pass`,`nob`,`email`) VALUE ('$uname','$pass','$nob','$email')";

$result = mysqli_query($conn,$query);

if($result==1){
    $status = 1;
    $massage = "DATA IS DONE";
}else
{
    $status = 0;
    $massage = "DATA IS NOT CONECT";
}
$arr=[
    'massage' => $massage,
    'status'=>$status
];

echo json_encode($arr,JSON_PRETTY_PRINT);
?>