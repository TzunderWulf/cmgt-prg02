<?php
    # define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";
    $nameErr = $emailErr = $genderErr = $websiteErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "* Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


$sentence = '0612345678';
$string = '-';
$position = '2';

echo substr_replace($sentence, $string, 2, 0);

?>

<html>
    <head>
        <title>Form validation</title>
    </head>

    <body>
        <h2>Form validation in PHP</h2>
        <p>I can now validate forms in PHP.</p>

        <p>* represent a required field</p>

        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="name">* Name: </label>
            <input type="text" name="name" id="name">
            <p class="error"><?= $nameErr;?></p>

            <input type="submit">
        </form>

        <style>
            .error {
                color: red;
            }
        </style>
    </body>
</html>
