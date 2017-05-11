//Start of code and level one
var score = 0;
var maxLives = 2;
var lives = maxLives;
var maxTime = 10;
var time = maxTime;
var currentTimeout;
onEvent("IntroStartButton", "click", initializeLevelOne);
onEvent("IntroLabel2", "click", initializeLevelOne);
function initializeLevelOne() {
    setScreen("LevelOneScreen");
    setText("LivesLabel1", lives);
    setText("ScoreLabel1", score);
    setText("TimeLabel1", maxTime);
    setTimeout(countDownTimer, 1000);
}
onEvent("AgentSmith", "click", function(event) {
    score = score + 1;
    setText("ScoreLabel1", score);
    setPosition("AgentSmith", randomNumber(0,210), randomNumber(50, 300));
    if (score > 8) {
        clearTimeout(currentTimeout);
        initializeLevelTwo();
    }
});
onEvent("LevelOneBackround", "click", function(event) {
    lives = lives - 1;
    setText("LivesLabel1", lives);
    if (lives === 0) {
        clearTimeout(currentTimeout);
        finalScreen(false);
    }
});
function countDownTimer(){
    time--;
    if(time > 0){
        currentTimeout = setTimeout(countDownTimer,1000);
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
var morphNextAttack;
function initializeLevelTwo() {
    setText("MorpheusHealth", MorpheusHealth);
    setText("NeoHealth", NeoHealth);
    setScreen("LevelTwo");
    setTimeout(function() {morpheusAttackLoop(randomNumber(1000, 5000))}, randomNumber(1000, 4000));
}
function morpheusAttackLoop(attackDelay) {
    morpheusPreAttack();
    setTimeout(morpheusAttack, 900);
    morphNextAttack = setTimeout(function() {morpheusAttackLoop(randomNumber(1000, 5000))}, attackDelay);
}
function morpheusPreAttack() {
    var morphX = getXPosition("MorpheusImage");
    var morphY = getYPosition("MorpheusImage");
    setPosition("MorpheusImage", morphX, morphY - 15);
    setTimeout(function() {
        setPosition("MorpheusImage", morphX, morphY);
    }, 150);
}
function morpheusAttack() {
    if (!isDodging) {
        NeoHealth -= randomNumber(8, 15);
        if (NeoHealth <= 0) {
            neoFightDeath();
        }
        setText("NeoHealth", NeoHealth);
        showElement("morphpunch");
    } else {
        showElement("morphpunch");
    }
    setTimeout(function() {
        hideElement("morphpunch");
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
onEvent("PunchButton", "click", function(event) {
    showElement("punchcover");
    MorpheusHealth = MorpheusHealth - 8;
    if (MorpheusHealth > 50) {
        setText("MorpheusHealth", MorpheusHealth);
    } else {
        MorpheusHealth = MorpheusHealth - 6;
        setText("MorpheusHealth", MorpheusHealth);
    }
    setTimeout(function() {hideElement("punchcover")}, 1500);
    checkMorphHealth();
});
onEvent("KickButton", "click", function(event) {
    showElement("kickcover");
    MorpheusHealth = MorpheusHealth - 20;
    setText("MorpheusHealth", MorpheusHealth);
    setTimeout(function(){hideElement("kickcover")}, 3500);
    checkMorphHealth();
});
onEvent("DuckButton", "click", function(event) {
    showElement("DuckGraphic");
    isDodging = true;
    setTimeout(function() {
        hideElement("DuckGraphic");
        isDodging = false;
    }, 1000);
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
onEvent("NeoAnswerButton", "click", function(event) {
    console.log("NeoAnswerButton clicked!");
    finalScreen(false);
});
onEvent("TankAnswerButton", "click", function(event) {
    console.log("TankAnswerButton clicked!");
    finalScreen(false);
});
onEvent("TrinityAnswerButton", "click", function(event) {
    console.log("TrinityAnswerButton clicked!");
    finalScreen(false);
});
onEvent("MorpheusAnswerButton", "click", function(event) {
    finalScreen(true);
    setScreen("MatrixWinScreen");
});
onEvent("PlayAgainButton", "click", function(event) {
    initializeLevelOne();
});
onEvent("TryAgainButton", "click", function(event) {
    initializeLevelOne();
});
//All pictures come from The Matrix movie 1999