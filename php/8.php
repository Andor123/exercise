<!DOCTYPE html>
<html>
<head>
    <title>Comparison Operators</title>
</head>
<body>
<?php
$a = 42;
$b = 0;

if ($a && $b) {
    echo "TEST 1: both a and b are true<br>";
}
else {
    echo "TEST 1: either a or b is false<br>";
}

if ($a and $b) {
    echo "TEST 2: both a and b are true<br>";
}
else {
    echo "TEST 2: either a or b is false<br>";
}

if ($a || $b) {
    echo "TEST 3: either a or b is true<br>";
}
else {
    echo "TEST 3: both a and b are false<br>";
}

if ($a or $b) {
    echo "TEST 4: either a or b is true<br>";
}
else {
    echo "TEST 4: both a and b are false<br>";
}

$a = 10;
$b = 20;

if ($a) {
    echo "TEST 5: a is true<br>";
}
else {
    echo "TEST 5: a is false<br>";
}

if ($b) {
    echo "TEST 6: b is true<br>";
}
else {
    echo "TEST 6: b is false<br>";
}

if (!$a) {
    echo "TEST 7: a is true<br>";
}
else {
    echo "TEST 7: a is false<br>";
}

if (!$b) {
    echo "TEST 8: b is true<br>";
}
else {
    echo "TEST 8: b is false<br>";
}
?>
</body>
</html>