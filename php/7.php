<!DOCTYPE html>
<html>
<head>
    <title>Comparison Operators</title>
</head>
<body>
<?php
$a = 42;
$b = 20;

if ($a == $b) {
    echo "TEST 1: a is equal to b<br>";
}
else {
    echo "TEST 1: a is not equal to b<br>";
}

if ($a > $b) {
    echo "TEST 2: a is greater than b<br>";
}
else {
    echo "TEST 2: a is not greater than b<br>";
}

if ($a < $b) {
    echo "TEST 3: a is less than b<br>";
}
else {
    echo "TEST 3: a is not less than b<br>";
}

if ($a != $b) {
    echo "TEST 4: a is not equal to b<br>";
}
else {
    echo "TEST 4: a is equal to b<br>";
}

if ($a >= $b) {
    echo "TEST 5: a is either greater then or equal to b<br>";
}
else {
    echo "TEST 5: a is neither greater than nor equal to b<br>";
}

if ($a <= $b) {
    echo "TEST 6: a is either less then or equal to b<br>";
}
else {
    echo "TEST 6: a is neither less than nor equal to b<br>";
}
?>
</body>
</html>