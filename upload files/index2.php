<?php
if (isset($_POST['submit'])){
    if(!empty($_FILES['file']['name'])) {
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $type = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];

        $img_array = explode('.',strtolower($name));

        if( (end($img_array) == 'png' || end($img_array) == 'jpg') && ( $type == 'image/jpeg' || $type == 'image/png') ){
            if($size <= 1000000) {
                if (move_uploaded_file($tmp_name, 'upload/'.$name)) {
                    echo $name.' uploaded';
                }
            }else{
                echo 'The size must be under one megabyte';
            }
        }else{
            echo 'Please select file with png or jpg format';
        }
    }else{
        echo 'Please choose a file';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="index2.php" method="post" enctype="multipart/form-data">
    <input type="file" value="choose file" name="file">
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>
