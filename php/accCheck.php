<?php

// account information
$username = $_POST['accCheck'];
// server information

$serverIP = "69.172.204.200";
$serverID = "ncsm1752_ncsm1752";
$serverPWD = "ncsm1990cdh";
$dataBaseN = "ncsm1752_gameCC";

// checking exist of account

$connect = mysqli_connect($serverIP, $serverID, $serverPWD, $dataBaseN);
$sql = "SELECT account FROM accountDB WHERE account = '$username'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Account is already taken";
}
exit();

?>