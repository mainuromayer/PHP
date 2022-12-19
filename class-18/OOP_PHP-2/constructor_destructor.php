<?php

# constructor [imidiate working] -

use player as GlobalPlayer;

class man {
    public $name;
    public $age;
    public $address;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function info(){
        return "Name is : " . $this->name . " and Age is : " . $this->age;
    }
}

$output = new man("Mainur", 22);
echo $output->info();


echo "<br><br>";


// -------------------------------------------------------------------------


# constructor and destructor [imidiate working] -
class player {
    public $name;
    public $age;
    public $address;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function __destruct()
    {
        echo "Name is : " . $this->name . " and Age is : " . $this->age;
    }
}

$output = new player("Mainur", 22);




?>