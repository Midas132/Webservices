<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
    <h1>Logowanie</h1>
<?
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$password=$_POST['password'];
	if($password === "haslo"){
		session_regenerate_id();
		$_SESSION['loggedin']=true;
		header("Location: index.php");
		exit;
	}
	else{
		echo "Niepoprawne haslo!";
	}
}
?>
    <form action="logowanie.php" method ="post">
        <label for="password">Hasło:</label>
        <input type="password" name="password" required>
        <input type="submit" value="Zaloguj sie"></input>
    </form>
</body>
</html>