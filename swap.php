<?php
/*
 * Используя только две переменные, поменяйте их значение местами. Например, если a = 1,
 * b = 2, надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные использовать нельзя.
 */
    $a = 1;
    $b = 2;
    echo('Исходные значения:' . '<br>');
    echo("a=$a" . ', ' . "b=$b" . '<br>');
    // Поменяем местами переменные
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    // Посмотрим что получилось
    echo('Поменяли местами:' . '<br>');
    echo("a=$a" . ', ' . "b=$b" . '<br>');