const startBut = document.querySelector("#start");
const overlayEl = document.querySelector(".overlay");

// score visible score
const score = document.querySelector("#score");

let clickLoop;
let factoryLoop;

// the three counters for the upgrades.
const fabricCounter = document.querySelector("#fabric-counter");
const cookieUpCounter = document.querySelector("#cookie-upgrade-counter");
const autoclickCounter = document.querySelector("#autoclick-counter");

//upgrade buttons.
const fabricUp = document.querySelector("#upg-fabric");
const cookieUp = document.querySelector("#upg-cookie");
const autoclickUp = document.querySelector("#upg-autoclick");

//list of upgrades, counters and starting prices.
const counters = [fabricCounter, cookieUpCounter, autoclickCounter, score];
const upgrades = [fabricUp, cookieUp, autoclickUp];
const startPrices = [50, 20, 100];

//buttons
const pauseBut = document.querySelector("#pauseBut");
const resetBut = document.querySelector("#reset");
const cookieBut = document.querySelector("#clicker");

const factoryLine = document.querySelector("#factory-Line");

// sets up everything for the game.
function init() {
    updateCounters();
    updateUpgrades();
    initUpgradeListeners();
    startClickLoop();
    startFactoryLoop();

    loadFactories();
}

//clears loops and re-enables overlay
function pause() {
    clearInterval(clickLoop);
    factoryLoop = false;
    clearTimeout(2);
    overlayEl.classList.remove("disabled");
    startBut.innerHTML = "Resume?";
}
// sets up the counter values form local storage
// sets values to 0 if they do not exist.
function updateCounters() {
    counters.forEach((counter) => {
        if (localStorage.getItem(counter.id) == null) {
            localStorage.setItem(counter.id, parseInt(0));
        }

        counter.innerHTML = parseInt(localStorage.getItem(counter.id));
    });
}
// resets factories on the field and spawns the amount according to the level.
function loadFactories() {
    while (factoryLine.children.length > 0) {
        factoryLine.removeChild(factoryLine.querySelector("*"));
    }

    let n = localStorage.getItem(fabricCounter.id);
    if (n >= 5) {
        // if N is bigger then 5,
        // it means it will spawn acccording to n divided by 5
        for (let i = 0; i < Math.floor(n / 5) + 1; i++) {
            spawnFactory();
        }

        //if n is bigger then 0 but smaller then 5, spawn one factory.
    } else if (n > 0) {
        spawnFactory();
    } else {
        return "none";
    }
}

// creates a factory gif.
function spawnFactory() {
    let factory = document.createElement("img");
    factory.src = "/public/img/gameImg/Factory-02-anim.gif";
    factoryLine.appendChild(factory);
}

// sets up the upgrade counters based on the localstorage upgrades.
// we use a for instead of foreach
function updateUpgrades() {
    upgrades.forEach((upgrade, key) => {
        setCounter(
            upgrade,
            localStorage.getItem(counters[key].id),
            startPrices[key]
        );
    });
}

// linear cost increase based on how many upgrades you already have.
// FIXME get a nice way to exponentially increase cost.
//seems fixed for now. not that bad but check for later on.
function setCounter(counter, value, cost) {
    let newCost = parseInt(cost) * (1 + parseInt(value)) ** 2;
    counter.innerHTML = newCost;
}

// goes through an foreach loop to set evenlisteners for each upgrade.
function initUpgradeListeners() {
    //checks for a listener of the parent element,
    //AKA the div where the icon and text is in.
    upgrades.forEach((upgrade, key) => {
        upgrade.parentElement.addEventListener("click", () => {
            increaseLevel(upgrade, key);
        });
    });
}

// increases upgrade level
function increaseLevel(upgrade, key) {
    let cost = parseInt(upgrade.innerHTML);

    // gets the local storage data of the counter level and score.
    let level = parseInt(localStorage.getItem(counters[key].id));
    let money = parseInt(localStorage.getItem("score"));

    if (money >= cost) {
        let newMoney = money - cost;

        // sets the new money score.
        localStorage.setItem("score", newMoney);

        // increases level of the upgrade.
        localStorage.setItem(counters[key].id, level + 1);

        updateCounters();
        updateUpgrades();

        // (re)starts a specific loop based on which upgrade you leveled up.
        if (key == 2) {
            startClickLoop();
        }
        if (key == 0) {
            startFactoryLoop();
            loadFactories();
        }
    } else {
    }
}

//clears the current loop if there is one.
//starts a new one if the level is higher then one.
//score added is based on the level of the loop.
function startClickLoop() {
    let level = parseInt(localStorage.getItem(counters[2].id));
    if (clickLoop) {
        clearInterval(clickLoop);
    }

    if (level > 0) {
        clickLoop = setInterval(() => {
            let currentScore = parseInt(score.innerHTML);
            localStorage.setItem("score", currentScore + level);
            updateCounters();
        }, 500);
    }
}
// starts a random interval loop that adds bigger score after it.
function startFactoryLoop() {
    let level = parseInt(localStorage.getItem(counters[0].id));
    /// stops the loop each time it is
    if (factoryLoop) {
        factoryLoop = false;
        clearTimeout(2);
    }
    // double checks if the level is not below 0
    if (level > 0) {
        let capacity = 25 * level;
        let timeout = Math.round(Math.random() * 25, 0);
        factoryLoop = true;
        Loop(timeout * 1000, capacity);
    }
}

//a randomized time loop that gives you extra score after.
function Loop(Timeout, amount) {
    if (factoryLoop) {
        setTimeout(() => {
            //sets add to the current score
            let currentScore = parseInt(score.innerHTML);
            localStorage.setItem("score", currentScore + parseInt(amount));
            updateCounters();

            //prepares  a new loop and logs the timeout.
            let timeout = Math.round(Math.random() * 25, 0);

            Loop(timeout * 1000, amount);
        }, Timeout);
    } else {
        return console.error("factory loop not active");
    }
}

// non functions.

// increases score +1 * cookieUpgrade.
cookieBut.addEventListener("click", () => {
    let currentScore = parseInt(score.innerHTML);
    let increase = 1 + 1 * parseInt(localStorage.getItem(cookieUpCounter.id));
    localStorage.setItem("score", currentScore + increase);

    updateCounters();
});

// resets the whole game.
resetBut.addEventListener("click", () => {
    localStorage.clear();
    location.reload();
});

//turns off factories.
pauseBut.addEventListener("click", () => {
    pause();
});

//starts up the whole game.
startBut.addEventListener("click", () => {
    overlayEl.classList.add("disabled");
    init();
});
