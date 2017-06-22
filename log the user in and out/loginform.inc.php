<?php
if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $salt = md5(rand(1111, 9999));
    $salt = base64_encode($salt);
    $salt = str_replace('+', '.', $salt);
    $hash = crypt($password, '$2y$10$'.$salt.'$');

    if (!empty($username) && !empty($password)) {
        $query = "SELECT `id` FROM `users` WHERE `username` = '$username' AND `password` = '$password' ";
        if ( $query_run = mysqli_query($conn, $query)) {
            $query_num_rows = mysqli_num_rows($query_run);

            if ($query_num_rows == 0) {
                echo 'Invalid username or password';
            }else{
                if(password_verify($password, $hash)) {
                    echo $hash;
                    $user_id = mysqli_fetch_assoc($query_run);
                    $_SESSION['user_id'] = $user_id;
                    header('Location: index.php');
                }
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $current_file ?>" method="post">
        Username:<input type="text" name="username" value="">
        Password:<input type="password" name="password" value="">
        <input type="submit" value="log in">
    </form>
</body>
</html>
