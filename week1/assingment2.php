<?php
if (date('G') <= 12) {
    $greetingWord = "morgen!";
} elseif (date('G') <= 18) {
    $greetingWord = "middag!";
} elseif (date('G') <= 22) {
    $greetingWord = "navond";
} else {
    $greetingWord = "nacht";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Assignment 2</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>
        <h2>Assignment 1.2</h2>
        <p>Greet the user based on the time.</p>

        <p>Goede<?=$greetingWord;?></p>
    </body>
</html>