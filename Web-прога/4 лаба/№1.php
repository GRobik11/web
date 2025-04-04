<?php
$str = 'ixyi i12i i@#i iwwi abcw i123i';
preg_match_all('/i..i/', $str, $matches);
print_r($matches[0]);
?>