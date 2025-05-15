<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: logowanie.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LAB7</title>
    <style>
        body {background-color: powderblue;}
        h1 {text-align: center;}
        .btn {
            text-decoration: none;
			padding: 0.5rem;
            border: 1px solid #333333;
        }
    </style>
</head>
<body>
    Imię: <?php echo $_GET['imie']?> <br/>
    Nazwisko: <?php echo $_GET['nazwisko']?> <br/>
    Adres: <?php echo $_GET['adres']?> <br/>
    Rodzaj zamieszkania: <?php echo $_GET['rodzaj_zamieszkania']?> <br/>
    Numer telefonu: <?php echo $_GET['nrtel']?> <br/>
    Data urodzenia: <?php echo $_GET['data']?> <br/>
    Prawo jazdy: <?php echo $_GET['prawo_jazdy']?> <br/>
    Hasło: <?php echo $_GET['haslo']?> <br/>
    Płeć: <?php echo $_GET['plec']?> <br/>
    Miasto: <?php echo $_GET['miasto']?> <br/>
    Państwo: <?php echo $_GET['panstwo']?> <br/>
	<br/>
	<br/>
	<br/>
	<br/>

    <a href="index.php" class="btn">Przejdź do strony głównej</a>
</body> 
</html>
		