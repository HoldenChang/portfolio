<?php
session_start();
if (isset($_POST['submit'])) {

    // account information

    $username = $_POST['acc'];
    $password = sha1($_POST['pwd']);
    $firstName = $_POST['firstN'];
    $lastName = $_POST['lastN'];
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    // server information

    $serverIP = "123";
    $serverID = "nn";
    $serverPWD = "nn";
    $dataBaseN = "ncsm1752_gameCC";

    $connect = mysqli_connect($serverIP, $serverID, $serverPWD, $dataBaseN);
    $sql = "INSERT INTO accountDB (account, firstname, lastname, email, pwd) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "script>alert('Server Connection Error')</script>";
    } else {
        mysqli_stmt_bind_param($stmt, "sssss", $username, $firstName, $lastName, $email, $password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $_SESSION['success'] = "scc";
    }
    header("Location:../index.php");
    exit();
}
?>