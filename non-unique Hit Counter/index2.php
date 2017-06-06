<?php
function hit_counter(){
    $file = 'second.php';
    $num = file($file);

    $current_inc = $num[0] + 1;

    $handle = fopen($file, 'w');
    fwrite($handle, $current_inc);
    fclose($handle);
    echo $current_inc;
}

hit_counter();

