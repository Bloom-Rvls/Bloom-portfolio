//responsive navigation script
const menu = document.getElementById('icon-link');
const menuList = document.getElementById('my-nav');

menu.addEventListener ("click", () => {
  if (menuList.className === "myNav") {
    menuList.className += " active";
  } else {
    menuList.className = "myNav";
  }
  
});

//loader script
window.onload = function(){

  document.getElementById("loader").style.display = "none";

}
