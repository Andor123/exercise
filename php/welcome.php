<?php
include "session.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
<h1>Welcome <?php echo $login_session; ?></h1>
<h2><a href="logout2.php">Sign Out</a></h2>
</body>
</html>