
<?php

// Class -
class Foo {
    public $color;

    function display(){
        echo "Welcome to Bangladesh. <br>";
    }

    function setColor($color){
        $this->color = $color;
    }

    function getColor(){
        echo "Color is : {$this->color}";
    }
}

$ooj = new Foo();   # copy class
$ooj->display();    # function return
// ---------------------------------

$ooj->color = "Red <br>";   # variable value set
echo $ooj->color;   # variable  return
// ---------------------------------
echo $ooj->getColor();



/* ================================================================= */


// class Hello {
    // public $name;
// 
    // function Name(){
        // echo "Hello World. <br>";
    // }
    // 
// }
// 
// 
// 
// $hello = new Hello();
// $hello->Name(); 
// 
// 
// $hello = new Hello();
// $hello->name = "Hi. I am here.";
// echo $hello->name;






?>

