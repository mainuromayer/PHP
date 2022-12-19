<?php
/* First Section */
class collage {
    public $collage_name;
    public $department;

    public function __construct($para1, $para2)
    {
        $this->collage_name = $para1;
        $this->department = $para2;
    }

    public function info(){
        return "Name : " . $this->collage_name . "<br> Age : " . $this->department;
    }
}

/* Second Section */
class student extends collage {
    public function message(){
        "Thanks Everyone.";
    }
}

$result = new student('Feni Ideal Polytechnic Institute', 'Computer Technology');



?>