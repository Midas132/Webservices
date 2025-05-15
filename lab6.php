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
<title>LAB6</title>
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
	<input type="text" name="imie" pattern="[A-Za-z]+" required title="To pole wymaga wpisania imienia (tylko litery)"></br>
	
	<label for="nazwisko">Nazwisko: </label>
	<input type="text" name="nazwisko" pattern="[A-Za-z]+" required title="To pole wymaga wpisania nazwiska (tylko litery)"></br>
	
	<label for="adres">Adres: </label>
	<input type="text" name="adres" pattern="[A-Za-z0-9]+" required title="To pole wymaga wpisania adresu (nazwa ulicy i numer)"></br>
	
	<label for="adres">Mieszkanie/dom: </label>
	<select value="rodzaj_zamieszkania">
		<option value="dom">Dom</option>
		<option value="mieszkanie">Mieszkanie</option>
		<option value="inne_zamieszkanie">Inne</option>
	</select></br>
	
	<label for="numer_telefonu">Numer telefonu: </label>
	<input type="text" name="nrtel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" title="123-456-789"></br>
	
	<label for="data_urodzenia">Data urodzenia: </label>
	<input type="date" required></br>
	
	<label for="prawo_jazdy">Czy posiada prawo jazdy</label>
	<select value="prawo_jazdy">
		<option value="tak_prawo_jazdy">Tak</option>
		<option value="nie_prawo_jazdy">Nie</option>
	</select></br>
	
	<label for="haslo">Hasło: </label>
	<input type="password" name="haslo" minlength="5" required title="Hasło musi posiadać więcej niż 5 znaków"></br>
	
	<label for="plec">Płeć: </label>
	<select value="plec">
		<option value="kobieta">Kobieta</option>
		<option value="mezczyzna">Meżczyzna</option>
		<option value="inne_plec">Inna</option>
	</select></br>
	
	<label for="miasto">Miasto: </label>
	<input type="text" name="miasto" pattern="[A-Za-z]+" required title="To pole wymaga wpisania miasta (tylko litery)"></br>
	
	<label for="panstwo">Państwo: </label>
	<input type="text" name="panstwo" pattern="[A-Za-z]+" required title="To pole wymaga wpisania państwa (tylko litery)"></br>
	
	</br>
	<input type="submit" value="Submit"></input>
	
</form></br>

<a href="index.php" class="btn">
	Przejdź do strony głównej
</a>
</body>	
</html> 