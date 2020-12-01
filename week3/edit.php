<?php
# contains array of music
require_once('includes/musicInclude.php');
require_once('includes/connect.php');

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


// close connection
$db->close();

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

    <form action="editedAlbum.php" method="post">
        <label for="artistName">Artist name: </label>
        <input type="text" name="artistName" id="artistName" value="<?php print_r($row['artist']);?>"><br>

        <label for="albumName">Album name: </label>
        <input type="text" name="albumName" id="albumName" value="<?php print_r($row['albumName']);?>"><br>

        <label for="releaseYear">Release year: </label>
        <input type="number" name="releaseYear" id="releaseYear" value="<?php print_r($row['year']);?>"><br>

        <label for="amountTracks">Amount of tracks in the album: </label>
        <input type="number" name="amountTracks" id="amountTracks" value="<?php print_r($row['tracks']);?>"><br>

        <label for="amountTracks">Genre(s): </label>
        <input type="text" name="genre" id="genre" value="<?php print_r($row['genre']);?>"><br>


        <input type="submit" name="submit">
    </form>

    <a href="index.php">Back</a><br>
    <a href="alternativeIndex.php">Back to alternative view</a>
</body>
</html>