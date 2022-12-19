<?php 

/* ===============================================
ARREY - Single variable into multiple value store
================================================== */
/** Types Of Arrey -->
 * 1. Indexed arrays : Arrays with a numeric index.
 * 2. Associative arrays :  Arrays with named keys.
 * 3. Multidimensional arrays : Arrays containing one or more arrays.
 */


#----------------------------

$numbers = [' '];
$numbers[5] = 13;
// echo $numbers;
var_dump($numbers);

echo "<hr>";



/* ================= Indexed arrays =========================== */

$x = array(5, 3, 9, 10, 15);
/* 
$x[0] = 5;
$x[1] = 3;
$x[2] = 9;
$x[3] = 10;
$x[4] = 15;
*/
#----------------------------

## output : $x : 0 and 3 no position index
$x = array(5, 3, 9, 10, 15);
echo "0 No Index value : ".$x[0];
echo "<br>";
echo "3 No Index value : ".$x[3];

echo "<br>";

#----------------------------

## output : $x length count
$x = array(5, 3, 9, 10, 15);
echo "Total Arrey Length : ".count($x);
echo "<br>";
echo "<hr>";

#----------------------------

## output : Arrey all element show using loop
/* $x = array(5, 3, 9, 10, 15);
$total = count($x);
for ($i=0; $i < $total; $i++) { 
    echo "Index : " . $i . " Position : " . $x[$i] ."<br>";
}
echo "<hr>"; */










/* ================= Associative arrays =========================== */

$ages = array("Korim"=>"24", "Rohim"=>"20", "Mamun"=>"28");
/* 
$ages["Korim"] = "24";
$ages["Rohim"] = "20";
$ages["Mamun"] = "28";
 */
foreach($ages as $x => $age){
    echo $x . " - Age = " . $age . "<br>";
}
echo "<hr>";




/* ================= Multidimensional arrays =========================== */

$cars = array(
    array("BMW", 15, 50),
    array("Volvo", 20, 5),
    array("Saab", 25, 30),
    array("Audi", 35, 55)
);

#----------------------------
echo $cars[0][2];
echo "<br>";
echo $cars[1][0];
echo "<br>";
echo $cars[2][2];
echo "<hr>";
#----------------------------

for ($row=0; $row < 4; $row++) { 
    echo "<p>Row Number $row</p>";

    echo "<ul>";
    for ($col=0; $col < 3; $col++) { 
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}




?>