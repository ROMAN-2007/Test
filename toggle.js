const btnActivite = document.getElementById("btn-activite");
const btnEnligne = document.getElementById("btn-enligne");

btnActivite.addEventListener("click", () => {
  btnActivite.classList.add("active");
  btnEnligne.classList.remove("active");
});

btnEnligne.addEventListener("click", () => {
  btnEnligne.classList.add("active");
  btnActivite.classList.remove("active");
});z