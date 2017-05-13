//Start of code and level one
var score = 0;
var maxLives = 2;
var lives = maxLives;
var maxTime = 10;
var time = maxTime;
var currentTimeout;
function onEvent(element, listenType, callback) {
    if (typeof callback !== "function") {
        throw new Error("Event callback is not a function in Matrix.js");
    }
    $("#" + element).on(listenType, callback);
}
function setScreen(screenName) {
    $(".screen").each(function () {
        $(this).hide();
    });
    $("#" + screenName).show();
}
function setText(labelId, value) {
    $("#" + labelId).text(value);
}
function randomNumber(low, high) {
    low = Math.ceil(low);
    high = Math.floor(high);
    return Math.floor(Math.random() * (high - low + 1)) + low;
}
function setPosition(elementId, xcoord, ycoord) {
    var movedElement = $("#" + elementId);
    movedElement.css('left', xcoord);
    movedElement.css('top', ycoord);
}
function showElement(elementId) {
    $("#" + elementId).show();
}
function hideElement(elementId) {
    $("#" + elementId).hide();
}
function getXPosition(elementId) {
    return $("#" + elementId).css('left');
}
function getYPosition(elementId) {
    return $("#" + elementId).css('top');
}
onEvent("IntroStartButton", "click", initializeLevelOne);
onEvent("IntroLabel2", "click", initializeLevelOne);
function initializeLevelOne() {
    setScreen("LevelOneScreen");
    setText("LivesLabel1", lives);
    setText("ScoreLabel1", score);
    setText("TimeLabel1", maxTime);
    setTimeout(countDownTimer, 1000);
}
onEvent("AgentSmith", "click", function () {
    score = score + 1;
    setText("ScoreLabel1", score);
    setPosition("AgentSmith", randomNumber(0, 210), randomNumber(50, 300));
    if (score > 8) {
        clearTimeout(currentTimeout);
        initializeLevelTwo();
    }
});
onEvent("LevelOneBackround", "click", function () {
    lives = lives - 1;
    setText("LivesLabel1", lives);
    if (lives === 0) {
        clearTimeout(currentTimeout);
        finalScreen(false);
    }
});
function countDownTimer() {
    time--;
    if (time > 0) {
        currentTimeout = setTimeout(countDownTimer, 1000);
    } else {
        clearTimeout(currentTimeout);
        finalScreen(false);
    }
    setText("TimeLabel1", time);
}
//Start of Level Two Code
var MorpheusHealth = 100;
var NeoHealth = 100;
var isDodging = false;
var isMorphAttacking = false;
var morphNextAttack;
function initializeLevelTwo() {
    setMorpheusHealth(MorpheusHealth);
    setNeoHealth(NeoHealth);
    setScreen("LevelTwo");
    setTimeout(function () {
        morpheusAttackLoop(randomNumber(1000, 5000))
    }, randomNumber(1000, 4000));
}
function morpheusAttackLoop(attackDelay) {
    morpheusPreAttack();
    setTimeout(morpheusAttack, 900);
    morphNextAttack = setTimeout(function () {
        morpheusAttackLoop(randomNumber(1000, 5000))
    }, attackDelay);
}
function morpheusPreAttack() {
    var morphX = getXPosition("MorpheusImage");
    var morphY = getYPosition("MorpheusImage");
    setPosition("MorpheusImage", morphX, (morphY.replace("px", "") - 15) + "px");
    setTimeout(function () {
        setPosition("MorpheusImage", morphX, morphY);
    }, 150);
}
function morpheusAttack() {
    if (!isDodging) {
        isMorphAttacking = true;
        NeoHealth -= randomNumber(8, 15);
        if (NeoHealth <= 0) {
            neoFightDeath();
        }
        setNeoHealth(NeoHealth);
        showElement("morphpunch");
    } else {
        showElement("morphpunch");
    }
    setTimeout(function () {
        hideElement("morphpunch");
        isMorphAttacking = false;
    }, 700);
}

function neoFightDeath() {
    clearTimeout(morphNextAttack);
    finalScreen(false);
}
function checkMorphHealth() {
    if (MorpheusHealth <= 0) {
        clearTimeout(morphNextAttack);
        setTimeout(initializeLevelThree, 900);
    }
}
function setMorpheusHealth(morphHealth) {
    setText("MorpheusHealth", morphHealth);
    $("#MorpheusHealthBarInner").css("width", morphHealth + "%");
}
function setNeoHealth(neoHealth) {
    setText("NeoHealth", neoHealth);
    $("#NeoHealthBarInner").css("width", neoHealth + "%");
}
onEvent("PunchButton", "click", neoPunchAttack);
function neoPunchAttack() {
    $("#PunchButton").off("click");
    showElement("punchcover");
    showElement("PunchGraphic");
    MorpheusHealth = MorpheusHealth - 8;
    if (MorpheusHealth > 50) {
        setMorpheusHealth(MorpheusHealth);
    } else {
        MorpheusHealth = MorpheusHealth - 6;
        setMorpheusHealth(MorpheusHealth);
    }
    setTimeout(function () {
        onEvent("PunchButton", "click", neoPunchAttack);
        hideElement("punchcover");
    }, 1500);
    setTimeout(function () {
        hideElement("PunchGraphic")
    }, 500);
    checkMorphHealth();
}
onEvent("KickButton", "click", neoKickAttack);
function neoKickAttack() {
    $("#KickButton").off("click");
    showElement("kickcover");
    showElement("KickGraphic");
    MorpheusHealth = MorpheusHealth - 20;
    setMorpheusHealth(MorpheusHealth);
    setTimeout(function () {
        onEvent("KickButton", "click", neoKickAttack);
        hideElement("kickcover")
    }, 3500);
    setTimeout(function () {
        hideElement("KickGraphic")
    }, 500);
    checkMorphHealth();
}
onEvent("DuckButton", "click", function () {
    if (!isMorphAttacking) {
        showElement("DuckGraphic");
        isDodging = true;
        setTimeout(function () {
            hideElement("DuckGraphic");
            isDodging = false;
        }, 1000);
    }
});
//Start of Level Three Code
function initializeLevelThree() {
    setScreen("LevelThree");
}
//resets varibles back to orginal settings
function finalScreen(isWon) {
    if (isWon) {
        maxTime = 9;
        maxLives = 1;
    } else {
        setScreen("MatrixLoseScreen");
    }
    MorpheusHealth = 100;
    NeoHealth = 100;
    isDodging = false;
    score = 0;
    maxLives += 1;
    maxTime += 2;
    lives = maxLives;
    time = maxTime;
}
onEvent("NeoAnswerButton", "click", function () {
    console.log("NeoAnswerButton clicked!");
    finalScreen(false);
});
onEvent("TankAnswerButton", "click", function () {
    console.log("TankAnswerButton clicked!");
    finalScreen(false);
});
onEvent("TrinityAnswerButton", "click", function () {
    console.log("TrinityAnswerButton clicked!");
    finalScreen(false);
});
onEvent("MorpheusAnswerButton", "click", function () {
    finalScreen(true);
    setScreen("MatrixWinScreen");
});
onEvent("PlayAgainButton", "click", function () {
    initializeLevelOne();
});
onEvent("TryAgainButton", "click", function () {
    initializeLevelOne();
});
//All pictures come from The Matrix movie 1999