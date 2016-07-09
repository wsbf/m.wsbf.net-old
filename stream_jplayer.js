
$(document).ready(function() {

    $("#jquery_jplayer_1").jPlayer({
        ready: function(event) {
            $(this).jPlayer("setMedia", {
                oga: "http://stream.wsbf.net:8000/v8",
                // oga: "http://stream.wsbf.net:8000/v6",
                mp3: "http://stream.wsbf.net:8000/high"
                
            });
        },
        swfPath: "/_global-assets/jq/jplayer",
        supplied: "oga, mp3",
        solution: "flash, html",
        wmode: "window"
    });
});