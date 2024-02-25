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

menuList.addEventListener ("touchend", () => {
  menuList.classList.remove("active");
});

//loader script
window.onload = function(){

  document.getElementById("loader").style.display = "none";

}
