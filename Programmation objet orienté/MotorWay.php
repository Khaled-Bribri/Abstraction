<?php
require_once 'HighWay.php';

final Class MotorWay extends HighWay{

    
    public function __construct($currentVehicles,$nbLane=4,$maxSpeed=130)
    {
        parent::__construct($currentVehicles,$nbLane,$maxSpeed);
        
    }   

  

    public function addVehicle($Vehicle)
    {
        if(($Vehicle instanceof Car)|| ($Vehicle instanceof Truck)){
            $this->currentVehicles[] = $Vehicle;
        }

        else{
            echo "You can't add this vehicle on this road";
        }
}

}