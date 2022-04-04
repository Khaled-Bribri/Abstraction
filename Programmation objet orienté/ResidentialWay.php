<?php
require_once 'HighWay.php';

final Class ResidentialWay extends HighWay{

    public function __construct($currentVehicles,$nbLane=2,$maxSpeed=50)
    {
        parent::__construct($currentVehicles,$nbLane,$maxSpeed);
        
    }   

    public function addVehicle($Vehicle)
    {
        if(($Vehicle instanceof bicycle)||($Vehicle instanceof Car)||($Vehicle instanceof Truck)){
            $this->currentVehicles[] = $Vehicle;
        }
        else{
            echo "You can't add this vehicle on this road";
        }
    }


}