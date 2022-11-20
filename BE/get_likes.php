<?php

include("connection.php");

$response=[];

if(isset($_GET["post_id"])){
    $post=$_GET["post_id"];

    $query=$mysqli->prepare("SELECT users.username FROM users, likes WHERE users.id=likes.user_id AND likes.post_id=?");
    $query->bind_param("i", $post);
    $query->execute();

    $array=$query->get_result();

    while($likes=$array->fetch_assoc()){
        $response[]=$likes;
    }
}

else{
    $response["success"]=false;
}

echo json_encode($response);