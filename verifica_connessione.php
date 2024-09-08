
<?php
// Start of Selection
// Funzione per verificare la connessione
function verificaConnessione($conn) {
    if ($conn->connect_error) {
        echo '<span style="color:red;">verifica_connessione.php</span>: Connessione fallita: ' . $conn->connect_error . '<br>';
        die();
    } else {
        echo '<span style="color:green;">verifica_connessione.php</span>: Connessione effettuata con successo<br>';
    }
}

?>