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

echo("funkcje");

function nazwa11($liczba){
echo("<li> funckja dziala ");
echo("<li>test ".$liczba);
for($i=1;$i<$liczba;$i++){
echo("<li>to petla: ".$i);
   }
}

nazwa11(15);

?>
</body>
</head>
</html>