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
    <form action="Lab7_wyswietl.php" method="GET">
    Imię: <input type="text" name="imie"></br>
	Nazwisko: <input type="text" name="nazwisko"></br>
	Adres: <input type="text" name="adres"></br>
	Mieszkanie/dom: 
	<select value="rodzaj_zamieszkania" name="rodzaj_zamieszkania">
		<option value="dom">Dom</option>
		<option value="mieszkanie">Mieszkanie</option>
		<option value="inne_zamieszkanie">Inne</option>
	</select></br>
	Numer telefonu: <input type="nrtel" name="nrtel"></br>
	Data urodzenia: <input type="date" name="data"></br>
	Czy posiada prawo jazdy
	<select value="prawo_jazdy" name="prawo_jazdy">
		<option value="tak">Tak</option>
		<option value="nie">Nie</option>
	</select></br>
	Hasło: <input type="password" name="haslo"></br>
	Płeć: 
	<select value="plec" name="plec">
		<option value="kobieta">Kobieta</option>
		<option value="mezczyzna">Meżczyzna</option>
		<option value="inna_plec">Inna</option>
	</select></br>
	Miasto: <input type="text" name="miasto"></br>
	Państwo: <input type="text" name="panstwo"></br>
	</br>
	<input type="submit" value="Submit"></input>
</form></br>
	<br/>
	<br/>
	<br/>
	<br/>

    <a href="index.php" class="btn">Przejdź do strony głównej</a>
</body> 
</html>
		