<?php
    require "header.php";
?>

    <body>
        
        <button class='solveSudoku' style="margin-right: 30px" onclick="solveSudoku()">Solve!</button>
        <button class='clearSudoku' style="margin-right: 30px" onclick="window.location.reload();">Clear</button>
        <button class='shareSudoku' style='margin-right: 30px'>Share</button>
        <button class='loadSudoku' style='margin-right: 30px'>Load</button>
        <button class='login' onclick="window.location.href='login.php'">Log In</button>

        <div id='container'></div>
        
    </body>
</html>