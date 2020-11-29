<?php
// variables
$artistName = '';
$albumName = '';
$releaseYear = '';
$amountTracks = '';

// error messages
$artistNameErr = "";
$albumNameErr = "";
$amountTracksErr = "";
$releaseYearErr = "";

// php validation
if (isset($_POST['submit'])) {
    $validForm = true;
    if (!isset($_POST['artistName']) || $_POST['artistName'] === ''){
        $validForm = false;
        $artistNameErr = "Artist name is required";
    } else {
        $artistName = $_POST['artistName'];
    }
    if (!isset($_POST['albumName']) || $_POST['albumName'] === ''){
        $validForm = false;
        $albumNameErr = "Album name is required";
    } else {
        $artistName = $_POST['albumName'];
    }
    if (!isset($_POST['releaseYear']) || $_POST['releaseYear'] === ''){
        $validForm = false;
        $releaseYearErr = "Release year is required";
    } else {
        $releaseYear = $_POST['releaseYear'];
    }
    if (!isset($_POST['amountTracks']) || !is_numeric($_POST['amountTracks'])){
        $validForm = false;
        $amountTracksErr = "Amount of tracks is required and has to be a number";
    } else {
        $amountTracks = $_POST['amountTracks'];
    }
    if ($validForm) {
        header('Location: index.php');
    }
}

// current date and time
$currentDateTime = date('d-m-y h:i A');
?>

<html lang="en">
<head>
    <title>Create</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <h4><?php echo $currentDateTime;?></h4>
    <h2>Create</h2>
    <h3>* is required.</h3>

    <form action="" method="post">
        <label for="artistName">Artist name*: </label>
        <input type="text" name="artistName" id="artistName"><br>
        <p class="error"><?=$artistNameErr?></p><br>

        <label for="albumName">Album name*: </label>
        <input type="text" name="albumName" id="albumName"><br>
        <p class="error"><?=$albumNameErr?></p><br>

        <label for="releaseYear">Release year*: </label>
        <input type="text" name="releaseYear" id="releaseYear"><br>
        <p class="error"><?=$releaseYearErr?></p><br>

        <label for="amountTracks">Amount of tracks in the album*: </label>
        <input type="number" name="amountTracks" id="amountTracks"><br>
        <p class="error"><?=$amountTracksErr?></p><br>

        <input type="submit" name="submit">
        <input type="reset" name="reset">
    </form>

    <a href="index.php">Back</a>
</body>
</html>