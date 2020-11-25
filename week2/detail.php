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
    <title>Detail</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <h2><?php print_r($album['albumName']);?> by <?php print_r($album['artistName']);?></h2>
    <p>The album was released in <?php print_r($album['releaseYear']);?> and has in total
        <?php print_r($album['tracksAmount']);?> songs in the album.</p>

    <a href="index.php">Back</a>
</body>
</html>