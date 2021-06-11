<?php

function emptyInputSignup($username, $email, $password, $passwordRepeat) {
    $result;
    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username) {
    $result;
    if (preg_match('/[^A-Za-z0-9_ -]/', $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $passwordRepeat) {
    $result;
    if($password !== $passwordRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function usernameExists($connection, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUsername = ? OR usersEmail = ?;";
    $statement = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($statement, $sql)) {
        header("location: ../login.php?error=statementFailed");
        exit();
    }

    mysqli_stmt_bind_param($statement, "ss", $username, $email);
    mysqli_stmt_execute($statement);

    $resultData = mysqli_stmt_get_result($statement);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($statement);
}

function createUser($connection, $username, $email, $password) {
    $sql = "INSERT INTO users (usersUsername, usersEmail, usersPassword) VALUES (?, ?, ?);";
    $statement = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($statement, $sql)) {
        header("location: ../login.php?error=statementFailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($statement, "sss", $username, $email, $hashedPassword);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    header("location: ../login.php?error=none");
    exit();
}

function emptyInputLogin($username, $password) {
    $result;
    if(empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($connection, $username, $password) {
    $usernameExists = usernameExists($connection, $username, $username);

    if ($usernameExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $passwordHashed = $usernameExists["usersPassword"];
    $checkPassword = password_verify($password, $passwordHashed);

    if($checkPassword === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if($checkPassword === true) {
        session_start();
        $_SESSION["userid"] = $usernameExists["usersId"];
        $_SESSION["usersUsername"] = $usernameExists["usersUsername"];
        header("location: ../index.php");
        exit();
    }
}

function emptyInputSongUpload($title, $artist) {
    $result;
    if(empty($title) || empty($artist)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uploadSong($connection, $title, $artist, $audio, $cover, $listens, $downloads, $duration, $genre, $mood, $instrument) {

    $sql = "INSERT INTO songs (directory, title, artist, cover, listens, downloads, duration, genre, mood, instrument) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $statement = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($statement, $sql)) {
        header("location: add.php?errorstatementFailed");
        exit();
    }

    $audioDir = "resources/songs/audio/" . $audio;
    $coverDir = "resources/songs/covers/" . $cover;
    echo "<p>", $title, " ", $artist, " ", $audio, " ", $cover, "</p>";
    mysqli_stmt_bind_param($statement, "ssssssssss", $audioDir, $title, $artist, $coverDir, $listens, $downloads, $duration, $genre, $mood, $instrument);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    header("location: explore.php?error=none");
    exit();
}