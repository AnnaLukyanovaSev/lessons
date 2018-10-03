<?php
/**
 * Class Human
 *
 * @property Human[] $humans
 * @access public
 */

	class Human {
        /**
         * @param $count
         * @return Human[]
    */
        public
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
	
	
?>