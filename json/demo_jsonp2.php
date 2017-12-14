<?php
if (isset($_GET["callback"])) {
    $myJSON = '{ "name":"John", "age":30, "city":"New York" }';

    echo "myDisplayFunction(" . $myJSON . ");";
}
?>