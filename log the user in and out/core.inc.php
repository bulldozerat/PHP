<?php
ob_start();
session_start();

$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = $_SERVER['HTTP_REFERER'];//dava stranicata ot koqto idvame

function loggedin() {
    if ( isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        return true;
    }else{
        return false;
    }
}