<?php
require_once('connect.php');
require_once('bankrekening.php');

// Haal alle bankrekeningen op uit de database
$sql = "SELECT * FROM bankrekeningen";
$result = $conn->query($sql);

// Controleer of er resultaten zijn en geef deze weer in een tabel
if ($result->num_rows > 0) {
    echo "<table><tr><th>Naam</th><th>Rekeningnummer</th><th>Saldo</th><th>Kredietlimiet</th></tr>";
    // Output van elke rij
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["persoon"] . "</td><td>" . $row["rekeningnummer"] . "</td><td>" . $row["saldo"] . "</td><td>" . $row["kredietlimiet"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Geen resultaten gevonden.";
}

// Sluit de verbinding met de database
$conn->close();
