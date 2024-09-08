<?php

function connettiDatabase($servername, $username, $password, $dbname) {
    $c = new mysqli($servername, $username, $password, $dbname);

    if ($c->connect_error) {
        die("connessione.php: Connessione fallita: " . $c->connect_error . "<br>");
    }

    return [$c, $dbname]; // Restituisce sia la connessione che il nome del database
}
?>