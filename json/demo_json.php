<?php
if (isset($_REQUEST["x"])) {
    $x = $_REQUEST["x"];
    $json = json_decode($x);
    echo "demo_json.php:<br><br>";
    echo $json->name . " from " . $json->city . " is " . $json->age;
}
?>