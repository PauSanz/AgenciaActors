window.onload = function() {
    if(fGetCookie('user') != null){
        stat('Logout', fGetCookie('user'));
    }else{
        stat('Login');
    }
}

function stat(action, user = ''){
    document.getElementById('login_action').innerHTML = action;
    document.getElementById('login_user').innerHTML = user;
}

function fGetCookie(NameOfCookie) {

    if (document.cookie.length > 0) {

        begin = document.cookie.indexOf(NameOfCookie + "=");
        if (begin != -1) {

            begin += NameOfCookie.length + 1;
            end = document.cookie.indexOf(";", begin);
            if (end == -1) {
                end = document.cookie.length;
            }
            return unescape(document.cookie.substring(begin, end));    
        }
    }
    return null;
}
