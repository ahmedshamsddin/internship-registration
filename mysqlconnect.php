<?php
/*
$connect=mysqli_connect("localhost","root","M200209319","new_schema");
if(!$connect)
  die("could not connect".mysqli_connect_errno());

  $query="select *from intern_1";

  $stmt=mysqli_query($connect,$query);

  while($row =mysqli_fetch_array($stmt,MYSQLI_ASSOC)){
    echo $row['intern_1'];
  }*/



$servername = "localhost";
$username = "root";
$password = "M200209319";
$database = "new_schema";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the connection
$conn->close();


?>