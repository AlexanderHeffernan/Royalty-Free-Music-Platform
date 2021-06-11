<?php

    $result = mysqli_query($connection, "SELECT * FROM songs");

    if (mysqli_num_rows($result) > 0) {
        echo "<table id='songsTable'><tr><th>id</th><th>directory</th><th>title</th><th>artist</th><th>cover</th><th>listens</th><th>downloads</th><th>duration</th><th>genre</th><th>mood</th><th>instrument</th><th>date</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["directory"] . "</td><td>" . $row["title"] . "</td><td>" . $row["artist"] . "</td><td>" . $row["cover"] . "</td><td>" . $row["listens"] . "</td><td>" . $row["downloads"] . "</td><td>" . $row["duration"] . "</td><td>" . $row["genre"] . "</td><td>" . $row["mood"] . "</td><td>" . $row["instrument"] . "</td><td>" . $row["date"] . "</td></tr>";
        }
        echo "</table>";
    }
?>