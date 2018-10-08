	<?php

    /**
     * Class Workers
     */
    class Workers extends Human {

	private $oklad;
        /**
         * @var int $counte
         */
	public $counte=0;
	public static $count_w=0;
        /**
         * @var array $su
         */
	public $su;
        /**
         * @var array $data
         */
	public $data;
        /**
         * @var array $listing
         */
	public $listing;

        /**
         * Workers constructor.
         * @param string $firstName
         * @param string $lastName
         * @param string $FathersName
         * @param int $Age
         * @param int $oklad
         */
		public function __construct($firstName,$lastName,$FathersName,$Age,$oklad) //объявление методов
    {
	    parent::__construct($firstName,$lastName,$FathersName,$Age);
        echo 'Add object of Worker class'. PHP_EOL;
		self::$count_w++;
		$this->oklad=$oklad;
    }


        /**
         * return void
         */
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
				  }

	          $this->listing[$this->counte] =array($this->su,$this->data);
			  $this->counte++;
			}

	}
