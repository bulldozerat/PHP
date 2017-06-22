<?php
require 'core.inc.php';
require 'connect.inc.php';

if (loggedin()) {
    global $user_id;
    echo 'You are logged in. <a href="logout.php">Log out</a>';
    get_user_info($_SESSION['user_id']['id']);
}else{
    include 'loginform.inc.php';
}
