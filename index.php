<?php
    require "header.php";
?>
<script language="JavaScript" type="text/javascript" src="logout.js"></script>
    <body>
        
        <button class='solveSudoku' style="margin-right: 30px" onclick="solveSudoku()">Solve!</button>
        <button class='clearSudoku' style="margin-right: 30px" onclick="window.location = 'index.php'">Clear</button>
        <button class='shareSudoku' style='margin-right: 30px'>Share</button>
        <button class='loadSudoku' style='margin-right: 30px' onclick="var code = prompt('Enter the sudoku code:'); loadSudoku(code);">Load</button>
        <button id='login' onclick="window.location.href='login.php'">Log In</button>

        <div id='container'></div>

    </body>
</html>