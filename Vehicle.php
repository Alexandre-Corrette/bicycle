<?php

class Vehicle
{
    /**
    * @var string
    */
    private $color;

    /**
    * @var integer
    */
    private $currentSpeed;

    /**
    * @var integer
    */
    private $nbSeats;

    /**
    * @var integer
    */
    private $nbWheels;
    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    public function getCurrentSpeed(): int
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }
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

   

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
    public function setEnergyLevel (int $energyLevel)
    {
        if ($energyLevel >= 0) 
        {
         $this-> energyLevel = $energyLevel;
        }
    }
    public function getEnergyLevel(): INT
    {
        $this->EnergyLevel = $energyLevel;
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

