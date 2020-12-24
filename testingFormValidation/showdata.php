<?php
$database = new mysqli('localhost', 'root', '', 'mydb');

// get the result set from the database with query
$query = "SELECT * FROM users";
$result = mysqli_query($database, $query);

$users = [];
// loop trough with while
while($row = mysqli_fetch_assoc($result)) {
    $user[] = $row;
    break;
}

$query2 = "INSERT INTO personal (userid)
            VALUES (users.id)";
$result2 = mysqli_query($database, $query2);

$personal = [];
while($row2 = mysqli_fetch_assoc($result2)) {
    $personal[] = $row2;
    break;
}

$database->close();

$currentDateTime = date('d-m-y h:i A');
?>

<body>
<p>id userid name gender</p>
<?php foreach ($result2 as $row2) { ?>
    <p><?=$row2['id']?> <?=$row2['userid']?> <?=$row2['name']?> <?=$row2['uname']?> <?=$row2['gender']?> <?=$row2['color']?></p>
<?php } ?>


</body>
