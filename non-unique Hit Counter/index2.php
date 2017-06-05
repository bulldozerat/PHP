<?php
function hit_counter(){
    $file = 'second.php';
    $handle = fopen($file, 'r');
    $num = fread($handle, filesize($file));
    fclose($handle);

    $current_inc = $num + 1;

    $handle = fopen($file, 'w');
    fwrite($handle, $current_inc);
    fclose($handle);
    echo $current_inc;
}

hit_counter();

