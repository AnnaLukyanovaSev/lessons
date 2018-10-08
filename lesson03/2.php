<?php
/*1.2. Написать скрипт, который выводит сколько времени прошло с вашего дня Рождения.
А именнно
25 лет
305 месяцев
...
nnnnnnnnn секунд
*/
date_default_timezone_set('Europe/Simferopol');
$birthday = '07:40:00 04-06-1992';
$now = date_create_from_format('U', time());
$mydate = date_create_from_format('G:i:s d-m-Y', $birthday);
//echo date_format($mydate, 'H:i,j F Y,l') . PHP_EOL;
$interval = date_diff($now, $mydate);
//var_dump($interval);
$months = ($interval->y) * 12 + ($interval->m);
$hours = 24 * ($interval->days) + ($interval->h);
$minutes = $hours * 60 + $interval->i;
echo $interval->format('%Y years') . PHP_EOL;
echo $months . ' months' . PHP_EOL;
echo $interval->days . ' days' . PHP_EOL;
echo $hours . ' hours' . PHP_EOL;
echo $minutes . ' minutes' . PHP_EOL;
echo $minutes * 60 + $interval->s . ' seconds' . PHP_EOL;
//echo date_format($now, 'H:i,j F Y,l');
