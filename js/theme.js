const toggleBtn = document.getElementById("themeToggle");
const body = document.body;
const icon = toggleBtn.querySelector("ion-icon");

toggleBtn.addEventListener("click", () => {
  body.classList.toggle("sombre");

  if (body.classList.contains("sombre")) {
    icon.setAttribute("name", "sunny");
  } else {
    icon.setAttribute("name", "moon");  
  }
});
