<?php

include("connection.php");

$user=$_POST["user_id"];
$post=$_POST["post_id"];

$query=$mysqli->prepare("INSERT INTO likes (user_id, post_id) VALUES (?, ?)");
$query->bind_param("ii", $user, $post);
$query->execute();

$response=[];
$response["success"]=true;

echo json_encode($response);