<?php
if (isset($_REQUEST["t"])) {
    echo "<p>This content was requested using the GET method.</p>";
    echo "<p>Requested at: " . date("Y-m-d H:i:s") . "</p>";
}
?>