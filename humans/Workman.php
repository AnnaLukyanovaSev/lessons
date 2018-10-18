<?php

/**
 * Class Workman
 */
class Workman extends Human
{
    /**
     * @var int $oklad
     */
    private $oklad;
    /**
     * @var int $counte
     * @var int $count_w
     */
    public $counte = 0;
    public static $count_w = 0;
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
     * @param string $fathersName
     * @param int $age
     * @param int $oklad
     */
    public function __construct(
        string $firstName,
        string $lastName,
        string $fathersName,
        int $age,
        int $oklad
    ) //объявление методов
    {
        parent::__construct($firstName, $lastName, $fathersName, $age);
        echo 'Add object of Worker class' . PHP_EOL;
        self::$count_w++;
        $this->oklad = $oklad;
    }


    /*  public function setList()
      { // get sum + data
         $arr = func_num_args();
       //   $arr1 = func_get_args();
          if ($arr == 2) {
              $this->su[$this->counte] = $arr1[0];
              $this->data[$this->counte] = $arr1[1];
          }
          if ($arr == 1) {
              $this->data[$this->counte] = $arr1[0];
              $this->su[$this->counte] = $this->oklad;
          }
          $this->counte++;
      }*/

    /**
     * @param int $pay
     * @param string $day
     * return void
     */
    public function setList(string $day, int $pay = null)
    {
        $pay = isset($pay) ? $pay : $this->oklad;
        $this->su[$this->counte] = $pay;
        $this->data[$this->counte] = $day;
        $this->counte++;
    }

    /**
     * @return array
     */
    public function getList()
    {
        $this->listing = array($this->su, $this->data);
        return $this->listing;
    }

}
