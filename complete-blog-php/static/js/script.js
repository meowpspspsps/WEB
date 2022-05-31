//DARK MODE
document.getElementsByTagId('dB')[0].textContent='dark-mode';
function dMode() {
   var element = document.getElementsByTagName('body')[0];   
   element.classList.toggle("dark-mode");
}
   

//sidenav
function openNav() {
   document.getElementById("mySidenav").style.width = "250px";
 }
 
 function closeNav() {
   document.getElementById("mySidenav").style.width = "0";
 }