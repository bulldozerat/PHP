<?php
require 'connect.inc.php';

$query = "SELECT `food`, `calories` FROM `food`";

if ($query_run = mysqli_query($conn, $query)){
    if(mysqli_num_rows($query_run) == NULL){
        echo 'No results found';
    }else{
        while ($query_row = mysqli_fetch_assoc($query_run)){
            $food = $query_row['food'];
            $cal = $query_row['calories'];

            echo $food.' have '.$cal.' calories<br>';
        }
    }
}else{
    echo mysqli_error($conn);
}

mysqli_close($conn);