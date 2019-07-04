<?php
    // Описание переменных
    $headline = '<h1>Эта страничка сгенерирована PHP</h1>'; // Заголовок
    $title = '<title>Сгенерированная страница</title>';     // Title страницы
    $encoding = '<meta charset="UTF-8">';                   // Кодировка
    $date = date('d.m.Y');                                  // Дата

    // Вывод в браузер(генерация)
    echo $encoding;
    echo $title;
    echo $headline;
    echo '<hr>';

    // Контент
    echo '<p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab alias aliquam, aperiam, at aut blanditiis
            dignissimos distinctio earum esse, eum expedita fuga itaque iusto laborum libero magnam magni molestiae
            molestias nam numquam perferendis perspiciatis quae quisquam quos ratione repudiandae rerum sequi sint sit
            soluta tempora voluptates voluptatum. Adipisci beatae dolorem illum iure maxime necessitatibus neque quod,
            voluptatibus! Asperiores deserunt dicta dolor doloremque dolorum earum enim error expedita fugiat, incidunt
            itaque maxime minima minus nemo neque, perferendis perspiciatis quaerat similique sit tenetur. Aliquid at
            autem dolor, dolorem, est et facilis fugiat illum in nesciunt nihil numquam possimus, quod! In, nam?
         </p>';

    // Подвал
    echo '<hr>';
    echo "Дата формирования страницы: $date";
