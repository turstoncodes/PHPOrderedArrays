<?php
namespace Codecademy;

$change_me = [3, 6, 9];
// Write your code below:
$change_me[] = "an added string";
$change_me[] = 6;
$change_me[1] = "tadpole";

echo implode(", ", $change_me);