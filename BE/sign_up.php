<?php

include("connection.php");

$username=$_POST["username"];
$password=$_POST["password"];

$query=$mysqli->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$query->bind_param("ss", $username, $password);
$query->execute();

$response=[];
$response["success"]=true;

echo json_encode($response);