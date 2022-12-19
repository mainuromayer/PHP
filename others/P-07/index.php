<?php
    /* ======================================================================
                            ECHO VS PRINT
    ====================================================================== */
    //==>  ECHO
        echo "Omayer";
      /* 
        $name = echo "Omayer";      #  This isn't Acceptable
      */

    /* =====-------------------------------===== */
    
    //==>  PRINT
        print("Omayer");
        $name = print("Omayer");    #  This is Acceptable

        echo $name;     #   print store -> variable and it pass value 1

    /* -------------- */
    
    $text = print("Hello World!");
    echo "<br>";
    echo $text;
                /* 
                1st time print Hello World and
                2nd time print break_line
                3rd time print [$text] =>  1     # 1 is print function value.
                */

?>