<?php 


/* =========== Start ========= */
/*
1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
*/

for ($i=1; $i<=5; $i++) {
    for ($j=0; $j<$i; $j++) { 
        echo $i . " ";  
    }
    echo "<br>";
}

/* =========== End ========= */
echo "<br>";
/* ============-----------------------============= */


/* =========== Start ========= */
/*
*
* *
* * *
* * * *
* * * * *
*/

for ($i=1; $i<=5; $i++) {
    for ($j=0; $j<$i; $j++) { 
        echo "*" . " ";  
    }
    echo "<br>";
}

/* =========== End ========= */
echo "<br>";
/* ============-----------------------============= */


/* =========== Start ========= */
/*
*
* *
* * *
* * * *
* * * * *
* * * *
* * *
* *
*
*/
for ($i=1; $i<=5; $i++) {
    for ($j=0; $j<$i; $j++) { 
        echo "*" . " ";  
    }
    
    echo "<br>";
}
for ($i=5; $i>=1; $i--) {
    for ($j=0; $j<$i; $j++) { 
        echo "*" . " ";  
    }
    
    echo "<br>";
}

/* =========== End ========= */
echo "<br>";
/* ============-----------------------============= */





/* ====================

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
======================= */


for ($r=0; $r < 6; $r++) { 
    for ($c=0; $c < $r; $c++) { 
        echo $r . " ";
    }
    echo "<br>";
}
/* ====================

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
======================= */


for ($r=0; $r < 6; $r++) { 
    for ($c=0; $c < $r; $c++) { 
        echo $c+1 . " ";
    }
    echo "<br>";
}

/* ============-----------------------============= */




?>