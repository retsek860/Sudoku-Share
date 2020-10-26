<?php
require "header.php";
?>

<script language="JavaScript" type="text/javascript" src="login.js"></script>

<form action="includes/login.inc.php" method="POST">
    <table class="center">
        <tr>
            <th>Username:</th><th><input type="text" name="username" id="username" placeholder="Username"></th>
        </tr>
        <tr>
            <th>Password:</th><th><input type="password" name="password" id="username" placeholder="Password"></th>
        </tr>
        <tr>
            <th></th><th><input type="submit" name="loginSubmit" id="loginSubmit" value="Log In"></th>
        </tr>
    </table>
</form>
    <br><div>Don't have an account? <a href="./signup.php">Sign up here!</a></div>
    <br><div><a href="./index.php">Return to Sudoku Solver</a></div>
</html>