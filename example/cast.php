<?php
/*
 * Приведение типов
 */
    $a = 10;
    $b = true;
    echo 'До приведения типа:';
    var_dump($b);
    echo '<br>';
    $b = (int)$b;
    echo 'После приведения типа:';
    var_dump($b);
    echo '<br>';
