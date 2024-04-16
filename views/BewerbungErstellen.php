
<?php
$titel = "Bewerbung erstellen";
include "kopf.php";
?>

<form id="formular" action="../controller/conBE.php" method="post">
  <label for="JobangebotId">Jobangebot-ID:</label>
  <input type="number" id="JobangebotId" name="Jobangebot-ID"><br><br>

  <label for="Nachname">Nachname:</label>
  <input type="text" id="Nachname" name="Nachname"><br><br>
  
  <label for="e-mail">e-mail:</label>
  <input type="text" id="e-mail" name="e-mail"><br><br>

  <input type="submit" value="Absenden">
</form>
<script src="../js/BewerbungErstellen.js"></script>
<?php
include "fuss.php";
?>
