	<?php
	class Students extends Human {
	const TYPE_OCHN = 1;
    const TYPE_ZAOCHN = 2;
	public $type=self::TYPE_OCHN; // form of education
	public $marks=[]; 
	public $course; 
	public static $count_s=0;
	private static $name=0;
		public function __construct($firstName,$lastName,$FathersName,$Age,$type,$course) 
    {
	    parent::__construct($firstName,$lastName,$FathersName,$Age);
        echo 'Add object of Student class'. PHP_EOL;
		self::$count_s++;
		$this->type=$type;
		$this->course=$course;
    }
	  public function __setMark($value)
    {
        echo 'set new mark' . PHP_EOL;
        $this->marks[$this->name] = $value;
		$this->name++;
    }
	
     public function __getMarks()
    {
        echo 'get' . PHP_EOL;
	   print_r($this->marks);
	 //  echo sizeof($this->marks). PHP_EOL;
    }
      public function setCourse($course){
		  $this->course=$course;
		  }
	  }
	  ?>