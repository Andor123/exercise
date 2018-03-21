<?php
$channel=<<<_XML_
<channel>
<text>What's For Dinner</text>
<link>http://menu.example.com</link>
<description>Choose what to eat tonight.</description>
</channel>
_XML_;

echo <<<END
This uses "here document" syntax to output multiple lines with variable
interpolation. Note that the here document terminator must appear on a line with
just a semicolon. No extra whitespace!
END;

print $channel;
?>