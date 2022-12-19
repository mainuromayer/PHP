<?php

/* ================================
        PRINT vs RETURN
================================== */
# PRINT :
function add($a, $b){
    echo $a + $b;
}

add(5,5);




echo "\n";





# RETURN :
function Num($a, $b){
    return $a + $b;
}

$numbers = 5 + Num(5,5);
echo $numbers;



//--------------------------------------------

?>