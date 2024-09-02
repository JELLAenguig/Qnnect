<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="__01index.css">
    <link rel="stylesheet" href="_0Bite.css">
    <link rel="stylesheet" href="_3alertBox.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>AnimalBite || RHU Q-nnect</title>
</head>
<body>
    <div class="title">
        <h3 id="Muncplty">Mariveles</h3>
        <h3 id="plc">Rural Health Unit</h3>
    </div>
    <div class="instr">
        <p id="q1">Animal Bite</p>
        <p id="q2">Please select the type of vaccine</p>
    </div>
    <div class="logos">
        <div class="logo left-logo">
            <img src="LGU LOGO NEW.png">
        </div>
        <div class="logo right-logo">
            <img src="MHO LOGO_NEW.png">
        </div>
    </div>
    <div class="alert-container">
        <div class="alert">
            <p>Are you sure for your chosen service?</p>
            <div class="btns">
                <button id="back">Change</button>
                <button id="yes">Yes</button>
            </div>
        </div>
    </div>
    <div class="Booster">
        <div class="booster">
            <button class = "btns" id="Day0">Day 0</button>
            <button class = "btns" id="Day3">Day 3</button>
            <button class = "btns" id="Day7">Day 7</button>
        </div>
    </div>
    <div class="back">
        <a href="index.php">
            <button><span class="material-symbols-outlined">keyboard_backspace</span></button>
        </a>
    </div>
    <div class="buttons">
        <div class="box">
            <button class="btn" id="D0">Day 0</button>
            <button class="btn" id="D3">Day 3</button>
            <button class="btn" id="D7">Day 7</button>
            <button class="btn" id="D14">Day 14</button>
            <button class="btn" id="D28">Day 28/30</button>
            <a href="Booster.php"><button>Booster</button></a>
        </div>
    </div>
    <form id="hiddenForm" action="Aticket.php" method="post" style="display: none;">
        <input type="hidden" id="GenService" name="GenService">
        <input type="hidden" id="serviceInput" name="service" />
    </form>

    <div class="crdts">
        <div class="kiosklogo">
            <img src="QNNECT LOGO.png" alt="Kiosk Logo">
        </div>
    </div>
    <script src="Submit_Form.js"></script> 
</body>
</html>
