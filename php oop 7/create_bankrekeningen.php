<?php

require_once('connect.php');
require_once('bankrekening.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $persoon = $_POST['persoon'];
    $rekeningnummer = $_POST['rekeningnummer'];
    $saldo = $_POST['saldo'];
    $kredietlimiet = $_POST['kredietlimiet'];

    $bankrekening = new Bankrekening($persoon, $rekeningnummer, $saldo, $kredietlimiet);

    echo "<h2>Bankrekening geopend:</h2>";
    echo "<p><strong>Persoon:</strong> " . $bankrekening->getPersoon() . "</p>";
    echo "<p><strong>Rekeningnummer:</strong> " . $bankrekening->getRekeningnummer() . "</p>";
    echo "<p><strong>Saldo:</strong> " . $bankrekening->getSaldo() . "</p>";
    echo "<p><strong>Kredietlimiet:</strong> " . $bankrekening->getKredietlimiet() . "</p>";


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $persoon = $_POST['persoon'];
        $rekeningnummer = $_POST['rekeningnummer'];
        $saldo = $_POST['saldo'];
        $kredietlimiet = $_POST['kredietlimiet'];

        $sql = "INSERT INTO bankrekeningen (persoon, rekeningnummer, saldo, kredietlimiet) VALUES ('$persoon', '$rekeningnummer', $saldo, $kredietlimiet)";

        if (mysqli_query($conn, $sql)) {
            echo "Nieuwe bankrekening succesvol aangemaakt";
?>
            <div><a href="app.php">terug</a></div>

<?php
        } else {
            echo "Er is een fout opgetreden: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
