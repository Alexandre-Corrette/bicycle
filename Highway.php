<?php
abstract class Highway
{
    
        protected $currentVehicles;
    
        private $nbLane;
    
        private $maxSpeed;

        abstract public function addVehicle(Vehicle $vehicle);
    
    //setters
    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }
    public function setmaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
    //getters
    public function getCurrentVehicles(): array
    {
        $this->currentVehicles = $currentVehicles;
    }
    
    
    public function getNbLane(): INT
    {
        $this->nbLane = $nbLane;
    }
    
    public function getmaxSpeed(int $maxSpeed): INT
    {
        $this->maxSpeed = $maxSpeed;
    }
}

