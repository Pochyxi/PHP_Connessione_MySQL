<?php
// Start of Selection
// Controlla se l'email esiste già prima di inserire un nuovo utente
function inserisciUtente($nome, $cognome, $email) {
    global $c; // Assicurati che la connessione sia accessibile

    // Controlla se l'email esiste già
    $query_check_email = "SELECT * FROM utenti WHERE email='$email'";
    $result = $c->query($query_check_email);

    if ($result->num_rows > 0) {
        return '<span style="color:red;">Errore:</span> l\'email <strong>' . $email . '</strong> è già esistente.<br>';
    }

    $query_insert_utenti = "INSERT INTO utenti(nome, surname, email) VALUES ('$nome', '$cognome', '$email')";

    if($c->query($query_insert_utenti) === TRUE) {
        return '<span style="color:green;">Nuovo record inserito con successo:</span> ' . $c->insert_id . ' - ' . $nome . ' ' . $cognome . ' - ' . $email . '<br>';
    } else {
        return '<span style="color:red;">Errore nell\'inserimento del record:</span> ' . $c->error . '<br>';
    }
}

function aggiornaUtente($id, $nome, $cognome, $email) {
    global $c; // Assicurati che la connessione sia accessibile

    // Controlla se l'ID esiste
    $query_check_id = "SELECT * FROM utenti WHERE id='$id'";
    $result = $c->query($query_check_id);

    if ($result->num_rows === 0) {
        return '<span style="color:red;">Errore:</span> l\'ID <strong>' . $id . '</strong> non esiste.<br>';
    }

    $query_update_utente = "UPDATE utenti SET nome='$nome', surname='$cognome', email='$email' WHERE id='$id'";

    if ($c->query($query_update_utente) === TRUE) {
        return '<span style="color:green;">Record aggiornato con successo</span><br>';
    } else {
        return '<span style="color:red;">Errore nell\'aggiornamento del record:</span> ' . $c->error . '<br>';
    }
}

function eliminaUtente($id) {
    global $c; // Assicurati che la connessione sia accessibile

    // Controlla se l'ID esiste
    $query_check_id = "SELECT * FROM utenti WHERE id='$id'";
    $result = $c->query($query_check_id);

    if ($result->num_rows === 0) {
        return '<span style="color:red;">Errore:</span> l\'ID <strong>' . $id . '</strong> non esiste.<br>';
    }

    $query_delete_utente = "DELETE FROM utenti WHERE id='$id'";

    if ($c->query($query_delete_utente) === TRUE) {
        return '<span style="color:green;">Record eliminato con successo</span><br>';
    } else {
        return '<span style="color:red;">Errore nell\'eliminazione del record:</span> ' . $c->error . '<br>';
    }
}


?>