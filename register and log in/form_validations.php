<?php
$error = '';
$bool = false;

if (isset($_POST['sign-up-btn'])) {
$bool = true;
$submit_btn = $_POST['sign-up-btn'];
$f_name = htmlentities(trim($_POST['first_name']));
$l_name = htmlentities(trim($_POST['last_name']));
$email = htmlentities(trim($_POST['email']));
$password = htmlentities($_POST['password']);

if (strlen($f_name) > 2 && strlen($f_name) <= 20) {
if (strlen($l_name) > 2 && strlen($l_name) <= 20) {
if (check_email($email)) {
if (strlen($password) > 6) {

$query = "INSERT INTO `users` VALUES('', '$f_name', '$l_name', '$email', '$password' )";
if ($conn->query($query) === TRUE) {
$bool = false;
$_POST = array();
?> <script>alert('Registration successful!')</script>;<?php

} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
} else {
    $error = 'Password must be at least six characters';
}
} else {
    $error = 'Valid email is required';
}
} else {
    $error = 'The last name must be between three and twenty characters';
}
} else {
    $error = 'The first name must be between three and twenty characters';
}
}

if(isset($_POST['log_btn'])) {
    $log_email = $_POST['log_email'];
    $log_password = $_POST['log_password'];

    $query2 = "SELECT `email`, `password` FROM `users` WHERE `email` = '$log_email' AND `password` = '$log_password'";
    $query_run = mysqli_query($conn, $query2);

    if (mysqli_fetch_assoc($query_run)) {
        header('Location: logged_in.php');
    }else {
        ?><script>alert('Wrong email or password')</script><?php
    }
}