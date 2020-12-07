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
    <title>Detail</title>
    <link rel="stylesheet" href="stylesheets/stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<h4><?php echo $currentDateTime; ?></h4>
<h2><?php print_r($row['albumName']); ?> by <?php print_r($row['artist']); ?></h2>

<img class="detailImage ¶" src="<?=$row['albumCover'];?>"
     alt="<?php print_r($row['albumName']);?>">

<ul>
    <li>Amount of tracks: <?php print_r($row['tracks']); ?></li>
    <li>Album was released in: <?php print_r($row['year']); ?></li>
    <li>Genre(s): <?php print_r($row['genre']); ?></li>
</ul>

<a href="index.php">Back</a><br>
<a href="alternativeIndex.php">Back to alternative view</a>
</body>
</html>

