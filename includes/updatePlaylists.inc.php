<?php
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    session_start();

    $userID = $_SESSION["userid"];
    $newPlaylistString = $_POST['newPlaylistString'];

    $sql = "UPDATE users SET Playlists = '$newPlaylistString' WHERE usersId = '$userID'";
    if($connection->query($sql)===TRUE){
        echo "DATA updated";
    }

    $_SESSION["usersPlaylists"] = $newPlaylistString;
    exit();

    