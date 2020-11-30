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

// current date and time
$currentDateTime = date('d-m-y h:i A');
?>

<html lang="en">
<head>
    <title>Detail</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <h4><?php echo $currentDateTime;?></h4>
    <h2><?php print_r($album['albumName']);?> by <?php print_r($album['artistName']);?></h2>

    <ul>
        <li>Amount of tracks: <?php print_r($album['tracksAmount']);?></li>
        <li>Album was released in: <?php print_r($album['releaseYear']);?></li>
    </ul>

    <a href="index.php">Back</a>
</body>
</html>

