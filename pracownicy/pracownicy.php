<!DOCTYPE html>
<html>
<head>
<title>Laura Nowak 2Ti</title>
<link rel="stylesheet" href="/assets/style.css">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">
        
</head>
<body>
<div class="container" >
<div class="name" >
<h2>              Laura Nowak 2Ti gr 2 nr 23 </h2>
</div>

<div class="menu">
<h2> MENU: </h2>
<ul>
<li class="nav_link"><a href="https://github.com/SK-2019/php-sql-wprowadzenie-LauraNowak">Github</a></li>
<li class="nav_link"><a href="/index.php">Strona główna</a></li>
<li class="nav_link"><a href="pracownicy.php">Pracownicy</a></li>
<li class="nav_link"><a href="funkcjeAgregujace.php">Funkcje Agregujace</a></li>
<li class="nav_link"><a href="pracownicyiorganizacja.php">Pracownicy i Organizacja</a></li>
<li class="nav_link"><a href="dataiczas.php">Data i czas</a></li>
<li class="nav_link"><a href="daneDoBazy.php">Dane Do Bazy</a></li>
<li class="nav_link"><a href="insert.php">Insert</a></li>
<li class="nav_link"><a href="delete.php">Delete</a></li>


</ul>
</div>

<div class="bok">
<?php


$conn = new mysqli( "mysql-lauranowak-2303.alwaysdata.net" , "229671" , "Haslo123" , "lauranowak-2303_23");
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
        $conn = new mysqli( "mysql-lauranowak-2303.alwaysdata.net" , "229671" , "Haslo123" , "lauranowak-2303_23");
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

        $conn = new mysqli( "mysql-lauranowak-2303.alwaysdata.net" , "229671" , "Haslo123" , "lauranowak-2303_23");
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
        $conn = new mysqli( "mysql-lauranowak-2303.alwaysdata.net" , "229671" , "Haslo123" , "lauranowak-2303_23");
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

</div>
</div>
</body>
</html>