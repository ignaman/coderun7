const Days = document.getElementById('days');
const Hours = document.getElementById('hours');
const Minutes = document.getElementById('minutes');
const Seconds = document.getElementById('seconds');

const targetDate = new Date("October 12 2026 00:00:00").getTime();

// Two digits keep each column the same width, so the layout doesn't shift every second
function pad(value) {
    return String(value).padStart(2, '0');
}

function timer() {
    const currentDate = new Date().getTime();
    const distance = Math.max(0, targetDate - currentDate);

    const days = Math.floor(distance / 1000 / 60 / 60 / 24);
    const hours = Math.floor(distance / 1000 / 60 / 60) % 24;
    const minutes = Math.floor(distance / 1000 / 60) % 60;
    const seconds = Math.floor(distance / 1000) % 60;

    Days.innerHTML = pad(days);
    Hours.innerHTML = pad(hours);
    Minutes.innerHTML = pad(minutes);
    Seconds.innerHTML = pad(seconds);
}
timer();
setInterval(timer, 1000);