<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bankrekeningen";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Verbinding mislukt: " . mysqli_connect_error());
}
