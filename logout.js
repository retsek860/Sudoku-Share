$(document).ready(function() {
    if ($("#loggedin").html() == 1) {
        $("#login").html("Log Out");
        $("#login").attr("onclick", "window.location.href='logout.php'");
    }
});