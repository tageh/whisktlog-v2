<?php

include('connect.php');

    $name = $_POST['name'];
    $country = $_POST['country'];
    $abv = $_POST['abv'];
    $score = $_POST['score'];

    $sql = "INSERT INTO Whisky(name,country,abv,score) VALUES ('$name','$country', '$abv', '$score')";
    
    if(mysqli_query($conn, $sql)){
        echo "Whisky added to database";
    }else{
       echo "Insert failed"; 
    }



mysqli_close($conn);
