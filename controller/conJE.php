<?php

// Formular-Daten aus $_POST abrufen
$abteilungsId = $_POST["abteilungsId"];
$jobtitel = $_POST["jobtitel"];
$jobbeschreibung = $_POST["jobbeschreibung"];

// Daten ausgeben
echo "<h2>Jobangebot erstellt:</h2>";
echo "<p>Abteilungs-ID: $abteilungsId</p>";
echo "<p>Jobtitel: $jobtitel</p>";
echo "<p>Jobbeschreibung: $jobbeschreibung</p>";

?>