<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeRun</title>
    @vite('resources/css/app.css')
    @vite('resources/js/timer.js')
</head>
<body>
    <div class="images">
        <img src="/images/calculator1.svg" class="calc1" alt="Calculator1">
        <img src="/images/calculator2.svg" class="calc2" alt="Calculator2">
        <img src="/images/titlu.svg" class="titlu" alt="CodeRun Logo">
    </div>
    <div class="images">
        <img src="/images/skyscrapersLEFT.svg" class="lbloc" alt="Fundal Blocuri">
        <img src="/images/skyscrapersLEFT.svg" class="rbloc" alt="Fundal Blocuri">
    </div>
    <div class="images">
        <img src="/images/UT_Logo_black.png" class="logoUT" alt="Universitatea Tehnica din Cluj-Napoca">
        <img src="/images/BESTCJ_signature_black.png" class="logoBEST" alt="BEST Cluj-Napoca">
    </div>
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
    <script src="timer.js"></script>
</body>
</html>