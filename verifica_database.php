<?php
// Funzione per verificare se il database esiste
function verificaDatabase($conn, $dbname) {
    if (!$conn->select_db($dbname)) {
        die("Database non trovato: " . $conn->error);
    }
}
?>