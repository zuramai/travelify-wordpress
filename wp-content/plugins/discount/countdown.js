
let countdown_days = document.getElementById('countdown-days');
let countdown_hours = document.getElementById('countdown-hours');
let countdown_minutes = document.getElementById('countdown-minutes');
let countdown_seconds = document.getElementById('countdown-seconds');

let targetDateString = document.getElementById('target-datetime').attributes['data-datetime'].value;

let countdownDate = new Date(targetDateString).getTime();

let interval = setInterval(function() {
    let now = new Date().getTime();
    let distance = countdownDate - now;

    let days = Math.floor(distance / ( 1000 * 60 * 60 * 24 ));
    let hours = Math.floor((distance % ( 1000 * 60 * 60 * 24 )) / (1000 * 60 * 60) )
    let minutes = Math.floor((distance % ( 1000 * 60 * 60 )) / (1000 * 60) )
    let seconds = Math.floor((distance % ( 1000 * 60 )) / 1000 )

    countdown_days.innerText = days+"d"
    countdown_hours.innerText = hours+"h"
    countdown_minutes.innerText = minutes+"m"
    countdown_seconds.innerText = seconds+"s"
}, 1000);