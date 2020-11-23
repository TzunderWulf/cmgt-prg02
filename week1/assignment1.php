<?php
if (date('i') == 01) {
    $minutesString = " minuut";
} else {
    $minutesString = " minuten";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Assignment 1</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>
        <h2>Assignment 1.1</h2>
        <p>Write down the current date in three formats:</p>
        <ul>
            <li>“het is vandaag 1 november 2020” (Met de datum van vandaag).</li>
            <li>“het is vandaag 1/11/2020” (Met de datum van vandaag).</li>
            <li>“het is nu 2 uur en 30 minuten” (of: “het is nu 6 uur en 1 minuut”).</li>
        </ul>

        <h4>First format</h4>
        <p>Het is vandaag <?=date('jS F Y');?>.</p>

        <h4>Second format</h4>
        <p>Het is vandaag <?=date('d/m/y');?>.</p>

        <h4>Third format</h4>
        <p>Het is nu <?=date('H');?> uur en <?= date('i') . $minutesString;?>.</p>
    </body>
</html>

