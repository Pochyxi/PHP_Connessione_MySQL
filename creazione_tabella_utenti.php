<?php
function creaTabellaUtenti($conn) {
    $query_crea_tabella = "CREATE TABLE IF NOT EXISTS utenti (
        id INT(9) AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        surname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL
    )";

    if ($conn->query($query_crea_tabella) === TRUE) {
        echo '<span style="color:green;">creazione_tabella_utenti.php</span>: Tabella \'utenti\' creata con successo<br>';
    } else {
        echo '<span style="color:red;">creazione_tabella_utenti.php</span>: Errore nella creazione della tabella: ' . $conn->error . '<br>';
    }
}


?>
