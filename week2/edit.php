<?php
    // contains array of music
    include('includes/musicInclude.php');

    // to check if the url isn't empty (value)
    if (!isset($_GET['index']) || empty($_GET['index'])) {
        header('Location: index.php');
        exit();
    }

    $indexNumber = $_GET['index'];
    $album = $albums[$indexNumber];

    // current date
    $currentDateTime = date('d-m-y h:i A');
?>
<html lang="en">
<head>
    <title>Edit</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <h4><?php echo $currentDateTime;?></h4>
    <h2>Edit</h2>

    <form action="editedAlbum.php" method="post">
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

    <a href="index.php">Back</a>
</body>
</html>