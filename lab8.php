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
<title>LAB8</title>
<style>
body{background-color:powderblue;}
h1{text-align:center;}
.column1{float:left; width:21%; margin: 2%;}
.column2{float:left; width:29%; margin: 2%;}
.ftekst{margin:4%;}
p{text-align:center;}
img{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}
.btn{
  text-decoration: none;
  padding: 0.5rem;
  border: 1px solid #333333;
}
</style>

</head>
<body>
<?php
    class MyDB extends SQLite3 {
        function __construct() {
			$this->open('test.db');
        }
    }
    $db = new MyDB();
	
    $sql =<<<EOF
    CREATE TABLE STUDENCI
    (ID    INTEGER PRIMARY KEY    AUTOINCREMENT,
    IMIE    TEXT    NOT NULL,
    NAZWISKO    TEXT    NOT NULL,
    WIEK    INT    NOT NULL);
    EOF;

    $ret = $db->exec($sql);
    $db->close();
?>
<br><br><br>
<a href="dodwanie.php" class = "btn">
DODAJ
</a>
<br><br><br>
<a href="wyswietl_tabele.php" class = "btn">
WYŚWIETL
</a>
<br><br><br>
<a href="edytuj_tabele.php" class = "btn">
EDYTUJ
</a>
<br><br><br>
<a href="usun_tabele.php" class = "btn">
USUN
</a>
<br><br><br>
<a href="usun_wszystkie_pola.php" class = "btn">
USUN WSZYSTKIE POLA
</a>
<br><br><br>
</br>
<a href="index.php" class="btn">
	Przejdź do strony głównej
</a></br></br></br></br>
</body>
</html> 