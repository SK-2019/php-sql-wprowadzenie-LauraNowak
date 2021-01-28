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
<li class="nav_link"><a href="/index.php">Strona główna</a></li>
<li class="nav_link"><a href="ksiazki.php">Książki</a></li>
<li class="nav_link"><a href="wyporzyczanie.php">Wyporzyczanie</a></li>
</ul>
</div>

<div class="bok">
<?php
  
  require_once("../Assets/connect.php");

  $sql1 = ("SELECT * FROM bibliotekaAutor"); 
  $sql2 = ("SELECT * FROM bibliotekaTytul"); 
  $result=$conn->query($sql1);
  echo("<form action='wyporzyczanie.php' method='POST'>");
  echo("<label for='Autor'><p>WYBIERZ AUTORA:</p></label>");
  echo("<select name='Autor' id='id_autor'>");
  while($row=$result->fetch_assoc()) 
  {
      echo("<option value=".$row['id_autor'].">".$row['Autor']."</option>");
  }
  echo("</select>");
  $result=$conn->query($sql2);
  echo("<label for='Tytuł'><p>WYBIERZ TYTUŁ:</p></label>");
  echo("<select name='Tytuł' id='id_tytuł'>");
  while($row=$result->fetch_assoc())
  {
      echo("<option value=".$row['id_tytuł'].">".$row['Tytuł']."</option>");
  }
  echo("</select>");
  echo("<input type='submit' value='Wypożycz'>'");
  echo("</form>");

  
  $sql = ('SELECT * FROM bibliotekaAT, bibliotekaAutor, bibliotekaTytul WHERE id_autor=bibliotekaAutor_ID AND id_tytuł=bibliotekaTytul_ID');
  echo("<p>Wyświetlenie pełnej bazy danych w blibiotece</h1>");
  
  $result=$conn->query($sql);
  echo("<table>");
  echo("<th>id</th>");
  echo("<th>Autor</th>");
  echo("<th>Tytuł</th>");
  while($row=$result->fetch_assoc())
  {
      echo("<tr>");
      echo("<td>".$row["id"]."</td><td>".$row["Autor"]."</td><td>".$row["Tytuł"]);
      echo("</tr>");
  }
  echo("</table>");

  $sql = ("SELECT * FROM bibliotekaAutor");
  echo("<p>Autorzy</p>");
  $result=$conn->query($sql);
  echo("<select name='Autor' id='id_autor'>");
  while($row=$result->fetch_assoc())
  {
  echo("<option value=".$row["id_autor"]."</option><option vealu=>".$row["Autor"]."</option>");
  }
  echo("<input type='Submit' value='Autor'><br>");
  echo("</select>");
 
  
  
  $sql = ("SELECT * FROM bibliotekaTytul");
  echo("<p>książki</p>");
  $result=$conn->query($sql);
  echo("<select name='Tytuł' id='id_Tytuł'>");
  while($row=$result->fetch_assoc())
  {
  echo("<option vealu=>".$row["id_tytuł"]."</option><option vealu=>".$row["Tytuł"]."</option>");
  }
  echo("<input type='Submit' value='książka'><br>");
  echo("</select>");
  
  
  
//   $sql = ('SELECT * FROM bibliotekaAT, bibliotekaAutor, bibliotekaTytul; WHERE id_autor=bibliotekaAutor_ID AND id_tytuł=bibliotekaTytul_ID');
//   echo("<p>WSZYSTKO</p>");
//   $result=$conn->query($sql);
//   echo("<table border=1>");
//   echo("<th>id</th>");
//   echo("<th>Autor</th>");
//   echo("<th>Tytuł</th>");
//   while($row=$result->fetch_assoc())
//   {
//   echo("<tr>");
//   echo("<td>".$row["id"]."</td><td>".$row["Autor"]."</td><td>".$row["Tytuł"]);
//   echo("</tr>");
//   }
//   echo("</table>");
  

//lek
    require_once("../Assets/connect.php");
    $sql = ("SELECT * FROM bibliotekaAutor");
    echo("<p>LISTA Z NAZWAMI AUTORÓW</p>");
    
    $result=$conn->query($sql);
    echo("<table>");
    echo("<th>id</th>");
    echo("<th>Autor</th>");
    while($row=$result->fetch_assoc())
    {
        echo("<tr>");
        echo("<td>".$row["id_autor"]."</td><td>".$row["Autor"]."</td>");
        echo("</tr>");
    }
    echo("</table>");

    
    $sql = ("SELECT * FROM bibliotekaTytul");
    echo("<p>TYTUŁY KSIĄŻEK</p>");
    
    $result=$conn->query($sql);
    echo("<table>");
    echo("<th>id</th>");
    echo("<th>Tytul</th>");
    while($row=$result->fetch_assoc())
    {
        echo("<tr>");
        echo("<td>".$row["id_tytuł"]."</td><td>".$row["Tytuł"]."</td>");
        echo("</tr>");
    }
    echo("</table>");

    
    $sql = ('SELECT * FROM bibliotekaAT, bibliotekaAutor, bibliotekaTytul WHERE id_autor=bibliotekaAutor_ID AND id_tytuł=bibliotekaTytul_ID');
    echo("<p>PEŁNA BAZA</p>");
    $result=$conn->query($sql);
    echo("<table>");
    echo("<th>id</th>");
    echo("<th>Autor</th>");
    echo("<th>Tytuł</th>");
    while($row=$result->fetch_assoc())
    {
        echo("<tr>");
        echo("<td>".$row["id"]."</td><td>".$row["Autor"]."</td><td>".$row["Tytuł"]);
        echo("</tr>");
    }
    echo("</table>");

         
    ?>
    </div>
    </div>
    </body>
    </html>
