<!DOCTYPE html>
<html>
<head>
<title>Laura Nowak 2Ti</title>
<link rel="stylesheet" href="/assets/style.css">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        
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
         
    <p>Dodawanie:</p>


<form class="formularz" action="insert.php" method="POST">
    <input type="text" name="imie" placeholder="imie"></br>
    <input type="text" name="dzial" placeholder="dzial"></br>
    <input type="text" name="zarobki" placeholder="zarobki"></br>
    <input type="date" name="data_urodzenia" ></br>
    <input type="submit" value="Dodaj">
</form>
       
        <p>Usuwanie :</p>
       
<form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="ok">
</form>


<?php

    echo("<p>WSZYSCY PRACOWNICY:</p>");
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
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
</div>
</div>
</body>
</html>