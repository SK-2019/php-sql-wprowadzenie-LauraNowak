<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="style.css">
        
</head>
<body>
<div class="button"><a href="https://github.com/SK-2019/php-sql-wprowadzenie-LauraNowak">Github</a></div>

<div class="nav">
    <a class="nav_link" href="pracownicy/pracownicy.php">Pracownicy</a>
    <p class="space"></p>
    <a class="nav_link" href="pracownicy/funkcjeAgregujace.php">Funkcje Agregujace</a>
    <p class="space"></p>
    <a class="nav_link" href="index.php">Strona główna</a>
    <p class="space"></p>
    <a class="nav_link" href="pracownicy/pracownicyiorganizacja.php">Pracownicy i Organizacja</a>
    <p class="space"></p>
    <a class="nav_link" href="pracownicy/dataiczas.php">Data i czas</a>
    <p class="space"></p>
    <a class="nav_link" href="pracownicy/formularz.html">Formularz</a>
    <p class="space"></p>
    <a class="nav_link" href="pracownicy/daneDoBazy.php">Dane Do Bazy</a>
    <p class="space"></p>
    <a class="nav_link" href="pracownicy/function.php">function</a>
    <p class="space"></p>
    <a class="nav_link" href="biblioteka/ksiazki.php">Książki</a>
    <p class="space"></p>
    <a class="nav_link" href="biblioteka/wyporzyczanie.php">Wyporzyczanie</a>
</div>


<h1> Strona główna </h1>
<h2> Laura Nowak 2Ti gr 2 nr 23 </h2>

   
    <h1>Dodano:</h1>
</head>

  
</html> 
<?php

echo("<li>imię: ".$_POST['imie']."</li>");
echo("<li>dział: ".$_POST['dzial']."</li>");
echo("<li>zarobki: ".$_POST['zarobki']."</li>");
echo("<li>data urodzenia: ".$_POST['data_urodzenia']."</li>");


 
	$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_urodzenia']."')";
	
if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>Dodano</p>");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

?>
 