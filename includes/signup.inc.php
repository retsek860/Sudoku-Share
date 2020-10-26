<?php
if (isset($_POST["loginSubmit"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
    
    if ($_POST["password"] == $_POST["passwordCheck"]) {

        require "dbh.inc.php";

        $query = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $query->bind_param('s', $_POST["username"]);
        $query->execute();
        $result = $query->get_result();
        $query->close();

        if ($result->num_rows == 0) {

            $passHash = md5($_POST["password"]);
            $query = $conn->prepare("INSERT INTO users (username, passHash) VALUES (?, ?)");
            $query->bind_param("ss", $_POST["username"], $passHash);
            $query->execute();
            $query->close();

            header("Location: ../login.php?signup=success");

        } else {

            echo "<br><div style='text-align:center'>An account with that name already exists<br><a style='text-align:center' href='\signup.php'>Return to sign-up page</a></div>";
        }
    }
}