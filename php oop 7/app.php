<?php
require_once('connect.php');
require_once('bankrekening.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>app</title>
</head>


<body>
    <form action="create_bankrekeningen.php" method="POST">
        <label for="persoon">Persoon:</label>
        <input type="text" id="persoon" name="persoon" required>
        <label for="rekeningnummer">Rekeningnummer:</label>
        <input type="text" id="rekeningnummer" name="rekeningnummer" required>
        <label for="saldo">Saldo:</label>
        <input type="number" id="saldo" name="saldo" required>
        <label for="kredietlimiet">Kredietlimiet:</label>
        <input type="number" id="kredietlimiet" name="kredietlimiet" required>
        <input type="submit" value="Open Bankrekening">
    </form>
    <br>
    <br>
    <br>

    <?php
    // Haal de bankrekeningen op uit de database
    $sql = "SELECT * FROM bankrekeningen";
    $result = $conn->query($sql);

    // Maak een array aan om de bankrekeningen in op te slaan
    $bankrekeningen = array();

    if ($result->num_rows > 0) {
        // Voeg elke bankrekening toe aan de array
        while ($row = $result->fetch_assoc()) {
            $bankrekeningen[] = new Bankrekening($row["persoon"], $row["rekeningnummer"], $row["saldo"], $row["kredietlimiet"]);
        }
    }

    ?>

    <form action="opnemen.php" method="post">
        <label for="rekeningnummer">Selecteer een bankrekening:</label>
        <select name="rekeningnummer" id="rekeningnummer">
            <?php
            // Loop door alle bankrekeningen en maak een optie voor elke rekening
            foreach ($bankrekeningen as $bankrekening) {
                echo "<option value=\"" . $bankrekening->getRekeningnummer() . "\">" . $bankrekening->getPersoon() . " - " . $bankrekening->getRekeningnummer() . "</option>";
            }
            ?>
        </select>
        <br>
        <label for="bedrag">Bedrag om op te nemen:</label>
        <input type="number" id="bedrag" name="bedrag">
        <br>
        <input type="submit" value="Opnemen">
    </form>

    <br>
    <br>
    <br>

    <form action="show_bankrekeningen.php" method="get">
        <input type="submit" name="show_bankrekeningen" value="Toon alle bankrekeningen">
    </form>

</body>





</html>