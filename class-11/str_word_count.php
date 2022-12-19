<?php
##-----------------------------------------------------------
#  str_word_count();
##-----------------------------------------------------------




##---------------- 1 ---------------------------------------

$string = "This is a string";

$wordcount = str_word_count($string);
echo $wordcount;
echo "<br>";
/* ============
Output:
-------
4   
#   Note:   This only is word count (echo)
============= */
##-----------------------------------------------------------




##---------------- 2 ---------------------------------------
$string = "This is a string";

$wordcount = str_word_count($string, 1);    #   when 2nd paramiter use and type 1
print_r($wordcount);
echo "<br>";

/* ============
Output:
-------
Array ( [0] => This [1] => is [2] => a [3] => string )

Note:   
This output is assosiative arrey style (print_r)
This arrey count index style.
============= */

##-----------------------------------------------------------




##---------------- 3 ---------------------------------------

$string = "This is a string";

$wordcount = str_word_count($string, 2);    #   when 2nd paramiter use and type 2
print_r($wordcount);
echo "<br>";

/* ============
Output :
--------
Array ( [0] => This [5] => is [8] => a [10] => string )   

Note:
This output is assosiative arrey style (print_r)
This arrey count from where the word position starts.
============= */

##-----------------------------------------------------------




##---------------- 4 ---------------------------------------

$string = "This is a string & text.";

$wordcount = str_word_count($string, 2, '.&');    #   when 3rd paramiter use and type : special character - '.&'
print_r($wordcount);

/* ============
Output :
--------
Array ( [0] => This [5] => is [8] => a [10] => string [17] => & [19] => text. )  

Note:
This output is assosiative arrey style (print_r)
This arrey count from where the word position starts, show special-chatacter (&) and last show '.'
============= */

##-----------------------------------------------------------



?>