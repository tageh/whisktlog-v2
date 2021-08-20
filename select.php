<?php

include('connect.php');

$sql = "SELECT * FROM Whisky ORDER BY score DESC";
$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));

//$num = mysqli_num_rows($query);
//print($num);
echo "<table class='table-class'>";
echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Country</th>";
    echo "<th>ABV</th>";
    echo "<th>Score</th>";
echo "</tr>";

while($row = mysqli_fetch_array($query)){ 
    $id = $row["id"];
    $name = $row["name"];
    $country = $row["country"];
    $abv = $row["abv"];
    $score = $row["score"];

    echo "<tr id='delete$id'>";
        echo "<td>$id</td>";
        echo "<td>$name</td>";
        echo "<td>$country</td>";
        echo "<td>$abv</td>";
        echo "<td>$score</td>";  
		echo "<td><button name='delete' class='btn btn-danger' data-id='$id' type='submit' onclick='deleteRow($id)'>Delete</button></td>";
	echo "</tr>";
     
}
echo "</table>";

mysqli_close($conn);

