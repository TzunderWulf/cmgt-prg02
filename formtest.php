<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formtest</title>
</head>
<body>
    <form action="welcome.php" method="post">
        <label for="firstName">First name:</label><br>
        <input type="text" id="firstName" name="firstName"><br>

        <label for="lastName">Last name:</label><br>
        <input type="text" id="lastName" name="lastName"><br>

        <p>Student or teacher?</p>
        <input type="radio" id="student" name="positionInSchool" value="student">
        <label for="student">Student</label><br>

        <input type="radio" id="teacher" name="positionInSchool" value="teacher">
        <label for="teacher">Teacher</label><br>

        <p>What study?</p>
        <input type="radio" id="it" name="study" value="Informatica">
        <label for="it">Informatica</label><br>

        <input type="radio" id="ti" name="study" value="Technische informatica">
        <label for="ti">Technische informatica</label><br>

        <input type="radio" id="cmgt" name="study" value="Creative Media and Game Technologies">
        <label for="cmgt">Creative Media and Game Technologies</label><br>

        <input type="radio" id="cmd" name="study" value="Communicatie en Mediatechnologie">
        <label for="cmd">Communicatie en Mediatechnologie</label><br>

        <br>
        <input type="reset" value="Reset">
        <input type="submit" value="Submit">

    </form>
</body>
</html>