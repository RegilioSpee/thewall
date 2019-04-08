<?php

$servername = "localhost"; // Pas dit later aan naar host van ma-cloud!
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystemtut";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Verbinding verloren: ".mysqli_connect_error());
}