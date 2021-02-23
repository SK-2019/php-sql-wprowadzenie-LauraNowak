<?php
$servername = $_SERVER['servername'];
$username = $_SERVER['username'];
$password = $_SERVER['password'];
$dbname = $_SERVER['dbname']; 

// Create connection (łącze się z moją bazą danych)
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");

// Check connection (sprawdzam połączenie z bazą danych)
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<?php

//$servername = "mysql-lauranowak-23.alwaysdata.net";
//$username = "225095";
//$password = "Haslo123";
//$dbname = "lauranowak-23_23";


//$conn=new mysqli($servername, $username, $password, $dbname);
        //if($conn->connect_error) {
            //die("Connection failed: " . $conn->connect_error);
        //}
?>

