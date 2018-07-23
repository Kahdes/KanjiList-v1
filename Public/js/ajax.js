var Ajax = {
    ajaxGet(url, callback) {
        var req = new XMLHttpRequest();
        req.addEventListener("load", function () {
            if (req.status >= 200 && req.status < 400) {
                callback(req.responseText);
            } else {
                console.error(req.status + " " + req.statusText + " " + url);
            }
        });
        req.addEventListener("error", function () {
            console.error("Erreur réseau avec l'URL " + url);
        });
        req.open("GET", url);
        req.setRequestHeader('X-Mashape-Key', 'vcDR5za7eAmshKQVqc9wAhzbuW2sp15lFm9jsnsduB5UdPJK6A');
        req.setRequestHeader('Accept', 'application/json');
        req.send(null);
    }
};