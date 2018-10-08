<?php
require_once('humans.php');
require_once('students.php');
require_once('workers.php');
$objHuman1 = new Human('Mark', 'Ivanov', 'Ivanovich', '20');
$objHuman2 = new Human('Nikolay', 'Petrov', 'Sergeevich', '17');
$objStudent1 = new Students('Mariya', 'Ivanova', 'Petrovna', '21', Students::TYPE_ZAOCHN, 6);
$objStudent2 = new Students('Sidorov', 'Petya', 'Igorevich', '20', Students::TYPE_ZAOCHN, 2);
$objWorker1 = new Workers('Ivan', 'Ivanov', 'Ivanovich', '27', 20000);
$objWorker2 = new Workers('Vasya', 'Sokolov', 'Ivanovich', '32', 25000);
echo 'Number of humans ' . Human::$count . PHP_EOL;
echo 'Number of students ' . Students::$count_s . PHP_EOL;
echo 'Number of workers ' . Workers::$count_w . PHP_EOL;
echo $objStudent2->setMark(5);
echo $objStudent2->setMark(5);
echo $objStudent1->setMark(5);
echo $objStudent2->setMark(4);
echo $objStudent1->setMark(3);
echo $objStudent1->__getMarks();
echo $objWorker2->setList('21/07/18');
echo $objWorker2->setList(10, '23/07/18');
echo $objWorker1->setList(100000, '20/07/18');
var_dump($objWorker2);

