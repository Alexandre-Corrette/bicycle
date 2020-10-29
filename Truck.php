<?php
require_once 'Vehicle.php';

class Truck extends vehicle {
    private $storageCapacity;
    private $actualStorage = 0;

    public function __construct(string $color, INT $nbSeats, string $energy, INT $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->storageCapacity = $storageCapacity;
    }
    public function getActualStorage(): string
    {
        if ($this->actualStorage < $this->storageCapacity)
        {
            return "in filling";
        } else
        {
            return "is full";
        }
    }
    public function setActualStorage($actualStorage): void
    {
        if ($this->actualStorage >= 0)
        {
            $this->actualStorage = $actualStorage;
        }
    }
}