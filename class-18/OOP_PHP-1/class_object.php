<?php

#   create class -
class man {
    public $name = 'Mainur';
    public $age = '22';
    public $address = 'Feni';

    function info(){
        return "This is my world.";
    }
}

#   create new object -
$output = new man();

echo $output->name;
echo "<br>";
echo $output->age;
echo "<br>";
echo $output->address;
echo "<br>";
echo $output->info();

echo "<br><br>";

// ------------------------------------

#   create class -
class player {
    public $name;

    function info($fname){
        $this->name = $fname;
        return  $this->name;
    }
}


#   create new object and value set property name -
$output = new player();

echo $output->info('Sakib');

$output->name = ' Al Hasan';
echo $output->name;



?>