<?php

/* =========== 1 ============= */
$html_block =
"<div>
    <h1>Hello World!</h1>
    <h2>Welcome to our community.</h2>
</div>";

echo "$html_block";




/* =========== 3 ============= */

$caption = "hello world!";
$title = "welcome to our community.";

$html_block =
"<div>
    <h1>".ucwords($caption)."</h1>
    <h2>".ucwords($title)."</h2>
</div>";

printf($html_block);





/* =========== 3 ============= */

$caption = "hello world!";
$title = "welcome to our community.";

$html_block =
"<div>
    <h1>%s</h1>
    <h2>%s</h2>
</div>";

printf($html_block, ucwords($caption), ucwords($title));



?>