<?php

/* =============== ECHO VS PRINTF ========================= */

/* ----------------- ECHO START ---------------------- */

    $para = "lorem ipsum dolor sit amet.";
    echo "Hello PHP $para";
        # output :  Hello PHP lorem ipsum dolor sit amet.

                echo "<br>";


    #==> ucwords =========== use for every word First character Capital
    /* ----    
    $para = ucwords($para);
    echo $para;
        # output :  Lorem Ipsum Dolor Sit Amet.

        echo "<br>";
    ------*/
                
    echo "This is " . ucwords($para);
        #  output : This is Lorem Ipsum Dolor Sit Amet.
                
                echo "<br>";

    #<==    ucwords end

/* ----------------- ECHO END ---------------------- */




/* ----------------- PRINTF START ---------------------- */

## PRINTF =========== This use for send anyone massage to PHP [HTML code modify] -

    $para = "lorem ipsum dolor sit amet.";
    printf("Hello PHP $para");
        # output :  Hello PHP lorem ipsum dolor sit amet.

                echo "<br>";


    #==> ucwords =========== use for every word First character Capital
    /* -----    
    $para = ucwords($para);
    printf($para);
        # output :  Lorem Ipsum Dolor Sit Amet.

        echo "<br>";
    ------*/

    printf("This is " . ucwords($para));
    
        echo "<br>";

    #<==    ucwords end




    //  Extra Feature Printf

    $country = "Bangladesh";
    $city = "feni";
    
    printf("Our country is %s ", $country);    // s = string
        //  printf("....... <placeholder | %s>", <"....." or variable>)

        echo "<br>";

        printf("Our country is %s. I live in %s at %s", $country, ucwords($city), "Barahipur");

    /* ----------------- PRINTF END ---------------------- */

?>