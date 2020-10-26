<?php
session_start();
if (isset($_POST["loginSubmit"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {

    require "dbh.inc.php";

    $passHash = md5($_POST["password"]);

    $query = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $query->bind_param('s', $_POST['username']);
    $query->execute();
    $result = $query->get_result();

    $row = $result->fetch_assoc();
    $uid = $row["uid"];
    $passHashCheck = $row["passHash"];

    $query->close();

    if ($passHashCheck == $passHash) {
        $_SESSION["uid"] = $uid;
        header("Location: ../index.php");
    }

} else {
    header("Location: ../login.php");
}