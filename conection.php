<?php
$hostname = "localhost";
$user = "	id20671769_jayravaal"; //server username
$dbpass = ""; // server password
$dbname = "id20671769_jay"; // server databesh name 
$tablename = "connt"; //server databesh tablename


$conn = mysqli_connect($hostname,$user,$dbpass,$dbname) or die ("conn error");

if($conn){
    echo "";
}else{
    echo "CONNtect errrr";
}

?>