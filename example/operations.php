<?php
/*
 * Простейшие операции
 */
    echo 'Операции со строками:<br>';
    $a = 'Hello';
    $b = 'world';
    $c = $a . ', ' . $b . '!';
    echo  "$c<br><br>";

    echo 'Математические операции:<br>';
    $a = 4;
    $b = 5;
    echo $a + $b . '<br>';     // сложение
    echo $a * $b . '<br>';     // умножение
    echo $a - $b . '<br>';     // вычитание
    echo $a / $b . '<br>';     // деление
    echo $a % $b . '<br>';     // остаток от деления
    echo $a ** $b . '<br>';    // возведение в степень
    echo '<br>';

    echo 'Менее очевидные математические операции:<br>';
    $a = 4;
    $b = 5;
    $a += $b;
    echo "a = $a" . '<br>';
    $a = 0;
    echo 'Постинкремент: ' . $a++ . '<br>';
    echo 'Преинкремент: ' . ++$a . '<br>';
    echo 'Постдектремент: ' . $a-- . '<br>';
    echo 'Предекремент: ' . --$a . '<br>';
