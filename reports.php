<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="_allStyle.css">
        <link rel="stylesheet" href="_ReportsPage_.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                        <div class="year-option">
                            2024
                        </div>
                        <canvas id="MonthlyChart"></canvas>
                        <div class="print-btn">
                            <button onclick="downloadPDF()">PDF</button>
                            <button onclick="downloadImage('image/png')">PNG</button>
                            <button onclick="downloadImage('image/jpeg')">JPEG</button>
                        </div>
                    </div>
                    <div class="PieBox">
                        <canvas id="PieChart"></canvas>
                        <div class="print-btn">
                            <button onclick="downloadPiePDF()">PDF</button>
                            <button onclick="downloadPieImage('image/png')">PNG</button>
                            <button onclick="downloadPieImage('image/jpeg')">JPEG</button>
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
                                    <h4>2023 <i class="fa fa-sort-desc" aria-hidden="true"></i></h4>
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
                                    <h4>2024 <i class="fa fa-sort-desc" aria-hidden="true"></i></h4>
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
                    </div>
                </div>
                    
                </div>
                <div class="space"></div>
                <script>
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
                        type: 'line',
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
                    
                    
                    function downloadPDF(){
                        const pdfChart = document.getElementById('MonthlyChart');
                        //create image
                        const MonthlyChartImg = pdfChart.toDataURL('image/jpeg', 1.0);
                        console.log(MonthlyChartImg);

                        let pdf = new jsPDF();
                        pdf.setFontSize(20);
                        pdf.addImage(MonthlyChartImg, 'JPEG', 10, 10, 190, 150);
                        pdf.save('MontlyStats.pdf');
                    }
                    function downloadImage(format) {
                        const canvas = document.getElementById('MonthlyChart');
                        // Convert canvas to image data with high quality
                        const imgData = canvas.toDataURL(format, 1.0); // Quality set to 1.0 for high resolution

                        // Create a temporary link element to trigger the download
                        const link = document.createElement('a');
                        link.href = imgData;
                        link.download = `chart.${format.split('/')[1]}`;
                        link.click();
                    }
                    
                    // Pie chart
                    const pieCtx = document.getElementById('PieChart').getContext('2d');
                    new Chart(pieCtx, {
                        type: 'pie',
                        data: {
                            labels: ['First Vaccine', 'Booster'],
                            datasets: [{
                                label: 'Service Distribution',
                                data: [1500, 300], // Sample data
                                backgroundColor: [
                                    'rgb(32, 178, 170)',
                                    'rgb(215, 183, 36)'
                                ],
                                hoverOffset: 4
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    labels: {
                                        font: {
                                            size: 16 // Change this value to adjust label size
                                        }
                                    }
                                },
                                datalabels: {
                                    color: '#fff', // Set the text color
                                    font: {
                                        size: 16 // Set the font size for the data labels
                                    },
                                    formatter: (value) => value // Display the data value
                                }
                            }
                        },
                        plugins: [ChartDataLabels]
                    });
 
                    function downloadPiePDF() {
                        const pdfPieChart = document.getElementById('PieChart');
                        const canvas = document.createElement('canvas');
                        const ctx = canvas.getContext('2d');

                        // Set canvas dimensions to match the PieChart dimensions
                        canvas.width = pdfPieChart.width;
                        canvas.height = pdfPieChart.height;

                        // Fill the canvas background with white
                        ctx.fillStyle = 'white';
                        ctx.fillRect(0, 0, canvas.width, canvas.height);

                        // Draw the PieChart on top of the white background
                        ctx.drawImage(pdfPieChart, 0, 0);

                        // Convert canvas to image
                        const PieChartImg = canvas.toDataURL('image/jpeg', 1.0);

                        // Create a new PDF
                        let pdf = new jsPDF();
                        pdf.setFontSize(20);
                        pdf.addImage(PieChartImg, 'JPEG', 10, 10, 190, 150);
                        pdf.save('VaccineStats.pdf');
                    }


                    function downloadPieImage(format) {
                        const canvas = document.getElementById('PieChart');
                        const imgPieData = canvas.toDataURL(format, 1.0);
                        const link = document.createElement('a');
                        link.href = imgPieData;
                        link.download = `chart.${format.split('/')[1]}`;
                        link.click();
                    }

                </script>


            </main>
            <!------------------------------------------------------------------------------------------------------> 
        </div>
        
    </body>
</html>