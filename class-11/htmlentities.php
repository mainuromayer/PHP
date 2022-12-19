<?php
##-----------------------------------------------------------
#  htmlentities();
##-----------------------------------------------------------

$string = "This is <img src='#'> a string.";

$htmlentities = htmlentities($string);
echo $htmlentities;


/* ============
Output:
-------
This is <img src='#' /> a string.

#   Note:   get html code string with
============= */


?>