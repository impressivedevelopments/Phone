var hamburger_menu = function() {
    var hamburger = document.querySelector(".fas");
    var menu = document.querySelector(".hamburger-nav");
    if (menu.classList.contains("hidden")) {
            menu.classList.remove("hidden");   
    } else {
            menu.classList.add("hidden");
    }
};