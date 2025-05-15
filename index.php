<?php
	session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: logowanie.php");
    exit;
}
?>
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
<title>Strona główna</title>
<style>
body{background-color:powderblue;}
h1{text-align:center;}
.lab{
  margin: 2%;
}
</style>

</head>
<body>

<h1>Natan Misztal</h1>

<div class="lab">
<a href="lab1.php">LAB1</a></br>
<a href="lab2.php">LAB2</a></br>
<a href="lab3.php">LAB3</a></br>
<a href="lab5.php">LAB5</a></br>
<a href="lab6.php">LAB6</a></br>
<a href="lab7.php">LAB7</a></br>
<a href="wyswietlanie_php.php">Wyświetl kod php z labów 7</a></br>
<a href="lab8.php">LAB8</a></br>
</div>
</body>
</html> 		