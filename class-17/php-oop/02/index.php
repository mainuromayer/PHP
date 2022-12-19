<?php

class Vehicle {
    public $name = 'Corola';
    public $color= 'Red';

    function set($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function display(){
        echo "Name is : {$this->name} <br>";
        echo "Color is : {$this->color} <br>";
    }

}

$vehicle = new Vehicle();

// $vehicle->name = "Bus";
// $vehicle->color = "Red";
// echo "Name is : " . $vehicle->name . "<br>";
// echo "Color is : " . $vehicle->color . "<br>";


$vehicle->display();
$vehicle->set('BMW', 'Black');
$vehicle->display();




?>