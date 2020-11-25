<?php
    include('includes/musicInclude.php');

    # to check if the url isn't empty (value)
    # not working as of now
    if (!isset($_GET['index']) || empty($_GET['index'])) {
        header("assignment1.php");
    }

    $indexNumber = $_GET['index'];
    $album = $albums[$indexNumber];
?>
<html lang="en">
<head>

    <title>Edit</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <h2>Edit</h2>

    <form action="index.php" method="post">
        <label for="artistName">Artist name: </label>
        <input type="text" name="artistName" id="artistName" value="<?php print_r($album['artistName']);?>"><br>

        <label for="albumName">Album name: </label>
        <input type="text" name="albumName" id="albumName" value="<?php print_r($album['albumName']);?>"><br>

        <label for="releaseYear">Release year: </label>
        <input type="number" name="releaseYear" id="releaseYear" value="<?php print_r($album['releaseYear']);?>"><br>

        <label for="amountTracks">Amount of tracks in the album: </label>
        <input type="number" name="amountTracks" id="amountTracks" value="<?php print_r($album['tracksAmount']);?>"><br>


        <input type="submit" name="submit">
    </form>
</body>
</html>
