<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="style.css">
        
</head>
<body>
<div class="button"><a href="https://github.com/SK-2019/php-sql-wprowadzenie-LauraNowak">Github</a></div>

<!-- <div class="nav">
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
</div> -->


<div class="name" >
<h2> Laura Nowak 2Ti gr 2 nr 23 </h2>
</div>

<div class="menu">
<h2> MENU: </h2>
<ul>
<div>
<li class="nav_link"><a href="https://github.com/SK-2019/php-sql-wprowadzenie-LauraNowak">Github</a></li>
</div>
<div>
<li class="nav_link"><a href="pracownicy.php">Pracownicy</a></li>
</div>
<div>
<li class="nav_link"><a href="funkcjeAgregujace.php">Funkcje Agregujace</a></li>
</div>
<div>
<li class="nav_link"><a href="index.php">Strona główna</a></li>
</div>
<div>
<li class="nav_link"><a href="pracownicyiorganizacja.php">Pracownicy i Organizacja</a></li>
</div>
<div>
<li class="nav_link"><a href="dataiczas.php">Data i czas</a></li>
</div>
<div>
<li class="nav_link"><a href="formularz.html">Formularz</a></li>
</div>
<div>
<li class="nav_link"><a href="daneDoBazy.php">Dane Do Bazy</a></li>
</div>
<div>
<li class="nav_link"><a href="function.php">Function</a></li>
</div>
<div>
<li class="nav_link"><a href="ksiazki.php">Książki</a></li>
</div>
<div>
<li class="nav_link"><a href="wyporzyczanie.php">Wyporzyczanie</a></li>
</div>
</ul>
</div>

<div class="bok">

<?php

$conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
$sql = 'SELECT * FROM pracownicy';

       
        echo("<p>ZADANIE 1</p>");
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

        echo("<p>ZADANIE 2</p>");
       

        $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
$result = $conn->query('SELECT * FROM pracownicy where imie like "%a"');
        
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

       
        echo("<p>ZADANIE 3</p>");
      

        $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
$result = $conn->query('SELECT * FROM pracownicy where imie like "%a" and (dzial=1 or dzial=4)');
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






    echo("<p>ZADANIE 4</p>");        
    $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
        $result = $conn->query('SELECT imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and zarobki<30 and (dzial=1 or dzial=2)');
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
                    

    echo("<p>ZADANIE 5</p>");
    $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
        $result = $conn->query('SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org group by dzial');
            echo("<table>");
            echo("<th>dzial</th>");
            echo("<th>suma</th>");
            echo("<th>nazwa dzialu</th>");
                while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
            echo("</tr>");
            }
            echo("</table>");
        

    echo("<p>ZADANIE 6</p>");
    $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
        $result = $conn->query('SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org group by dzial');
            echo("<table>");
            echo("<th>Dział</th>");
            echo("<th>Suma</th>");
            echo("<th>Średnia</th>");
            echo("<th>Min</th>");
            echo("<th>Max</th>");
                while($row = $result->fetch_assoc()) {
            echo("<tr>");
                echo("<td>".$row['dzial']."</td><td>".$row['suma']."</td><td>".$row['srednia']."</td><td>".$row['min']."</td><td>".$row['max']."</td>");
            echo("</tr>");
            }
            echo("</table>");
        
        
    echo("<p>ZADANIE 7</p>");
    $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
        $result = $conn->query('SELECT imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and dzial = 1 and zarobki between 20 and 40');
            echo("<table>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>nazwa dzialu</th>");
                while($row = $result->fetch_assoc()) {
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
            echo("</tr>");
            }
            echo("</table>");

?>
</div>
</body>
</html>