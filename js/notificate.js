const badge = document.getElementById("notifBadge");
const button = document.getElementById("addNotif");

let count = 0;

button.addEventListener("click", () => {
  count++;
  badge.textContent = count;
});
