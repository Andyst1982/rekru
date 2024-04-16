
<?php
$titel = "Bewerbung erstellen";
include "kopf.php";
?>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const formular = document.getElementById("formular"); // Formular-Element holen

  formular.addEventListener("submit", function(event) {
    event.preventDefault(); // Formular Senden verhindern

   //constanten erstellen
    const jobangebotIdEingabe = document.getElementById("JobangebotId");
    const nachnameEingabe = document.getElementById("Nachname");
    const emailEingabe = document.getElementById("e-mail");

    // Jobangebot-ID validieren
    if (isNaN(jobangebotIdEingabe.value.trim()) || jobangebotIdEingabe.value.trim() === "") {
      alert("Jobangebot-ID muss eine Zahl sein!");
      jobangebotIdEingabe.focus();
      return;
    }

    // Nachname validieren
    if (nachnameEingabe.value.trim() === "") {
      alert("Nachname darf nicht leer sein!");
      nachnameEingabe.focus();
      return;
    }

    // E-Mail-Adresse validieren
    const regexEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!regexEmail.test(emailEingabe.value.trim())) {
      alert("Ungültiges E-Mail-Format!");
      emailEingabe.focus();
      return;
    }

    // Formular absenden, wenn Validierungen erfolgreich waren
    formular.submit();
  });
});
</script>


<form id="formular" action="../controller/conBE.php" method="post">
  <label for="JobangebotId">Jobangebot-ID:</label>
  <input type="number" id="JobangebotId" name="Jobangebot-ID"><br><br>

  <label for="Nachname">Nachname:</label>
  <input type="text" id="Nachname" name="Nachname"><br><br>
  
  <label for="e-mail">e-mail:</label>
  <input type="text" id="e-mail" name="e-mail"><br><br>

  <input type="submit" value="Absenden">
</form>

<?php
include "fuss.php";
?>
