<?php

#   print (1-5) & Total sum
$k = null;

for ($i=0; $i <= 5; $i++) { 
    echo $i . "\n";
    $k = $i+$k;
}
echo "Total : " . $k;

echo "\n";
echo "\n";




#   print (1-5) & Total Multiple
$k = 1;
for ($i=1; $i <= 5; $i++) { 
    echo $i . "\n";
    $k = $i*$k;
}
echo "Total : " . $k;

?>