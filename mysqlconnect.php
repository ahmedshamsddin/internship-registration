<?php
/*
$connect=mysqli_connect("localhost","root","M200209319","new_schema");
if(!$connect)
  die("could not connect".mysqli_connect_errno());

  $query="select *from intern_1";

  $stmt=mysqli_query($connect,$query);

  while($row =mysqli_fetch_array($stmt,MYSQLI_ASSOC)){
    echo $row['intern_1'];
  }



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
$conn->close();*/

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:internship-registration.database.windows.net,1433; Database = internship-registration", "CloudSA2f41fa49", "Xara9332!");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "CloudSA2f41fa49", "pwd" => "Xara9332!", "Database" => "internship-registration", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:internship-registration.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

echo "Connected successfully.";
?>
