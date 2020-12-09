<?php

$servername = "mysql-lauranowak.alwaysdata.net";
$username = "220134";
$password = "Haslo123";
$dbname = "lauranowak_23";


$conn=new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>