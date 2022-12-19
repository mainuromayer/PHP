<?php 

/* ================================================================= */

/**
 * D ==> Day
 * l ==> Day (Short)
 * d ==> Date
 * M ==> Month
 * Y ==> Year
 * y ==> Year (Short)
 * H ==> Hour (24 hour format)
 * h ==> Hour (12 hour format)
 * i ==> Minute
 * s ==> second
 * a ==> am/pm
 * A ==> AM/PM
*/
/* ================================================================= */



/* ====================== Date & Time ================================= */


# date(format, timestamp)
// echo date('D, d M Y H:i:s');
#------------------------------------------------
echo "Date : ". date('d-m-Y');

echo "<hr>";
#------------------------------------------------

echo "Today : ". date('l');

echo "<hr>";
#------------------------------------------------

echo "Time :".date('H:i:s | a'). " | International Time Zone";    //  Server Time : 24 hour format
echo "<br>";
echo "Time :".date('h:i:s | A'). " | International Time Zone";    //  Server Time : 12 hour format

echo "<hr>";
#------------------------------------------------

$time = time();
echo "Time :".date('H:i:s a', $time). " | International Time Zone";
echo "<br>";
echo "Time :".date('H:i:s a', $time+600)." - added 600 second". " | International Time Zone";    //  Server + 600 second add

echo "<hr>";
#------------------------------------------------

date_default_timezone_set("Asia/Dhaka");
echo "Dhaka Time :".date('H:i:s | a');
echo "<hr>";
#------------------------------------------------


## custom_time zone set -

/* int $hour, ?int $minute = null, ?int $second = null, ?int $month = null, ?int $day = null, ?int $year = null */
##  mktime(hour, minute, second, month, day, year)
$d = mktime(12, 56, 00, 11, 24, 2022);

##  date('Day, date-month-year, hour:minute:second am/pm', mktime(...)/$d)
echo date('l, d-M-Y, H:i:s a', $d);

echo "<hr>";
#------------------------------------------------
date_default_timezone_set("Asia/Dhaka");
$timestamp = time();
echo $timestamp;

echo "<br>";

$now_time = date('l-M-Y | h: i: s A');
echo $now_time;

echo "<br>";

$last_time = date('l-M-Y | h: i: s A',1669277072);
echo $last_time;



#------------------------------------------------

echo "<hr>";
$dd = strtotime('Tomorrow');
echo date('l-M-Y | h: i: s A', $dd);

echo "<hr>";

/* ====================== Time ================================== */


echo time();
#   Example : 1669268834 ==> This is time value

echo "<br>";

echo date_default_timezone_get();
#   Europe/Berlin

echo "<br>";

echo date_default_timezone_set("Asia/Dhaka");
#   1 ==> True



?>