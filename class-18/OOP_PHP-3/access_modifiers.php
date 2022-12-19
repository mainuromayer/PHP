<?php

class men {
    public $name;
    public $age = 20;

    function info(){
        return $this->name = "Mainur";
    }
}

$output = new men();

echo $output->info();
echo "<br><br>";

/** 
* Types Of Access Modifier -
*           -> public
*           -> private
*           -> protected
*/



/* ========================================== */
#   public - [access - defualt because all are public]
class menPublic {
    public $name = "Omayer";
    public $age = 20;

    public function info(){
        return "name : " . $this->name . "<br> age : " . $this->age;
    }
}

$output = new menPublic();

echo $output->info();
echo "<br><br>";



/* ========================================== */
#   private - [access - public function]
class menPrivate {
    private $name = "Lorem Ipsum";
    private $age = 20;

    public function info(){
        return "text : " . $this->name . "<br> number : " . $this->age;
    }
}

$output = new menPrivate();

echo $output->info();
echo "<br><br>";


/* ========================================== */
#   protected - [access - public function]
class menProceted {
    protected $name = "Lorem Ipsum";
    protected $age = 20;

    public function info(){
        return "text : " . $this->name . "<br> number : " . $this->age;
    }
}

$output = new menProceted();

echo $output->info();




?>