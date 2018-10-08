<?php

/**
 * Class Human
 */
class Human
{

    public $FirstName;
    public $LastName;
    public $FathersName;
    private $Age;
    /**
     * @var int $count
     */
    public static $count = 0;

    /**
     * Human constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $FathersName
     * @param int $Age
     */
    public function __construct($firstName, $lastName, $FathersName, $Age)
    {
        echo 'Add object of Human class' . PHP_EOL;
        self::$count++;
        $this->LastName = $lastName;
        $this->FirstName = $firstName;
        $this->FathersName = $FathersName;
        $this->Age = $Age;
    }

    /**
     * @param string $FirstName
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
    }

    /**
     * @param string $LastName
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
    }

    /**
     * @param string $FathersName Human[]
     */
    public function setFathersName($FathersName)
    {
        $this->FathersName = $FathersName;
    }

    /**
     * @param int $Age
     */
    public function setAge($Age)
    {
        $this->Age = $Age;
    }

    /**
     * @return int
     */
    public function __getAge()
    {
        return $this->Age;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return '!' . $this->FirstName . ' ' . $this->getAge();
    }
}
