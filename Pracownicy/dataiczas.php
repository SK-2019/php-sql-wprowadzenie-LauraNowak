<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/Assets/style.css">
        
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
<li class="nav_link"><a href="index.php">Strona główna</a></li>
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

$sql = 'SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek from pracownicy, organizacja where dzial=id_org';
echo("<p>WIEK POSZCZEGÓLNYCH PRACOWWNIKÓW</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Nazwa_Działu</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_urodzenia</th>");
        echo("<th>Wiek</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");                   
                 echo("</tr>");
            }
   
           echo("</table>");
  
  
   $sql = 'SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="serwis"';
echo("<p>WIEK POSZCZEGÓLNYCH PRACOWNIKÓW Z DZIAŁU SERWISU</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Nazwa_Działu</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_urodzenia</th>");
        echo("<th>Wiek</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");                  
                 echo("</tr>");
            }
   
           echo("</table>");
  
   
    $sql = 'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org';
echo("<p>SUMA LAT WSZYSTKICH</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek_wszystkich_pracownikow</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["wiek"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
   $sql = 'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org and nazwa_dzial="handel"';
echo("<p>SUMA LAT PRACOWNIKÓW Z DZIAŁU HANDEL</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek_pracownikow_handel</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["wiek"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
   
   $sql = 'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy where imie like "%a"';
echo("<p>SUMA LAT KOBIET</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek_kobiet</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["wiek"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  

    $sql = 'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy where imie not like "%a"';
echo("<p>SUMA LAT MĘŻCZYZN</p>");

$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek_mężczyzn</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["wiek"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");

  
    $sql = 'SELECT dzial, avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial';
echo("<p>ŚREDNIA LAT PRACOWNIKÓW W POSZCZEGÓLNYCH DZIAŁACH</p>");

$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>dzial</th>");
        echo("<th>Średnia_wieku</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
  
    $sql = 'SELECT dzial, sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial';
echo("<p>SUMA LAT PRACOWNIKÓW W POSZCZEGÓLNYCH DZIAŁACH</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>dzial</th>");
        echo("<th>Suma_wieku</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
  
    $sql = 'SELECT dzial, max(YEAR(CURDATE()) - YEAR(data_urodzenia)) as max, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial';
echo("<p>NAJSTARCI PRACOWNICY W KAŻDYM DZIALE</p>");


$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>dzial</th>");
        echo("<th>Wiek - najstarsi</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["dzial"]."</td><td>".$row["max"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
  
    $sql = 'SELECT min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as min, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial="handel" OR nazwa_dzial="serwis") group by dzial';
echo("<p>NAJMŁODZI PRACOWNICY Z DZIAŁU HANDEL I SERWIS NAZWA_DZIAŁ WIEK</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek_najmłodsi</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["min"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
 
 
  
  $sql = 'Select min(year(curdate())-year(data_urodzenia)) as minwiek, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial="handel" or nazwa_dzial="serwis") group by nazwa_dzial';
echo("<p>NAJMŁODZI PRACOWNICY Z DZIAŁU HANDEL I SERWIS IMIĘ NAZWA_DZIAŁ WIEK</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek</th>");
        echo("<th>Imię</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["imie"]."</td><td>".$row["minwiek"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
  
   $sql = 'SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni_zycia from pracownicy';
echo("<p>DŁUGOŚĆ ŻYCIA PRACOWNIKÓW W DNIACH</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Imie</th>");
        echo("<th>Dni_życia</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["imie"]."</td><td>".$row["dni_zycia"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
   
      $sql = 'SELECT * from pracownicy where imie not like "%a" order by data_urodzenia asc limit 1';
echo("<p>NAJSTARSZY MĘŻCZYZNA</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table border>");
         echo("<th>ID</th>");
        echo("<th>Imię</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");                   
                 echo("</tr>");
            }
   
           echo("</table>");

           ?>
           </div>
           </div>
           </body>
           </html>