<?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("DB_NAME", "skype");

    $con = mysqli_connect(HOST, USER, PASS, DB_NAME);
    if(!$con) 
    {
        echo "Соединение не установлено";
    }
?>
