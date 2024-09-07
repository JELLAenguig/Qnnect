<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="_allStyle.css">
        <link rel="stylesheet" href="_dash.css">
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
                            <div class="card-body">
                                <canvas id="myChart"></canvas>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                            <script>
                                const ctx = document.getElementById('myChart').getContext('2d');

                                new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Consultation', 'Laboratory', 'X-Ray', 'ECG', 'Ultrasound', 'Animal Bite'],
                                        datasets: [
                                            {
                                                label: 'Daily',
                                                data: [100, 72, 23, 39, 23, 150],
                                                borderWidth: 2,
                                                backgroundColor: '#057b98b5'
                                            },
                                            {
                                                label: 'Monthly',
                                                data: [800, 604, 623, 434, 502, 1066],
                                                borderWidth: 2,
                                                backgroundColor: '#35d8cac5'
                                            },
                                            {
                                                label: 'Yearly',
                                                data: [1300, 2304, 1432, 1234, 1502, 4006],
                                                borderWidth: 2,
                                                backgroundColor: '#d8d835c5'
                                            }
                                        ]
                                    },
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        plugins: {
                                            legend: {
                                                labels: {
                                                    font: {
                                                        family: 'sans serif',   // Font family for legend
                                                        size: 14,          // Font size for legend
                                                        weight: 'normal',    // Font weight for legend
                                                        style: 'normal'    // Font style for legend
                                                    }
                                                }
                                            },
                                            tooltip: {
                                                callbacks: {
                                                    title: function(tooltipItems) {
                                                        return tooltipItems[0].label;
                                                    },
                                                    label: function(tooltipItem) {
                                                        return tooltipItem.dataset.label + ': ' + tooltipItem.raw;
                                                    }
                                                },
                                                titleFont: {
                                                    family: 'Poppins',   // Font family for tooltip title
                                                    size: 16,          // Font size for tooltip title
                                                    weight: 'bold',    // Font weight for tooltip title
                                                    style: 'normal'    // Font style for tooltip title
                                                },
                                                bodyFont: {
                                                    family: 'Poppins',   // Font family for tooltip body
                                                    size: 14,          // Font size for tooltip body
                                                    weight: 'normal',  // Font weight for tooltip body
                                                    style: 'normal'    // Font style for tooltip body
                                                }
                                            },
                                            title: {
                                                display: true,
                                                text: 'Service Statistics',
                                                font: {
                                                    family: 'Poppins',   // Font family for title
                                                    size: 15,          // Font size for title
                                                    weight: '600',    // Font weight for title
                                                    color: '#0d5389',
                                                    style: 'normal'    // Font style for title
                                                }
                                            }
                                        },
                                        scales: {
                                            x: {
                                                ticks: {
                                                    font: {
                                                        family: 'Arial',   // Font family for x-axis labels
                                                        size: 12,          // Font size for x-axis labels
                                                        weight: 'normal',  // Font weight for x-axis labels
                                                        style: 'normal'    // Font style for x-axis labels
                                                    }
                                                }
                                            },
                                            y: {
                                                ticks: {
                                                    font: {
                                                        family: 'Arial',   // Font family for y-axis labels
                                                        size: 12,          // Font size for y-axis labels
                                                        weight: 'normal',  // Font weight for y-axis labels
                                                        style: 'normal'    // Font style for y-axis labels
                                                    }
                                                }
                                            }
                                        }
                                    }
                                });
                            </script>

                        </div>
                    </div>
                    
                </div>
                <div class="overview">
                    <h2>Overview of Patient Queue</h2>
                    <div class="table-cont">
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

                </div>
                
            </main>
          

            <!------------------------------------------------------------------------------------------------------> 
        </div>
        <script src="Theme.js"></script>
    </body>
</html>