<?php
require 'includes/config.php';
// PHP validation
// variables
$artistName = $albumName = $releaseYear = $amountTracks = $genre = $albumCover = '';

// error messages
$artistNameErr = $albumNameErr = $amountTracksErr = $releaseYearErr = $albumCoverErr = "";

if (isset($_POST['submit'])) {
    $validForm = true;
    if (!isset($_POST['artistName']) || $_POST['artistName'] === ''){
        $validForm = false;
        $artistNameErr = "Artist name is required";
    } else {
        $artistName = htmlspecialchars($_POST['artistName']);
    }
    if (!isset($_POST['albumName']) || $_POST['albumName'] === ''){
        $validForm = false;
        $albumNameErr = "Album name is required";
    } else {
        $artistName = htmlspecialchars($_POST['albumName']);
    }
    if (!isset($_POST['releaseYear']) || $_POST['releaseYear'] === ''){
        $validForm = false;
        $releaseYearErr = "Release year is required";
    } else {
        $releaseYear = htmlspecialchars($_POST['releaseYear']);
    }
    if (!isset($_POST['amountTracks']) || !is_numeric($_POST['amountTracks'])){
        $validForm = false;
        $amountTracksErr = "Amount of tracks is required and has to be a number";
    } else {
        $amountTracks = htmlspecialchars($_POST['amountTracks']);
    }
    if (!isset($_POST['albumCover']) || $_POST['albumCover'] === '') {
        $albumCoverErr = "Link to album is required.";
    } else {
        $albumCover = htmlspecialchars($_POST['albumCover']);
    }

    if ($validForm) {
        header('Location: index.php');
    }
    $genre = $_POST['genre'];

    if ($validForm) {
        // header('Location: index.php');
        $sql = sprintf("INSERT INTO albums (albumName, artist, year, tracks, genre, albumCover) VALUES (
            '%s', '%s', '%s', '%s', '%s', '%s')",
            $db->real_escape_string($artistName),
            $db->real_escape_string($albumName),
            $db->real_escape_string($releaseYear),
            $db->real_escape_string($amountTracks),
            $db->real_escape_string($genre),
            $db->real_escape_string($albumCover)
        );
        $db->query($sql);
        $db->close();
}
}

$currentDateTime = date('d-m-y h:i A');
?>

<html lang="en">
<head>
    <title>Create</title>
    <link rel="stylesheet" href="stylesheets/stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <h4><?php echo $currentDateTime;?></h4>
    <h2>Create</h2>
    <h3>* is required.</h3>

    <form action="" method="post">
        <div>
            <label for="artistName">Artist name*: </label>
            <input type="text" name="artistName" id="artistName"><br>
            <p class="error"><?=$artistNameErr?></p><br>
        </div>

        <div>
            <label for="albumName">Album name*: </label>
            <input type="text" name="albumName" id="albumName"><br>
            <p class="error"><?=$artistNameErr?></p><br>
        </div>

        <div>
            <label for="releaseYear">Release year*: </label>
            <input type="text" name="releaseYear" id="releaseYear"><br>
            <p class="error"><?=$releaseYearErr?></p><br>
        </div>

        <div>
            <label for="amountTracks">Amount of tracks in the album*: </label>
            <input type="number" name="amountTracks" id="amountTracks"><br>
            <p class="error"><?=$amountTracksErr?></p>
        </div>

        <div>
            <label for="genre">Genre(s): </label>
            <input type="text" name="genre" id="genre">
        </div>

        <div>
            <label for="albumcover">Path to album cover*: </label>
            <input type="text" name="albumcover" id="albumcover">
            <p class="error"><?=$albumCoverErr?></p>
        </div>

        <div>
            <input type="submit" name="submit">
            <input type="reset" name="reset">
        </div>

    </form>

    <a href="index.php">Back</a>
</body>
</html>