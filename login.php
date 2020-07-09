<?php
require "header.php";
?>

<script language="JavaScript" type="text/javascript" src="login.js"></script>

<form action="includes/login.inc.php">
    <table class="center">
        <tr>
            <th>Username:</th><th><input type="text" name="username" placeholder="Username"></th>
        </tr>
        <tr>
            <th>Password:</th><th><input type="password" name="password" placeholder="Password"></th>
        </tr>
        <tr>
            <th></th><th><input type="submit" name="loginSubmit" value="Log In"></th>
        </tr>
    </table>
</form>
    <br><div>Don't have an account? <a href="/signup.php">Sign up here!</a></div>
    <br><div><a href="/index.php">Return to Sudoku Solver</a></div>
</html>