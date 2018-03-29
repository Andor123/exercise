<?php

$tutors = array();
$elements = null;

function startElements($parser, $name, $attrs) {
    global $tutors, $elements;

    if (!empty($name)) {
        if ($name == "COURSE") {
            $tutors[] = array();
        }
        $elements = $name;
    }
}

function endElements($parser, $name) {
    global $elements;

    if (!empty($name)) {
        $elements = null;
    }
}

function characterData($parser, $data) {
    global $tutors, $elements;

    if (!empty($data)) {
        if ($elements == "NAME" || $elements == "COUNTRY"
            || $elements == "EMAIL" || $elements == "PHONE") {
            $tutors[count($tutors)-1][$elements] = trim($data);
        }
    }
}

$parser = xml_parser_create();

xml_set_element_handler($parser, "startElements", "endElements");
xml_set_character_data_handler($parser, "characterData");

if (!($handle = fopen("sax.xml", "r"))) {
    die("Could not open XML input");
}

while ($data = fread($handle, 4096)) {
    xml_parse($parser, $data);
}

xml_parser_free($parser);
$i = 1;

foreach ($tutors as $course) {
    echo "course No - " . $i . "<br>";
    echo "course Name - " . $course["NAME"] . "<br>";
    echo "Country - " . $course["COUNTRY"] . "<br>";
    echo "Email - " . $course["EMAIL"] . "<br>";
    echo "Phone - " . $course["PHONE"] . "<hr>";
    $i++;
}

?>