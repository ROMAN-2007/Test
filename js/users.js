// Sélectionne l'icône de chat et la boîte
const UsersIcon = document.querySelector('aside a[href="#users"]');
const users = document.getElementById('users');

UsersIcon.addEventListener('click', (e) => {
  e.preventDefault();
  if (users.style.display === "none" || users.style.display === "") {
    users.style.display = "block";
  } else {
    users.style.display = "none";
  }
});