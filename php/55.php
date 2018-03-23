<?php
try {
    $error = "Always throw this error";
    throw new Exception($error);

    echo "Never executed";
}
catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "\n";
}

echo "Hello World";
?>