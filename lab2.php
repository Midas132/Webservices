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
<title>LAB2</title>
<style>
body{background-color:powderblue;}
h1{text-align:center;}
.btn{
  text-decoration: none;
  padding: 0.5rem;
  border: 1px solid #333333;
}
</style>

</head>
<body>
<form>
	<label for="imie">Imię: </label>
	<input type="text"></br>
	<label for="nazwisko">Nazwisko: </label>
	<input type="text"></br>
	<label for="adres">Adres: </label>
	<input type="text"></br>
	<label for="adres">Mieszkanie/dom: </label>
	<select value="rodzaj_zamieszkania">
		<option value="dom">Dom</option>
		<option value="mieszkanie">Mieszkanie</option>
		<option value="inne_zamieszkanie">Inne</option>
	</select></br>
	<label for="numer_telefonu">Numer telefonu: </label>
	<input type="nrtel"></br>
	<label for="data_urodzenia">Data urodzenia: </label>
	<input type="date"></br>
	<label for="prawo_jazdy">Czy posiada prawo jazdy</label>
	<select value="prawo_jazdy">
		<option value="tak_prawo_jazdy">Tak</option>
		<option value="nie_prawo_jazdy">Nie</option>
	</select></br>
	<label for="haslo">Hasło: </label>
	<input type="password"></br>
	<label for="plec">Płeć: </label>
	<select value="plec">
		<option value="kobieta">Kobieta</option>
		<option value="mezczyzna">Meżczyzna</option>
		<option value="inne_plec">Inna</option>
	</select></br>
	<label for="miasto">Miasto: </label>
	<input type="text"></br>
	<label for="panstwo">Państwo: </label>
	<input type="text"></br>
	</br>
	<input type="submit" value="Submit"></input>
</form></br>
<a href="index.php" class="btn">
	Przejdź do strony głównej
</a>
</body>	
</html> 