<?php
    function connectDB(){
        $serverName = "localhost";
        $userName = "root";
        $pass = "";
        $db = "sample project";
    
        $conn = new mysqli($serverName, $userName, $pass,$db) or die ("Failed to connect");
        return $conn;
    }
?>