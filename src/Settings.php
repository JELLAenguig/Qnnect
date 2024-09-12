<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="_allStyle.css">
        <link rel="stylesheet" href="_Settings.css">
        <link href="./output.css" rel="stylesheet">
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
                    <a href="reports.php">
                        <span class="material-symbols-outlined">lab_profile</span>
                        <h3>Reports</h3>
                    </a>
                    <a href="Settings.php"  class="active">
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
                <div class="w-full h-[300px] relative mt-12 p-2 SettingCont">
                    <h3 class="p-1"><i class="fa-solid fa-wrench"></i> Settings</h3>

                    <div class="w-full rounded-custom-radius p-2 shadow-custom-shadow mt-2 cursor-pointer items-center settingPad">
                        <p class="font-semibold text-sky-800 text-lg p-2"><i class="fa-solid fa-user"></i> Account</p>
                        <i class="fa-solid fa-chevron-right text-sky-800"></i>
                    </div>
                    <div class="w-full rounded-custom-radius p-2 shadow-custom-shadow mt-2 cursor-pointer items-center settingPad">
                        <p class="font-semibold text-sky-800 text-lg p-2"><i class="fa-solid fa-brush"></i> Themes</p>
                        <i class="fa-solid fa-chevron-right text-sky-800"></i>
                    </div>
                    <div class="w-full rounded-custom-radius p-2 shadow-custom-shadow mt-2 cursor-pointer items-center settingPad">
                        <p class="font-semibold text-sky-800 text-lg p-2"><i class="fa-solid fa-tv"></i> Screen Display</p>
                        <i class="fa-solid fa-chevron-right text-sky-800"></i>
                    </div>
                </div>
            </main>
            <!------------------------------------------------------------------------------------------------------> 
        </div>
    </body>
</html>