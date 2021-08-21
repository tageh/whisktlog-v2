<?php

include('connect.php');

    $name = $country = $abv = $score = "";

    //If statement and test_input function from w3school https://www.w3schools.com/php/php_form_validation.asp
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $name = test_input($_POST['name']);
        $country = test_input($_POST['country']);
        $abv = test_input($_POST['abv']);
        $score = test_input($_POST['score']);
    }

    $sql = "INSERT INTO Whisky(name,country,abv,score) VALUES ('$name','$country', '$abv', '$score')";
    
    if(mysqli_query($conn, $sql)){
        echo "Whisky added to database";
    }else{
       echo "Insert failed"; 
    }

    // 
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


mysqli_close($conn);
