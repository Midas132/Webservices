<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: logowanie.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if (!$id) {
        echo "Nieprawidłowe żądanie: brak ID.<br>";
        echo '<a href="usun_tabele.php">Wróć do usuwania</a>';
        exit;
    }

    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('test.db');
        }
    }

    $db = new MyDB();

    $sql = "DELETE FROM STUDENCI WHERE ID = :id";
    $stmt = $db->prepare($sql);
    if ($stmt) {
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);

        $result = $stmt->execute();
        if ($result) {
            echo "Rekord został pomyślnie usunięty.<br>";
        }
    }

    $db->close();
}

echo '<a href="usun_tabele.php">Wróć do usuwania</a>';
?>