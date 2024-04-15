<?php
$titel="Bewerbung erstellen";
include"kopf.php";
?>
    <form action="controller.php" method="post">
        <label for="JobangebotId">Jobangebot-ID:</label>
        <input type="number" id="JobangebotId" name="Jobangebot-ID" required><br><br>

        <label for="Nachname">Nachname:</label>
        <input type="text" id="Nachname" name="Nachname" required><br><br>
        
        <label for="e-mail">e-mail:</label>
        <input type="text" id="e-mail" name="e-mail" required><br><br>

        
        <input type="submit" value="Absenden">

<?php

include"fuss.php";
?>