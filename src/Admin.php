<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="_allStyle.css">
        <link rel="stylesheet" href="_6dashboard.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title>ADMIN || RHU Q-NNECT</title>
    </head>
    <body>
        <div class="skipPopUp">
            <div class="PopOut">
                <div class="card">
                    <i class="fa-regular fa-circle-xmark" id="exit"></i>
                    <h3>Skipped Requests</h3>
                    <table>
                        <thead>
                            <tr>
                                <td>Service</td>
                                <td>Queue Number</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Consultation</td>
                                <td>A002</td>
                                <td>
                                    <button id="delskip"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                    <a href="Users.php">
                        <span class="material-symbols-outlined">account_circle</span>
                        <h3>Users</h3>
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
                <div class="scrollthis">
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
                                <div class="today-request">
                                    <div class="box">
                                        <h2>Total Request</h2>
                                        <h1>000</h1>
                                    </div>
                                </div>
                                <div class="today-skipped">
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
                                                        family: 'Poppins',  
                                                        size: 16,    
                                                        weight: 'bold',    
                                                        style: 'normal' 
                                                    },
                                                    bodyFont: {
                                                        family: 'Poppins',   
                                                        size: 14,          
                                                        weight: 'normal',  
                                                        style: 'normal'  
                                                    }
                                                },
                                                title: {
                                                    display: true,
                                                    text: 'Service Statistics',
                                                    font: {
                                                        family: 'Poppins',   
                                                        size: 15,          
                                                        weight: '600',    
                                                        color: '#0d5389',
                                                        style: 'normal'  
                                                    }
                                                }
                                            },
                                            scales: {
                                                x: {
                                                    ticks: {
                                                        font: {
                                                            family: 'Arial',  
                                                            size: 12,         
                                                            weight: 'normal',  
                                                            style: 'normal' 
                                                        }
                                                    }
                                                },
                                                y: {
                                                    ticks: {
                                                        font: {
                                                            family: 'Arial',
                                                            size: 12,        
                                                            weight: 'normal',  
                                                            style: 'normal'    
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
                        <div class="table-top">
                            <h2>Overview of Requests</h2>

                            <div class="find">
                                <div class="findUser">
                                <form class='form-inline'>
                                    <div class="input-group">
                                        <input type='text' id='search' class="search-form" placeholder="Search...">
                                        <span class="input-group-btn" style="width:39px">
                                        <button id="search-this" type="submit" class="search-btn">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        </span>
                                    </div>
                                </form>
                                </div>
                            </div>
                            
                            <span class="showRangeBox">
                                <label for="showRange">Show:</label>
                                <input type="number" value="10">
                                <p>entries</p>
                            </span>
                            <span class="mr-1 font-medium filter-show filspan"><i class="fa-solid fa-sliders"></i> Filter</span>
                            
                            <div class="ml-1 filter">
                                <form id="filterForm" method="POST">
                                    
                                
                                    <div class="filter-group">
                                        <label for="serviceType">Service:</label>
                                        <div class="filterbox">
                                            <select id="serviceType" name="serviceType">
                                                <option value="">All</option>
                                                <option value="Consultation">Consultation</option>
                                                <option value="X-Ray">X-ray</option>
                                                <option value="ECG">ECG</option>
                                                <option value="UTZ">UTZ</option>
                                                <option value="Laboratory">Laboratory</option>
                                                <option value="AnimalBite">Animal Bite</option>
                                            </select>
                                            <i class="fa-solid fa-sort-down"></i>
                                        </div>
                                    </div>

                                    <div class="filter-group">
                                        <label for="Sort">Sort By:</label>
                                        <div class="filterbox">
                                            <select id="Sort" name="Sort">
                                                <option value="">All</option>
                                                <option value="DateTime">Date and Time</option>
                                                <option value="IsPriority">Priority Level</option>
                                            </select>
                                            <i class="fa-solid fa-sort-down"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                        
                        <div class="table-cont">
                            
                                <table id="queueTable">
                                    <thead>
                                        <tr>
                                            <td>Service</td>
                                            <td>Queue Number</td>
                                            <td>Priority Level</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            <span>Showing 1-10 out of 20 entries</span>
                        </div>

                    </div>
                </div>
                <div class="space"></div>
            </main>
          

            <!------------------------------------------------------------------------------------------------------> 
        </div>
        <script src="showOverview.js"></script>
        <script src="Skipped.js"></script>
        <script src="filter-show.js"></script>
    </body>
</html>