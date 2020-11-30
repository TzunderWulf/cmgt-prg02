<?php
# PHP validation
$artistName = $albumName = $releaseYear = $amountTracks = "";
$artistNameErr = $albumNameErr = $releaseYearErr = $amountTracksErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["artistName"])) {
        $artistNameErr = "* Artist name is required";
    } else {
        $artistName = test_input($_POST["artistName"]);
    }
    if (empty($_POST["albumName"])) {
        $albumNameErr = "* Album name is required";
    } else {
        $albumName = test_input($_POST["albumName"]);
    }
    if (empty($_POST["releaseYear"])) {
        $releaseYearErr = "* Release year is required";
    } else {
        $releaseYear = test_input($_POST["releaseYear"]);
    }
    if (empty($_POST["amountTracks"])) {
        $amountTracksErr = "* Amount of tracks is required";
    } else {
        $amountTracks = test_input($_POST["amountTracks"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<html lang="en">
<head>
    <title>Create</title>
    <link rel="stylesheet" href="stylesheets/stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <h2>Create</h2>
    <h3>* is required.</h3>

    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label for="artistName">Artist name*: </label>
        <input type="text" name="artistName" id="artistName"><br>
        <p class="error"><?=$artistNameErr?></p><br>

        <label for="albumName">Album name*: </label>
        <input type="text" name="albumName" id="albumName"><br>
        <p class="error"><?=$artistNameErr?></p><br>

        <label for="releaseYear">Release year*: </label>
        <input type="text" name="releaseYear" id="releaseYear"><br>
        <p class="error"><?=$releaseYearErr?></p><br>

        <label for="amountTracks">Amount of tracks in the album*: </label>
        <input type="number" name="amountTracks" id="amountTracks"><br>
        <p class="error"><?=$amountTracksErr?></p><br>

        <label for="genre">Genre(s): </label>
        <input type="text" name="genre" id="genre"><br>

        <input type="submit" name="submit">
        <input type="reset" name="reset">

    </form>

    <a href="index.php">Back</a>
</body>
</html>