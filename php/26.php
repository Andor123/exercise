<?php
if (isset($_POST["name"]) || isset($_POST["age"])) {
    if (preg_match("/[^A-Za-z'-]/", $_POST["name"])) {
        die ("Invalid name and name should be alpha");
    }

    echo "Welcome " . $_POST["name"] . "<br>";
    echo "You are " . $_POST["age"] . " years old.";

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