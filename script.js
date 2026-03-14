// Theme
    const lien = document.getElementById("toggleLien");
    const body = document.body;

    lien.addEventListener("click", function(e) {
      e.preventDefault();

      if (lien.textContent === "Claire") {
        lien.textContent = "Sombre";
        body.classList.add("Sombre");
      } else {
        lien.textContent = "Claire";
        body.classList.remove("Sombre");
      }
    });