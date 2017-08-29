<?php
require 'connect.php';
include 'functions.php';
require 'form_validations.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styles.css">
    <script src="jquery-3.2.1.min.js"></script>
</head>
<body>
<form class="form" method="post" action="">
    <h1 id="form-heading">Sing Up</h1>

    <label for="first-name">First name</label>
    <input type="text" id="first-name" name="first_name" value="
    <?php if ($bool === true) {
        echo trim($_POST['first_name']);
    }?>">

    <label for="last-name">Last name</label>
    <input type="text" id="last-name" name="last_name" value="
    <?php if ($bool === true) {
        echo trim($_POST['last_name']);
    }?>">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" value="
    <?php if ($bool === true) {
        echo trim($_POST['email']);
    } ?>">

    <label for="password">Password (6 or more characters)</label>
    <input type="password" id="password" name="password">

    <p id="form-info">
        By clicking Sign Up, you agree to
        <span>User Agreement, Privacy </span>
        <span>Policy, </span>and
        <span>Cookie Policy</span>
    </p>
    <button id="sign-up-btn" name="sign-up-btn">Sign Up</button>
    <div class="error"><?php echo $error ?></div>
</form>

<form action="" class="log-in-form" method="post">
    <p>
        <input type="email" placeholder="Email" name="log_email">
        <input type="password" placeholder="Password" name="log_password">
        <button name="log_btn">Sign In</button>
    </p>
</form>
<script src="js.js"></script>
</body>
</html>
