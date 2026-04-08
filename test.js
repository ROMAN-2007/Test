const homeSection = document.getElementById("home");
const homeIcon = document.querySelector("a[href='#home']");

homeIcon.addEventListener("click", function(e) {
  e.preventDefault(); // éviter le scroll
  homeSection.classList.toggle("active"); // toggle: affiche ou cache
});
