function responsiveNavBar() {
  let x = document.getElementById("my-nav");
  if (x.className === "myNav") {
    x.className += " responsive";
  } else {
    x.className = "myNav";
  }
}

//loader script
/*const load = document.getElementById("loader");
function loadfun() {
  load.style.display = 'none';
}*/

window.onload = function(){

  document.getElementById("loader").style.display = "none";

}
