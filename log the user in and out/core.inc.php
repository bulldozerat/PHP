<?php
ob_start();
session_start();
include 'connect.inc.php';

$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = $_SERVER['HTTP_REFERER'];

function loggedin() {
    if ( isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        return true;
    }else{
        return false;
    }
}

function get_user_info($user_id) {
    global $conn;
    $query = "SELECT `firstname`, `surname` FROM `users` WHERE `id` = '$user_id'";
    if($query_run = mysqli_query($conn, $query)) {
        $row = mysqli_fetch_assoc($query_run);
        echo "<br>Hello, " . $row['firstname'] . ' ' . $row['surname'];
    }
}
