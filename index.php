<?php

$age = 24;
$name = "賴廷育";
$ename = "Lai Ting Yu";

define("yudate", 20011110);

echo $name . '的年齡是：' . $age . '歲';
echo '<br>英文名稱是：'. $ename;
echo '<br>' . $name . '的生日：' . yudate;

echo '<hr>';

$age = 5;
$name = "賴皮";
echo $name . '的年齡是：' . $age . '歲';
echo '<br>英文名稱是：'. $ename;
echo '<br>' . $name . '的生日：' . yudate;