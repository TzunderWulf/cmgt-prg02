<?php
    include('includes/musicInclude.php');

    $currentDateTime = date('d-m-y h:i');
?>

<html lang="gb">
<head>
    <title>Week 2</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <h4><?php echo $currentDateTime;?></h4>
    <h2>Albums</h2>
    <p>Continuation of the last assignment (1.3) with the albums. The new additions are:</p>
    <ul>
        <li>A create button for creating new albums.</li>
        <li>A edit button to edit the current albums.</li>
        <li>A detail button to see details about a specific album.</li>
    </ul>

<a id="create" href="create.php">Create a new album</a>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Release year</th>
        <th>Number of tracks</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($albums as $index => $album) { ?>
        <tr>
            <td><?=$index + 1;?></td>
            <td><?=$album['artistName'];?></td>
            <td><?=$album['albumName'];?></td>
            <td><?=$album['releaseYear'];?></td>
            <td><?=$album['tracksAmount'];?></td>
            <td><a href="detail.php?index=<?=$index?>">Details</a></td>
            <td><a href="edit.php?index=<?=$index?>">Edit</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
