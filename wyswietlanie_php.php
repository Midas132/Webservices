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
logowanie.php:
<pre>
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

</pre>
sprawdzanie sesji:
<pre>

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: logowanie.php");
    exit;
}

</pre>
</div>


</body>
</html> 