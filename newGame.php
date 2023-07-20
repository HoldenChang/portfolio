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
    <link rel="stylesheet" href="CSS/newPage.css">
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

        <!-- Main Contents-->
        <div class="newGameContents">
            <div class="leftDiv">
                <button onclick="leftSlide()"><i class="fa-solid fa-chevron-left"></i></button>
            </div>
            <div class="centerDiv">
                <div class="page1">
                    <img src="https://images.immediate.co.uk/production/volatile/sites/3/2022/12/Diablo-4-release-date-0ff18e7.jpg" alt="">
                    <p>Prepare to embark on a relentless journey through the depths of despair and chaos with Diablo 4, the highly anticipated installment in the legendary action role-playing game series. Developed by Blizzard Entertainment, 
                        this dark and visceral adventure promises to redefine the boundaries of the genre, immersing you in a world that thrives on terror and unyielding evil.
                        <br><br>
                        Diablo 4 takes place in Sanctuary, a realm torn asunder by the eternal conflict between Heaven and Hell. As the veil between dimensions grows thinner, ancient evils rise to seize control, threatening to plunge the world into eternal darkness. 
                        In this desperate hour, heroes from all walks of life must rise to confront the encroaching darkness and face the horrors that lurk beneath.
                        <br><br>
                        Immerse yourself in a hauntingly beautiful open world, teeming with nightmarish landscapes, twisted dungeons, and forgotten ruins. Diablo 4 boasts a stunningly detailed and dynamic environment, brought to life with cutting-edge visuals 
                        and atmospheric effects that will send shivers down your spine. Prepare to experience a dark fantasy realm like never before, where every step may reveal lurking danger and every shadow holds unimaginable horrors.
                    </p>
                </div>
                <div class="page2">
                    <img src="https://articles-img.sftcdn.net/f_auto,t_article_cover_xl/auto-mapping-folder/sites/3/2023/06/spiderman-2-thumb-2023-nueva-img.jpg" alt="">
                    <p>Swing into action like never before with Spider-Man 2, the highly anticipated sequel to the critically acclaimed superhero blockbuster. Developed by Insomniac Games and published by Sony Interactive Entertainment, 
                        this thrilling open-world action-adventure game brings the iconic Marvel hero to life in an unforgettable gaming experience.
                        <br><br>
                        In Spider-Man 2, you'll step back into the shoes of Peter Parker, New York City's friendly neighborhood superhero. Set in a sprawling and vibrant open world, the game allows you to freely traverse the bustling streets of Manhattan, scaling skyscrapers, 
                        and leaping across rooftops with the fluidity and grace of a true web-slinger. Feel the exhilaration of swinging through the city, mastering the art of traversal, and embracing the unmatched freedom of being Spider-Man.
                        <br><br>
                        But the Big Apple is about to face its greatest challenge yet. A new and sinister threat looms on the horizon, threatening to unleash chaos and destruction upon the city. As Peter Parker, you'll have to confront not only the traditional rogues' gallery of iconic villains 
                        but also an enigmatic and powerful adversary who possesses dark and dangerous abilities. Prepare to face off against ruthless foes, engage in epic battles, and protect the city you love from imminent disaster.
                    </p>
                </div>
            </div>
            <div class="rightDiv">
                <button onclick="rightSlide()"><i class="fa-solid fa-chevron-right"></i></button>
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
        <script src="JS/slidePage.js"></script>
</body>

</html>