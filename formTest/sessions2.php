<?php
session_start();

if(isset($_SESSION['date']) && isset($_SESSION['time'])) {
    // do nothing
} else {
    header('Location: formAnswers.php');
}

?>

<!doctype html>
<html lang="en">

<body>

<h1><?=$_SESSION['date'];?></h1>

<h1><?=$_SESSION['time'];?></h1>

<a href="formtest.php" onclick="<?php
session_unset();
session_destroy();?>">back</a>
</body>
</html>
