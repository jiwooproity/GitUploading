<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Web Project</title>
    </head>
    <body>

        <?php
            include ("header_nav.php");
        ?>

        <div class="main-content">
            <div class="main-content__top">
                <img class="main-content__img" src="image/웹_메인배경.png" alt="">
            </div>
        </div>

        <div class="content__frame">
            <h1 class="content__title">
                Personal Teaser
            </h1>
        </div>

        <div class="first-content__frame">
            <div class="first-content__teaser">
                <div class="first-content__grid">
                    <img class="first-content__img" src="image/민영_티저.jpg">
                    <img class="first-content__img" src="image/유정_티저.jpg">
                </div>
                <div class="first-content__grid">
                    <img class="first-content__img" src="image/은지_티저.jpg">
                    <img class="first-content__img" src="image/유나_티저.jpg">
                </div>
            </div>
        </div>

        <div class="line__flex">
            <div class="line__frame">
                <div class="line__top"></div>
            </div>
        </div>

        <div class="content__frame">
            <h1 class="content__title">
                The 4th Mini Album / Rollin' MV
            </h1>
        </div>

        <div class="rollin__frame">
            <div class="rollin__width">
                <iframe class="rollin__mv" src="https://www.youtube.com/embed/3cZrxpK2EAQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="line__flex">
            <div class="line__frame">
                <div class="line__top"></div>
            </div>
        </div>

        <div class="content__frame">
            <h1 class="content__title">
                NONE
            </h1>
        </div>

        <?php
        include ("footer.php");
        ?>

        <script src="https://kit.fontawesome.com/ef8b1ace87.js" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>