<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="style.css">
        
</head>
<body>
<div class="button"><a href="https://github.com/SK-2019/php-sql-wprowadzenie-LauraNowak">Github</a></div>

<div class="nav">
    <a class="nav_link" href="pracownicy.php">Pracownicy</a>
    <p class="space"></p>
    <a class="nav_link" href="funkcjeAgregujace.php">Funkcje Agregujace</a>
    <p class="space"></p>
    <a class="nav_link" href="index.php">Strona główna</a>
    <p class="space"></p>
    <a class="nav_link" href="pracownicyiorganizacja.php">Pracownicy i Organizacja</a>
    <p class="space"></p>
    <a class="nav_link" href="dataiczas.php">Data i czas</a>
    <p class="space"></p>
    <a class="nav_link" href="formularz.html">Formularz</a>
    <p class="space"></p>
    <a class="nav_link" href="daneDoBazy.php">Dane Do Bazy</a>
    <p class="space"></p>
    <a class="nav_link" href="function.php">function</a>
    <p class="space"></p>
    <a class="nav_link" href="ksiazki.php">Książki</a>
    <p class="space"></p>
    <a class="nav_link" href="wyporzyczanie.php">Wyporzyczanie</a>
</div>


<h1> Strona główna </h1>
<h2> Laura Nowak 2Ti gr 2 nr 23 </h2>



<?php

echo("<li>imię: ".$_POST['imie']."</li>");
echo("<li>dział: ".$_POST['dzial']."</li>");
echo("<li>zarobki: ".$_POST['zarobki']."</li>");
echo("<li>data urodzenia: ".$_POST['data_urodzenia']."</li>");


 
	$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_urodzenia']."')";
  
  //echo($sql);

  require_once("connect.php");
if ($conn->query($sql) === TRUE) {
        echo("<p>Dodano nowego pracownika</p>");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
?>
</body>
</html>
