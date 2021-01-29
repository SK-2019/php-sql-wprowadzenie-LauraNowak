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

    echo("<p>PRACOWNICY Z NAZWĄ DZIAŁU</p>");
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
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
    
    
    
            echo("<p> PRACOWNICY TYLKO Z DZIALU 1 I 4.</p>");
            $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
    $result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org and (dzial=1 or dzial=4)');
            echo("<table>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Dzial</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
            echo("</tr>");
                    }
            echo("</table>");



    echo("<p> LISTA KOBIET Z NAZWAMI DZIAŁÓW</p>");
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
        $result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like "%a"');
            echo("<table>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Dzial</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
            echo("</tr>");
                        }
            echo("</table>");
                   

    echo("<p>LISTA MĘŻCZYZN Z NAZWAMI DZIAŁÓW</p>");     
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
        $result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie not like "%a"');
            echo("<table>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Dzial</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
            echo("</tr>");
                         }
            echo("</table>");

echo("<h1>SORTOWANIE</h1>");

     
                   
    echo("<p>PRACOWNICY POSORTOWANI MALEJĄCO</p>");
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
        $result = $conn->query('SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org order by imie desc');
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
             

    echo("<p>PRACOWNICY Z DZIAŁU 3 POSORTOWANI ROSNĄCO PO IMIENIU</p>");
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
        $result = $conn->query('SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org and dzial=3 order by imie asc');
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

echo("<h1>LIMIT</h1>");

    echo("<p>KOBIETY POSORTOWANE ROSNĄCO PO IMIENIU</p>");
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
        $result = $conn->query('SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org and imie like "%a" order by imie asc');
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
                                    
                        
    echo("<p>KOBIETY Z DZIAŁU 1 i 3 POSORTOWANE ROSNĄCO PO ZAROBKACH </p>");
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
        $result = $conn->query('SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org and imie like "%a" order by imie asc');
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
                                
                          
    echo("<p>MĘŻCZYŹNI POSORTOWANI ROSNĄCO: PO ZAROBKACH</p>");
    $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
        $result = $conn->query('SELECT * FROM pracownicy,organizacja WHERE id_org=dzial and imie NOT LIKE "%a" and (dzial = 1 OR dzial=3) order by zarobki desc');
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

            
            echo("<p>DWÓCH NAJLEPIEJ ZARABIAJĄCYCH PRACOWNIKÓW Z DZIAŁU 4</p>");
            $conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
    $result = $conn->query('SELECT * from pracownicy, organizacja where dzial=id_org and dzial=4 order by zarobki desc limit 2');
        echo("<table>");
	    echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 

echo("<p>TRZY NAJLEPIEJ ZARABIAJĄCE KOBIETY Z DZIAŁU 4 I 2</p>");


$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
    $result = $conn->query('SELECT * from pracownicy, organizacja where dzial=id_org and (dzial=4 or dzial=2) order by zarobki desc limit 3');
        echo("<table>");
	    echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 


echo("<p>NAJSTARSZY PRACOWNIK</p>");
$conn = new mysqli( "mysql-lauranowak-23.alwaysdata.net" , "225095" , "Haslo123" , "lauranowak-23_23");
 $result = $conn->query('Select * From pracownicy, organizacja where dzial=id_org order by data_urodzenia asc limit 1');
        echo("<table>");
	    echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
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
        </div>
        </div>
        </body>
        </html>