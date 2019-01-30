var hamburger_menu = function() {
    var menu = document.querySelector(".hamburger-nav");
    if (menu.classList.contains("hidden")) {
        menu.classList.remove("hidden");   
    } else {
        menu.classList.add("hidden");
    }
};

var sign_up = document.querySelector(".sign-up_window"); 

var sign_up_open = function() {
    sign_up.classList.remove("hidden");
};

var sign_up_close = function() {
    var sign_up_button = document.querySelector(".sign-up_button").textContent = "Войти";
    var d = document.querySelector(".sign-in a").textContent = "Ещё не зарегистрированы?";
    var mail = document.querySelector("#e-mail");
    var confirm_password = document.querySelector("#confirm_password");
    mail.classList.add("hidden");
    confirm_password.classList.add("hidden");
    sign_up.classList.add("hidden");
};

var sign_in_show = function() {
    var sign_in = document.querySelectorAll(".sign-up_create_member");
    var sign_up_button = document.querySelector(".sign-up_button").textContent = "Зарегистрироваться!";
    var d = document.querySelector(".sign-in a").textContent = "Уже есть аккаунт?";
    
    for (var i = 0; i < sign_in.length; ++i) {
    var member = sign_in[i];
        if (member.classList.contains("hidden")) {
            member.classList.remove("hidden");
        };
    };
};
