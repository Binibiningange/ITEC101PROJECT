
(function() {
    let ns = "nxtck";
    let utDomain = "tags.rd.linksynergy.com";

    let cookieD = window.location.hostname;
    let date = new Date(Date.now() + 86400000).toUTCString();
    let cookieExist = false;
    if (document.cookie.length > 0){
        let tablecookie = document.cookie.split(';');
        let namecookie = ns+"-identity-mgmt=";
        for (i=0;i<tablecookie.length;i++){
            if(tablecookie[i].indexOf(namecookie) != -1){
                cookieExist = true;
                break;
            }
        }
    }
    if (!cookieExist) {
        (new Image(1, 1)).src = "https://"+ utDomain +"/cs?ns="+ ns +"&uid3=fdafd0ea-a2a8-4cf5-9b08-4b9752996076";
        document.cookie = ns+'-identity-mgmt=1; samesite=none; secure; domain='+ cookieD +'; path=/; expires=' + date;
    }
})();