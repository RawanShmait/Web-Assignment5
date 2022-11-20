<?php

include ("connection.php");

$username=$_POST["username"];
$password=$_POST["password"];

$query=$mysqli->prepare("SELECT password FROM users WHERE username=?");
$query->bind_param("s", $username);
$query->execute();

$pass=$query->get_result();

$response=[];

if(isset($_POST["username"]) && ($_POST["username"]!="")){
    $username=$_POST["username"];
    if($password==$pass)
        $response["success"]=true;
    else
        $response["success"]=false;
}
else{
    $response["success"]=false;
}
echo json_encode($response);