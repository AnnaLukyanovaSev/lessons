<?php
require_once('Human.php');
require_once('Student.php');
require_once('Workman.php');
$objHuman1 = new Human('Mark', 'Ivanov', 'Ivanovich', '20');
$objHuman2 = new Human('Nikolay', 'Petrov', 'Sergeevich', '17');
$objStudent1 = new Student('Mariya', 'Ivanova', 'Petrovna', '21', Student::TYPE_ZAOCHN, 6);
$objStudent2 = new Student('Sidorov', 'Petya', 'Igorevich', '20', Student::TYPE_ZAOCHN, 2);
$objWorker1 = new Workman('Ivan', 'Ivanov', 'Ivanovich', '27', 20000);
$objWorker2 = new Workman('Vasya', 'Sokolov', 'Ivanovich', '32', 25000);
echo 'Number of humans ' . Human::$count . PHP_EOL;
echo 'Number of students ' . Student::$count_s . PHP_EOL;
echo 'Number of workers ' . Workman::$count_w . PHP_EOL;
//echo $objStudent2->setMark(5);
//echo $objStudent2->setMark(5);
//echo $objStudent1->setMark(5);
//echo $objStudent2->setMark(4);
//echo $objStudent1->setMark(3);
//echo $objStudent1->__getMarks();
echo $objWorker2->setList('21/07/18');
echo $objWorker2->setList('23/07/18', 10);
echo $objWorker1->setList('20/07/18', 100000);
print_r($objWorker2->getList());
//var_dump($objWorker2);

