let drop_content = document.getElementsByClassName("dropdown-content");

/*for (let i=0; i<drop_content.length; i++) {
    drop_content[i].addEventListener ("click", ()=> {
        drop_content[i].classList.add("show");
    });
}*/

drop_content.addEventListener ("click", ($event)=> {
    $event.preventDefault ();
    drop_content.classList.add('show');
});

