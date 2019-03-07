document.addEventListener('DOMContentLoaded', function () {

    new Typed('#typed-a', {
        stringsElement: '#typed-before-clock',
        typeSpeed: 60,
        backSpeed: 20,
        startDelay: 500,
        loop: false,
        fadeOut: false,
        cursorChar: '_',
        showCursor: false,
        onComplete: firstFinished,
    });


    document.getElementById('clockdiv').style.display = 'none';

    // countdown timer
    var deadline = new Date(Date.now() + 3 * 1000 * 60 + 1000);
    initializeClock('clockdiv', deadline);
});

function firstFinished() {
    document.getElementById('clockdiv').style.display = 'inline-block';
    new Typed('#typed', {
        stringsElement: '#typed-strings',
        typeSpeed: 60,
        backSpeed: 20,
        startDelay: 250,
        loop: false,
        fadeOut: false,
        cursorChar: '_',
        showCursor: false,
    });
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function clockTimerEnded() {
	window.location.href = "respond.php?resp=t&id="+getParameterByName("id");
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);

    function updateClock() {
        var t = Date.parse(endtime) - Date.now();
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        clock.innerHTML = minutes + ':' + ('0' + seconds).slice(-2);

        if (t <= 0) {
            clock.innerHTML = '0:00';
            clearInterval(timeinterval);
            clockTimerEnded();
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}
