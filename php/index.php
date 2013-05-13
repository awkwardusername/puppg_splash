<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Polytechnic University of the Philippines &mdash; Programming Guild</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="underscore.string.min.js"></script>
    <script type="text/javascript">
        <!--
        var _s = _.str;

        function initTimer(id, refDate) {
            var script = "repaintTimer('" + id + "', new Date('" + refDate + "'))";
            setInterval(script, 500);
        }

        function totalDays(date) {
            return Math.floor(Number(date) / (1000 * 60 * 60 * 24));
        }

        function repaintTimer(timerElemId, refDate) {
            var timerElem = document.getElementById(timerElemId);
            var compElems = timerElem.getElementsByTagName("span");
            var nowDate = new Date();
            timerVal = new Date(refDate - nowDate);
            var totalDayCount = totalDays(refDate) - totalDays(nowDate);
            for(var index in compElems)
                if(compElems[index].getAttribute !== undefined)
                    switch(compElems[index].getAttribute("class")) {
                        case "days":
                            compElems[index].innerHTML = _s.pad(totalDayCount, 2, '0', 'left');
                            break;
                        case "hours":
                            compElems[index].innerHTML = _s.pad(timerVal.getUTCHours(), 2, '0', 'left');
                            break;
                        case "minutes":
                            compElems[index].innerHTML = _s.pad(timerVal.getUTCMinutes(), 2, '0', 'left');
                            break;
                        case "seconds":
                            compElems[index].innerHTML = _s.pad(timerVal.getUTCSeconds(), 2, '0', 'left');
                            break;
                    }
        }
        // -->
    </script>
</head>
<body onload="initTimer('timer', new Date(2013, 5, 15, 0, 0, 0))">
    <div id="body_main" class="body">
        <p class="catchphrase"><em class="strong">Bored?</em></p>
        <p>Wanna do something <em class="stronger">great?</em></p>
        <p class="smile">:D</p>
        <p id="timer">
            <span class="days">00</span>:<span class="hours">00</span>:<span class="minutes">00</span>:<span class="seconds">00</span>
        </p>
    </div>
    <div id="footer_main" class="footer">
        <ul class="networks">
            <li><a href="http://www.facebook.com/PUPProgrammingGuild" target="_blank"><img src="img/icon-facebook.svg" alt="Website"> PUPProgrammingGuild</a></li>
            <li><a href="http://twitter.com/pup_progguild" target="_blank"><img src="img/icon-twitter.svg" alt="Website"> @pup_progguild</a></li>
        </ul>
    </div>
</body>
</html>