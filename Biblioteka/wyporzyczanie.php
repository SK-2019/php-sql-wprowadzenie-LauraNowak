<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/Assets/style.css">
        
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
<li class="nav_link"><a href="wyporzyczanie.php">Wyporzyczanie</a></li>
</ul>
</div>

<div class="bok">

<?php
  
  echo("<p>Autor: ".$_POST["Autor"]."</p>");
  echo("<p>Tytuł: ".$_POST["Tytuł"]."</p>");
         
  ?>
  </div>
  </div>
  </body>
  </html>