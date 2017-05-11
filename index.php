<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' type='text/css' href='css/styles.css'>
    <script type="application/javascript">
        var molly = false;
        if (molly) {
            console.log("rag");
        } else {
            ajshd = 3948;
            console.log("poopy");
        }
    </script>
</head>

<body>

<h1>Proficient in:</h1>
<div class='skillset'>
    <div class='skill-html'>
        <h1>HTML &amp; CSS</h1>
        <p class='description'>
        <div class='projects-button'>Recent Projects</div>
        <ul class='projects'>
            <li><?php echo date("Y  ---    c"); ?></li>
            <?php
            $molly = false;
            if ($molly) {
                echo "stuff";
            } else {
                echo "rags";
            }
            array_combine(array('setes'), array('seroijae'))
            ?>
            <li>MOVE</li>
        </ul>
        </p>
    </div>

    <div class='skill-js'>
        <a<h1>JavaScript</h1>
        <p class='description'>
        <div class='projects-button'>Recent Projects</div>
        <ul class='projects'>
            <li>Password Validator</li>
            <li>Whale Talk</li>
        </ul>
        </p>
    </div>

    <div class='skill-jquery'>
        <h1>jQuery</h1>
        <p class='description'>
        <div class='projects-button'>Recent Projects</div>
        <ul class='projects'>
            <li>Coming soon...</li>
        </ul>
        </p>
    </div>
</div>
<script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
<script src='js/main.js'></script>
<script src="matrix.js"></script>
</body>

</html>
