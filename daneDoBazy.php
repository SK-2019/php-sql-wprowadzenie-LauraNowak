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

         
    <h1>Dodawanie:</h1>

<body>
<form class="formularz" action="insert.php" method="POST">
    <input type="text" name="imie" placeholder="imie"></br>
    <input type="text" name="dzial" placeholder="dzial"></br>
    <input type="text" name="zarobki" placeholder="zarobki"></br>
    <input type="date" name="data_urodzenia" ></br>
    <input type="submit" value="Dodaj">
</form>
       
        <h1>Usuwanie :</h1>
       
<form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="ok">
</form>
</body>
</head>
</html>

<?php

    echo("<h1>Wszyscy pracownicy:</h1>");
    $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org');       
echo("<table>");      
echo("<th>ID</th>");
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
echo("<th>Usuń</th>");
    while($row=$result->fetch_assoc()){ 
        echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
            echo("<td><form action='delete.php' method=POST>");
             echo("<input type='hidden' name='id' value='".$row['id_pracownicy']."'>");
             echo("<input type=submit value='Usuń'>");
            echo("</form></td>");
        echo("</tr>");
    }
echo("</table>");
           
?>