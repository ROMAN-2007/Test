const HomeIcon = document.querySelector('main a[href="#home"]');
const home = document.getElementById('home');

HomeIcon.addEventListener('click', (e) =>{
  e.preventDefault();
  if (home.style.display === "none" || home.style.display === ""){
    home.style.display = "block";
  }else{
    home.style.display = "none";
  }
});