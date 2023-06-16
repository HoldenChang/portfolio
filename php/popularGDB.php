<?php
session_start();

if (isset($_POST['submit'])) {

    // device information
    $device = $_POST['device'];

    // server information
    $serverIP = "69.172.204.200";
    $serverID = "ncsm1752_ncsm1752";
    $serverPWD = "ncsm1990cdh";
    $dataBaseN = "ncsm1752_gameCC";

    // getting game list

    $connect = mysqli_connect($serverIP, $serverID, $serverPWD, $dataBaseN);
    $sql = "SELECT * FROM gameList WHERE device = '$device'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        $list = mysqli_fetch_array($result, MYSQLI_NUM);
    }

    for($i = 0; $i < count($list); $i++){
        $_SESSION['col'.$i] = $list[$i];
    }
    $_SESSION['selected'] = "selected";

    header("Location: ../popularGame.php");
    exit();
}
?>