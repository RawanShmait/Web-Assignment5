<?php

include("connection.php");

$user=$_POST["user_id"];
$post=$_POST["post_id"];
$picture=$_POST["picture"]
$caption=$_POST["caption"];

$query=$mysqli->prepare("INSERT INTO posts (post_id, picture, caption) VALUES (?, ?, ?)");
$query->bind_param("ibs", $post, $picture, $caption);
$query->execute();

$response=[];
$response["success"]=true;

echo json_encode($response);