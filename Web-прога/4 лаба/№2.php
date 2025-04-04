<?php
$str = 'a1b2c3';
$result = preg_replace_callback('/\d+/', function($matches) {
    $number = (int)$matches[0];  
    return $number * 4;
}, $str);
echo $result;  
?>