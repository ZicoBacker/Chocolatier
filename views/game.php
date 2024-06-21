<?php require_once __DIR__ . '/partials/_header.php'; ?>
<main>
    <div class="game-container">
        <div class="overlay">
            <button id="start">Start!</button>
        </div>
        <div class="game-menu">
            <!-- Shows the total cookie score -->
            <p id="score">initialize</p>

            <!-- Displays all the current upgrades icons and the amount of them -->
            <div id="Counters">

                <div class="counter">
                    <img src="/public/img/gameImg/Factory-02.png" alt="fabric upgrades ">
                    <p id="fabric-counter"></p>
                </div>

                <div class="counter">
                    <img src="public/img/gameImg/Cookie-upgrade-01.png" alt="Cookie upgrades ">
                    <p id="cookie-upgrade-counter"></p>
                </div>

                <div class="counter">
                    <img src="public/img/gameImg/Cookie-autoclick-01.png" alt="autocliking upgrades ">
                    <p id="autoclick-counter"></p>
                </div>

                <!-- button to pause the game and return to homescreen -->
                <div class="pause">
                    <button id="pauseBut">Pause</button>
                    <button id="reset">Reset game</button>
                </div>
            </div>
        </div>

        <div class="upgrades">
            <div class="upgrade">
                <img src="public/img/gameImg/Factory-02.png" alt="">
                <p id="upg-fabric">10</p>
            </div>

            <div class="upgrade">
                <img src="public/img/gameImg/Cookie-upgrade-01.png" alt="">
                <p id="upg-cookie">10</p>
            </div>

            <div class="upgrade">
                <img src="public/img/gameImg/Cookie-autoclick-01.png" alt="">
                <p id="upg-autoclick">10</p>
            </div>
        </div>

        <div class="cookie">
            <button id="clicker">
            </button>
        </div>

        <div id="floor">
            <div id="factory-Line">
            </div>
        </div>
    </div>
</main>
<script src="/public/js/game.js"></script>
</body>

</html>