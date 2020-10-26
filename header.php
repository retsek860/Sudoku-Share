<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sudoku Sharer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/sudokushare/style.css">
        <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="main.js"></script>
        <script language="JavaScript" type="text/javascript" src="sudokuSolver.js"></script>
    </head>

    <?php
    if (isset($_SESSION["uid"])) {
        echo("<div id='loggedin' style='display: none;'>1</div>");
    } else {
        echo("<div id='loggedin' style='display: none;'>0</div>");
    }
    ?>

    <header style="text-align:right; margin-right: 60px">
        <?php
        if (isset($_SESSION["uid"])) {
            echo("<div>You are logged in as " . $_SESSION["username"] . "</div>");
        } else {
            echo("<div>You are not logged in</div>");
        }
        ?>
    </header>