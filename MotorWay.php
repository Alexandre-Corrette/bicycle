<?php
require_once 'Highway.php';
final class MotorWay extends Highway
{
    function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car)
        {
            $this->currentVehicles[] = $vehicle;
        }
       
    }
}