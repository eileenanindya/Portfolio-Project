function toggleMenu(){
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".burger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
}

//clear form before unload
window.onbeforeunload = () =>{
    for(const form of document.getElementsByTagName("form")){
        form.reset();
    }
}