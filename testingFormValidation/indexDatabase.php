<?php
$name = '';
$password = '';
$gender = '';
$color = '';
$languages = [];
$comments = '';
$tc = '';

if (isset($_POST['submit'])) {
    $validForm = true;
    if (!isset($_POST['name']) || $_POST['name'] === '') {
        $validForm = false;
    } else {
        $name = $_POST['name'];
    };
    if (!isset($_POST['gender']) || $_POST['gender'] === '') {
        $validForm = false;
    } else {
        $gender = $_POST['gender'];
    };
    if (!isset($_POST['color']) || $_POST['color'] === '') {
        $validForm = false;
    } else {
        $color = $_POST['color'];
    }
    if (!isset($_POST['tc']) || $_POST['tc'] === '') {
        $validForm = false;
    } else {
        $tc = $_POST['tc'];
    };

    // when the form is entirely valid
    if ($validForm) {
        $database = new mysqli('', '', '', '');
        $sql = sprintf("INSERT INTO users (name, gender, color) VALUES (
            '%s', '%s', '%s')", 
            $database->real_escape_string($name),
            $database->real_escape_string($gender),
            $database->real_escape_string($color)
        );
        $database->query($sql);
        echo '<p>User added.</p>';
        $database->close();
    };
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Hello</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Username: </label>
        <input type="text" id="name" name="name" value="<?php echo
        htmlspecialchars($name, ENT_QUOTES);
        ?>"><br>

        <label for="gender">Gender: </label>
        <input type="radio" id="gender" name="gender" value="f"<?php
            if ($gender == 'f') {
                echo ' checked';
            }
        ?>>Female
        <input type="radio" id="gender" name="gender" value="m"<?php
            if ($gender == 'm') {
                echo ' checked';
            }
        ?>>Male
        <input type="radio" id="gender" name="gender" value="o"<?php
        if ($gender == 'o') {
            echo ' checked';
        }
        ?>>Other<br>

        <label for="color">Favorite color:</label>
        <select id="color" name="color">
            <option value="">Please select..</option>
            <option value="red"<?php
                if ($color == 'red') {
                    echo ' selected';
                }
            ?>>Red</option>
            <option value="green"<?php
            if ($color == 'green') {
                echo ' selected';
            }
            ?>>Green</option>
            <option value="blue"<?php
            if ($color == 'blue') {
                echo ' selected';
            }
            ?>>Blue</option>
        </select><br>

        <input type="checkbox" id="tc" name="tc" value="ok"<?php
            if ($tc == "ok") {
                echo ' checked';
            }
        ?>><label for="tc">I accept the terms and conditions</label><br>

        <input type="submit" name="submit" value="Register">
    </form>
</body>

</html>
