<?php

include("connection.php");

$post=$_POST["post_id"];

$query=$mysqli->prepare("DELETE FROM posts WHERE id=?");
$query->bind_param("i", $post);
$query->execute();

// $query=$mysqli->prepare("DELETE FROM likes, comments WHERE post_id=?");
// $query->bind_param("i", $post);
// $query->execute();

$response=[];
$response["success"]=true;

echo json_encode($response);