<?php
$foods = array("pasta", "steak", "fish", "potatoes");

$p_foods = preg_grep("/p(\w+)/", $foods);

print "Found food is " . $p_foods[0] . "<br>";
print "Found food is " . $p_foods[3] . "<br>";
?>