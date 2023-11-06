function responsiveNavBar() {
     let x = document.getElementById("my-nav");
     if (x.className === "myNav") {
       x.className += " responsive";
     } else {
       x.className = "myNav";
     }
}