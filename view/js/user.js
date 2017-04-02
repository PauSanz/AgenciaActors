window.onload = function () {
    if (fGetCookie('user') != null) {
        stat('Logout', fGetCookie('user'));
    } else {
        stat('Login');
    }
    $('#password1').change(message);
    $('#password2').change(message);

}

function stat(action, user) {
    if (!user) {
        user = "";
    }
    document.getElementById('login_action').innerHTML = action;
    document.getElementById('login_user').innerHTML = "<a>" + user + "</a>";
}

function fGetCookie(NameOfCookie) {

    if (document.cookie.length > 0) {

        var begin = document.cookie.indexOf(NameOfCookie + "=");
        if (begin != -1) {

            begin += NameOfCookie.length + 1;
            var end = document.cookie.indexOf(";", begin);
            if (end == -1) {
                end = document.cookie.length;
            }
            return unescape(document.cookie.substring(begin, end));
        }
    }
    return null;
}

function message() {
    var message = "La contrasenya no és la mateixa en el dos camps."
    var p1 = document.getElementById("password1").value;
    var p2 = document.getElementById("password2").value;
    if (p1 != p2) {
        document.getElementById("message").value = message;
    }
}