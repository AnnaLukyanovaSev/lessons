<?php
	
	class Human {
	
		public $FirstName;
		public $LastName;
		public $FathersName;
		private $Age;
		public static $count=0;
		public function __construct($firstName,$lastName,$FathersName,$Age) 
    {
        echo 'Add object of Human class'. PHP_EOL;
		self::$count++;
        $this->LastName = $lastName;
        $this->FirstName = $firstName;
        $this->FathersName = $FathersName;
		$this->Age=$Age;
    }
		public function setFirstName($FirstName){
			$this-> FirstName=$FirstName;
			}
		public function setLastName($LastName){
			$this-> LastName=$LastName;
			}
		public function setFathersName($FathersName){
			$this-> FathersName=$FathersName;
			}
		public function setAge($Age){
			$this-> Age=$Age;
			}
		public function getAge(){
			return $this->Age;
			}
			public function __toString()
    {
         return  '!' . $this->firstName .  ' ' . $this->getAge();
    }
	}
	
	class Student extends Human {
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
	
	class Worker extends Human {
	
	private static $oklad;
	public static $counte=0;
	public static $count_w=0;
	public $su;
	public $data;
		public function __construct($firstName,$lastName,$FathersName,$Age,$oklad) //объявление методов
    {
	    parent::__construct($firstName,$lastName,$FathersName,$Age);
        echo 'Add object of Worker class'. PHP_EOL;
		self::$count_w++;
		$this->oklad=$oklad;
    }
	public static $listing;
		public function setList(){ // get sum + data
		      $arr=func_num_args();
			  $arr1=func_get_args();
			  if ($arr==2){
			 $this->su[$this->counte]=$arr1[0];
			 $this->data[$this->counte]=$arr1[1];
				  }
				  if ($arr==1){
				  $this->data[$this->counte]=$arr1[0];
				  $this->su[$this->counte]=$this->oklad;
				 // $this->su=$this->oklad;
				  }
				  
	          $this->listing[$this->counte] =array($this->su,$this->data);
			  $this->counte++;
			}
	}
$objHuman1=new Human('Mark','Ivanov','Ivanovich','20');
$objHuman2=new Human('Nikolay','Petrov','Sergeevich','17');
$objStudent1=new Student('Mariya','Ivanova','Petrovna','21',Student::TYPE_ZAOCHN,6);
$objStudent2=new Student('Sidorov', 'Petya', 'Igorevich','20',Student::TYPE_ZAOCHN,2);
$objWorker1=new Worker('Ivan','Ivanov','Ivanovich','27',20000);
$objWorker2=new Worker('Vasya','Sokolov','Ivanovich','32',25000);
//echo $objStudent1->__toString().PHP_EOL;
echo 'Number of humans '.Human::$count.PHP_EOL;	
echo 'Number of students '.Student::$count_s.PHP_EOL;
echo 'Number of workers '.Worker::$count_w.PHP_EOL;
//echo $objStudent2->__setMark(5);
//echo $objStudent2->__setMark(5);
//echo $objStudent1->__setMark(5);
//echo $objStudent2->__setMark(4);
//echo $objStudent1->__setMark(3);
//echo $objStudent2->__getMarks();
//echo $objStudent1->__getMarks();

echo $objWorker2->setList('21/07/18');
echo $objWorker2->setList(10,'23/07/18');
echo $objWorker1->setList(100000,'20/07/18');
var_dump($objWorker2);
?>