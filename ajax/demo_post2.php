<?php
if (isset($_REQUEST["fname"]) && isset($_REQUEST['lname'])) {
    echo "<p>Hello " . $_REQUEST['fname'] . " " . $_REQUEST['lname'] . "</p>";
}
?>