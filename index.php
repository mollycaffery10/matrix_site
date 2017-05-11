<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' type='text/css' href='css/main.css'>
</head>

<body>

<h1>My Matrix game:</h1>
<div class='matrix-window'>


    <div id="visualization" class="responsive with_padding ui-droppable" data-radium="true"
         style="margin-bottom: 0px; border-color: rgb(198, 202, 205);">
        <div id="divApplab" class="appModern notRunning withCrosshair" tabindex="1"
             style="width: 320px; height: 450px;">
            <div class="screen" tabindex="1" id="IntroScreen"
                 style="height: 450px; width: 320px; left: 0px; top: 0px; position: absolute; z-index: 0; background-size: 320px 450px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/o-THE-MATRIX-facebook.jpg&quot;); display: block;"
                 data-canonical-image-url="o-THE-MATRIX-facebook.jpg"><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 28px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 241px; height: 33px; position: absolute; left: 35px; top: 55px; background-color: rgba(31, 60, 14, 0.773);"
                        id="IntroLabel">The Matrix Game</label>
                <button id="IntroStartButton"
                        style="padding: 0px; margin: 0px; height: 165px; width: 245px; font-size: 15px; color: rgb(255, 255, 255); background-color: rgba(0, 0, 0, 0); position: absolute; left: 30px; top: 250px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/Enter-Key.png&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                        data-canonical-image-url="Enter-Key.png"></button>
                <label style="margin: 0px; padding: 2px; line-height: 1; font-size: 18px; overflow: hidden; word-wrap: break-word; color: rgb(187, 195, 195); max-width: 320px; width: 100px; height: 20px; position: absolute; left: 120px; top: 310px; background-color: rgba(31, 60, 14, 0);"
                       id="IntroLabel2">The Matrix</label></div>
            <div class="screen" tabindex="1" id="LevelOneScreen"
                 style="height: 450px; width: 320px; left: 0px; top: 0px; position: absolute; z-index: 0; background-size: 320px 450px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/Matrix%20Reality%20-%20disconnect%20from%20it.jpg&quot;); display: none;"
                 data-canonical-image-url="Matrix Reality - disconnect from it.jpg"><img
                        src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/Heart_O'_The_City_Hallway.png"
                        data-canonical-image-url="Heart_O'_The_City_Hallway.png" id="LevelOneBackround"
                        style="height: 450px; width: 345px; position: absolute; left: -25px; top: 0px; margin: 0px;"><img
                        src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/bust_gg_agentsmith.png"
                        data-canonical-image-url="bust_gg_agentsmith.png" id="AgentSmith"
                        style="height: 168px; width: 168px; position: absolute; left: 135px; top: 255px; margin: 0px;"><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 20px; overflow: hidden; word-wrap: break-word; color: rgb(245, 233, 233); max-width: 320px; width: 309px; height: 25px; position: absolute; left: 5px; top: 5px; background-color: rgba(197, 36, 36, 0.72);"
                        id="LevelOneLabel">Level One: Catch Agent Smith!</label><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(249, 249, 249); max-width: 320px; width: 42px; height: 19px; position: absolute; left: 15px; top: 40px; background-color: rgba(249, 0, 0, 0.36);"
                        id="TimeDisplayLabel">Time: </label><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 5px; height: 5px; position: absolute; left: 55px; top: 40px;"
                        id="TimeLabel"> </label><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(249, 249, 249); max-width: 320px; width: 20px; height: 20px; position: absolute; left: 60px; top: 40px; background-color: rgba(249, 0, 0, 0.36);"
                        id="TimeLabel1">_</label><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 48px; height: 19px; position: absolute; left: 110px; top: 40px; background-color: rgba(23, 0, 255, 0.36);"
                        id="ScoreDisplayLabel">Score: </label><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 20px; height: 20px; position: absolute; left: 160px; top: 40px; background-color: rgba(23, 0, 255, 0.36);"
                        id="ScoreLabel1">_</label><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 44px; height: 19px; position: absolute; left: 200px; top: 40px; background-color: rgba(154, 171, 10, 0.682);"
                        id="LivesDisplayLabel">Lives: </label><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 20px; height: 20px; position: absolute; left: 245px; top: 40px; background-color: rgba(154, 171, 10, 0.682);"
                        id="LivesLabel1">_</label></div>
            <div class="screen" tabindex="1" id="MatrixLoseScreen"
                 style="height: 450px; width: 320px; left: 0px; top: 0px; position: absolute; z-index: 0; background-size: 320px 450px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/matrix-system-fail_2784216b.jpg&quot;); display: none;"
                 data-canonical-image-url="matrix-system-fail_2784216b.jpg"><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 29px; overflow: hidden; word-wrap: break-word; color: rgb(156, 28, 28); max-width: 320px; width: 240px; height: 92px; position: absolute; left: 40px; top: 10px; background-color: rgba(228, 215, 215, 0.46);"
                        id="LoseLabel">You will remain in the Matrix forever</label>
                <button id="TryAgainButton"
                        style="padding: 0px; margin: 0px; height: 30px; width: 80px; font-size: 14px; color: rgb(255, 255, 255); background-color: rgb(188, 26, 51); position: absolute; left: 110px; top: 385px;">
                    Try Again?
                </button>
            </div>
            <div class="screen" tabindex="1" id="LevelTwo"
                 style="height: 450px; width: 320px; left: 0px; top: 0px; position: absolute; z-index: 0; background-size: 320px 450px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/dojo.jpg&quot;); display: none;"
                 data-canonical-image-url="dojo.jpg"><img
                        src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/morpheus.jpg"
                        data-canonical-image-url="morpheus.jpg" id="MorpheusImage"
                        style="height: 140px; width: 95px; position: absolute; left: 185px; top: 230px; margin: 0px;"><img
                        src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/images (1).jpg"
                        data-canonical-image-url="images (1).jpg" id="NeoKarateImage"
                        style="height: 150px; width: 120px; position: absolute; left: 15px; top: 220px; margin: 0px;"><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 86px; height: 19px; position: absolute; left: 10px; top: 30px; background-color: rgb(0, 0, 0);"
                        id="NeoHealthDisplay">Neo Health:</label><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 30px; height: 19px; position: absolute; left: 95px; top: 30px; background-color: rgb(0, 0, 0);"
                        id="NeoHealth">100</label><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(51, 51, 51); max-width: 320px; width: 126px; height: 19px; position: absolute; left: 150px; top: 30px; background-color: rgb(255, 255, 255);"
                        id="MorpheousHealthDisplay">Morpheus Health:</label><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(51, 51, 51); max-width: 320px; width: 30px; height: 19px; position: absolute; left: 275px; top: 30px; background-color: rgb(255, 255, 255);"
                        id="MorpheusHealth">100</label>
                <button id="PunchButton"
                        style="padding: 0px; margin: 0px; height: 55px; width: 55px; font-size: 18px; color: rgb(45, 128, 15); background-color: rgba(26, 188, 156, 0); position: absolute; left: 25px; top: 380px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/niEy7ae9T.jpg&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                        data-canonical-image-url="niEy7ae9T.jpg">Punch
                </button>
                <label style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(0, 0, 0); max-width: 320px; width: 320px; height: 19px; position: absolute; left: -1.66533e-16px; top: 0px; background-color: rgba(241, 230, 230, 0.52);"
                       id="LevelThreeInstructionsLabel"> &nbsp;You are playing as Neo, Defeat Morpheus! &nbsp; &nbsp;
                    &nbsp;</label>
                <button id="DuckButton"
                        style="padding: 0px; margin: 0px; height: 25px; width: 80px; font-size: 14px; color: rgb(255, 255, 255); background-color: rgb(230, 71, 75); position: absolute; left: 100px; top: 395px;">
                    Duck!
                </button>
                <button id="KickButton"
                        style="padding: 0px; margin: 0px; height: 65px; width: 70px; font-size: 14px; color: rgb(255, 18, 18); background-color: rgba(26, 188, 156, 0); position: absolute; left: 210px; top: 375px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/b7fab2ee76debef03acfc9fe47a090f6_karate-kick-clipart-clipart-animated-moving-kick-clipart_1200-1200.jpeg&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                        data-canonical-image-url="b7fab2ee76debef03acfc9fe47a090f6_karate-kick-clipart-clipart-animated-moving-kick-clipart_1200-1200.jpeg">
                    Kick
                </button>
                <img src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/download (9).jpg"
                     data-canonical-image-url="download (9).jpg" id="PunchGraphic"
                     style="height: 70px; width: 60px; position: absolute; left: 195px; top: 245px; margin: 0px;"
                     class="design-mode-hidden"><img
                        src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/pow.gif"
                        data-canonical-image-url="pow.gif" id="NeoPunchImage"
                        style="height: 150px; width: 120px; position: absolute; left: 180px; top: 215px; margin: 0px;"
                        class="design-mode-hidden"><img
                        src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/57ead1b35e369195f253e406556d3451_clip-art-clip-art-free-and-martial-arts-clipart-transparent-background_320-320.jpeg"
                        data-canonical-image-url="57ead1b35e369195f253e406556d3451_clip-art-clip-art-free-and-martial-arts-clipart-transparent-background_320-320.jpeg"
                        id="KickGraphic"
                        style="height: 85px; width: 75px; position: absolute; left: 155px; top: 265px; margin: 0px;"
                        class="design-mode-hidden"><img
                        src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/round-clock-at-nine-oclock-outline_318-35668.jpg"
                        data-canonical-image-url="round-clock-at-nine-oclock-outline_318-35668.jpg" id="punchcover"
                        style="height: 55px; width: 55px; position: absolute; left: 25px; top: 380px; margin: 0px;"
                        class="design-mode-hidden"><img
                        src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/round-clock-at-nine-oclock-outline_318-35668.jpg"
                        data-canonical-image-url="round-clock-at-nine-oclock-outline_318-35668.jpg" id="kickcover"
                        style="height: 65px; width: 60px; position: absolute; left: 215px; top: 375px; margin: 0px;"
                        class="design-mode-hidden"><img
                        src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/big_14237897_image.jpg"
                        data-canonical-image-url="big_14237897_image.jpg" id="morphpunch"
                        style="height: 90.0079px; width: 220px; position: absolute; left: 45px; top: 235px; margin: 0px;"
                        class="design-mode-hidden"><img
                        src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/Untitled drawing (1).jpg"
                        data-canonical-image-url="Untitled drawing (1).jpg" id="DuckGraphic"
                        style="height: 120.414px; width: 285px; position: absolute; left: 35px; top: 235px; margin: 0px;"
                        class="design-mode-hidden"></div>
            <div class="screen" tabindex="1" id="MatrixWinScreen" data-canonical-image-url="images.jpg"
                 style="height: 450px; width: 320px; left: 0px; top: 0px; position: absolute; z-index: 0; background-size: 320px 450px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/images.jpg&quot;); display: none;">
                <label style="margin: 0px; padding: 2px; line-height: 1; font-size: 20px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 303px; height: 25px; position: absolute; left: 15px; top: 30px; background-color: rgb(26, 138, 9);"
                       id="YouWinLabel">You have Defeated the Matrix!</label>
                <button id="PlayAgainButton"
                        style="padding: 0px; margin: 0px; height: 80px; width: 170px; font-size: 14px; color: rgb(255, 255, 255); background-color: rgba(255, 0, 6, 0.26); position: absolute; left: 65px; top: 355px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/Enter-Key.png&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat; text-align: right;"
                        data-canonical-image-url="Enter-Key.png">Play Again? &nbsp; &nbsp;
                </button>
            </div>
            <div class="screen" tabindex="1" id="LevelThree"
                 style="height: 450px; width: 320px; left: 0px; top: 0px; position: absolute; z-index: 0; background-size: 320px 450px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/Matrix%20Reality%20-%20disconnect%20from%20it.jpg&quot;); display: none;"
                 data-canonical-image-url="Matrix Reality - disconnect from it.jpg"><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 18px; overflow: hidden; word-wrap: break-word; color: rgb(253, 253, 253); max-width: 320px; width: 253px; height: 23px; position: absolute; left: 30px; top: 10px; background-color: rgba(255, 237, 237, 0);"
                        id="LevelThreeLabel">FINAL Level Trivia Question </label><label
                        style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 249, 249); max-width: 320px; width: 270px; height: 47px; position: absolute; left: 10px; top: 65px; background-color: rgb(80, 5, 5);"
                        id="LevelThreeQuestionLabel">Who said this "Unfortunaly no one can be told what the Matrix is,
                    &nbsp;you have to see it for yourself."?</label>
                <button id="NeoAnswerButton"
                        style="padding: 0px; margin: 0px; height: 65px; width: 85px; font-size: 14px; color: rgb(0, 0, 0); background-color: rgba(26, 188, 156, 0); position: absolute; left: 40px; top: 140px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                        data-canonical-image-url="bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png">
                    Neo
                </button>
                <button id="TrinityAnswerButton"
                        style="padding: 0px; margin: 0px; height: 55px; width: 85px; font-size: 14px; color: rgb(0, 0, 0); background-color: rgba(26, 188, 156, 0); position: absolute; left: 185px; top: 255px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                        data-canonical-image-url="bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png">
                    Trinity
                </button>
                <button id="TankAnswerButton"
                        style="padding: 0px; margin: 0px; height: 55px; width: 85px; font-size: 14px; color: rgb(0, 0, 0); background-color: rgba(26, 188, 156, 0); position: absolute; left: 40px; top: 255px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                        data-canonical-image-url="bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png">
                    Tank
                </button>
                <button id="MorpheusAnswerButton"
                        style="padding: 0px; margin: 0px; height: 55px; width: 85px; font-size: 14px; color: rgb(0, 0, 0); background-color: rgba(26, 188, 156, 0); position: absolute; left: 185px; top: 145px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                        data-canonical-image-url="bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png">
                    Morpheus
                </button>
            </div>
        </div>
        <div id="designModeViz" class="appModern withCrosshair" data-radium="true"
             style="display: none; width: 320px; height: 450px;">
            <div class="screen" tabindex="1" id="design_IntroScreen"
                 style="height: 450px; width: 320px; left: 0px; top: 0px; position: absolute; z-index: 0; background-size: 320px 450px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/o-THE-MATRIX-facebook.jpg&quot;); display: block;"
                 data-canonical-image-url="o-THE-MATRIX-facebook.jpg">
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 55px; left: 35px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 28px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 241px; height: 33px; position: static; left: 35px; top: 55px; background-color: rgba(31, 60, 14, 0.773);"
                            id="design_IntroLabel">The Matrix Game</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 250px; left: 30px;">
                    <button id="design_IntroStartButton"
                            style="padding: 0px; margin: 0px; height: 165px; width: 245px; font-size: 15px; color: rgb(255, 255, 255); background-color: rgba(0, 0, 0, 0); position: static; left: 30px; top: 250px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/Enter-Key.png&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                            data-canonical-image-url="Enter-Key.png"></button>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 310px; left: 120px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 18px; overflow: hidden; word-wrap: break-word; color: rgb(187, 195, 195); max-width: 320px; width: 100px; height: 20px; position: static; left: 120px; top: 310px; background-color: rgba(31, 60, 14, 0);"
                            id="design_IntroLabel2">The Matrix</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
            </div>
            <div class="screen" tabindex="1" id="design_LevelOneScreen"
                 style="height: 450px; width: 320px; left: 0px; top: 0px; position: absolute; z-index: 0; background-size: 320px 450px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/Matrix%20Reality%20-%20disconnect%20from%20it.jpg&quot;); display: none;"
                 data-canonical-image-url="Matrix Reality - disconnect from it.jpg">
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 0px; left: -25px;"><img
                            src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/Heart_O'_The_City_Hallway.png"
                            data-canonical-image-url="Heart_O'_The_City_Hallway.png" id="design_LevelOneBackround"
                            style="height: 450px; width: 345px; position: static; left: -25px; top: 0px; margin: 0px;">
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 255px; left: 135px;"><img
                            src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/bust_gg_agentsmith.png"
                            data-canonical-image-url="bust_gg_agentsmith.png" id="design_AgentSmith"
                            style="height: 168px; width: 168px; position: static; left: 135px; top: 255px; margin: 0px;">
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 5px; left: 5px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 20px; overflow: hidden; word-wrap: break-word; color: rgb(245, 233, 233); max-width: 320px; width: 309px; height: 25px; position: static; left: 5px; top: 5px; background-color: rgba(197, 36, 36, 0.72);"
                            id="design_LevelOneLabel">Level One: Catch Agent Smith!</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 40px; left: 15px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(249, 249, 249); max-width: 320px; width: 42px; height: 19px; position: static; left: 15px; top: 40px; background-color: rgba(249, 0, 0, 0.36);"
                            id="design_TimeDisplayLabel">Time: </label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 40px; left: 55px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 5px; height: 5px; position: static; left: 55px; top: 40px;"
                            id="design_TimeLabel"> </label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 40px; left: 60px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(249, 249, 249); max-width: 320px; width: 20px; height: 20px; position: static; left: 60px; top: 40px; background-color: rgba(249, 0, 0, 0.36);"
                            id="design_TimeLabel1">_</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 40px; left: 110px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 48px; height: 19px; position: static; left: 110px; top: 40px; background-color: rgba(23, 0, 255, 0.36);"
                            id="design_ScoreDisplayLabel">Score: </label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 40px; left: 160px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 20px; height: 20px; position: static; left: 160px; top: 40px; background-color: rgba(23, 0, 255, 0.36);"
                            id="design_ScoreLabel1">_</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 40px; left: 200px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 44px; height: 19px; position: static; left: 200px; top: 40px; background-color: rgba(154, 171, 10, 0.682);"
                            id="design_LivesDisplayLabel">Lives: </label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 40px; left: 245px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 20px; height: 20px; position: static; left: 245px; top: 40px; background-color: rgba(154, 171, 10, 0.682);"
                            id="design_LivesLabel1">_</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
            </div>
            <div class="screen" tabindex="1" id="design_MatrixLoseScreen"
                 style="height: 450px; width: 320px; left: 0px; top: 0px; position: absolute; z-index: 0; background-size: 320px 450px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/matrix-system-fail_2784216b.jpg&quot;); display: none;"
                 data-canonical-image-url="matrix-system-fail_2784216b.jpg">
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 10px; left: 40px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 29px; overflow: hidden; word-wrap: break-word; color: rgb(156, 28, 28); max-width: 320px; width: 240px; height: 92px; position: static; left: 40px; top: 10px; background-color: rgba(228, 215, 215, 0.46);"
                            id="design_LoseLabel">You will remain in the Matrix forever</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 385px; left: 110px;">
                    <button id="design_TryAgainButton"
                            style="padding: 0px; margin: 0px; height: 30px; width: 80px; font-size: 14px; color: rgb(255, 255, 255); background-color: rgb(188, 26, 51); position: static; left: 110px; top: 385px;">
                        Try Again?
                    </button>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
            </div>
            <div class="screen" tabindex="1" id="design_LevelTwo"
                 style="height: 450px; width: 320px; left: 0px; top: 0px; position: absolute; z-index: 0; background-size: 320px 450px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/dojo.jpg&quot;); display: none;"
                 data-canonical-image-url="dojo.jpg">
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 230px; left: 185px;"><img
                            src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/morpheus.jpg"
                            data-canonical-image-url="morpheus.jpg" id="design_MorpheusImage"
                            style="height: 140px; width: 95px; position: static; left: 185px; top: 230px; margin: 0px;">
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 220px; left: 15px;"><img
                            src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/images (1).jpg"
                            data-canonical-image-url="images (1).jpg" id="design_NeoKarateImage"
                            style="height: 150px; width: 120px; position: static; left: 15px; top: 220px; margin: 0px;">
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 30px; left: 10px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 86px; height: 19px; position: static; left: 10px; top: 30px; background-color: rgb(0, 0, 0);"
                            id="design_NeoHealthDisplay">Neo Health:</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 30px; left: 95px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 30px; height: 19px; position: static; left: 95px; top: 30px; background-color: rgb(0, 0, 0);"
                            id="design_NeoHealth">100</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 30px; left: 150px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(51, 51, 51); max-width: 320px; width: 126px; height: 19px; position: static; left: 150px; top: 30px; background-color: rgb(255, 255, 255);"
                            id="design_MorpheousHealthDisplay">Morpheus Health:</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 30px; left: 275px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(51, 51, 51); max-width: 320px; width: 30px; height: 19px; position: static; left: 275px; top: 30px; background-color: rgb(255, 255, 255);"
                            id="design_MorpheusHealth">100</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 380px; left: 25px;">
                    <button id="design_PunchButton"
                            style="padding: 0px; margin: 0px; height: 55px; width: 55px; font-size: 18px; color: rgb(45, 128, 15); background-color: rgba(26, 188, 156, 0); position: static; left: 25px; top: 380px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/niEy7ae9T.jpg&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                            data-canonical-image-url="niEy7ae9T.jpg">Punch
                    </button>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 0px; left: -1.66533e-16px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(0, 0, 0); max-width: 320px; width: 320px; height: 19px; position: static; left: -1.66533e-16px; top: 0px; background-color: rgba(241, 230, 230, 0.52);"
                            id="design_LevelThreeInstructionsLabel"> &nbsp;You are playing as Neo, Defeat Morpheus!
                        &nbsp; &nbsp; &nbsp;</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 395px; left: 100px;">
                    <button id="design_DuckButton"
                            style="padding: 0px; margin: 0px; height: 25px; width: 80px; font-size: 14px; color: rgb(255, 255, 255); background-color: rgb(230, 71, 75); position: static; left: 100px; top: 395px;">
                        Duck!
                    </button>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 375px; left: 210px;">
                    <button id="design_KickButton"
                            style="padding: 0px; margin: 0px; height: 65px; width: 70px; font-size: 14px; color: rgb(255, 18, 18); background-color: rgba(26, 188, 156, 0); position: static; left: 210px; top: 375px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/b7fab2ee76debef03acfc9fe47a090f6_karate-kick-clipart-clipart-animated-moving-kick-clipart_1200-1200.jpeg&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                            data-canonical-image-url="b7fab2ee76debef03acfc9fe47a090f6_karate-kick-clipart-clipart-animated-moving-kick-clipart_1200-1200.jpeg">
                        Kick
                    </button>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 245px; left: 195px;"><img
                            src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/download (9).jpg"
                            data-canonical-image-url="download (9).jpg" id="design_PunchGraphic"
                            style="height: 70px; width: 60px; position: static; left: 195px; top: 245px; margin: 0px;"
                            class="design-mode-hidden">
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 215px; left: 180px;"><img
                            src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/pow.gif"
                            data-canonical-image-url="pow.gif" id="design_NeoPunchImage"
                            style="height: 150px; width: 120px; position: static; left: 180px; top: 215px; margin: 0px;"
                            class="design-mode-hidden">
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 265px; left: 155px;"><img
                            src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/57ead1b35e369195f253e406556d3451_clip-art-clip-art-free-and-martial-arts-clipart-transparent-background_320-320.jpeg"
                            data-canonical-image-url="57ead1b35e369195f253e406556d3451_clip-art-clip-art-free-and-martial-arts-clipart-transparent-background_320-320.jpeg"
                            id="design_KickGraphic"
                            style="height: 85px; width: 75px; position: static; left: 155px; top: 265px; margin: 0px;"
                            class="design-mode-hidden">
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 380px; left: 25px;"><img
                            src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/round-clock-at-nine-oclock-outline_318-35668.jpg"
                            data-canonical-image-url="round-clock-at-nine-oclock-outline_318-35668.jpg"
                            id="design_punchcover"
                            style="height: 55px; width: 55px; position: static; left: 25px; top: 380px; margin: 0px;"
                            class="design-mode-hidden">
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 375px; left: 215px;"><img
                            src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/round-clock-at-nine-oclock-outline_318-35668.jpg"
                            data-canonical-image-url="round-clock-at-nine-oclock-outline_318-35668.jpg"
                            id="design_kickcover"
                            style="height: 65px; width: 60px; position: static; left: 215px; top: 375px; margin: 0px;"
                            class="design-mode-hidden">
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 235px; left: 45px;"><img
                            src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/big_14237897_image.jpg"
                            data-canonical-image-url="big_14237897_image.jpg" id="design_morphpunch"
                            style="height: 90.0079px; width: 220px; position: static; left: 45px; top: 235px; margin: 0px;"
                            class="design-mode-hidden">
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 235px; left: 35px;"><img
                            src="/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/Untitled drawing (1).jpg"
                            data-canonical-image-url="Untitled drawing (1).jpg" id="design_DuckGraphic"
                            style="height: 120.414px; width: 285px; position: static; left: 35px; top: 235px; margin: 0px;"
                            class="design-mode-hidden">
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
            </div>
            <div class="screen" tabindex="1" id="design_MatrixWinScreen" data-canonical-image-url="images.jpg"
                 style="height: 450px; width: 320px; left: 0px; top: 0px; position: absolute; z-index: 0; background-size: 320px 450px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/images.jpg&quot;); display: none;">
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 30px; left: 15px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 20px; overflow: hidden; word-wrap: break-word; color: rgb(255, 255, 255); max-width: 320px; width: 303px; height: 25px; position: static; left: 15px; top: 30px; background-color: rgb(26, 138, 9);"
                            id="design_YouWinLabel">You have Defeated the Matrix!</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 355px; left: 65px;">
                    <button id="design_PlayAgainButton"
                            style="padding: 0px; margin: 0px; height: 80px; width: 170px; font-size: 14px; color: rgb(255, 255, 255); background-color: rgba(255, 0, 6, 0.26); position: static; left: 65px; top: 355px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/Enter-Key.png&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat; text-align: right;"
                            data-canonical-image-url="Enter-Key.png">Play Again? &nbsp; &nbsp;
                    </button>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
            </div>
            <div class="screen" tabindex="1" id="design_LevelThree"
                 style="height: 450px; width: 320px; left: 0px; top: 0px; position: absolute; z-index: 0; background-size: 320px 450px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/Matrix%20Reality%20-%20disconnect%20from%20it.jpg&quot;); display: none;"
                 data-canonical-image-url="Matrix Reality - disconnect from it.jpg">
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 10px; left: 30px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 18px; overflow: hidden; word-wrap: break-word; color: rgb(253, 253, 253); max-width: 320px; width: 253px; height: 23px; position: static; left: 30px; top: 10px; background-color: rgba(255, 237, 237, 0);"
                            id="design_LevelThreeLabel">FINAL Level Trivia Question </label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 65px; left: 10px;"><label
                            style="margin: 0px; padding: 2px; line-height: 1; font-size: 14px; overflow: hidden; word-wrap: break-word; color: rgb(255, 249, 249); max-width: 320px; width: 270px; height: 47px; position: static; left: 10px; top: 65px; background-color: rgb(80, 5, 5);"
                            id="design_LevelThreeQuestionLabel">Who said this "Unfortunaly no one can be told what the
                        Matrix is, &nbsp;you have to see it for yourself."?</label>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 140px; left: 40px;">
                    <button id="design_NeoAnswerButton"
                            style="padding: 0px; margin: 0px; height: 65px; width: 85px; font-size: 14px; color: rgb(0, 0, 0); background-color: rgba(26, 188, 156, 0); position: static; left: 40px; top: 140px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                            data-canonical-image-url="bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png">
                        Neo
                    </button>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 255px; left: 185px;">
                    <button id="design_TrinityAnswerButton"
                            style="padding: 0px; margin: 0px; height: 55px; width: 85px; font-size: 14px; color: rgb(0, 0, 0); background-color: rgba(26, 188, 156, 0); position: static; left: 185px; top: 255px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                            data-canonical-image-url="bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png">
                        Trinity
                    </button>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 255px; left: 40px;">
                    <button id="design_TankAnswerButton"
                            style="padding: 0px; margin: 0px; height: 55px; width: 85px; font-size: 14px; color: rgb(0, 0, 0); background-color: rgba(26, 188, 156, 0); position: static; left: 40px; top: 255px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                            data-canonical-image-url="bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png">
                        Tank
                    </button>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
                <div class="ui-resizable ui-draggable"
                     style="position: absolute; line-height: 0px; top: 145px; left: 185px;">
                    <button id="design_MorpheusAnswerButton"
                            style="padding: 0px; margin: 0px; height: 55px; width: 85px; font-size: 14px; color: rgb(0, 0, 0); background-color: rgba(26, 188, 156, 0); position: static; left: 185px; top: 145px; background-image: url(&quot;https://studio.code.org/v3/assets/GOitLZ_7Kat-ik9Li4b-r4mnJgE67vUrcmfKVcer62E/bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png&quot;); background-size: contain; background-position: 50% 50%; background-repeat: no-repeat;"
                            data-canonical-image-url="bbd9093ea7f65de04d5b5466d3e3b2e2_blank-computer-keyboard-keys-blank-keyboard-key-clipart_296-186.png">
                        Morpheus
                    </button>
                    <div class="ui-resizable-handle ui-resizable-e"></div>
                    <div class="ui-resizable-handle ui-resizable-s"></div>
                    <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                </div>
            </div>
        </div>
        <svg id="visualizationOverlay" version="1.1" baseProfile="full" width="320" height="450" viewBox="0 0 320 450"
             pointer-events="none" style="width: 320px; height: 450px;"><!-- react-empty: 294 -->
            <!-- react-empty: 295 --></svg><!-- react-empty: 31 -->
        <div data-radium="true"
             style="background-color: rgba(255, 255, 255, 0.5); width: 320px; height: 450px; overflow: hidden; z-index: 4; position: absolute; top: 0px; left: 0px; display: none;"></div>
    </div>
</div>


<script src='js/jquery-1.12.0.min.js'></script>
<script src='js/main.js'></script>
<script src="js/matrix.js"></script>

</body>

</html>
