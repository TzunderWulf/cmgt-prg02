<?php
    require_once('includes/musicInclude.php');
    require_once('includes/connect.php');

    // get the result set from the database with query
    $query = "SELECT * FROM albums";
    $result = mysqli_query($db, $query);

    $albums = [];
    // loop trough with while
    while($row = mysqli_fetch_assoc($result)) {
        $albums[] = $row;
        break;
    }

    // close connection
    $db->close();

    $currentDateTime = date('d-m-y h:i A');
?>

<html lang="en">
<head>
    <title>Week 3</title>
    <link rel="stylesheet" href="stylesheets/stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <h4><?php echo $currentDateTime;?></h4>
    <h2>Albums</h2>
    <p>Continuation of the last two assignment with the albums. The new additions are:</p>
    <ul>
        <li>Database</li>
        <li>An alternative view</li>
    </ul>

    <a href="alternativeIndex.php">Alternative</a>
    <a id="create" href="create.php">Create a new album</a>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Albumcover</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Release year</th>
        <th>Number of tracks</th>
        <th>Genre(s)</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $row) { ?>
        <tr>
            <td><?php print_r($row['id']);?></td>
            <td class="image"><img src="<?=$row['albumCover'];?>"
                 alt="<?php print_r($row['albumName']);?>"></td>
            <td><?php print_r($row['artist']);?></td>
            <td><?php print_r($row['albumName']);?></td>
            <td><?php print_r($row['year']);?></td>
            <td><?php print_r($row['tracks']);?></td>
            <td><?php print_r($row['genre']);?></td>
            <td><a href="detail.php?index=<?=$row['id']?>">Details</a></td>
            <td><a href="edit.php?index=<?=$row['id']?>">Edit</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>