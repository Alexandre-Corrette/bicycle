<?php
class Car
{
    private $nbrWheels;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    public function getCurrentSpeed (int $currentSpeed)
    {
        if ($currentSpeed >= 0) 
        {
         $this-> currentSpeed = $currentSpeed;
        }
    }
    public function forward()
    {
        if ($this->currentSpeed>0)
        {
            return "Go !";
        }else 
        {
            return "I'm Stopped!";
        }
    }
    

    public function getNbrWheels (int $nbrWheels)
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
    }
    public function getEnergy (string $energy)
    {
        if ($energy != null ) 
        {
         $this-> energy = $energy;
        }
    }
    public function setEnergyLevel (int $energyLevel)
    {
        if ($energyLevel >= 0) 
        {
         $this-> energyLevel = $energyLevel;
        }
    }
    public function stopTheCar()
    {   $sentence='';
        while($this->energyLevel>0)
        {   
            $this->energyLevel--;
            $sentence .='This car runs great!';
        
        }$sentence .='We should full-up the Fuel tank...';
        return $sentence;
    }
}
