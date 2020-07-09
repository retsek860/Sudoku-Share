function GetURLParameter(sParam) {

    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');

    for (var i = 0; i < sURLVariables.length; i++) {

        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return sParameterName[1];

        }
    }
}


$(document).ready( function () {

    var signup = GetURLParameter("signup");

    console.log(signup);

    if (signup == "success") {
        alert("Account made successfully \n Please log in");
    }

});