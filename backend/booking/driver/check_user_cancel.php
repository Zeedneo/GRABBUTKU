<?php

$postData = json_decode(file_put_contents("php://input"));
$user_id = $postData->user_id;

$sql = "SELECT FROM 'booking' WHERE 'user_id' = $user_id";

if($conn->query($sql) == TRUE){
    echo json_encode([
        "message"=> true
    ]);
}else{
    echo json_encode([
        "message"=> false
    ]);
}

?>