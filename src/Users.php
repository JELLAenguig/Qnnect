<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="_allStyle.css">
        <link rel="stylesheet" href="_1users.css">
        <link rel="stylesheet" href="./output.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                    <a href="Users.php" class="active">
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
        <!------------------------------------------------------------------------------------------------------> 
        <main>
            <div class="list-container">
                <div class="top-display">
                    <h3 class="font-semibold"><i class="fa fa-users" aria-hidden="true"></i>User List</h3>

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

                    <button class="btn add-user"><i class="fa-solid fa-user-plus"></i> Add User</button>
                </div>
                <div class="filter">
                    <span class="font-medium filter-show"><i class="fa-solid fa-sliders"></i> Filter</span>
                    
                    <form id="filterForm" method="POST">
                           <!-- User Role Filter -->
                        <div class="filter-group">
                            <label for="userRole">User Role:</label>
                                <div class="filterbox">
                                    <select id="userRole" name="userRole">
                                        <option value="">All</option>
                                        <option value="admin">Admin</option>
                                        <option value="moderator">Moderator</option>
                                    </select>
                                    <i class="fa-solid fa-sort-down"></i>
                                </div>
                        </div>
                        <!-- Account Status Filter -->
                        <div class="filter-group">
                            <label for="accountStatus">Status:</label>
                            <div class="filterbox">
                                <select id="accountStatus" name="accountStatus">
                                    <option value="">All</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Deactivated</option>
                                </select>
                                <i class="fa-solid fa-sort-down"></i>
                            </div>
                        </div>

                        <!-- Registration Date Filter -->
                        <div class="filter-group">
                            <label for="registrationDate">Date Registered:</label>
                            <div class="filterbox">
                                <input type="date" id="registrationDate" name="registrationDate">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-box">
                    <table>
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Name</td>
                                <td>Username</td>
                                <td>Email Address</td>
                                <td>Status</td>
                                <td>Created</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Joe Alwyn</td>
                                <td>Joe Joe</td>
                                <td>Alwyn@gmail.com</td>
                                <td>Active</td>
                                <td>2024-09-11</td>
                                <td>
                                    <!-- View Button -->
                                    <button class="action-btn px-1 font-medium view bg-gray-100 text-gray-800 viewbtn">View</button>

                                    <!-- Edit (Pencil) Button -->
                                    <button class="action-btn px-1 font-medium bg-gray-100 text-gray-800 editbtn">
                                    <i class="fa-solid fa-pen"></i>
                                    </button>

                                    <!-- Trash (Delete) Button -->
                                    <button class="action-btn px-1 font-medium trash bg-gray-100 text-gray-800 delbtn">
                                    <i class="fa-solid fa-trash"></i>
                                    </button>

                                    <!-- Disable Button with custom background -->
                                    <button class="px-1 font-medium action-btn disbtn">Disable</button>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!------------------------------------------------------------------------------------------------------>     
        </div>
        <script src="filter-show.js"></script>
    </body>
</html>