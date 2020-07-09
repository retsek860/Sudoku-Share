<?php
if (isset($_POST["loginSubmit"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {

    $mysqli = new mysqli("localhost", "root", "sqlpassword", "sudokuSolver");

    if ($mysqli->connect_error) {
        
        exit(mysqli_connect_error());
    
    }

    $passHash = md5($_POST["password"]);

    $query = $mysqli->prepare("SELECT * FROM users WHERE username = ?");
    $query->bind_param('s', $_POST['username']);
    $query->execute();
    $result = $query->get_result();

    $row = $result->fetch_assoc();
    $uid = $row["uid"];
    $passHashCheck = $row["passHash"];

    $query->close();

    if ($passHashCheck == $passHash) {
        // Login the user into their account
    }

} else {
    header("Location: ../login.php");
}