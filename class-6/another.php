<?php

$n = '1';
$pr_id = sprintf("%02d", $n);
echo $pr_id;

#   output = 01
    echo "\n";
// ==================

echo vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1'));

#   output = 1988-08-01
    echo "\n";
// ==================

?>

