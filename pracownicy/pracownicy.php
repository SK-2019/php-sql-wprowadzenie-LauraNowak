<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="style.css">
        
</head>
<body>
<div class="button"><a href="https://github.com/SK-2019/php-sql-wprowadzenie-LauraNowak">Github</a></div>

<div class="nav">
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
</div>

<h1> Pracownicy </h1>
<h2> Laura Nowak 2Ti gr 2 nr 23 </h2>

<?php


$conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
$sql = 'SELECT * FROM pracownicy';

       
    
        echo("<p>WSZYSCY PRAWCOWNICY</p>");
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>data urodzenia</th>");

         while($row = $result->fetch_assoc()) {
                echo("<tr>");
                        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");
    }
        echo("</table>");

        echo("<p>PRACOWNICY Z DZIAŁU 2</p>");
        $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
$result = $conn->query('SELECT  * FROM pracownicy WHERE dzial=2');
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
        echo("</tr>");
    }
        echo("</table>");


        echo("<p>PRACOWNICY Z DZIAŁU 2 i 3</p>");

        $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
$result = $conn->query('SELECT * FROM pracownicy where (dzial=2 or dzial=3)');
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>data_urodzenia</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
        echo("</tr>");
    }
        echo("</table>");



        echo("<p>PRACOWNICY Z ZAROBKAMI MNIEJSZYMI OD 30</p>");
        $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
$result = $conn->query('SELECT  * FROM pracownicy WHERE zarobki<30');
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
        echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
        echo("</tr>");
                }
        echo("</table>");
        




      
?>

</body>
</html>