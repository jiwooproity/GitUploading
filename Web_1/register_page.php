<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>회원가입</title>
    </head>
    <body>
        <?php
            include ("header_nav.php");
        ?>

        <div class="main-register__width">
            <p class="main-register__text">
                <span class="main-register__color">브레이브걸스 웹 사이트</span>에 오신 것을 환영합니다!
            </p>
        </div>

        <div class="register-frame">
            <div class="register-frame__width">
                <form class="register-frame__form" action="ok/register_ok.php" method="POST">
                    <div class="register-frame__line"></div>

                    <p>아이디</p>
                    <input type="text" name="id" placeholder="공백없이 영문, 숫자 포함">

                    <p>비밀번호</p>
                    <input type="password" name="password" placeholder="공백없이 영문, 숫자 포함 6-20자" minlength="6" maxlength="20">

                    <p>비밀번호 재확인</p>
                    <input type="password" name="password_confirm" placeholder="비밀번호 재입력">

                    <div class="register-frame__line"></div>
                    <p>이름</p>
                    <input type="text" name="name" placeholder="한글 2자이상 입력해주세요." minlength="2">

                    <p>생년월일</p>
                    <input type="text" name="birth" placeholder="예) 1980년 1월 1일생 > 19800101">

                    <p>이메일</p>
                    <input type="text" name="email" placeholder="이메일을 입력해주세요.">

                    <p>휴대전화</p>
                    <div class="register-frame__phonewidth">
                        <div class="register-frame__phone">
                            <input name="phone_1" type="text" value="010">
                            <span>-</span>
                            <input name="phone_2" type="text">
                            <span>-</span>
                            <input name="phone_3" type="text">
                        </div>
                    </div>

                    <div class="register-frame__btn">
                        <input type="submit" value="회원가입">
                        <input type="button" value="취소" onclick="location.href='index.php'">
                    </div>
                </form>
            </div>
        </div>

        <?php
        include ("footer.php");
        ?>

        <script src="https://kit.fontawesome.com/ef8b1ace87.js" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>