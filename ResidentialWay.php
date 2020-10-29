<?php
require_once 'Highway.php';
final class ResidentialWay extends Highway
{
    function addVehicle(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
}