$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.collapsible').collapsible();
  $('input#size').characterCounter();
  $('select').formSelect();
});
function funcionBici(){
  var x = document.getElementById("bicicleta");
  setTimeout(function(){
    if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }},2000);
}
function funcionPieza(){
  setTimeout(() => {
    var y = document.getElementById("pieza");
    if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
  }, 2000);
}
function funcionAccesorio(){
  setTimeout(() => {
    var z = document.getElementById("accesorio");
   if (z.style.display === "none") {
       z.style.display = "block";
   } else {
       z.style.display = "none";
   }
  }, 2000);
}