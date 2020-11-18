<?php
echo "Assignment 1.1";

# write the current date in multiple different notations

$dateToday = date('jS F Y');
echo "<br/>It is today " . $dateToday;

$dateToday2 = date('d/m/y');
echo "<br/>It is today " . $dateToday2;

$timeHour = date('H');
$timeMinute= date('m');
echo "<br/>It is now " . $timeHour . " hour and " . $timeMinute . " minutes.";
echo "<br/>";
echo "<br/>";

echo "Assignment 1.2";

# Greet an user based on time (goodmorning, goodafternoon, goodevening, goodnight)

$currentTime = date('H:m');
function greeting() {
    $timeGreeting = date('G');
    if ($timeGreeting >= 6 && $timeGreeting < 12) {
        $greeting = "morning";
    } elseif ($timeGreeting >= 12 && $timeGreeting < 18) {
        $greeting = "afternoon";
    } elseif ($timeGreeting >= 18 && $timeGreeting < 22) {
        $greeting = "evening";
    } else {
        $greeting = "night";
    }
    return $greeting;
}

echo "<br/>It is currently " . $currentTime . ", good" . greeting() . " user!";
echo "<br/>";
echo "<br/>";

echo "Assignment 1.3";

# Make an overview with music albums. The information comes out of an associative array. 
# Push the data out in an table

echo "<br/>";
# name artist and album, release year and amount of tracks
$musicAlbums = ["1" => array("artistName" => "Panic! at the Disco", "albumName" => "A Fever You Can't Sweat Out", "releaseYear" => 2005, "tracksAmount" => 13),
                "2" => array("artistName" => "Panic! at the Disco", "albumName" => "Pretty. Odd.", "releaseYear" => 2008, "tracksAmount" =>15),
                "3" => array("artistName" => "Panic! at the Disco", "albumName" => "Vices & Virtues", "releaseYear" => 2011, "tracksAmount" => 10),
                "4" => array("artistName" => "Panic! at the Disco", "albumName" => "Too Weird to Live, Too Rare to Die!", "releaseYear" => 2013, "tracksAmount" =>10),
                "5" => array("artistName" => "Panic! at the Disco", "albumName" => "Death of a Bachelor", "releaseYear" => 2016, "tracksAmount" => 11),
                "6" => array("artistName" => "Panic! at the Disco", "albumName" => "Pray for the Wicked", "releaseYear" => 2018, "tracksAmount" => 11)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Number</th>
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
