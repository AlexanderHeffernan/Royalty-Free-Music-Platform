<?php



if (isset($_POST["submit"])) {
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];
    
    if (emptyInputSignup($username, $email, $password, $passwordRepeat) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    
    if (invalidUsername($username) !== false) {
        header("location: ../login.php?error=invalidUsername");
        exit();
    }
    
    if(invalidEmail($email) !== false) {
        header("location: ../login.php?error=invalidEmail");
        exit();
    }
    
    if(passwordMatch($password, $passwordRepeat) !== false) {
        header("location: ../login.php?error=invalidRepeatPassword");
        exit();
    }
    
    if(usernameExists($connection, $username, $email) !== false) {
        header("location: ../login.php?error=usernameTaken");
        exit();
    }
    echo "TESTING";
    createUser($connection, $username, $email, $password, $passwordRepeat);
}
else {
    header("location: ../login.php");
    exit();
}