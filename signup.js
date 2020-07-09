$(document).ready(function () {
    $("#loginSubmit").click(function (event) {
        if (($("#username").val() == "") || ($("#password").val() == "")) {
            event.preventDefault();
            $("#responseDiv").html("<div style='color:red'>You must have a username and password...</div>")
        } else if ($("#password").val() != $("#passwordCheck").val()) {
            event.preventDefault();
            $("#responseDiv").html("<div style='color:red'>Passwords do not match...</div>")
        }
    });
});