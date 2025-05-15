<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: logowanie.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $imie = $_POST['imie'] ?? null;
    $nazwisko = $_POST['nazwisko'] ?? null;
    $wiek = $_POST['wiek'] ?? null;

    if (!$id || !$imie || !$nazwisko || !$wiek) {
        echo "Wszystkie pola są wymagane.<br>";
        echo '<a href="edytuj_tabele.php">Wróć do edycji</a>';
        exit;
    }

    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('test.db');
        }
    }

    $db = new MyDB();

    $sql = "UPDATE STUDENCI SET IMIE = :imie, NAZWISKO = :nazwisko, WIEK = :wiek WHERE ID = :id";
    $stmt = $db->prepare($sql);
    if ($stmt) {
        $stmt->bindValue(':imie', $imie, SQLITE3_TEXT);
        $stmt->bindValue(':nazwisko', $nazwisko, SQLITE3_TEXT);
        $stmt->bindValue(':wiek', $wiek, SQLITE3_INTEGER);
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);

        $result = $stmt->execute();
        if ($result) {
            echo "Dane studenta zostały pomyślnie zaktualizowane.<br>";
        }
    }

    $db->close();
}
echo '<a href="edytuj_tabele.php">Wróć do edycji</a>';
?>