<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>bruh session</title>
</head>

<body>
<?php
$_SESSION['date'] = "21-02-2020";
$_SESSION['time'] = "14:40";
echo "SESSION SET"
?>

<a href="sessions2.php">go to dem sesisons</a>

</body>
</html>
