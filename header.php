<?php
session_start();
if (isset($_SESSION["uid"])) {
    echo("<div id='loggedin' style='display: none;'>1</div>");
    echo(strval($_SESSION["uid"]));
} else {
    echo("<div id='loggedin' style='display: none;'>0</div>");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sudoku Sharer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="main.js"></script>
        <script language="JavaScript" type="text/javascript" src="sudokuSolver.js"></script>
    </head>

    <header style="text-align:right; margin-right: 60px">
        <?php
        if (isset($_SESSION["uid"])) {
            echo("You are logged in");
        } else {
            echo("You are not logged in");
        }
        ?>
    </header>