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

<?php

echo ("<h1>id: ".$_POST['id']."</h1>");

 $sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";

 require_once("connect.php");
if ($conn->query($sql) === TRUE) {
        echo("<h1> Usunięto </h1>");
      } else {
        echo("<h1>'Error: ' . $sql . '<br>' . $conn->error</h1>");
      }
      
           
           echo("<h1>Wszyscy pracownicy</h1>");
           $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org');       
        echo("<table>");      
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }
        echo("</table>");
      
?>




</body>
</head>
</html>