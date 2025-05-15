<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: logowanie.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Edycja bazy</title>
<style>
body {
    background-color: powderblue;
}
h1 {
    text-align: center;
}
.column1 {
    float: left;
    width: 21%;
    margin: 2%;
}
.column2 {
    float: left;
    width: 29%;
    margin: 2%;
}
.ftekst {
    margin: 4%;
}
p {
    text-align: center;
}
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
.btn {
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
$sql = <<<EOF
    SELECT * FROM STUDENCI;
EOF;

$ret = $db->query($sql);

if (!$ret) {
    echo "Błąd zapytania: " . $db->lastErrorMsg();
} else {
    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        echo '<form method="POST" action="edit.php">';
        echo 'IMIĘ: <input type="text" name="imie" value="' . htmlspecialchars($row['IMIE']) . '"/><br>';
        echo 'NAZWISKO: <input type="text" name="nazwisko" value="' . htmlspecialchars($row['NAZWISKO']) . '"/><br>';
        echo 'WIEK: <input type="number" name="wiek" value="' . htmlspecialchars($row['WIEK']) . '"/><br>';
        echo '<input type="hidden" name="id" value="' . htmlspecialchars($row['ID']) . '"/>';
        echo '<button type="submit" class="btn">Edytuj</button>';
        echo '</form><br><br>';
    }
}
$db->close();
?>

<br><br><br>
<a href="lab8.php" class="btn">
    Przejdź do bazy
</a>
<br><br><br><br>
</body>
</html>