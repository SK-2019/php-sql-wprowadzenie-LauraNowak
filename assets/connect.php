<?php

$servername = "mysql-lauranowak-23.alwaysdata.net";
$username = "225095";
$password = "Haslo123";
$dbname = "lauranowak-23_23";


$conn=new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>