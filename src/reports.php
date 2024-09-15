<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="_allStyle.css">
        <link rel="stylesheet" href="_1report.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>ADMIN || RHU Q-NNECT</title>
        
    </head>
    <body >
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
                            <input type="text" class="searchTerm" name="searched">
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
                    <a href="Admin.php">
                        <span class="material-symbols-outlined">space_dashboard</span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="Users.php">
                        <span class="material-symbols-outlined">account_circle</span>
                        <h3>Users</h3>
                    </a>
                    <a href="reports.php" class="active">
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
            <div class="report-box">
                <div class="served-body">
                    <h3>Patient Served</h3>
                    <div class="year-selection">
                        <select id="yearDropdownPrimary">
                            <!-- Options will be dynamically generated -->
                        </select>
                    </div>

                    <canvas id="MonthlyChart"></canvas>
                    <div class="download-btn">
                        <label for="download-option"><i class="fa-solid fa-download"></i> Download: </label>
                        <select id="download-option" onchange="handleDownload(this.value)">
                            <option value="" disabled selected>Select format...</option>
                            <option value="PDF">PDF</option>
                            <option value="PNG">PNG</option>
                            <option value="JPEG">JPEG</option>
                        </select>
                    </div>
                </div>
                <div class="casesPerService">
                    <h3>Number of Patients Per Services</h3>
                    <div class="filter-month">
                        <select id="Month" name="Month">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            const initialYearPrimary = 2024;
                            const finalYearPrimary = 5000;

                            function populateYearDropdownPrimary() {
                                const $dropdownPrimary = $('#yearDropdownPrimary');
                                
                                // Clear existing options
                                $dropdownPrimary.empty();

                                for (let year = initialYearPrimary; year <= finalYearPrimary; year++) {
                                    $dropdownPrimary.append($('<option>', {
                                        value: year,
                                        text: year
                                    }));
                                }
                            }

                            function handleYearChangePrimary() {
                                const selectedYearPrimary = $('#yearDropdownPrimary').val();
                                console.log('Selected Year from Primary Dropdown:', selectedYearPrimary); // Handle the selected year
                            }

                            // Initialize the first dropdown with years
                            populateYearDropdownPrimary();

                            // Bind the change event to the dropdown
                            $('#yearDropdownPrimary').change(handleYearChangePrimary);
                        });

                        $(document).ready(function() {
                            const initialYear1 = 2024;
                            const finalYear1 = 5000;

                            function populateYearDropdown1() {
                                const $dropdown1 = $('#year1');
                                
                                // Clear existing options
                                $dropdown1.empty();

                                for (let year = initialYear1; year <= finalYear1; year++) {
                                    $dropdown1.append($('<option>', {
                                        value: year,
                                        text: year
                                    }));
                                }
                            }

                            function handleYearChange1() {
                                const selectedYear1 = $('#year1').val();
                                console.log('Selected Year from Dropdown 1:', selectedYear1); // Handle the selected year
                            }

                            // Initialize the first dropdown with years
                            populateYearDropdown1();

                            // Bind the change event to the dropdown
                            $('#year1').change(handleYearChange1);
                        });

                        $(document).ready(function() {
                            const initialYear2 = 2025;
                            const finalYear2 = 5000;

                            function populateYearDropdown2() {
                                const $dropdown2 = $('#year2');
                                
                                // Clear existing options
                                $dropdown2.empty();

                                for (let year = initialYear2; year <= finalYear2; year++) {
                                    $dropdown2.append($('<option>', {
                                        value: year,
                                        text: year
                                    }));
                                }
                            }

                            function handleYearChange2() {
                                const selectedYear2 = $('#year2').val();
                                console.log('Selected Year from Dropdown 2:', selectedYear2); // Handle the selected year
                            }

                            // Initialize the first dropdown with years
                            populateYearDropdown2();

                            // Bind the change event to the dropdown
                            $('#year2').change(handleYearChange2);
                        });
                    </script>
                        <div class="permonth-table">
                            <ul class="Service_perMonth">
                                <h3>Services</h3>
                                <li>Consultation</li>
                                <li>Laboratory</li>
                                <li>X-Ray</li>
                                <li>ECG</li>
                                <li>Ultrasound</li>
                            </ul>
                            <ul class="total_perMonth">
                                <h3>Total No.</h3>
                                <li>000</li>
                                <li>000</li>
                                <li>000</li>
                                <li>000</li>
                                <li>000</li>
                            </ul>
                        </div>
                        <div class="download-btn">
                            <label for="download-option"><i class="fa-solid fa-download"></i> Download: </label>
                            <select name="download-option" id="download-option">
                                <option value="" disabled selected>Select format...</option>
                                <option value="PDF">PDF</option>
                                <option value="PNG">PNG</option>
                                <option value="JPEG">JPEG</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                    
                <div class="SecChart">
                <div class="cases">
                        <h3>Total of Animal Bite Cases</h3>
                        <div class="box-pad">
                            <div class="table">
                                <div class="month">
                                    <h4>Month</h4>
                                    <ul>
                                        <li>January</li>
                                        <li>February</li>
                                        <li>March</li>
                                        <li>April</li>
                                        <li>May</li>
                                        <li>June</li>
                                        <li>July</li>
                                        <li>August</li>
                                        <li>September</li>
                                        <li>October</li>
                                        <li>November</li>
                                        <li>December</li>
                                    </ul>
                                </div>

                                <div class="year1">
                                    <div class="optionyear">
                                        <select id="year1" onchange="handleYearChange1()">
                                            <!-- Options will be dynamically generated -->
                                        </select> 
                                    </div>
                                    
                                    <ul>
                                        <li>500</li>
                                        <li>504</li>
                                        <li>340</li>
                                        <li>599</li>
                                        <li>566</li>
                                        <li>345</li>
                                        <li>323</li>
                                        <li>453</li>
                                        <li>234</li>
                                        <li>343</li>
                                        <li>563</li>
                                        <li>142</li>
                                    </ul>
                                </div>
                                <div class="year2">
                                    <div class="optionyear">
                                        <select id="year2" onchange="handleYearChange2()">
                                            <!-- Options will be dynamically generated -->
                                        </select> 
                                    </div>
                                    <ul>
                                        <li>500</li>
                                        <li>504</li>
                                        <li>340</li>
                                        <li>599</li>
                                        <li>566</li>
                                        <li>345</li>
                                        <li>323</li>
                                        <li>453</li>
                                        <li>0</li>
                                        <li>0</li>
                                        <li>0</li>
                                        <li>0</li>
                                    </ul>
                                </div>

                                <div class="diff">
                                    <h4>% Diff.</h4>
                                    <ul>
                                        <li>0%</li>
                                        <li>0%</li>
                                        <li>0%</li>
                                        <li>0%</li>
                                        <li>0%</li>
                                        <li>0%</li>
                                        <li>0%</li>
                                        
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="total">
                            <ul>
                                <li>Total</li>
                            </ul>
                            <ul>
                                <li> 4,912</li>
                            </ul>
                            <ul>
                                <li>3,630</li>
                            </ul>
                        </div>
                        <div class="download-btn">
                            <label for="download-option"><i class="fa-solid fa-download"></i> Download: </label>
                                <select id="download-option">
                                <option value="" disabled selected>Select format...</option>    
                                <option value="PDF">PDF</option>
                                <option value="PNG">PNG</option>
                                <option value="JPEG">JPEG</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                <script>
                    // Function to generate year options for dropdowns
                    function populateYearDropdowns() {
                        const yearDropdowns = [document.getElementById('yearDropdownPrimary'), document.getElementById('year1'), document.getElementById('year2')];
                        const currentYear = new Date().getFullYear();
                        const endYear = currentYear - 5;
                        
                        for (let i = currentYear; i >= endYear; i--) {
                            yearDropdowns.forEach(dropdown => {
                                const option = document.createElement('option');
                                option.value = i;
                                option.textContent = i;
                                dropdown.appendChild(option);
                            });
                        }
                    }

                    const ctx = document.getElementById('MonthlyChart').getContext('2d');
                    
                    const bgColor = {
                        id: 'bgColor',
                        beforeDraw: (chart, options) => {
                            const { ctx, width, height } = chart;
                            ctx.fillStyle = 'white';
                            ctx.fillRect(0, 0, width, height)
                            ctx.restore();
                        }
                    }

                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                            datasets: [
                                {
                                    label: 'Consultation',
                                    data: [150, 500, 120, 220, 300, 220, 160, 150, 220, 340, 120, 420],
                                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                                    borderColor: '#007bff',
                                    borderWidth: 1.3,
                                    tension: 0.3
                                },
                                {
                                    label: 'Laboratory',
                                    data: [120, 240, 150, 250, 110, 120, 110, 130, 230, 350, 150, 200],
                                    backgroundColor: 'rgba(108, 66, 193, 0.5)',
                                    borderColor: '#6c42c1',
                                    borderWidth: 1,
                                    tension: 0.3
                                },
                                {
                                    label: 'X-Ray',
                                    data: [60, 100, 75, 74, 100, 125, 40, 110, 105, 65, 80, 85],
                                    backgroundColor: 'rgba(85, 224, 78, 0.5)',
                                    borderColor: '#28a745',
                                    borderWidth: 1,
                                    tension: 0.3
                                },
                                {
                                    label: 'ECG',
                                    data: [40, 50, 95, 75, 50, 100, 105, 120, 105, 85, 35, 120],
                                    backgroundColor: 'rgba(255, 193, 7, 0.5)',
                                    borderColor: '#ffc107',
                                    borderWidth: 1,
                                    tension: 0.3
                                },
                                {
                                    label: 'Ultrasound',
                                    data: [130, 40, 135, 45, 40, 50, 130, 40, 35, 45, 70, 80],
                                    backgroundColor: 'rgba(23, 162, 184, 0.5)',
                                    borderColor: '#17a2b8',
                                    borderWidth: 1,
                                    tension: 0.3
                                },
                                {
                                    label: 'Animal Bite',
                                    data: [100, 120, 210, 330, 125, 440, 210, 310, 115, 210, 100, 109],
                                    backgroundColor: 'rgba(224, 78, 161, 0.5)',
                                    borderColor: '#fd7e14',
                                    borderWidth: 1,
                                    tension: 0.3
                                }
                            ]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            },
                        },
                        plugins: [bgColor]
                    });
                    
                    
                    function handleDownload() {
                        const downloadOption = document.getElementById('download-option');
                        const format = downloadOption.value;

                        // Trigger the appropriate download
                        initiateDownload(format);

                        // Reset the dropdown to an empty value (or a default value)
                        downloadOption.selectedIndex = 0;  // Reset to the first option (if you have a placeholder)
                    }

                    function initiateDownload(format) {
                        if (format === 'PDF') {
                            downloadPDF();
                        } else if (format === 'PNG') {
                            downloadImage('image/png');
                        } else if (format === 'JPEG') {
                            downloadImage('image/jpeg');
                        }
                    }

                    function downloadPDF() {
                        const pdfChart = document.getElementById('MonthlyChart');
                        const MonthlyChartImg = pdfChart.toDataURL('image/jpeg', 1.0);

                        let pdf = new jsPDF();
                        pdf.setFontSize(20);
                        pdf.addImage(MonthlyChartImg, 'JPEG', 10, 10, 190, 150);
                        pdf.save('MontlyStats.pdf');
                    }

                    function downloadImage(format) {
                        const canvas = document.getElementById('MonthlyChart');
                        const imgData = canvas.toDataURL(format, 1.0);

                        const link = document.createElement('a');
                        link.href = imgData;
                        link.download = `chart.${format.split('/')[1]}`;
                        link.click();
                    }
                    
                </script>


            </main>
            <!------------------------------------------------------------------------------------------------------> 
        </div>
     
    <script src="yearTotal.js"></script>
    </body>
</html>