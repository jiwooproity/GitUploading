






<header class="main-header">
    <div class="main-header__width">

        <?php
            session_start();

            if(!isset($_SESSION['user_id'])) {
        ?>

        <ul class="main-header__login">
            <li class="main-header__btn">
                <i class="fas fa-user"></i>
            </li>
            <li class="main-header__btn">
                <a class="main-header__link" href="login_page.php">Log in</a>
            </li>
            <li class="main-header__btn">
                <i class="fas fa-users"></i>
            </li>
            <li class="main-header__btn">
                <a class="main-header__link" href="register_page.php">Sign Up</a>
            </li>
        </ul>

        <?php
            } else {

                $user_id = $_SESSION['user_id'];
        ?>

                <ul class="main-header__login">
                    <li class="main-header__btn">
                        <i class="fas fa-user"></i>
                    </li>
                    <li class="main-header__btn">
                        <a class="main-header__link" href="#"><?= $user_id ?></a>
                    </li>
                    <li class="main-header__btn">
                        <i class="fas fa-sign-out-alt"></i>
                    </li>
                    <li class="main-header__btn">
                        <a class="main-header__link" href="ok/logout_ok.php">Sign out</a>
                    </li>
                </ul>

        <?php
            }
        ?>

    </div>
</header>

<nav class="nav">
    <div class="nav__width">
        <h1 class="nav__title"><a href="index.php">BRAVEGIRLS</a></h1>
        <a href="#" class="nav__tooglebtn">
            <i class="fas fa-bars"></i>
        </a>
        <ul class="nav__list">
            <li class="nav__btn">
                <a class="nav__link" href="#">Album</a>
            </li>
            <li class="nav__btn">
                <a class="nav__link" href="#">Member</a>
            </li>
            <li class="nav__btn">
                <a class="nav__link" href="#">Support</a>
            </li>
            <li class="nav__btn">
                <a class="nav__link" href="#">Company</a>
            </li>
        </ul>
    </div>
</nav>