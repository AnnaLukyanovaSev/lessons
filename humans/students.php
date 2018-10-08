	<?php

    /**
     * Class Students
     */
	class Students extends Human {

	const TYPE_OCHN = 1;
    const TYPE_ZAOCHN = 2;


	public $type=self::TYPE_OCHN; // form of education
	public $marks=[];
	public $course;
	public static $count_s=0;
	private $name=0;

        /**
         * Students constructor.
         * @param string $firstName
         * @param string $lastName
         * @param string $FathersName
         * @param int $Age
         * @param int $type
         * @param int $course
         */
		public function __construct($firstName,$lastName,$FathersName,$Age,$type,$course) 
    {
	    parent::__construct($firstName,$lastName,$FathersName,$Age);
        echo 'Add object of Student class'. PHP_EOL;
		self::$count_s++;
		$this->type=$type;
		$this->course=$course;
    }

        /**
         * @param int $value
         */
	  public function setMark($value)
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
      public function setCourse($course){
		   $this->course=$course;
		  }
	  }
