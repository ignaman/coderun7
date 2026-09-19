<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>CodeRun</title>
    @vite('resources/css/app.css')
    @vite('resources/js/timer.js')
</head>

<body>
    <div class="scene" aria-hidden="true">
        <img src="/images/skyscrapersLEFT.svg" class="lbloc" alt="">
        <img src="/images/skyscrapersLEFT.svg" class="rbloc" alt="">
    </div>
    <main class="page">
        <img src="/images/BESTCJ_signature_white.png" class="logoBEST" alt="BEST Cluj-Napoca">
        <img src="/images/UT_Logo_Alb.png" class="logoUT" alt="Universitatea Tehnica din Cluj-Napoca">
        <img src="/images/titlu.svg" class="titlu" alt="CodeRun Logo">
        <div class="timer">
            <div class="timebox">
                <div class="time">
                    <h2 id="days">00</h2>
                    <p>Days</p>
                </div>
                <div class="time">
                    <h2 id="hours">00</h2>
                    <p>Hours</p>
                </div>
                <div class="time">
                    <h2 id="minutes">00</h2>
                    <p>Minutes</p>
                </div>
                <div class="time">
                    <h2 id="seconds">00</h2>
                    <p>Seconds</p>
                </div>
            </div>
        </div>
        <img src="/images/calculator1.svg" class="calc1" alt="Calculator1">
        <img src="/images/calculator2.svg" class="calc2" alt="Calculator2">
    </main>
</body>

</html>
