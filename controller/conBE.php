<?php

// Formular-Daten aus $_POST abrufen
$jobangebotId = $_POST["Jobangebot-ID"];
$nachname = $_POST["Nachname"];
$email = $_POST["e-mail"];
 

// Daten ausgeben
echo "<h2>Bewerbungsdaten:</h2>";
echo "<p>Jobangebot-ID: $jobangebotId</p>";
echo "<p>Nachname: $nachname</p>";
echo "<p>E-Mail: $email</p>";


?>
