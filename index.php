<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<html>
    <head>
        <title>Connessione MySQL</title>
    </head>
    <body>
        <h1>Connessione MySQL</h1>
        <p>Connessione ai server MySQL in corso...</p>

        <!-- Connessione al server MySQL -->
        <p>
            <?php 
                include 'connessione.php'; 
                list($c, $dbname) = connettiDatabase("127.0.0.1", "root", "DevelopezAdmin", "adiener_db");
            ?>
        </p>

        <!-- Verifica della connessione -->
        <p>
            <?php 
                include 'verifica_connessione.php'; 
                verificaConnessione($c);
            ?>
        </p>

        <!-- Verifica della creazione del database -->
        <p>
            <?php 
                include 'verifica_database.php'; 
                verificaDatabase($c, $dbname);
            ?>
        </p>

        <p>
            <?php 
                include 'creazione_tabella_utenti.php'; 
                creaTabellaUtenti($c);
            ?>
        </p>

        <!-- Gestione degli utenti -->
        <p>
            <?php 
                include 'gestione_utenti.php'; 
            ?>
        </p>

        <!-- Inserimento di un nuovo utente -->
        <p>
            <?php
                echo inserisciUtente('Adiener', 'Velazquez', 'adienerlopez2@gmail.com');
            ?>
        </p>

        <!-- Aggiornamento di un utente esistente -->
        <p>
            <?php
                echo aggiornaUtente(1, 'Adiener', 'Lopez Velazquez', 'adienerlopez@gmail.com');
            ?>
        </p>

        <!-- Eliminazione di un utente -->
        <p>
            <?php
                echo eliminaUtente(103);
            ?>
        </p>

        <!-- Selezione di tutti gli utenti -->
        <p>
            <?php 
                include 'seleziona_tutti_utenti.php'; 
            ?>
        </p>

        <!-- Chiusura della connessione -->
        <p>
            <?php 
                include 'close_conn.php'; 
            ?>
        </p>
    </body>

</html>