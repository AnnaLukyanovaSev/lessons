<?php

/**
 * Class Student
 */
class Student extends Human
{

    const TYPE_OCHN = 1;
    const TYPE_ZAOCHN = 2;

    /**
     * @var int $type
     * @var array $marks
     * @var int $course
     */
    public $type = self::TYPE_OCHN; // form of education
    public $marks = [];
    public $course;
    /**
     * @var int $count_s
     * @var int $name
     */
    public static $count_s = 0;
    private $name = 0;

    /**
     * Students constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $fathersName
     * @param int $age
     * @param int $type
     * @param int $course
     */
    public function __construct(
        string $firstName,
        string $lastName,
        string $fathersName,
        int $age,
        int $type,
        int $course
    ) {
        parent::__construct($firstName, $lastName, $fathersName, $age);
        echo 'Add object of Student class' . PHP_EOL;
        self::$count_s++;
        $this->type = $type;
        $this->course = $course;
    }

    /**
     * @param int $value
     */
    public function setMark(int $value)
    {
        echo 'set new mark' . PHP_EOL;
        $this->marks[$this->name] = $value;
        $this->name++;
    }

    /**
     * @return array
     */
    public function __getMarks()
    {
        echo 'get' . PHP_EOL;
        return $this->marks;

    }

    /**
     * @param int $course
     */
    public function setCourse(int $course)
    {
        $this->course = $course;
    }
}
