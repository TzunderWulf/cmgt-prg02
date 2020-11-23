<?php
$musicAlbums = [
    "1" => ["artistName" => "Panic! at the Disco",
            "albumName" => "A Fever You Can't Sweat Out",
            "releaseYear" => '2005',
            "tracksAmount" => '13'
           ],
    "2" => ["artistName" => "Panic! at the Disco",
            "albumName" => "Pretty. Odd.",
            "releaseYear" => '2008',
            "tracksAmount" => '15'
           ],
    "3" => ["artistName" => "Panic! at the Disco",
            "albumName" => "Vices & Virtues",
            "releaseYear" => '2011',
            "tracksAmount" => '10'
           ],
    "4" => ["artistName" => "Panic! at the Disco",
            "albumName" => "Too Weird to Live, Too Rare to Die!",
            "releaseYear" => '2013',
            "tracksAmount" => '10'
           ],
    "5" => ["artistName" => "Panic! at the Disco",
            "albumName" => "Death of a Bachelor",
            "releaseYear" => '2016',
            "tracksAmount" => '11'
           ],
    "6" => ["artistName" => "Panic! at the Disco",
            "albumName" => "Pray for the Wicked",
            "releaseYear" => '2018',
            "tracksAmount" => '11'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Assignment 3</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>
        <h2>Assignment 1.3</h2>
        <p>Show an overview of albums, the information is taken from an (associative)
           array. The information is shown in an table with the following information:</p>
        <ul>
            <li>name of the artist;</li>
            <li>name of the album;</li>
            <li>year of release;</li>
            <li>amount of tracks.</li>
        </ul>
        <p>Each odd row has an gray background and white letters.</p>

        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Artist</th>
                <th>Album name</th>
                <th>Release year</th>
                <th>Amount of tracks</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($musicAlbums as $value => $album) { ?>
                <tr>
                    <td><?=$value;?></td>
                    <td><?=$album['artistName'];?></td>
                    <td><?=$album['albumName']; ?></td>
                    <td><?=$album['releaseYear']; ?></td>
                    <td><?=$album['tracksAmount']; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </body>
</html>
