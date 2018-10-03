	<?php
		class Workers extends Human {
            /**
             * Class Workers
             * @param int $oklad
             * @return void
             */
	private $oklad;
	public $counte=0;
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
	public $listing;
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
	?>