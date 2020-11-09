<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    private $hasParkBrake;
    private $lights;
   
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
    public function switchOn(): bool
    {   
        $this->lights = true;
        return $this->lights;
    }
    public function switchOff(): bool
    {   
        $this->lights = false;
        return $this->lights;
    }
    public function getEnergy (string $energy)
    {
        if ($energy != null ) 
        {
         $this-> energy = $energy;
        }
    }
    public function getParkBrake(): bool
    {
        return $this->hasParkBrake = $hasParkBrake;
    }

    public function setParkBrake(Bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string 
    {
        if ($this->hasParkBrake == true)
        {
            throw new Exception("Frein à main actif");
        }
       return 'start'; 
    }
  
   
}
