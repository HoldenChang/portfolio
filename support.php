<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/layout.css">
    <link rel="stylesheet" href="CSS/support.css">
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
                    <li><a href="">New Release</a></li>
                    <li><a href="popularGame.php">Popular Games</a></li>
                </div>
            </div>
            <div class="steam"><a href="steam.php">Steam</a></div>
            <div class="playstation"><a href="playStation.php">PlayStation</a></div>
            <div class="epicgames"><a href="epicGames.php">Epic Games</a></div>
            <div class="support"><a href="">Support</a></div>
            <div class="login">
                <?php
                if (isset($_SESSION['user'])) {
                    echo $_SESSION['user'];
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

        <!-- Contents -->

        <div class="supportCont">
            <div class="faq">
                <h1>FAQ</h1>
                <div class="question1"></div>
                <div class="question2"></div>
                <div class="question3"></div>
                <div class="question4"></div>
                <div class="question5"></div>
            </div>
            <div class="query">
                <h1>Submit an Inquiry</h1>
                <form action="queryDB.php" method="POST" enctype="multipart/form-data">
                    <h3>Title</h3>
                    <input type="text" name="title">
                    <br>
                    <h3>Email</h3>
                    <input type="email" name="email">
                    <h3>File</h3>
                    <input type="file" name="file" multiple>
                    <br>
                    <textarea name="message" id="message" cols="20" rows="10"></textarea>
                    <br>
                    <input type="submit" name="submit" value="submit">
                    
                </form>
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
        <script src="JS/background.js"></script>
</body>

</html>