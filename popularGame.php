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
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/layout.css">
    <link rel="stylesheet" href="CSS/popularGame.css">
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
                    <li><a href="popularGame.php">Popular Games</a></li>
                    <li><a href="">UpComing Games</a></li>
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
                    echo "<i class='fa-solid fa-arrow-right-to-bracket'></i>Login";
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

        <!-- device selection -->
        <?php
            if(!isset($_SESSION['selected'])){
        ?>
        <div class="popularCont">
            <div class="left">
                <img src="https://i.ytimg.com/vi/_NX8F9FBvg0/maxresdefault.jpg" alt="">
                <img src="https://i5.walmartimages.ca/images/Enlarge/259/624/6000202259624.jpg" alt="">
            </div>
            <div class="center">
                <form action="php/popularGDB.php" method="POST">
                    <h1>Choose You Device</h1>
                    <select name="device" id="device">
                        <option value="ps">PlayStation</option>
                        <option value="xb">XBox</option>
                        <option value="ns">Nintendo Switch</option>
                        <option value="pc">PC</option>
                    </select>
                    <input type="submit" name="submit" value="select">
                </form>
            </div>
            <div class="right">
                <img src="https://media-cldnry.s-nbcnews.com/image/upload/newscms/2021_40/3511166/211007-nintendo-swicth-bd-2x1.jpg" alt="">
                <img src="https://imageio.forbes.com/specials-images/imageserve/62b4570b678d2aa35f4a638c/0x0.jpg?format=jpg&crop=927,618,x138,y0,safe&width=1200" alt="">
            </div>
        </div>
        <?php
            }
            if(isset($_SESSION['selected'])){
        ?>
        <!-- display game list-->
        <div class="oddGame" style="margin-top: 4vw;">
            <div class="imagesOdd">
                <img src="<?php echo $_SESSION['col3'] ?>" alt="">
                <img src="<?php echo $_SESSION['col4'] ?>" alt="">
                <img src="<?php echo $_SESSION['col5'] ?>" alt="">
                <img src="<?php echo $_SESSION['col6'] ?>" alt="">
            </div>
            <div class="introOdd">
                <h1><?php echo $_SESSION['col1'] ?></h1>
                <p><?php echo $_SESSION['col2'] ?></p>
                <button class="btn"><a href="<?php echo $_SESSION['col7'] ?>" target="_blank">Find More</a></button>
            </div>
        </div>
        <div class="evenGame" style="margin-top: 2vw;">
            <div class="introEven">
                <h1><?php echo $_SESSION['col8'] ?></h1>
                <p><?php echo $_SESSION['col9'] ?></p>
                <button class="btn"><a href="<?php echo $_SESSION['col14'] ?>" target="_blank">Find More</a></button>
            </div>
            <div class="imagesEven">
                <img src="<?php echo $_SESSION['col10'] ?>" alt="">
                <img src="<?php echo $_SESSION['col11'] ?>" alt="">
                <img src="<?php echo $_SESSION['col12'] ?>" alt="">
                <img src="<?php echo $_SESSION['col13'] ?>" alt="">
            </div>
        </div>
        <div class="oddGame" style="margin-top: 2vw;">
            <div class="imagesOdd">
                <img src="<?php echo $_SESSION['col17'] ?>" alt="">
                <img src="<?php echo $_SESSION['col18'] ?>" alt="">
                <img src="<?php echo $_SESSION['col19'] ?>" alt="">
                <img src="<?php echo $_SESSION['col20'] ?>" alt="">
            </div>
            <div class="introOdd">
                <h1><?php echo $_SESSION['col15'] ?></h1>
                <p><?php echo $_SESSION['col16'] ?></p>
                <button class="btn"><a href="<?php echo $_SESSION['col21'] ?>" target="_blank">Find More</a></button>
            </div>
        </div>
        <div class="evenGame" style="margin-top: 2vw;">
            <div class="introEven">
                <h1><?php echo $_SESSION['col22'] ?></h1>
                <p><?php echo $_SESSION['col23'] ?></p>
                <button class="btn"><a href="<?php echo $_SESSION['col28'] ?>" target="_blank">Find More</a></button>
            </div>
            <div class="imagesEven">
                <img src="<?php echo $_SESSION['col24'] ?>" alt="">
                <img src="<?php echo $_SESSION['col25'] ?>" alt="">
                <img src="<?php echo $_SESSION['col26'] ?>" alt="">
                <img src="<?php echo $_SESSION['col27'] ?>" alt="">
            </div>
        </div>
        <?php
            }
            unset($_SESSION['selected']);
        ?>
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