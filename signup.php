<?php
require "header.php";
?>

<script language="JavaScript" type="text/javascript" src="signup.js"></script>

<form action="includes/signup.inc.php" method="POST">
    <table class="center">
        <tr>
            <th>Username:</th><th><input type="text" name="username" id="username" placeholder="Username"></th>
        </tr>
        <tr>
            <th>Password:</th><th><input type="password" name="password" id="password" placeholder="Password"></th>
        </tr>
        <tr>
            <th>Retype Password:</th><th><input type="password" name="passwordCheck" id="passwordCheck" placeholder="Retype Password"></th>
        </tr>
        <tr>
            <th></th><th><input type="submit" name="loginSubmit" id="loginSubmit" value="Sign Up"></th>
        </tr>
    </table>
</form>
<br><div id="responseDiv"></div>


</html>