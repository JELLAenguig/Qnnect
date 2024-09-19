<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_moderator.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Staff || RHU Q-nnect</title>
</head>
<body>
    <main>
        <div class="topNav">
            <div class="date">
                <p class="current-time" id="current-time"></p>
                <p class="current-date" id="current-date"></p> 
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

            <h3>Consultation</h3>                    

            <div class="adminProfile">
                <div class="adminName">
                    <p><b>Dr. Juan Dela Cruz</b></p>
                </div>
                <div class="adminImage">
                    <span class="material-symbols-outlined">person</span>
                </div>
            </div>
        </div>  
        <div class="container">
            <div class="sideNav">
                <a href="#" class="active">
                    <span class="material-symbols-outlined">home</span>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">settings</span>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined out">logout</span>
                </a>
            </div>
            <div class="timer">
                <div class="pad">
                    <p id="stop-watch">00:00</p>
                    <p id="time-label">Serving Time</p>
                </div>
            </div>
            <div class="right">
                <div class="token_Num">
                    <h3>Patient</h3>
                    <p id="token_num"></p>
                </div>
                <div class="btns1">
                    <button id="call">Call</button>
                    <button id="start">Serve</button>
                </div>
                <div class="btns2">
                    <button id="skip">Skip</button>
                    <button id="end">End</button>
                </div>
            </div>
            <div class="in-que">
                <div class="theQueue">
                    <button id="showSkipped">Skipped <i class="fa-solid fa-chevron-right"></i></button>
                    <h3>Patient in Queue</h3>
                    <table id="PatientQueue">
                        <thead>
                            <tr>
                                <td>Number</td>
                                <td>Priority Level</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="queue-num">A001</td>
                                <td>Regular</td>
                                <td><button id="CallNext">Next</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="theSkipped">
                    <h3>Skipped Patients</h3>
                    <table id = "patientSkipped">
                        <thead>
                            <tr>
                                <td>Number</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="queue-num">A023</td>
                                <td><button id="CallSkipped">Next</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!--------------------------------------SCRIPTS------------------------------------------->
    <script src="clickSkipped.js"></script>
</body>
</html>