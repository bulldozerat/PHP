<?php
require 'connect.inc.php';

$user_ip = $_SERVER['REMOTE_ADDR'];

function ip_exists($ip) {
    global $conn;
    global $user_ip;
    $query = "SELECT `ip` FROM `hits_ip` WHERE `ip` = '$user_ip'";
    $query_run = mysqli_query($conn, $query);

    @$query_num_rows = mysqli_num_rows($query_run);

    if ($query_num_rows == 0) {
        return false;
    }elseif ($query_num_rows >= 1) {
        return true;
    }
}

function ip_add($ip) {
    global $conn;
    $query = "INSERT INTO `hits_ip` VALUES ('$ip')";
    @$query_run = mysqli_query($conn, $query);
}

function update_count() {
    global $conn;
    $query = "SELECT `Count` FROM `hits_count`";

    if ($query_run = mysqli_query($conn, $query)){
        $count = mysqli_fetch_row($query_run);
        $iter_count = $count[0] + 1;

        $query_update = "UPDATE `hits_count` SET `Count` = $iter_count";
        @$query_run2 = mysqli_query($conn, $query_update);

    }
}

if (!ip_exists($user_ip)) {
    update_count();
    ip_add($user_ip);
}else{
    echo 'The ip is already in the database';
}



