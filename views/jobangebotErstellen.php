<?php
$titel="Jobangebot erstellen";
include"kopf.php";
?>

<body>
    <form action="controller.php" method="post">
        <label for="abteilungsId">Abteilungs-ID:</label>
        <input type="number" id="abteilungsId" name="abteilungsId" required><br><br>

        <label for="jobtitel">Jobtitel:</label>
        <input type="text" id="jobtitel" name="jobtitel" required><br><br>

        <label for="jobbeschreibung">Jobbeschreibung:</label>
        <textarea id="jobbeschreibung" name="jobbeschreibung" rows="10" cols="50" required></textarea><br><br>

        <input type="submit" value="Speichern">
        <?php

include"fuss.php";
?>