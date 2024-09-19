<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="__02index.css">
    <link rel="stylesheet" href="_Pop-Ups.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Mariveles || RHU Q-nnect</title>
</head>
<body>
    <div class="alert-container">
        <div class="alert">
            <p>Do you have doctor's request?</p>
            <div class="btns">
                <button id="No">No</button>
                <button id="Yes">Yes</button>
            </div>
        </div>
    </div>
    <div class="consultPopUp">
        <div class="PopUp">
            <p>You cannot choose this service without a doctor's request. Please select 'Consultation'</p>
            <p>(Hindi mo maaaring piliin ang serbisyong ito kung walang request mula sa doktor. Mangyaring piliin ang 'Consultation')</p>
            <button id="OK">OK</button>
        </div>
    </div>
    <div class="selectApplicable">
        <div class="op-card">
            <p>Are you PWD, Pregnant or Senior Citizen?</p>
            <button id="Priority">YES</button>
            <button id="Regular">NO</button>
        </div>
    </div>
    <div class="title">
        <h3 id="Muncplty">Mariveles</h3>
        <h3 id="plc">Rural Health Unit</h3>
    </div>
    <div class="instr">
        <p id="q1">Welcome!</p>
        <p id="q2">Please select a service</p>
    </div>
    <div class="logos">
        <div class="logo left-logo">
            <img src="LGU LOGO NEW.png">
        </div>
        <div class="logo right-logo">
            <img src="MHO LOGO_NEW.png">
        </div>
    </div>
    
    <div class="buttons">
        <div class="box">
            <button class="btns" id="consultation">Consultation</button>
            <button class="btn" id="laboratory">Laboratory</button>
            <button class="btn" id="xray">X-Ray</button>
            <button class="btn" id="ultrasound">UltraSound</button>
            <button class="btn" id="ecg">ECG</button>
            <a href="1stVac.php"><button id="animalbite">Animal Bite</button></a>
        </div>
    </div>

    <form id="hiddenForm" action="Aticket.php" method="post" style="display: none;">
        <input type="hidden" id="serviceInput" name="service" />
        <input type="hidden" id="priorType" name="priorType"/>
    </form>

    <div class="crdts">
        <div class="kiosklogo">
            <img src="qnnect.png">
        </div>
    </div>

    <script src="HandlePopUps.js"></script>
</body>
</html>
