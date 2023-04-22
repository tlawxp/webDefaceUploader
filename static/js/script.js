let btnOpen = document.getElementById("btnOpen");
let btnClose = document.getElementById("btnClose");
let sidebar = document.getElementById("sidebar");
btnOpen.onclick = () => {
  sidebar.style.display = "block"
  sidebar.style.animation = "sidebarOpen 0.3s ease forwards alternate" 
}
btnClose.onclick = () => {
  sidebar.style.animation = "sidebarClose 0.3s ease forwards alternate"
}
