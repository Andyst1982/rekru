document.addEventListener("DOMContentLoaded", function() {
  const formular = document.getElementById("formular"); // Formular-Element holen

  formular.addEventListener("submit", function(event) {
    event.preventDefault(); // Formular Senden verhindern


    //constanten erstellen

    const abteilungsIdInput = document.getElementById("abteilungsId");
    const jobtitelInput = document.getElementById("jobtitel");
    const jobbeschreibungInput = document.getElementById("jobbeschreibung");

    // Abteilungs ID validieren eingabepflicht

    if (!abteilungsIdInput.value.trim()) {
      alert("Bitte geben Sie eine Abteilungs-ID ein.");
      abteilungsIdInput.focus();
      return;
    }

    // Abteilungs ID validieren zahlenformat
    if (isNaN(abteilungsIdInput.value.trim())) {
      alert("Abteilungs-ID muss eine Zahl sein.");
      abteilungsIdInput.focus();
      return;
    }
// Jobtitel validieren
    if (!jobtitelInput.value.trim()) {
      alert("Bitte geben Sie einen Jobtitel ein.");
      jobtitelInput.focus();
      return;
    }
// Jobbeschreibung validieren
    if (!jobbeschreibungInput.value.trim()) {
      alert("Bitte geben Sie eine Jobbeschreibung ein.");
      jobbeschreibungInput.focus();
      return;
    }

    // Wenn alles in Ordnung ist, Formular absenden
    formular.submit();
  });
});