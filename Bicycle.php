<?php
class Bicycle {
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

   public function forward()
{
    $this->currentSpeed = 15;

    return "Go !";
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