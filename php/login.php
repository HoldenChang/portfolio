<?php
session_start();

if (isset($_POST['submit'])) {

    // account information
    $username = $_POST['acc'];
    $password = sha1($_POST['pwd']);

    // server information
    $serverIP = "123";
    $serverID = "nn";
    $serverPWD = "nn";
    $dataBaseN = "ncsm1752_gameCC";

    // checking exist of account

    $connect = mysqli_connect($serverIP, $serverID, $serverPWD, $dataBaseN);
    $sql = "SELECT account, pwd FROM accountDB WHERE account = '$username' AND pwd = '$password'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $username;
    } else {
        $_SESSION['loginFailed'] = "falied";
        header("Location: ../index.php");
        exit();
    }
    header("Location: ../index.php");
    exit();
}
?>