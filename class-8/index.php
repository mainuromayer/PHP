<?php

# ============= While Loop (Even Number) - (1-100)
    $a = 0;
    while ($a <= 100) {
        echo $a . "\n";
        $a+=2;
    }
    //  another way - 

    $i = 0;
    while ($i <= 100) {
        echo (($i%2) == 0) ? $i . "\n": null;
            #   echo (condition) ? if:else;
        $i++;
    }

# ============= While Loop (Odd Number) - (1-100)

    $a = 1;
    while ($a <= 100) {
        echo $a . "\n";
        $a+=2;
    }








/* $i = 1;
while($i<=100){
    // echo ($i%2==0) ? $i.'<br>':null;
    echo $i."\n";
    $i+=2;
} */


?>