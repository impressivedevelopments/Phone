<?php
    require_once "db_connection.php";

    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass  = password_hash($_POST['password'], PASSWORD_BCRYPT);

    if(!empty($_POST)) {

        $user = $con->query("SELECT * FROM users");        
        $userData = $user->fetch_assoc();

        if(($login != $userData['login']) && ($email != $userData['email'])){
            $sql = "INSERT INTO users(login, email, password) 
                    values('$login', '$email', '$pass')";

            $result = mysqli_query($con, $sql);
            header("location: ../../index.php");
        }     
    } 
?>
