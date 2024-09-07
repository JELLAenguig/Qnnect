<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screen Display || RHU Q-NNECT</title>
    <link rel="stylesheet" href="_Display_Screen.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>
    <main>
        <div class="logo">
                <img src="LGU LOGO NEW.png" alt="Logo">
            </div>
        <div class="top">
            <div class="top-top">
                <div class="title">
                    <h1>Mariveles Rural Health Unit</h1>
                </div>
                <div class="date">
                    <p class="current-time" id="current-time"></p>
                    <p class="current-date" id="current-date"></p> 
                </div>
            </div>
            <div class="top-bottom">
                <p id = "announcement">Free Consultation on December 30, 2024. Free Consultation on December 30, 2024. Free Consultation on December 30, 2024.</p>
            </div>
        </div>

        <div class="container">
            <div class="queue-container">
                <div class="call"> <!-- Display the patient number being called-->
                    <h3>Service</h3>
                    <p>0000</p>
                </div>
                <div class="box">
                    <div class="col-container">
                        <div class="col">
                            <h3>Services</h3>
                            <ul>
                                <li>Laboratory</li>
                                <li>UltraSound</li>
                                <li>X-Ray</li>
                                <li>ECG</li>
                                <li>Animal Bite</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Serving</h3>
                                <ul class="num">
                                    <li>L001</li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                        </div>
                        <div class="col">
                            <h3>Next Patient</h3>
                                <ul class="num">
                                    <li>L002</li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                        </div>
                    </div>        
                </div>
            </div>

            <div class="media">
                <div class="vid">
                    <video src="" autoplay loop></video>
                </div>
                <div class="additional">
                   
                </div>
            </div>
        </div>
    </main>
    <div class="btm">
        <ul>
            <li><i class="fas fa-globe" aria-hidden="true"></i> <p>marivelesbataangov.ph</p></li>
            <li><i class="fas fa-envelope" aria-hidden="true"></i> <p>arivelesrhu1@gmail.com</p></li>
            <li><i class="fas fa-phone" aria-hidden="true"></i> <p>(047) 935 - 1757 loc. 120</p></li>
        </ul>
    </div>
    <script>
        function updateDateTime() {
            const currentDateElement = document.getElementById('current-date');
            const currentTimeElement = document.getElementById('current-time');

            const currentDate = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = currentDate.toLocaleDateString(undefined, options);

            const formattedTime = currentDate.toLocaleTimeString();

            currentDateElement.textContent = formattedDate;
            currentTimeElement.textContent = formattedTime;
        }

        // Update the date and time immediately
        updateDateTime();

        // Update every second (1000 milliseconds)
        setInterval(updateDateTime, 1000);
    </script>
</body>
</html>
