<?php
function hit_counter(){
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $ip_file = file('ip.txt');

    foreach ($ip_file as $ip) {
        $single_ip = trim($ip);

        if ($single_ip == $ip_address) {
            $found = true;
            break;
        }else{
            $found = false;
        }
    }

    if ($found == false) {
        $filename = 'count.txt';
        $handle = fopen($filename, 'r');
        $num = fread($handle, filesize($filename));
        fclose($handle);

        $current_inc = $num + 1;

        $handle = fopen($filename, 'w');
        fwrite($handle, $current_inc);
        fclose($handle);

        $handle = fopen('ip.txt', 'a');
        fwrite($handle, $ip_address."\n");
        fclose($handle);
    }
}

hit_counter();

