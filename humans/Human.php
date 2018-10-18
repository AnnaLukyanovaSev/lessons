<?php

/**
 * Class Human
 */
class Human
{
    /**
     * @var string $firstName
     * @var string $lastName
     * @var string $fathersName
     * @var string $age
     */
    public $firstName;
    public $lastName;
    public $fathersName;
    private $age;
    /**
     * @var int $count
     */
    public static $count = 0;

    /**
     * Human constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $fathersName
     * @param int $age
     */
    public function __construct(string $firstName, string $lastName, string $fathersName, int $age)
    {
        echo 'Add object of Human class' . PHP_EOL;
        self::$count++;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->fathersName = $fathersName;
        $this->age = $age;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param string $fathersName
     */
    public function setFathersName(string $fathersName)
    {
        $this->fathersName = $fathersName;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return '!' . $this->firstName . ' ' . $this->getAge();
    }
}
