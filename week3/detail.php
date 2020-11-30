<?php
    # contains array of music
    require_once('includes/musicInclude.php');

    # to check if the url isn't empty (value)
    if (!isset($_GET['index']) || empty($_GET['index'])) {
        header('Location: index.php');
        exit();
    }

    $indexNumber = $_GET['index'];
    $album = $albums[$indexNumber];
?>

<html lang="en">
<head>
    <title>Detail</title>
    <link rel="stylesheet" href="stylesheets/stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <h2><?php print_r($album['albumName']);?> by <?php print_r($album['artistName']);?></h2>

    <ul>
        <li>Amount of tracks: <?php print_r($album['tracksAmount']);?></li>
        <li>Album was released in: <?php print_r($album['releaseYear']);?></li>
        <li>Genre(s): empty</li>
    </ul>

    <a href="index.php">Back</a>
</body>
</html>

