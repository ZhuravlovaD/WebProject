<?php
include "backend/dbInteraction.php"
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница входа в аккаунт</title>
    <link rel="stylesheet" href="styleSheet.css">
    <link rel="stylesheet" href="navigaion.css">
</head>
<body>

<header class="header">
    <a href="#" class="logo">Game-News</a>
    <nav class="nav-items">
        <a href="mainPage.html">Главная</a>
        <a href="userProfile.html">Мой аккаунт</a>
        <a href="loginPage.html"> Регистрация/Вход</a>
    </nav>
</header>



<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <div class="sign-in-htm">
                <input type="checkbox" class="alertCheckbox" autocomplete="off"/>
                <div class="alert error">
                    <span class="alertClose">X</span>
                    <span class="alertText">ERROR: Неправильный логин или пароль
                    <br class="clear"/></span>
                </div>

                <div class="group">
                    <label for="user" class="label">Username</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign In">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
                </div>
            </div>
            <div class="sign-up-htm">
                <input type="checkbox" class="alertCheckbox" autocomplete="off"/>
                <div class="alert error">
                    <span class="alertClose">X</span>
                    <span class="alertText">ERROR: Логин или почта уже использованы
                    <br class="clear"/></span>
                </div>

                <div class="group">
                    <label for="user" class="label">Username</label>
                    <input id="user" type="text" name="username" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" type="password" name="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Repeat Password</label>
                    <input id="pass" type="password" name="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Email Address</label>
                    <input id="pass" type="text" name="email" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Status</label>
                    <input id="pass" type="number" name="status" class="input">
                </div>
                <div class="group">
                    <input type="submit" class="button" name="signUp" value="Sign Up">
                </div>
                <div class="foot-lnk">
                    <label for="tab-1">Already Member?</label>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>