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
    if (!isset($_POST['password']) || $_POST['password'] === '') {
        $validForm = false;
    } else {
        $password = $_POST['password'];
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
    };
    if (!isset($_POST['languages']) || !is_array($_POST['languages']) || count($_POST['languages']) == 0) {
        $validForm = false;
    } else {
        $languages = $_POST['languages'];
    };
    if (isset($_POST['comments'])) {
        $comments = $_POST['comments'];
    };
    if (!isset($_POST['tc']) || $_POST['tc' === '']) {
        $validForm = false;
    } else {
        $tc = $_POST['tc'];
    };


    // when the form is entirely valid
    if ($validForm) {
        printf(
            'Username: %s
        <br>Password: %s
        <br>Gender: %s
        <br>Color: %s
        <br>Language(s): %s
        <br>Comments: %s
        <br>Terms and conditions: %s',
            htmlspecialchars($name, ENT_QUOTES),
            htmlspecialchars($password, ENT_QUOTES),
            htmlspecialchars($gender, ENT_QUOTES),
            htmlspecialchars($color, ENT_QUOTES),
            htmlspecialchars(implode(' ', $languages), ENT_QUOTES),
            htmlspecialchars($comments, ENT_QUOTES),
            htmlspecialchars($tc, ENT_QUOTES)
        );
    }
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
        <input type="text" id="name" name="name"><br>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password"><br>
        <label for="gender">Gender: </label>
        <input type="radio" id="gender" name="gender" value="f">Female
        <input type="radio" id="gender" name="gender" value="m">Male
        <input type="radio" id="gender" name="gender" value="o">Other<br>
        <label for="color">Favorite color:</label>
        <select id="color" name="color">
            <option value="">Please select..</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select><br>
        <label for="languages">Languages spoken: </label>
        <select id="languages" name="languages[]" multiple><br>
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="it">Italian</option>
        </select><br>
        <label for="comments">Comments: </label><br>
        <textarea id="comments" name="comments"></textarea><br>
        <input type="checkbox" id="tc" name="tc" value="ok"><label for="tc">I accept the terms and conditions</label><br>

        <input type="submit" name="submit" value="Register">
    </form>
</body>

</html>
