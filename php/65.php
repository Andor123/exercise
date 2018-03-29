<?php
$html = "
<head>
<title>Tutorialspoint</title>
</head>

<body>
<h2>Course details</h2>

<table border='0'>
<tbody>
<tr>
<td>Android</td>
<td>Gopal</td>
<td>Sairam</td>
</tr>

<tr>
<td>Hadoop</td>
<td>Gopal</td>
<td>Satish</td>
</tr>

<tr>
<td>HTML</td>
<td>Gopal</td>
<td>Raju</td>
</tr>

<tr>
<td>Web Technologies</td>
<td>Gopal</td>
<td>Javed</td>
</tr>

<tr>
<td>Graphic</td>
<td>Gopal</td>
<td>Satish</td>
</tr>

<tr>
<td>Writer</td>
<td>Kiran</td>
<td>Amith</td>
</tr>

<tr>
<td>Writer</td>
<td>Kiran</td>
<td>Vineeth</td>
</tr>
</tbody>
</table>
</body>
";

$dom = new domDocument();

$dom->loadHTML($html);

$dom->preserveWhiteSpace = false;

$tables = $dom->getElementsByTagName("table");

$rows = $tables->item(0)->getElementsByTagName("tr");

foreach ($rows as $row) {
    $cols = $row->getElementsByTagName("td");

    echo "Designation: " . $cols->item(0)->nodeValue . "<br>";
    echo "Manager: " . $cols->item(1)->nodeValue . "<br>";
    echo "Team: " . $cols->item(2)->nodeValue . "<hr>";
}
?>