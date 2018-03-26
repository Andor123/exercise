<?php
$a[] = "Android";
$a[] = "B programming language";
$a[] = "C programming language";
$a[] = "D programming language";
$a[] = "Euphoria";
$a[] = "F#";
$a[] = "GWT";
$a[] = "HTML5";
$a[] = "Ibatis";
$a[] = "Java";
$a[] = "K programming language";
$a[] = "Lisp";
$a[] = "Microsoft technologies";
$a[] = "Networking";
$a[] = "Open Source";
$a[] = "Prototype";
$a[] = "QC";
$a[] = "RESTful web services";
$a[] = "Scrum";
$a[] = "Testing";
$a[] = "UML";
$a[] = "VB Script";
$a[] = "Web Technologies";
$a[] = "Xerox Technology";
$a[] = "YQL";
$a[] = "ZOPL";

$q = $_REQUEST["q"];
$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);

    foreach ($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            }
            else {
                $hint = "";
            }
        }
    }
}
echo $hint === "" ? "Please enter a valid course name" : $hint;
?>