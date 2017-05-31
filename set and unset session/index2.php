<?php
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['name2']) ) {
    echo 'Welcome, '.$_SESSION['name'].'<br>';
    echo 'Welcome, '.$_SESSION['name2'];
} elseif (isset($_SESSION['name'])) {
    echo 'Welcome, '.$_SESSION['name'];
} elseif (isset($_SESSION['name'])) {
    echo 'Welcome, '.$_SESSION['name2'];
}else{
    echo 'Please log in';
}