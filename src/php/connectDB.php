<?php

$serverName = "localhost";
$userName = "root";
$pass = "";
$db = "sample project";

$conn = new mysqli($serverName, $userName, $pass,$db) or die ("Failed to connect");

$sql = "SELECT proj_name, users, est_hours FROM project_list";
$result = $conn->query($sql);

//$conn->close();

?>