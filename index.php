<?php
$servername = $_ENV["DB_SERVER"];
$username = $_ENV["DB_LOGIN"];
$password = $_ENV["MYSQL_ROOT_PASSWORD"];

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  $result = $conn->query("show databases;");
  var_dump($result->fetchAll());
?>