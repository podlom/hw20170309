<?php
/**
 * Created by PhpStorm.
 * User: Shkodenko
 * Date: 09.03.2017
 * Time: 20:30
 */

$a2 = range(1, 14);
$c2 = count($a2);
for ($i2 = 0; $i2 < $c2; $i2 ++) {
    if ($a2[$i2] == 5) {
        // die('Stopped at 5');
        // exit;
    }
    if ($a2[$i2] % 2 == 0) {
        if ($a2[$i2] % 5 == 0) {
            continue;
        }
        if ($a2[$i2] == 12) {
            break;
        }
        echo '$a2[' . $i2 . '] is even: ' . $a2[$i2] . '<br>';
    }
}