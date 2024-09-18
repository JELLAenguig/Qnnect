<?php
include "DB.php"; // Assuming DB.php handles the database connection

// Fetch data from all tables and include the service name
$query = "
SELECT 'Animal Bite' AS Service, TicketNum, Prioritization, DateStamp FROM animalbite_ticket
UNION
SELECT 'Consultation' AS Service, TicketNum, Prioritization, DateStamp FROM consultation_ticket
UNION
SELECT 'ECG' AS Service, TicketNum, Prioritization, DateStamp FROM ecg_ticket
UNION
SELECT 'Laboratory' AS Service, TicketNum, Prioritization, DateStamp FROM lab_ticket
UNION
SELECT 'Ultrasound' AS Service, TicketNum, Prioritization, DateStamp FROM utz_ticket
UNION
SELECT 'X-Ray' AS Service, TicketNum, Prioritization, DateStamp FROM xray_ticket
ORDER BY DateStamp ASC"; // Sorting by DateStamp

$result = $conn->query($query);

$data = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row; // Fetch each row and add it to the $data array
    }
}

echo json_encode($data); // Return the data as a JSON response

$conn->close(); // Close the connection
?>
