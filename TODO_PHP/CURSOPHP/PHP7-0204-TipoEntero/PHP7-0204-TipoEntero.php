<?php
$num = 12345678;
$num = -12345678;
$num = 0123456; //octal 0-7
$num = 0xFFAADD; //hexadecimal 0-9 a-f
$num = 0b1010101; //Binario 0-1

$num = 2147483647;
print var_dump($num);

$num = 2147483648;
print var_dump($num);

$num = 2147483647*2;
print var_dump($num)
?>