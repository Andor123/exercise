<?php
$xml = simplexml_load_file("note.xml") or die("Error: Object Creation failure");
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo $xml->COURSE . "<br>";
echo $xml->COUNTRY . "<br>";
echo $xml->COMPANY . "<br>";
echo $xml->PRICE . "<br>";
?>
</body>
</html>