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

    echo("<p>PRACOWNICY Z NAZWĄ DZIAŁU</p>");
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
    
    
    
            echo("<p> PRACOWNICY TYLKO Z DZIALU 1 I 4.</p>");
            $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
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
    $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
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
    $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
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
    $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
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
    $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
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
    $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
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
    $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
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
    $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
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
            $conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
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


$conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
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
$conn = new mysqli( "mysql-lauranowak.alwaysdata.net" , "220134" , "Haslo123" , "lauranowak_23");
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

</body>
</html>