<?php
require_once('connect.php');
require_once('bankrekening.php');


// Haal de geselecteerde bankrekening op uit de database
$rekeningnummer = $_POST["rekeningnummer"];
$sql = "SELECT * FROM bankrekeningen WHERE rekeningnummer = $rekeningnummer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $bankrekening = new Bankrekening($row["persoon"], $row["rekeningnummer"], $row["saldo"], $row["kredietlimiet"]);
} else {
    die("Bankrekening niet gevonden.");
}

// Voer de opname uit op de bankrekening
$bedrag = $_POST["bedrag"];
if ($bankrekening->opnemen($bedrag)) {
    // Als de opname gelukt is, sla de nieuwe saldo op in de database
    $sql = "UPDATE bankrekeningen SET saldo = " . $bankrekening->getSaldo() . " WHERE rekeningnummer = $rekeningnummer";
    if ($conn->query($sql) !== TRUE) {
        die("Fout bij het bijwerken van de database: " . $conn->error);
    }
    $conn->close();

    echo "Het opnemen van €" . $bedrag . " van rekeningnummer " . $rekeningnummer . " is gelukt. Nieuw saldo: €" . $bankrekening->getSaldo();
}
