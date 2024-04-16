<?php
$titel = "Jobangebot erstellen";
include "kopf.php";
?>



<body>
    <form id="formular" action="../controller/conJE.php" method="post">
        <label for="abteilungsId">Abteilungs-ID:</label>
        <input type="number" id="abteilungsId" name="abteilungsId"><br><br>

        <label for="jobtitel">Jobtitel:</label>
        <input type="text" id="jobtitel" name="jobtitel"><br><br>

        <label for="jobbeschreibung">Jobbeschreibung:</label>
        <textarea id="jobbeschreibung" name="jobbeschreibung" rows="10" cols="50"></textarea><br><br>

        <input type="submit" value="Speichern">
    </form>
    <script src="../js/jobangebotErstellen.js"></script>
  <?php  include "fuss.php";?>