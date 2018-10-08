<?php
/*1.3. Написать метод, который на вход получает конкретное время а на выхое выдает строку
только что
или n минут назад
или n часов назад
или вчера
или n дней назад
или n месяцев назад
или n лет назад
*/
date_default_timezone_set('Europe/Simferopol');
$input = '2018-10-05 23:05:59';
$date = date_create_from_format('Y-m-d G:i:s', $input);
$now = date_create_from_format('U', time());

$interval = date_diff($now, $date);
//var_dump($interval);

//$h = get_object_vars($interval);
$yest = $now->format('N') - $date->format('N');

if ($interval->y > 0) {
    echo $interval->y . ' years ago' . PHP_EOL;
    exit;
}

if ($interval->m > 0) {
    echo $interval->m . ' months ago' . PHP_EOL;
    exit;
}


if ($interval->days > 0) {
    if ($yest == 1 and $interval->days < 2) {
        echo 'Yesterday';
        exit;
    }
    echo $interval->days . ' days ago' . PHP_EOL;
    exit;
}

if ($interval->h > 0) {
    if ($yest == 1) {
        echo 'Yesterday';
        exit;
    }
    echo $interval->h . ' hours ago' . PHP_EOL;
    exit;
}

if ($interval->i > 0) {
    echo $interval->i . ' minutes ago' . PHP_EOL;
    exit;
}

echo 'Just now' . PHP_EOL;