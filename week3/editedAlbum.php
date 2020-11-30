<?php
    # contains array of music
    include('includes/musicInclude.php');
?>

<html lang="en">
    <head>
        <title>Edit</title>
        <link rel="stylesheet" href="stylesheets/stylesheet.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>
        <h2>Edited album</h2>

        <p><?php echo $_POST["albumName"];?> was an album by <?=$_POST["artistName"];?></p>
        <p>The album has a total of <?php echo $_POST["amountTracks"];?> tracks
            and was released in <?=$_POST["releaseYear"]?>.</p>

        <a href="index.php">Back</a>
    </body>
</html>

