<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>
<?php
$nameErr = $emailErr = $genderErr = $subjectErr = "";
$name = $email = $gender = $comment = $website = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    }
    else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    }
    else {
        $email = test_input($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["website"])) {
        $website = "";
    }
    else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    }
    else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    }
    else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["subject"])) {
        $subjectErr = "You must select 1 or more";
    }
    else {
        $subject = test_input($_POST["subject"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Tutorials Point Absolute classes registration</h2>

<p><span class="error">* required field.</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table>
        <tr>
            <td>Name:</td>
            <td>
                <input type="text" name="name">
                <span class="error">* <?php echo $nameErr; ?></span>
            </td>
        </tr>

        <tr>
            <td>E-mail:</td>
            <td>
                <input type="text" name="email">
                <span class="error">* <?php echo $emailErr; ?></span>
            </td>
        </tr>

        <tr>
            <td>Specific time:</td>
            <td><input type="text" name="website"></td>
        </tr>

        <tr>
            <td>Class details:</td>
            <td><textarea name="comment" rows="5" cols="40"></textarea></td>
        </tr>

        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <span class="error">* <?php echo $genderErr; ?></span>
            </td>
        </tr>

        <tr>
            <td>Select:</td>
            <td>
                <select name="subject[]" size="4" multiple>
                    <option value="Android">Android</option>
                    <option value="Java">Java</option>
                    <option value="C#">C#</option>
                    <option value="Database">Database</option>
                    <option value="Hadoop">Hadoop</option>
                    <option value="VB Script">VB Script</option>
                </select>
                <span class="error">* <?php echo $subjectErr; ?></span>
            </td>
        </tr>

        <tr>
            <td>Agree:</td>
            <td>
                <input type="checkbox" name="checked" value="1">
                <?php
                if (!isset($_POST["checked"])) {
                    ?>
                    <span class="error">* <?php echo "You must agree to terms"; ?></span>
                    <?php
                }
                ?>
            </td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>

<?php
echo "<h2>Your Given details are as:</h2>";
echo $name;
echo "<br>";

echo $email;
echo "<br>";

echo $website;
echo "<br>";

echo $comment;
echo "<br>";

echo $gender;
echo "<br>";
?>
</body>
</html>