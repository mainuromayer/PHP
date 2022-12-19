<?php 
//--------------------------------------------

function Information($name, $age){
    echo "My name is " . "$name";
    echo "\n";
    echo "My age is " . "$age";
}
Information(readline("Name : "), readline("Age : "));

echo "\n";

Information("Omayer", 21);

//--------------------------------------------

?>