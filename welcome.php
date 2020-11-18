<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>
</head>
<body>
    <p>Welcome, <?php echo $_POST["firstName"] . " " . $_POST["lastName"]?>!</p>
    <p>You are a <?php echo $_POST["positionInSchool"] . " and part of the following study " . $_POST["study"]?>.</p>
</body>
</html>