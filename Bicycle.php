<?php
require_once 'Vehicle.php';
class Bicycle extends Vehicle
 {
   /* @var string
    */
   public $color;

   /**
   * @var integer
   */
   public $currentSpeed;
   /**
   * @var integer
   */
   public $nbSeats;
   /**
   * @var integer
   */
   public $nbWheels;

   public function forward(): string
   {
       if ($this->currentSpeed>0)
       {
           return "Go !";
       }else 
       {
           return "I'm Stopped!";
       }
   }

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}
    
}