<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="_3Admin.css">
        <link rel="stylesheet" href="_mainAdmin.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>ADMIN || RHU Q-NNECT</title>
    </head>
    <body>
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

                <div class="wrap">
                    <div class="search">
                        <form action="" method="POST">
                            <input type="text" class="searchTerm" name="searched"">
                            <button type="submit" class="searchButton">
                                <span class="material-symbols-outlined">search</span>
                            </button>
                        </form>
                    </div>
                </div>

            <div class="adminProfile">
                <div class="adminName">
                    <p><b>Dela Cruz, Juan</b></p>
                </div>
                <div class="adminImage">
                    <span class="material-symbols-outlined">person</span>
                </div>
            </div>
        </div>       
        <div class="MainContainer">
            <aside>
                <div class="top">
                    <div class="logo">
                        <h2>Q-NNECT</h2>
                    </div>
                    <div class="close" id="close-btn">
                        <span class="material-symbols-outlined">close</span>
                    </div>
                </div>
                <div class="sidebar">
                    <a href="Admin.php" class="active">
                        <span class="material-symbols-outlined">space_dashboard</span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="Reports.php">
                        <span class="material-symbols-outlined">lab_profile</span>
                        <h3>Reports</h3>
                    </a>

                    <a href="Settings.php">
                        <span class="material-symbols-outlined">settings</span>
                        <h3>Settings</h3>
                    </a>
                    <div class="logout-btn">
                        <a href="AdminOut.php">
                            <span class="material-symbols-outlined out">logout</span>
                            <h3>Logout</h3>
                        </a>
                    </div>
                    
                </div>
            </aside>
            <!-------------------------------MAIN CONTENT HERE...---------------------------------------->
            <main>
                <div class="wrapper">
                    <div class="current-que">
                        <div class="pad">
                            <h3>Queue Status</h3>
                            <div class="col-container">
                                <div class="col">
                                    <h3>Services</h3>
                                    <ul>
                                        <li>Laboratory</li>
                                        <li>UltraSound</li>
                                        <li>Animal Bite</li>
                                        <li>X-Ray</li>
                                        <li>ECG</li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <h3>Serving</h3>
                                    <ul class="num">
                                        <li>L000</li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <h3>Next Patient</h3>
                                    <ul class="num">
                                        <li>L000</li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------------------------------->
                    <div class="right-pad">
                        <div class="left-side">
                            <div class="service-counter">
                                <div class="box">
                                    <h2>Pending Request</h2>
                                    <h1>000</h1>
                                </div>
                            </div>
                            <div class="today-que">
                                <div class="box">
                                    <h2>Total Request</h2>
                                    <h1>000</h1>
                                </div>
                            </div>
                            <div class="today-que">
                                <div class="box">
                                    <h2>Skipped Request</h2>
                                    <h1>000</h1>
                                </div>
                            </div>
                            <div class="served">
                                <div class="box">
                                    <h2>Number of Patient Served</h2>
                                    <h1>000</h1>
                                </div>
                            </div>
                            <div class="served">
                                <div class="box">
                                    <h2>Average Waiting Time</h2>
                                    <h1>00:00</h1>
                                </div>
                            </div>
                        </div>
                        <div class="bite-stat">
                            <h2>Animal Bite Cases</h2>
                        
                        </div>
                    </div>
                    
                </div>
                <div class="overview">
                    <h2>Overview of Patient Queue</h2>
                    <table>
                        <thead>
                            <tr>
                                <td>Service</td>
                                <td>Queue Number</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                                        
                        </tbody>
                    </table>
                </div>
                
            </main>
          

            <!------------------------------------------------------------------------------------------------------> 
        </div>
        <script src="Theme.js"></script>
    </body>
</html>