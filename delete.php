<?php

include("connect.php");

$id = $_POST['delete_id'];
$sql = "DELETE FROM Whisky WHERE id=$id";

if(mysqli_query($conn,$sql)){
    echo "Deleted";
}else{
    echo "Failed to delete";
}

mysqli_close($conn);
