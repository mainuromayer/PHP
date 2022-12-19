<?php 


#   one subject result
$result = readline("Enter your mark : ");

if ($result<=100 && $result>=80) {
    echo "You got A+" . "\n";
}
elseif($result<=79 && $result>=75){
    echo "You got A" . "\n";
}
elseif($result<=74 && $result>=70){
    echo "You got A-" . "\n";
}
elseif($result<=69 && $result>=65){
    echo "You got B+" . "\n";
}
elseif($result<=64 && $result>=60){
    echo "You got B" . "\n";
}
elseif($result<=59 && $result>=55){
    echo "You got B-" . "\n";
}
elseif($result<=54 && $result>=50){
    echo "You got C+" . "\n";
}
elseif($result<=49 && $result>=45){
    echo "You got C" . "\n";
}
elseif($result<=44 && $result>=40){
    echo "You got D" . "\n";
}
elseif($result<=39 && $result>=0){
    echo "You got F" . "\n";
}
else{
    echo "Invalid";
}



?>