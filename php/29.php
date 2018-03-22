<?php
if (isset($_REQUEST["name"]) || isset($_REQUEST["age"])) {
    echo "Welcome " . $_REQUEST["name"] . "<br>";
    echo "You are " . $_REQUEST["age"] . " years old.";

    exit();
}
?>
<!DOCTYPE html>
<html>
<body>
<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
    Name: <input type="text" name="name">
    Age: <input type="text" name="age">
    <input type="submit">
</form>
</body>
</html>