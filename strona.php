<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
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
<li class="nav_link"><a href="pracownicy.php">Pracownicy</a></li>
<li class="nav_link"><a href="funkcjeAgregujace.php">Funkcje Agregujace</a></li>
<li class="nav_link"><a href="index.php">Strona główna</a></li>
<li class="nav_link"><a href="pracownicyiorganizacja.php">Pracownicy i Organizacja</a></li>
<li class="nav_link"><a href="dataiczas.php">Data i czas</a></li>
<li class="nav_link"><a href="formularz.html">Formularz</a></li>
<li class="nav_link"><a href="daneDoBazy.php">Dane Do Bazy</a></li>
<li class="nav_link"><a href="function.php">Function</a></li>
<li class="nav_link"><a href="ksiazki.php">Książki</a></li>
<!-- <li class="nav_link"><a href="wyporzyczanie.php">Wyporzyczanie</a></li> -->
</ul>
</div>

<div class="bok">
   
    <p>Dodano:</p>

<?php

echo("<li>imię: ".$_POST['imie']."</li>");
echo("<li>dział: ".$_POST['dzial']."</li>");
echo("<li>zarobki: ".$_POST['zarobki']."</li>");
echo("<li>data urodzenia: ".$_POST['data_urodzenia']."</li>");


 
	$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_urodzenia']."')";
	
if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>Dodano</p>");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      ?>
      </div>
      </div>
      </body>
      </html>
 