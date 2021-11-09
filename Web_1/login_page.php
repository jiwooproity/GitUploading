<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body>

        <?php

        include ("header_nav.php");
        ?>

        <div class="main-login__width">
            <p class="main-login__text">
                로그인
            </p>
            <span class="main-login__span">
                Fearless
            </span>
        </div>

        <div class="login-frame">
            <div class="login-frame__width">
                <form class="login-frame__form" action="ok/login_ok.php" method="POST">
                    <div class="login-frame__line"></div>

                    <p>아이디</p>
                    <input type="text" name="id">

                    <p>비밀번호</p>
                    <input type="password" name="password" minlength="6" maxlength="20">

                    <div class="login-frame__btn">
                        <input type="submit" value="로그인">
                    </div>
                </form>
            </div>
        </div>
        <div class="login-find__frame">
            <div class="login-find__width">
                <ul class="finder-list">
                    <li class="finder-item"><a href="#">아이디</a></li>
                    <li class="finder-item"><a href="#">비밀번호 찾기</a></li>
                </ul>
                <span class="login-move__regis">회원이 아니신가요?<a href="register_page.php"> 회원가입</a></span>
            </div>
        </div>

        <?php
            include 'footer.php';
        ?>

        <script src="https://kit.fontawesome.com/ef8b1ace87.js" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>