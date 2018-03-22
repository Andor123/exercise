<?php
session_start();
if (isset($_SESSION["counter"])) {
    $_SESSION["counter"] = 1;
}
else {
    $_SESSION["counter"]++;
}

$msg = "You have visited this page " . $_SESSION["counter"];
$msg .= " in this session.";

echo $msg;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Setting up a PHP session</title>
</head>
<body>
<p>
    To continue click following link
    <a href="43.php?<?php echo htmlspecialchars(SID)?>"></a>
</p>
</body>
</html>