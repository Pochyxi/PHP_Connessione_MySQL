<?php
$query_select_utenti = "SELECT * FROM utenti";
$result = $c->query($query_select_utenti);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse:collapse;'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Cognome</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["surname"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Nessun utente trovato.</p>";
}
?>