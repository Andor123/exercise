<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,th,td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td {
            padding: 5px;
        }
    </style>
</head>
<body>
<?php
$q = intval($_GET["q"]);

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "ajax_demo");

$con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
if (!$con) {
    die("Could not connect: " . mysqli_error($con));
}

$sql = "SELECT * FROM customers WHERE CustomerID = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>CustomerID</th>
<th>CompanyName</th>
<th>ContactName</th>
<th>Address</th>
<th>City</th>
<th>PostalCode</th>
<th>Country</th>
</tr>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["CustomerID"] . "</td>";
    echo "<td>" . $row["CompanyName"] . "</td>";
    echo "<td>" . $row["ContactName"] . "</td>";
    echo "<td>" . $row["Address"] . "</td>";
    echo "<td>" . $row["City"] . "</td>";
    echo "<td>" . $row["PostalCode"] . "</td>";
    echo "<td>" . $row["Country"] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>