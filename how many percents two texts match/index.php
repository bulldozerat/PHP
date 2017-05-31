<?php
$string = 'orem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut laoreet elit. Donec eu ante mi. Phasellus ac placerat ante, eget egestas metus. Sed et diam arcu. Nullam sed velit quis elit l';
$string2 = 'dolor sit amet, consectetur adipiscing elit. Mauris auctor ullamcorper elit in gravida. Nunc ultrices, eros ac condimentum bibendum, nisi lectus tincidunt';
similar_text($string,$string2,$result);
echo round($result,2).'%';
