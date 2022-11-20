<?php

include("connection.php");

$response=[];

if(isset($_GET["post_id"])){
    $post=$_GET["post_id"];

    $query=$mysqli->prepare("SELECT users.username, comments.content FROM users, comments WHERE users.id=comments.user_id AND comments.post_id=?");
    $query->bind_param("i", $post);
    $query->execute();

    $array=$query->get_result();

    while($comments=$array->fetch_assoc()){
        $response[]=$comments;
    }
}

else{
    $response["success"]=false;
}

echo json_encode($response);