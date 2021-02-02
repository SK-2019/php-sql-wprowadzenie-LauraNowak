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

echo("<li>imię: ".$_POST['imie']."</li>");
echo("<li>dział: ".$_POST['dzial']."</li>");
echo("<li>zarobki: ".$_POST['zarobki']."</li>");
echo("<li>data urodzenia: ".$_POST['data_urodzenia']."</li>");


 
	$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_urodzenia']."')";
  
  //echo($sql);

  require_once("../assets/connect.php");
if ($conn->query($sql) === TRUE) {
        echo("<p>Dodano nowego pracownika</p>");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      ?>
      </div>
      </div>
      </body>
      </html>
