<!DOCTYPE html>
<html>
<head>
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
<li class="nav_link"><a href="formularz.html">Formularz</a></li>
<li class="nav_link"><a href="function.php">Function</a></li>
</ul>
</div>

<div class="bok">

<?php

echo("funkcje");

function nazwa11($liczba){
echo("<li> funckja dziala ");
echo("<li>test ".$liczba);
for($i=1;$i<$liczba;$i++){
echo("<li>to petla: ".$i);
   }
}

nazwa11(15);

?>
</div>
</div>
</body>
</html>