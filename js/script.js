var hamburger_menu = function() {
    var hamburger = document.querySelector(".fas");
    var menu = document.querySelector(".gamburger-nav");
    
    if (menu.style.display == "none") {
        hamburger.addEventListener("click", function(){
            menu.style.display = "inherit";
        });
    } else {
        hamburger.addEventListener("click", function(){
            menu.style.display = "none";
        });
    }
    
    
};
