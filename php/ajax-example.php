<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpajax";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$age = $_GET["age"];
$wpm = $_GET["wpm"];
$sex = $_GET["sex"];

$age = mysqli_real_escape_string($connection, $age);
$wpm = mysqli_real_escape_string($connection, $wpm);
$sex = mysqli_real_escape_string($connection, $sex);

$query = "SELECT name, age, sex, wpm FROM ajax_example WHERE sex = '$sex'";

if (is_numeric($age))
    $query .= " AND age <= $age";

if (is_numeric($wpm))
    $query .= " AND wpm <= $wpm";

$qry_result = mysqli_query($connection, $query) or die(mysqli_error($connection));

$display_string = "<table>";
$display_string .= "<tr>";
$display_string .= "<th>Name</th>";
$display_string .= "<th>Age</th>";
$display_string .= "<th>Sex</th>";
$display_string .= "<th>WPM</th>";
$display_string .= "</tr>";

while ($row = mysqli_fetch_array($qry_result)) {
    $display_string .= "<tr>";
    $display_string .= "<td>" . $row["name"] . "</td>";
    $display_string .= "<td>" . $row["age"] . "</td>";
    $display_string .= "<td>" . $row["sex"] . "</td>";
    $display_string .= "<td>" . $row["wpm"] . "</td>";
    $display_string .= "</tr>";
}
echo "Query: " . $query . "<br>";

$display_string .= "</table>";
echo $display_string;
?>