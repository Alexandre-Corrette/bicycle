<?php
require_once 'vehicule.php';

class Truck extends vehicule {
    private $storageCapacity;
    private $actualSorage = 0;

    public function __construct(string $color, INT $nbSeats, string $energy, INT $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
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