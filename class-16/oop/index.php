<?php

class MyClass{
    private $name="hasan";
    public function __construct($name){
        $this->name = $name;
    }
    public function showName(){
        echo "Hi ".$this->name;
    }
    public function setUserName($value){
        $this->name = $value;
    }
}

$obj1 = new MyClass("Shuvo");
$obj1->showName();
// $myClassObject = new MyClass();
// $myClassObject->setUserName("Mehedi Hasan");
// $myClassObject->showName();


// $obj = new MyClass();
// $obj->setUserName("Rakib");
// $obj->showName();