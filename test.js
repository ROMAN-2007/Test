const toggleBtn = document.getElementById("themeToggle");
const body = document.body;

toggleBtn.addEventListener("click", () => {
  body.classList.toggle("sombre");

  if (body.classList.contains("sombre")) {
    toggleBtn.textContent = "☀️ Clair";
  } else {
    toggleBtn.textContent = "🌙 Sombre";
  }
});