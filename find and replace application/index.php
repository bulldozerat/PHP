<?php
if (isset($_POST["search"]) && isset($_POST["replace"]) && isset($_POST["user_text"]) ) {
    $search = strtolower($_POST["search"]);
    $replace = $_POST["replace"];
    $user_text = strtolower($_POST['user_text']);

    if( !empty($search) && !empty($replace) && !empty($user_text) ){
       $user_text = str_replace($search, $replace, $user_text);

    }else {
        echo 'Please fill all fields';
    }
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
<form action="index.php" method="post">
    <textarea name="user_text" id="" cols="30" rows="10">
        <?php if(isset($user_text)){
            echo $user_text;
        }?>
    </textarea><br><br>

    <label for="search-for">Search For</label><br>
    <input type="text" id="search-for" name="search"><br><br>

    <label for="replace-with">Replace With</label><br>
    <input type="text" id="replace-with" name="replace">

    <input type="submit" value="submit">
</form>
</body>
</html>




