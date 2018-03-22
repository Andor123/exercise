<?php
if (isset($_FILES["image"])) {
    $errors = array();
    $file_name = $_FILES["image"]["name"];
    $file_size = $_FILES["image"]["size"];
    $file_tmp = $_FILES["image"]["tmp_name"];
    $file_type = $_FILES["image"]["type"];
    $file_ext = strtolower(end(explode('.', $_FILES["image"]["name"])));

    $expensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext,$expensions) === false) {
        $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = "File size must be exactly 2 MB.";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "images/".$file_name);
        echo "Success";
    }
    else {
        print_r($errors);
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">

    <?php
    if (isset($_FILES["image"])) {
        ?>
        <ul>
            <li>Sent File: <?php echo $_FILES["image"]["name"] ?></li>
            <li>File Size: <?php echo $_FILES["image"]["size"] ?></li>
            <li>File Type: <?php echo $_FILES["image"]["name"] ?></li>
        </ul>
        <?php
    }
    ?>
</form>
</body>
</html>