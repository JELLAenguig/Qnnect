<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_7index.css">
    <link rel="stylesheet" href="Bite.css">
    <link rel="stylesheet" href="alertBox.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Mariveles || RHU Q-nnect - X-Ray</title>
</head>
<body>
    <div class="alert-container" style="display: none;">
        <div class="alert">
            <h2></h2>
            <p>Are you sure for your chosen service?</p>
            <div class="btns">
                <button id="back">Change</button>
                <button id="yes">Yes</button>
            </div>
        </div>
    </div>
    <div class="title">
        <h3 id="Muncplty">Mariveles</h3>
        <h3 id="plc">Rural Health Unit</h3>
    </div>
    <div class="instr">
        <p id="q1">X-Ray Services</p>
        <p id="q2">Please select a specific service</p>
    </div>
    <div class="logos">
        <div class="logo left-logo">
            <img src="file.png">
        </div>
        <div class="logo right-logo">
            <img src="file (1).png">
        </div>
    </div>
    <div class="back">
        <a href="index.php">
            <button><span class="material-symbols-outlined">keyboard_backspace</span></button>
        </a>
    </div>
    <div class="buttons">
        <div class="box">
            <button class="btn" id="Adult">X-Ray Adult</button>
            <button class="btn" id="chest">Chest pedia</button>
            <button class="btn" id="bones">Bones</button>
            <button class="btn" id="Skull">Skull</button>
            <button class="btn" id="Abdomen">Abdomen</button>
            <button class="btn" id="kub">KUB</button>
        </div>
    </div>
    <form id="hiddenForm" action="ATicket.php" method="post" style="display: none;">
        <input type="hidden" id="GenService" name="GenService" value="X-Ray">
        <input type="hidden" id="serviceInput" name="service" />
    </form>
    <div class="crdts">
        <div class="kiosklogo">
            <img src="QNNECT LOGO.png">
        </div>
    </div>
    
    <script src="Submit_Form.js"></script>
</body>
</html>
