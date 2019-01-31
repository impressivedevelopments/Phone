<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/theme.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/media.css" type="text/css">
    <title>Skype</title>
</head>
<body>

    <!-- HEADER -->
    <header class="header" style="background: url('images/background.png') no-repeat center; background-size: cover;">
        <span class="opacity" style="background: #000000;"></span>
        <div class="wrapper">
            <div class="main-nav flex">
                <a href="https://www.skype.com/ru/"><img src="images/logo.png" alt="logo"></a>
                <nav class="flex menu">
                    <ul class="nav flex">
                        <li><a href="#" class="link nav-item">Downloads</a></li>
                        <li><a href="#" class="link nav-item">Business</a></li>
                        <li><a href="#" class="link nav-item">Prices</a></li>
                        <li><a href="#" class="link nav-item">Help</a></li>                
                    </ul>
                    <?php
                    if(!empty($_SESSION['login'])) {
                        echo '
                        <form action="scripts/php/log_out.php" class ="flex">
                        <i class="fas fa-user-circle fa-2x"></i><button class="link user">'.'Привет, '. $_SESSION['login']. '</button>
                        </form>';
                    } else {
                        echo '<span><a href="#" class="btn sm-btn link-btn" onclick="sign_in_open()">Sign in</a></span>';
                    }
                    ?>
                </nav>

                <!-- HAMBURGER-MENU -->
                <nav class="flex hamburger-menu">
                    <i class="fas fa-bars fa-2x" onclick="hamburger_menu()"></i>
                    <ul class="hamburger-nav flex hidden">
                        <li><a href="#" class="link nav-item">Downloads</a></li>
                        <li><a href="#" class="link nav-item">Business</a></li>
                        <li><a href="#" class="link nav-item">Prices</a></li>
                        <li><a href="#" class="link nav-item">Help</a></li> 
                        <?php
                    if(!empty($_SESSION['login'])) {
                        echo '
                        <form action="scripts/php/log_out.php" class ="flex">
                        <button class="link user">'. $_SESSION['login']. '</button>
                        </form>';
                    } else {
                        echo '<li><a href="#" class="sm-btn link-btn" onclick="mini_sign_in_open()">Sign in</a></li> ';
                    }
                    ?>
                                      
                    </ul>                              
                </nav>
            </div>
            <div class="wrapper title flex">
                <h1>
                    Skype keeps the world talking. Call, message<br>
                    and share whatever you want for free.
                </h1>
                <a href="https://www.skype.com/ru/" class="btn download">Download Skype</a>
                <div class="social">
                    <ul class="icons flex">
                        <li><a href="#"><img src="images/adnroid.png" alt="android"></a></li>
                        <li><a href="#"><img src="images/apple.png" alt="apple"></a></li>
                        <li><a href="#"><img src="images/win.png" alt="windows"></a></li>
                        <li><a href="#"><img src="images/screen.png" alt="pc"></a></li>
                        <li><a href="#"><img src="images/joy.png" alt="home platform"></a></li>
                    </ul>
                    <p>Stay in touch no matter what device you see</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Everyday chat -->
    <section class="evdchat flex wrapper">
        <img src="images/everyday.png" alt="" class="big-picture">
            <div class="evdchat_content flex">
                <div class="flex evdchat_head">
                    <img src="images/smile.png" alt="">
                    <h1>Everyday chat</h1>
                </div>                
                <span class="stay_close">Stay close to your best friends with group chat. 
                It's great for making weekend plans, 
                starting a book group and sharing cat photos. Meow.</span>
            </div>
    </section>

    <!-- Everything you want to share -->
    <section class="everything">
        <div class="share flex">
            <span class="share_icon"><img src="images/cam.png" alt=""></span>
            <span class="want_to_share">Everything you want to share</span>
            <span class="collaboration">Take collaboration to another level. Share screens and create together.<br>
                Send photos and files of any size and keep the ideas flowing.</span>
            <img src="images/friend.png" alt="" class="big-picture">
        </div>
    </section>

    <!-- Call mobiles -->     
    <section class="mobileskype">
    <div class="call flex wrapper">
        <div class="moblines flex">
            <div class="flex mobiles_head">
               <img src="images/lap.png" alt="">
               <h1>Call mobiles and landlines</h1>                
            </div> 
            <span class="call_home">Reach out to family and friends worldwide. With super low rates and 
            no peak times you really can call home the moment you start to miss it. </span>
            <a href="#" class="btn rates">Call rates</a>
        </div>
        <img src="images/callmob.png" alt="" class="big-picture">
    </div>
    </section>

    <!-- MORE FEAUTERS -->
    <section class="feauters wrapper">
        <h1>Free calls and so much more with Skype</h1>
        <br>
        <span class="skype_features">Check out what you can do with Skype</span>
        <div class="scope grid">
            <div class="scope_items flex">
                <span><img src="images/videocalls.png" alt=""></span>
                <a href="#">Video calls</a>
                <span>Send a message
                      you can see,
                      hear and feel.
                </span>
            </div>
            <div class="scope_items flex">
                <span><img src="images/groupvideocalls.png" alt=""></span>
                <a href="#">Group video calls</a>
                <span>Get a group of people
                      together on one call 
                      add up to 25 people.
                </span>
            </div>
            <div class="scope_items flex">
                <span><img src="images/voicecalls.png" alt=""></span>
                <a href="#">Voice calls</a>
                <span>Call anyone else on 
                      Skype for free, anywhere
                      in the world.
                </span>
            </div>
            <div class="scope_items flex">
                <span><img src="images/instantmessaging.png" alt=""></span>
                <a href="#">Instant messaging</a>
                <span>Talk with your fingers
                      gossip away, plan a trip,
                      all in an instant.
                </span>
            </div>
            <div class="scope_items flex screen">
                <span><img src="images/screensharing.png" alt=""></span>
                <a href="#">Screen sharing</a>
                <span>Share your 
                      screen with the person
                      you’re talking to.
                </span>
            </div>
            <div class="scope_items flex">
                <span><img src="images/filesharing.png" alt=""></span>
                <a href="#">File sharing</a>
                <span>Send files, photos,
                      videos of any 
                      size over Skype
                </span>
            </div>
        </div>
        <div class="wrapper"><a href="#" class="btn more">More Feauters</a></div> 
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="get-skype flex" style="background: url('images/footer.png') no-repeat center; background-size: cover;">
            <span class="opacity" style="background: #000000;"></span>
            <span>
                Get Skype today and stay in touch with friends, family and colleagues.
            </span>
            <a href="https://www.skype.com/ru/" class="btn download">Download Skype</a>
        </div>
        <div class=" wrapper footer-container flex">
            <div class="privacy">
                <span>
                    The Skype name, associated trade marks and logos
                    and the "S" logo are trade marks of Skype or related
                    entities.
                    <b>Terms of Use | Privacy and Cookie policy | About our ads.</b>
                </span>
            </div>
            <div class="copyright flex">
                <span><img src="images/Microsoft.png" alt=""></span>
                <span>© 2015 Skype and/or Microsoft</span>
            </div>
        </div>
    </footer>

    <!-- SING-UP -->
    <form method="post" action="scripts/php/register.php" id="sign_up" class="popup_window wrapper flex hidden">
        <div class="popup_header flex">
            <img src="images/logo.png" alt="logo">
            <i class="fas fa-times fa-2x" onclick="popup_close()"></i>
        </div>
        <div class="popup_info flex">
            <div class="popup_create_member grid" id="member_login">
                <label>Логин:</label>
                <input type="text" placeholder="Ваш логин" name="login" required>
            </div>
            <div class="error"><?= $errors['login'] ?></div>
            <div class="popup_create_member grid" id="member_email">
                <label>E-mail:</label>
                <input type="e-mail" placeholder="Ваш e-mail" name="email" required>
            </div>
            <div class="popup_create_member grid" id="member_password">
                <label>Пароль:</label>
                <input type="password" placeholder="Ваш пароль" name="password" required>
            </div>
            <div class="popup_create_member grid" id="member_confirm_password">
                <label>Подтвердите пароль:</label>
                <input type="password" placeholder="Ваш пароль" name="confirm_password" required>
            </div>
        </div>
        <div class="popup_button_container flex">
            <button class="popup_button">Зарегистрироваться</button>
        </div>
        <div class="sign-in">
            <a href="#" onclick="sign_in_open()">Уже есть аккаун?</a>
        </div>
    </form>

    <!-- SING-IN -->
    <form method="post" action="scripts/php/auth.php" id="sign_in" class="popup_window wrapper flex hidden">
        <div class="popup_header flex">
            <img src="images/logo.png" alt="logo">
            <i class="fas fa-times fa-2x" onclick="popup_close()"></i>
        </div>
        <div class="popup_info flex">
            <div class="popup_create_member grid" id="member_login">
                <label>Логин:</label>
                <input type="text" placeholder="Ваш логин" name="login" required>
            </div>            
            <div class="popup_create_member grid" id="member_password">
                <label>Пароль:</label>
                <input type="password" placeholder="Ваш пароль" name="password" required>
            </div>            
        </div>
        <div class="popup_button_container flex">
            <button class="popup_button">Войти</button>
        </div>
        <div class="sign-in">
            <a href="#" onclick="sign_up_open()">Ещё не зарегистрированы?</a>
        </div>
    </form>

    <!-- SING-UP MINI -->
    <form method="post" action="scripts/php/register.php" id="mini-sign_up" class="popup_window wrapper flex hidden">
        <div class="popup_header flex">
            <img src="images/logo.png" alt="logo">
            <i class="fas fa-times fa-2x" onclick="popup_close()"></i>
        </div>
        <div class="popup_info flex">
            <div class="popup_create_member grid" id="member_login">
                <input type="text" placeholder="Ваш логин" name="login" required>
            </div>
            <div class="error"><?= $errors['login'] ?></div>
            <div class="popup_create_member grid" id="member_email">
                <input type="e-mail" placeholder="Ваш e-mail" name="email" required>
            </div>
            <div class="popup_create_member grid" id="member_password">
                <input type="password" placeholder="Ваш пароль" name="password" required>
            </div>
            <div class="popup_create_member grid" id="member_confirm_password">
                <input type="password" placeholder="Ваш пароль" name="confirm_password" required>
            </div>
        </div>
        <div class="popup_button_container flex">
            <button class="popup_button">Зарегистрироваться</button>
        </div>
        <div class="sign-in">
            <a href="#" onclick="mini_sign_in_open()">Уже есть аккаун?</a>
        </div>
    </form>

    <!-- SIGN-IN MINI -->
    <form method="post" action="scripts/php/auth.php" id="mini-sign_in" class="popup_window wrapper flex hidden">
        <div class="popup_header flex">
            <img src="images/logo.png" alt="logo">
            <i class="fas fa-times fa-2x" onclick="popup_close()"></i>
        </div>
        <div class="popup_info flex">
            <div class="popup_create_member" id="member_login">
                <input type="text" placeholder="Ваш логин" name="login" required>
            </div>            
            <div class="popup_create_member" id="member_password">
                <input type="password" placeholder="Ваш пароль" name="password" required>
            </div>            
        </div>
        <div class="popup_button_container flex">
            <button class="popup_button">Войти</button>
        </div>  
        <div class="sign-in">
            <a href="#" onclick="mini_sign_up_open()">Ещё не зарегистрированы?</a>
        </div>
    </form>

    <script src="scripts/js/script.js"></script>
</body>
</html>
