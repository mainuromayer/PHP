<?php 


/* ========----------- Start ------------========= */
/* 

*
* *
* * *
* * * *
* * * * *

*/

$n = 5;
for ($i=1; $i <= $n; $i++) {
    for ($j=1; $j <= $i; $j++) {
        echo " * ";
    }
    echo "<br>";
}
/* ========------------ End -----------========= */


echo "<br>";


/* ========----------- Start ------------========= */
/* 

* * * * *
* * * *
* * *
* *
*

*/

$n = 5;
for ($i=1; $i <= $n; $i++) {        //  outer_loop
    for ($j=$n; $j >= $i; $j--) {    //  inner_loop
        echo " * ";
    }
    echo "<br>";

    
}
/* ========------------ End -----------========= */


echo "<br>";


/* ========----------- Start ------------========= */
/* 
⠀⠀⠀⠀⠀ * * * * *
⠀⠀⠀⠀ * * * *
⠀⠀⠀ * * *
⠀⠀ * *
⠀ * 

*/

$n = 5;
for ($i=1; $i <= $n; $i++) {        //  outer_loop
    for ($j=$n; $j >= $i; $j--) {    //  space_loop
        echo "⠀";
    }
    for ($k=$n; $k >= $i ; $k--) { 
        echo " * ";
    }
    echo "<br>";    
}
/* ========------------ End -----------========= */


echo "<br>";


/* ========----------- Start ------------========= */
/* 
⠀ *
⠀⠀ * *
⠀⠀⠀ * * *
⠀⠀⠀⠀ * * * *
⠀⠀⠀⠀⠀ * * * * * 

*/

$n = 5;


for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j <= $i; $j++) { 
        echo "⠀";
    }
    for ($j=0; $j <= $i; $j++) { 
        echo " * ";
    }
    echo "<br>";
}
/* ========------------ End -----------========= */


echo "<br>";


/* ========----------- Start ------------========= */
/* 

         *      = 4 space
       * *      = 3 space
     * * *      = 2 space
   * * * *      = 1 space
 * * * * *      = 0 space

*/

$n = 5;


for ($col=1; $col <= $n; $col++)     // outer_loop
{
    for ($space=$n-1; $space >= $col ; $space--) {    // space_loop
        echo "⠀";
    }
    for ($print=1; $print <= $col; $print++) {  //  print_loop
        echo "* ";
    }

    echo "<br>";
}

// ----------------------------------------------------

$n = 5;
for ($i=0; $i <= $n; $i++) { 
   for ($j=$n; $j > $i; $j--) { 
    echo "⠀";
   }
   for ($j=0; $j <= $i; $j++) { 
    echo "o ";
   }
   echo "<br>";
}

/* ========------------ End -----------========= */


echo "<br>";


/* ========-----------------------========= */
/* 
        *              = 
      * * *            = 
    * * * * *          = 
  * * * * * * *        = 
* * * * * * * * *      = 

*/

$n = 5;
for ($i=0; $i <= $n; $i++) { 
   for ($j=$n; $j > $i; $j--) { 
    echo "⠀";
   }
   for ($j=0; $j <= $i*2; $j++) { 
    echo "o ";
   }
   echo "<br>";
}




?>