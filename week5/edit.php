<?php
require_once('includes/connect.php'); // to connect to database

$indexNumber = $_GET['index'];

// get the result set from the database with query
$query = "SELECT * FROM albums WHERE id = $indexNumber";
$result = mysqli_query($db, $query);

$album = [];

// loop trough with while
while ($row = mysqli_fetch_assoc($result)) {
    $album[$indexNumber] = $row;
    break;
}

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
        $albumName = htmlspecialchars($_POST['albumName']);
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
    if (!isset($_POST['albumcover']) || $_POST['albumcover'] === '') {
        $albumCoverErr = "Link to album is required.";
    } else {
        $albumCover = htmlspecialchars($_POST['albumcover']);
    }
    $genre = $_POST['genre'];

    if ($validForm) {
        header('Location: index.php');
        $sql = sprintf("UPDATE albums
                            SET album = '%s',
                                artist = '%s',
                                year = '%s', 
                                tracks = '%s', 
                                genre= '%s', 
                                cover = '%s'
                                WHERE id = $indexNumber",
                            $db -> real_escape_string($albumName),
                            $db -> real_escape_string($artistName),
                            $db -> real_escape_string($releaseYear),
                            $db -> real_escape_string($amountTracks),
                            $db -> real_escape_string($genre),
                            $db -> real_escape_string($albumCover)

        );
        $db->query($sql);
        $db->close();
}
}

$currentDateTime = date('d-m-y h:i A');
?>
<html lang="en">
<head>
    <title>Edit</title>
    <link rel="stylesheet" href="stylesheets/stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <h4><?php echo $currentDateTime;?></h4>
    <h2>Edit</h2>

    <form action="" method="post">
        <div>
            <label for="albumName">Album name*: </label>
            <input type="text" name="albumName" id="albumName" value="<?php print_r($row['album']);?>"><br>
            <p class="error"><?=$albumNameErr?></p><br>
        </div>

        <div>
            <label for="artistName">Artist name*: </label>
            <input type="text" name="artistName" id="artistName" value="<?php print_r($row['artist']);?>"><br>
            <p class="error"><?=$artistNameErr?></p><br>
        </div>

        <div>
            <label for="releaseYear">Release year*: </label>
            <input type="text" name="releaseYear" id="releaseYear" value="<?php print_r($row['year']);?>"><br>
            <p class="error"><?=$releaseYearErr?></p><br>
        </div>

        <div>
            <label for="amountTracks">Amount of tracks in the album*: </label>
            <input type="number" name="amountTracks" id="amountTracks" value="<?php print_r($row['tracks']);?>"><br>
            <p class="error"><?=$amountTracksErr?></p>
        </div>

        <div>
            <label for="genre">Genre(s): </label>
            <input type="text" name="genre" id="genre" value="<?php print_r($row['genre']);?>">
        </div>

        <div>
            <label for="albumcover">Path to album cover*: </label>
            <input type="text" name="albumcover" id="albumcover" value="<?php print_r($row['cover']);?>">
            <p class="error"><?=$albumCoverErr?></p>
        </div>

        <div>
            <input type="submit" name="submit">
            <input type="reset" name="reset">
        </div>
    </form>

    <a href="index.php">Back</a><br>
    <a href="alternativeIndex.php">Back to alternative view</a>
</body>
</html>