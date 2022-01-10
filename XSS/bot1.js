(function() {
    var _old_alert = window.alert;
    window.alert = function() {
        // run some code when the alert pops up
        document.body.innerHTML = "";
        document.body.innerHTML += "<h1>Arcane{cr0ss_s1t3_scr1pting}</h1>";
        _old_alert.apply(window,arguments);
    };
})();