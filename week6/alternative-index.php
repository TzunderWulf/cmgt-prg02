<?php
require_once('includes/connect.php');

// get the result set from the database with query
$query = "SELECT * FROM albums";
$result = mysqli_query($db, $query);

$albums = [];
// loop trough with while
while ($row = mysqli_fetch_assoc($result)) {
    $albums[] = $row;
    break;
}

// close connection
mysqli_close($db);

$currentDateTime = date('d-m-y h:i A');
?>

<!doctype html>
<html lang="en">
<head>
    <title>Music Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/alternativeStylesheet.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <h4><?php echo $currentDateTime;?></h4>
    <h2>Albums</h2>

    <p>Continuation of the last two assignment with the albums. The new additions are:</p>
    <ul>
        <li>Database</li>
        <li>An alternative view</li>
    </ul>

    <a href="index.php">Default view</a>
    <a id="create" href="create.php">Create a new album</a>


    <div class="albums">
        <?php foreach ($result as $row) { ?>
            <album>
                <div class="cover">
                    <a href="detail.php?index=<?=$row['id']?>">
                        <img src="<?=$row['cover'];?>" alt="<?=$row['albumCover'];?>"/>
                    </a>
                </div>
                <div class="links">
                    <a class="detail" href="detail.php?index=<?=$row['id']?>"></a>
                </div>
            </album>
        <?php } ?>
    </div>

    <div id="clear"></div>
</main>
</body>
</html>
