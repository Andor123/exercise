<!DOCTYPE html>
<html>
<head>
    <title>Accessing Cookies with PHP</title>
</head>
<body>
<?php
if (isset($_COOKIE["name"]))
    echo "Welcome " . $_COOKIE["name"] . "<br>";
else
    echo "Sorry... Not recognised" . "<br>";

if (isset($_COOKIE["age"]))
    echo "You are " . $_COOKIE["age"] . " years old<br>";
else
    echo "Sorry... Not recognised" . "<br>";
?>
</body>
</html>