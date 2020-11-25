<html lang="en">
<head>

    <title>Edit</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<h2>Create</h2>

    <form action="index.php" method="post">
        <label for="artistName">Artist name: </label>
        <input type="text" name="artistName" id="artistName" required><br>

        <label for="albumName">Album name: </label>
        <input type="text" name="albumName" id="albumName" required><br>

        <label for="releaseYear">Release year: </label>
        <input type="text" name="releaseYear" id="releaseYear" required><br>

        <label for="amountTracks">Amount of tracks in the album: </label>
        <input type="number" name="amountTracks" id="amountTracks" required><br>

        <input type="submit" name="submit">
        <input type="reset" name="reset">

    </form>
</body>
</html>
