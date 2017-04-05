var current_date = new Date();
var wedding = '2017-06-23';

function countdown(end) {
    var t = Date.parse(end) - Date.parse(new Date());
    var sec = Math.floor((t/1000) % 60);
    var min = Math.floor((t/1000/60) % 60);
    var hours = Math.floor((t/(1000*60*60)-1) % 24);
    var days = Math.floor(t/(1000*60*60*24));
    return {
        'total' : t,
        'days'  : days,
        'hours' : hours,
        'min'   : min,
        'sec'   : sec
    }
}

function initializeClock(id, endtime){
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.mins');
    var secondsSpan = clock.querySelector('.secs');
    
    function updateClock(){
        var t = countdown(endtime);
        
        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = t.hours;
        minutesSpan.innerHTML = t.min;
        secondsSpan.innerHTML = ('0' + t.sec).slice(-2);
        
        if(t.total<=0){
            clearInterval(timeinterval);
        }
    };
    
    updateClock(); // runs function once at first to avoid delay
    var timeInterval = setInterval(updateClock, 1000);
}

initializeClock('clockdiv', wedding);