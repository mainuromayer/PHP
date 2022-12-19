<?php
    /* ======================================================================
                            CONSTANT
    ====================================================================== */


    define("NAME", "Omayer");
    echo NAME;

    define("AMOUNT", 20);
    echo AMOUNT;

    define("DB_NAME", "demo_db");
    echo DB_NAME;

    define("MAIN_PATH", "https://localhost");
    echo MAIN_PATH;

    define("MY_NAME", "Mainur Rahaman");
    $amount = 20;
    //  echo 'Your amount is : $amount';    #   not_working (' ')
    echo "Your amount is : $amount";    #   working (" ")


/* ========------------------------------------==================== */
#            Returns the value of a constant

/* 1st Way */    echo constant("NAME");  #   not_working without (" ")
/* 2nd Way */    echo NAME;


/* ========------------------------------------==================== */
#               $$ using output

echo "<br>";
$num = 100;
$text = "num";
echo "Is this your number " . $$text;

echo "<br>";
define("NO", "1010");
$text = "constant";
echo "Your number is :" . $text("NO");


?>