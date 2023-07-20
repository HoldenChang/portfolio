<?php
session_start();
if (isset($_SESSION['success'])) {
    echo "<script>alert('Your account has been created successfully')</script>";
    session_unset();
}
if (isset($_SESSION['loginFailed'])) {
    echo "<script>alert('The Account or password you entered is incorrect')</script>";
    session_unset();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game CC</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/layout.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/abe8564c6b.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header (Menu)-->
    <div class="header">
        <nav class="menu">
            <div class="logo"><a href="index.php">GameCC</a></div>
            <div class="games">Games
                <div class="gSubMenu">
                    <li><a href="newGame.php">New Release</a></li>
                    <li><a href="popularGame.php">Popular Games</a></li>
                </div>
            </div>
            <div class="steam"><a href="steam.php">Steam</a></div>
            <div class="playstation"><a href="playStation.php">PlayStation</a></div>
            <div class="epicgames"><a href="epicGames.php">Epic Games</a></div>
            <div class="login">
                <?php
                if (isset($_SESSION['user'])) {
                    echo "<button class='logOutBtn' onclick='logOutConfirm()'><i class='fa-solid fa-arrow-right-from-bracket'></i> ".$_SESSION['user']."</button>";
                } else {
                    echo "<i class='fa-solid fa-arrow-right-to-bracket'></i>Login</div>";
                }
                ?>
            </div>
        </nav>
        <?php
        if (!isset($_SESSION['user'])) {
            ?>
            <!-- Login Drop Down-->
            <div class="lCont">
                <form action="php/login.php" method="POST">
                    <strong>Account:</strong><br>
                    <input type="text" class="acc" name="acc">
                    <strong>Password:</strong>
                    <input type="password" class="pwd" name="pwd">
                    <input type="submit" class="submit" name="submit" value="Log In"><br>
                    <a href="createAccount.html" class="createAcc">Create Account</a>
                </form>
            </div>
            <?php
        }
        ?>

        <div class="introVid">
            <iframe width="100%" height="400vw" src="https://www.youtube.com/embed/q-8ix2pSHrw?autoplay=1&mute=1"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <div class="content1">
            <div class="imagesCtn">
                <img src="https://assets-prd.ignimgs.com/2021/05/19/lies-of-p-button-1621452093382.jpg" alt="">
                <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1627720/ss_3bb48e7309ec845d0a69cef05f901085a4714c53.1920x1080.jpg?t=1666835591"
                    alt="">
                <img src="https://bloody-disgusting.com/wp-content/uploads/2021/08/liesofp.jpg" alt="">
                <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2022/08/Lies-Of-P-Looks-Like-The-Only-Worthwhile-Souls-Clone-(1).jpg"
                    alt="">
            </div>
            <div class="textCtn">
                <h2>Lies of <h1 style="color: red;">P</h1>
                </h2>
                <p> Inspired by the familiar story of Pinocchio, Lies of P is an action souls-like game set in a cruel,
                    dark Belle Époque world. All of humanity is lost in a once beautiful city that has now become a
                    living
                    hell filled with unspeakable horrors.</p>
                <button class="btn"><a href="https://www.liesofp.com/" target="_blank">Find More</a></button>
            </div>
        </div>

        <div class="content2">
            <div class="textCtn2">
                <p>Played by over 20 million Adventurers - Black Desert Online is an open-world, action MMORPG.
                    Experience intense, action-packed combat, battle massive world bosses, fight alongside friends to
                    siege
                    and conquer castles,
                    and train in professions such as fishing, trading, crafting, cooking, and more!</p>
                <button class="btn"><a href="https://www.sea.playblackdesert.com/en-US/main/index" target="_blank">Find
                        More</a></button>
            </div>
            <div class="imagesCtn2">
                <img src="https://twinfinite.net/wp-content/uploads/2022/03/Black-Desert.jpg" alt="" id="pic">
                <img src="https://s1.playblackdesert.com/web/Static/contents/img/portal/main/m_main_feature_battle_character.png?v=2"
                    alt="" id="pic">
                <img src="https://assets1.ignimgs.com/2019/01/06/black-desert---button-01-1546764745667.jpg" alt=""
                    id="pic">
                <img src="https://www.thaipr.net/wp-content/uploads/2022/09/Black-Desert.jpg" alt="" id="pic">
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footerTile">Game CC</div>
                <div class="pInfo">Holden Chang</div>
                <div class="email">Email: ncsm1752@naver.com</div>
                <div class="insta"><a href="https://www.instagram.com/d.holden.chang/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a></div>
            </div>
        </div>
        <script src="JS/JQuery.js"></script>
        <script src="JS/dropDown.js"></script>
        <script src="JS/images.js"></script>
</body>

</html>