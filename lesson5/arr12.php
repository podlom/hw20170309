<?php
/**
 * Created by PhpStorm.
 * User: Shkodenko
 * Date: 09.03.2017
 * Time: 20:15
 */

$arr = [1, 2, 7, -5, 0, 9, 3.14159];

echo 'Foreach<br>';
foreach ($arr as $key => $value) {
    echo '$arr[' . $key . ']: ' . $value . '<br>';
}
echo '<hr>';
echo 'For<br>';
$cArr = count($arr);
for ($i = 0; $i < $cArr; $i ++) {
    echo '$arr[' . $i . ']: ' . $arr[$i] . '<br>';
}
echo '<hr>';
echo 'While<br>';
$j = 0;
while ($j < $cArr) {
    echo '$arr[' . $j . ']: ' . $arr[$j] . '<br>';
    $j ++;
}
echo '<hr>';
echo 'Do-while<br>';
$k = 0;
do {
    echo '$arr[' . $k . ']: ' . $arr[$k] . '<br>';
    $k ++;
} while($k < $cArr);
