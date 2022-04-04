<?php
require_once 'HighWay.php';

final Class PedestrianWay extends HighWay {

    public function __construct($currentVehicles,$nbLane=1,$maxSpeed=10)
    {
        
        parent::__construct($currentVehicles,$nbLane,$maxSpeed);
     
    } 
    
    public function addVehicle($Vehicle)
    {
        if($Vehicle instanceof bicycle)
        {
            $this->currentVehicles[] = $Vehicle;
        }
        else{
            echo "You can't add this vehicle on this road";
        }
        
    }


}