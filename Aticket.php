<?php
include "DB.php"; // Include your database connection script

// Initialize variables
$GenService = '';
$nextQueueNumber = '';
$service = '';
$now = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['service'])) {
    $service = $_POST['service'];
    $GenService = $_POST['GenService'] ?? '';

    // Function to generate a queue number
    function generateQueueNumber($lastNumber, $prefix) {
        $newNumber = $lastNumber + 1;
        $paddedNumber = str_pad($newNumber, 3, '0', STR_PAD_LEFT);
        return "{$prefix}{$paddedNumber}";
    }

    // Prefix for Animal Bite
    $prefix = 'A';
    $tableName = 'animalbite_ticket';

    // Fetch the last number from the database for the specific prefix
    $stmt = $conn->prepare("SELECT MAX(TicketNum) AS lastTicket FROM $tableName WHERE TicketNum LIKE ?");
    $likePattern = $prefix . '%';
    $stmt->bind_param('s', $likePattern);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $lastTicket = $row['lastTicket'];
    $lastNumber = $lastTicket ? intval(substr($lastTicket, 1)) : 0;

    // Generate the next ticket number with the appropriate prefix
    $nextQueueNumber = generateQueueNumber($lastNumber, $prefix);

    // Get current date and time in the format 'Y-m-d H:i:s'
    $now = new DateTime();
    $dateStamp = $now->format('Y-m-d H:i:s');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link rel="stylesheet" href="_ticket.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>
<body>
    <div class="backhome">
        <a href="index.php"><button><span class="material-symbols-outlined">keyboard_backspace</span></button></a>
        <p>Back</p>
    </div>
    <div class="ticket">
    <div class="box">
            <div class="display">
                <div class="logo">
                    <div class="logo left-logo">
                        <img src="LGU LOGO NEW.png" alt="LGU Logo">
                    </div>
                    <div class="logo right-logo">
                        <img src="MHO LOGO_NEW.png" alt="MHO Logo">
                    </div>
                </div>
                <div class="title">
                    <h2>Mariveles <br> Rural Health Unit</h2>
                </div><br>

                <div class="qnum">
                    <h1 class="TicketNum"><?php echo htmlspecialchars($nextQueueNumber); ?></h1>
                </div>
                <div class="service">
                    <h3><?php echo htmlspecialchars($GenService); ?></h3>
                    <h3 class="spec"><?php echo htmlspecialchars($service); ?></h3>
                </div>

                <div class="qnecct-logo">
                    <img src="qnnect.png" alt="QNNECT Logo">
                </div>
                <div class="contain">
                    <div class="date">
                        <br><br>
                        <span id="time"></span>
                        <span id="date"></span>
                    </div>
                    <br>
                    <small>Please wait for your number to be called.</small>
                </div>
                
            </div>
            <button id="print">Get Ticket</button>
        </div>
    </div>
    <script>
         $(document).ready(function() {
            function updateTimeAndDate() {
                const now = new Date();
                const time = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true });
                const date = now.toLocaleDateString([], { month: '2-digit', day: '2-digit', year: 'numeric' });

                $('#time').text(time);
                $('#date').text(date);
            }

            // Update time and date when the page loads
            updateTimeAndDate();

            // Update the time every minute
            setInterval(updateTimeAndDate, 60000);
        });
        $(document).ready(function() {
            $('#print').click(function() {
                $.ajax({
                    type: 'POST',
                    url: 'saveTicket.php',
                    data: {
                        ticketNum: '<?php echo $nextQueueNumber; ?>',
                        GenService: '<?php echo $GenService; ?>',
                        service: '<?php echo $service; ?>',
                        dateStamp: '<?php echo $dateStamp; ?>'
                        
                    },
                    success: function(response) {
                        // You might want to process the response here if needed
                        window.location.href = 'index.php';
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', status, error);
                        alert('An error occurred while saving the ticket. Please try again.');
                    }
                });
            });
        });
    </script>
    <div class="qnecct-logo">
        <img src="QNNECT LOGO.png" alt="">
    </div>
</body>
</html>