var hamburger_menu = function() {
    var menu = document.querySelector(".hamburger-nav");
    if (menu.classList.contains("hidden")) {
        menu.classList.remove("hidden");   
    } else {
        menu.classList.add("hidden");
    }
};

var sign_up = document.querySelector("#sign_up");
var sign_in = document.querySelector("#sign_in");  

var sign_up_open = function() {
    sign_in.classList.add("hidden");
    sign_up.classList.remove("hidden");
};

var sign_in_open = function() {
    sign_up.classList.add("hidden");
    sign_in.classList.remove("hidden");
};

var popup_close = function() {
    sign_up.classList.add("hidden");
    sign_in.classList.add("hidden");
};
