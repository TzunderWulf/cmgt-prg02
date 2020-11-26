<?php
    # define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";
    $nameErr = $emailErr = $genderErr = $websiteErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty ($_POST["name"])) {
            $nameErr = "Name is required.";
        } else {
            $name = test_input($_POST["name"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form validation</title>
    </head>

    <body>
        <h1>Form validation in PHP</h1>

        <form method="post" action="formAnswers.php">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
            <?php echo $nameErr; ?>

            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>