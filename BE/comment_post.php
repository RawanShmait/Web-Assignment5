<?php

include("connection.php");

$user=$_POST["user_id"];
$post=$_POST["post_id"];
$comment=$_POST["content"];

$query=$mysqli->prepare("INSERT INTO comments (user_id, post_id, content) VALUES (?, ?, ?)");
$query->bind_param("iis", $user, $post, $comment);
$query->execute();

$response=[];
$response["success"]=true;

echo json_encode($response);