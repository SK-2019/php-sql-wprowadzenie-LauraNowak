<!DOCTYPE html>
<html>
<head>
<title>Laura Nowak 2Ti</title>
<link rel="stylesheet" href="/assets/style.css">
        
</head>
<body>
<div class="container" >
<div class="name" >
<h2> Laura Nowak 2Ti gr 2 nr 23 </h2>
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
  
        echo("<p>SUMA ZAROBKÓW WSZYSTKICH PRACOWNIKÓW</p>");
        $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
    $result = $conn->query('SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial');
        echo("<table>");
        echo("<th>Dzial</th>");
        echo("<th>Suma</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
        echo("<tr>");
            echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
        echo("</tr>");
            }
        echo("</table>");

	 
        echo("<p>SUMA ZAROBKÓW WSZYSKICH KOBIET</p>");
        $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
    $result = $conn->query('SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial');
        echo("<table>");
        echo("<th>Dział</th>");
        echo("<th>Suma</th>");
        echo("<th>Średnia</th>");
        echo("<th>Min</th>");
        echo("<th>Max</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row = $result->fetch_assoc()) {
        echo("<tr>");
            echo("<td>".$row['dzial']."</td><td>".$row['suma']."</td><td>".$row['srednia']."</td><td>".$row['min']."</td><td>".$row['max']."</td><td>".$row["nazwa_dzial"]."</td>");
        echo("</tr>");
    }
    echo("</table>");

    
    $sql = 'SELECT sum(zarobki) as suma from pracownicy where imie not like "%a" and (dzial=2 or dzial=3)';
    echo("<p>SUMA ZAROBKÓW MĘŻCZYZN PRACUJĄCYCH W DZIALE 2 i 3</p>");
    
    
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
     $result = $conn->query($sql);
            echo("<table>");
            echo("<th>Suma</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["suma"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
         
    
               $sql = 'SELECT avg(zarobki) as srednia from pracownicy where imie not like "%a"';
    echo("<p>ŚREDNIA ZAROBKÓW WSZYSTKICH MĘŻCZYZN</p>");
   
    
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
     $result = $conn->query($sql);
            echo("<table>");
            echo("<th>Średnia</th>");
                while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                 echo("<td>".$row["srednia"]."</td>"); 
            echo("</tr>");
                }
            echo("</table>");
         
    
              $sql = 'SELECT avg(zarobki) as srednia from pracownicy where dzial=4';
    echo("<p>ŚREDNIA ZAROBKÓW PRACOWNIKÓW Z DZIAŁU 4</p>");
    
    
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
     $result = $conn->query($sql);
            echo("<table>");
            echo("<th>Średnia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["srednia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
         
    
              $sql = 'SELECT avg(zarobki) as srednia from pracownicy where imie not like "%a" and (dzial=1 or dzial=2)';
    echo("<p>ŚREDNIA ZAROBKÓW MĘŻCZYZN Z DZIAŁU 1 i 2</p>");
    
    
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
     $result = $conn->query($sql);
            echo("<table>");
            echo("<th>Średnia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["srednia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
         
    
          $sql = 'SELECT count(imie) as ilosc FROM pracownicy';
    echo("<p>WSZYSCY PRACOWNICY</p>");
    
    
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
     $result = $conn->query($sql);
            echo("<table>");
            echo("<th>Ilość</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["ilosc"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
         
    
                   $sql = 'SELECT count(imie) as ilosc from pracownicy where imie like "%a" and (dzial=1 or dzial=3)';
    echo("<p>KOBIETY DZIAŁ 1 I 3</p>");
    
    
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
     $result = $conn->query($sql);
            echo("<table>");
            echo("<th>Ilość</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["ilosc"]."</td>"); 
                    echo("</tr>");
                }
                echo("</table>");

echo("<h1>GROIP BY</h1>");

                $sql = 'SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial';
                echo("<p>SUMA ZAROBKÓW W POSZCZEGÓLNYCH DZIAŁACH</p>");
                
                
                $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
                 $result = $conn->query($sql);
                        echo("<table>");
                        echo("<th>Dział</th>");
                        echo("<th>Suma</th>");
                        echo("<th>Nazwa_Działu</th>");
                            while($row=$result->fetch_assoc()){ 
                                echo("<tr>");
                                    echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                                echo("</tr>");
                            }
                        echo("</table>");
                     
                
               
                       $sql = 'SELECT dzial, count(imie) as ilosc, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial';
                echo("<p>ILOŚĆ PRACOWNIKÓW W POSZCZEGÓLNYCH DZIAŁACH</p>");
                
                
                $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
                 $result = $conn->query($sql);
                        echo("<table>");
                        echo("<th>Dział</th>");
                        echo("<th>Ilość</th>");
                        echo("<th>Nazwa_Działu</th>");
                            while($row=$result->fetch_assoc()){ 
                                echo("<tr>");
                                    echo("<td>".$row["dzial"]."</td><td>".$row["ilosc"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                                echo("</tr>");
                            }
                        echo("</table>");
                     
                  
                
                       $sql = 'SELECT dzial, avg(zarobki) as srednia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial';
                echo("<p>ŚREDNIE ZAROBKÓW W POSZCZEGÓLNYCH DZIAŁACH</p>");
                
                $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
                 $result = $conn->query($sql);
                        echo("<table>");
                        echo("<th>Dział</th>");
                        echo("<th>Średnia</th>");
                        echo("<th>Nazwa_Działu</th>");
                            while($row=$result->fetch_assoc()){ 
                                echo("<tr>");
                                    echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                                echo("</tr>");
                            }
                        echo("</table>");
                     
               
                      $sql = 'SELECT sum(zarobki) as suma, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec';
                echo("<p>SUMA ZAROBKÓW KOBIET I MĘŻCZYZN</p>");
                
                
                $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
                 $result = $conn->query($sql);
                       echo("<table border>");
                       echo("<th>Suma</th>");
                       echo("<th>Płeć</th>");
                            while($row=$result->fetch_assoc()){ 
                                echo("<tr>");
                                    echo("<td>".$row["suma"]."</td><td>".$row["plec"]."</td>"); 
                                echo("</tr>");
                                    }
                
                                echo("</table>");   
                
                     $sql = 'SELECT avg(zarobki) as srednia, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec';
                echo("<p>ŚREDNIA ZAROBKÓW KOBIET I MĘŻCZYZN</p>");
                $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
         $result = $conn->query($sql);
                echo("<table border>");
                echo("<th>Średnia</th>");
                 echo("<th>Płeć</th>");
                    while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                echo("<td>".$row["srednia"]."</td><td>".$row["plec"]."</td>"); 
                echo("</tr>");
                     }
                echo("</table>");  
                                
echo("<h1>klauzula HAVING</h1>");

$sql = 'SELECT sum(zarobki) as suma, dzial, nazwa_dzial from pracownicy, organizacja where dzial=id_org GROUP BY dzial HAVING sum(zarobki)<28';
echo("<p>SUMA ZAROBKÓW W POSZCZEGÓLNYCH DZIAŁACH MNIEJSZA OD 28</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>Suma</th>");
	echo("<th>Dzial</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");


	   $sql = 'SELECT avg(zarobki) as srednia, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org AND imie not like "%a" group by dzial having avg(zarobki)>30';
echo("<p>ŚREDNIA ZAROBKÓW W POSZCZEGÓLNYCH DZIAŁACH WIĘKSZA OD 30</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
$result = $conn->query('SELECT avg(zarobki) as srednia, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org AND imie not like "%a" group by dzial having avg(zarobki)>30');
        echo("<table>");
        echo("<th>Średnia</th>");
	echo("<th>Dzial</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["srednia"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
            }
             echo("</table>");
	 
	
	 $sql = 'SELECT count(imie) as ilosc, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial having count(imie)>3';
echo("<p>ILOŚĆ PRACOWNIKÓW W POSZCZEGÓLNYCH DZIAŁACH WIEKSZA OD 3</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Ilość</th>");
	echo("<th>Dzial</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["ilosc"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>")

        ?>
        </div>
        </div>
        </body>
        </html>