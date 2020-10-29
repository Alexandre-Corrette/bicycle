<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{
   
    /*public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }
    public function getCurrentSpeed ()
    {
        if ($currentSpeed >= 0) 
        {
         $this-> currentSpeed = $currentSpeed;
        }
    }*/
  
    

   /* public function getNbrWheels (int $nbrWheels)
    {
        if ($nbrWheels >= 0) 
        {
         $this-> nbrWheels = $nbrWheels;
        }
    }
    public function getColor (string $color)
    {
        if ($color != null) 
        {
         $this-> color = $color;
        }
    }
    public function getNbSeats (int $nbSeats)
    {
        if ($nbSeats >= 0) 
        {
         $this-> nbSeats = $nbSeats;
        }
    }*/
    public function getEnergy (string $energy)
    {
        if ($energy != null ) 
        {
         $this-> energy = $energy;
        }
    }
  
   
}
