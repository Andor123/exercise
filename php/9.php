<!DOCTYPE html>
<html>
<head>
    <title>Assignment Operators</title>
</head>
<body>
<?php
$a = 42;
$b = 20;

$c = $a + $b;
echo "Addition Operation Result: $c<br>";

$c += $a;
echo "Add AND Assignment Operation Result: $c<br>";

$c -= $a;
echo "Subtract AND Assignment Operation Result: $c<br>";

$c *= $a;
echo "Multiply AND Assignment Operation Result: $c<br>";

$c /= $a;
echo "Division AND Assignment Operation Result: $c<br>";

$c %= $a;
echo "Modulus AND Assignment Operation Result: $c<br>";
?>
</body>
</html>