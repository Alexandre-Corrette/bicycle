<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Bicycle extends Vehicle implements LightableInterface
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
   private $lights;

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
public function switchOn(): bool
{  
    if($this->currentSpeed > 10)
    {
        return "true";
    }
    
}
public function switchOff(): bool
{
    return "false";
}
    
}