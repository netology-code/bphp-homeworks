<?php

const WORK_TIME_TODAY = 'Это ';
const WORK_TIME_TOMORROW = 'Завтра - ';
const WORK_TIME_AFTER_TOMORROW = 'Послезавтра - ';
const WORK_TIME_FROM_9 = ' c 9.00';
const WORK_TIME_FROM_10 = ' c 10.00';
const WORK_TIME_TO_18 = ' до 18.00';


$time = date("H"); // текущий час
$day = date("N"); // порядковый номер текущего дня недели

// текущий день недели
switch ($day) {

    case  1:
        $day_of_week = 'Понедельник';
        break;
    case  2:
        $day_of_week = 'Вторник';
        break;
    case  3:
        $day_of_week = 'Среда';
        break;
    case  4:
        $day_of_week = 'Четверг';
        break;
    case  5:
        $day_of_week = 'Пятница';
        break;
    case  6:
        $day_of_week = 'Суббота';
        break;
    case  7:
        $day_of_week = 'Воскресенье';
        break;
}

// проверяем время суток
if (($time >= 6) && ($time < 10)) {

    $greeting_part = 'Доброе утро';
    $img = 'img/morning.jpg';

} else if (($time >= 10) && ($time < 18)) {

    $greeting_part = 'Добрый день';
    $img = 'img/day.jpg';

} else if (($time >= 18) && ($time < 23)) {

    $greeting_part = 'Добрый вечер';
    $img = 'img/evening.jpg';

} else {

    $greeting_part = 'Доброй ночи';
    $img = 'img/night.jpg';

};

// определяем вермя работы и день
if ($day === 7) {

    $work_day = WORK_TIME_TOMORROW;
    $work_time = WORK_TIME_FROM_9;

} else if (($day >= 1) && ($day <= 3) && ($time === 9)) {

    $work_day = WORK_TIME_TODAY;
    $work_time = WORK_TIME_TO_18;

} else if ($time < 10) {

    $work_day = WORK_TIME_TODAY;

    if ($day >= 4) {
        $work_time = WORK_TIME_FROM_10;
    } else {
        $work_time = WORK_TIME_FROM_9;
    };

} else if ($time >= 18) {

    if ($day !== 6) {

        $work_day = WORK_TIME_TOMORROW;

        if ($day >= 3) {

            $work_time = WORK_TIME_FROM_10;

        } else {

            $work_time = WORK_TIME_FROM_9;
        }
    } else {

        $work_day = WORK_TIME_AFTER_TOMORROW;
        $work_time = WORK_TIME_FROM_9;
    };

} else {

    $work_day = WORK_TIME_TODAY;
    $work_time = WORK_TIME_TO_18;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="img" style="background-image: url(<?= $img ?>)">
    <div class="greeting">
        <h1><?= $greeting_part ?>!</h1>
        <h2>Сегодня "<?= $day_of_week ?>".</h2>
        <h2><?=$work_day?>лучший день, чтобы обратиться в "Horns&Hooves"!<br>Мы работаем для Вас<?=$work_time?>!</h2>
    </div>
</div>
</body>

</html>