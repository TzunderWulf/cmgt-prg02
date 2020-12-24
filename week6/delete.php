<?php
    // contains array of music
    require_once('includes/musicInclude.php');
    require_once('includes/config.php');

    if (isset($_GET['index']) && ctype_digit($_GET['index'])) {
        $indexNumber = $_GET['index'];
    } else {
        header('Location: index.php');
    }

    // get the result set from the database with query
    $query = "DELETE FROM albums WHERE id = $indexNumber";
    $db->query($query);

    // close connection
    $db->close();

    header('Location: index.php');
?>
