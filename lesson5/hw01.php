<?php
/**
 * Created by PhpStorm.
 * User: Shkodenko
 * Date: 09.03.2017
 * Time: 20:48
 *
 * Напишите конструкцию if, которая выводит фразу: "Вам еще работать и работать"
 * при условии, что значение переменной age попадает в диапазон чисел от 18 до 59 (включительно)
 *
 * Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии,
 * что значение переменной age больше 59.
 *
 */

$age = rand(1, 79);

echo 'My age is: ' . $age . '<br>';

if ($age >= 18 && $age <= 59) {
    echo "Вам еще работать и работать<br>";
} elseif ($age >= 60) {
    echo "Вам пора на пенсию<br>";
} else {
    echo "Учиться, учиться и еще раз учиться!!!<br>";
}
