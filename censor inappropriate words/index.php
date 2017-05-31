<?php
$find = ['bad', 'words', 'replace', 'everyone'];
$replace = ['b*d', 'w***s', 'rep****', 'eve*****'];


if (isset($_GET["user_text"]) && !empty($_GET["user_text"])) {
    $user_input = strtolower($_GET["user_text"]);

    echo str_replace($find, $replace, $user_input);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="js.js"></script>
</head>
<body>
<form action="index.php" method="GET">
    <textarea name="user_text" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="submit">
</form>
</body>
</html>




