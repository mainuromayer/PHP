<?php

##-----------------------------------------------------------
#  str_shuffle();
##-----------------------------------------------------------

$string = "This is a string.";

$shuffle = str_shuffle($string);

echo $shuffle;



/* ============
Output:
-------
isnTr ihgs sta.i    or,     Tian s.rsshti i g       etc.

#   Note:   upside down
It will change every time when refresh.
============= */

?>