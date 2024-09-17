<?php
include "DB.php"; // Ensure this file initializes the $conn variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve POST data
    $ticketNum = $_POST['ticketNum'] ?? '';
    $GenService = $_POST['GenService'] ?? '';
    $service = $_POST['service'] ?? '';
    $dateStamp = $_POST['dateStamp'] ?? '';
    $prioritization = $_POST['prioritization'] ?? '';
    // Log received data for debugging
    error_log("Received data: ticketNum=$ticketNum, GenService=$GenService, service=$service, dateStamp=$dateStamp, prioritization=$prioritization");

    // Check if all required data is present
    if ($ticketNum && $GenService && $dateStamp) {
        if ($GenService === "Animal Bite") {
            $stmt = $conn->prepare("INSERT INTO animalbite_ticket (TicketNum, Service, DateStamp) VALUES (?, ?, ?)");
            if ($stmt) {
                $stmt->bind_param("sss", $ticketNum, $service, $dateStamp);
                if ($stmt->execute()) {
                    echo "Animal Bite ticket saved successfully!";
                } else {
                    error_log("Error executing query: " . $stmt->error);
                    echo "Error saving Animal Bite ticket.";
                }
                $stmt->close();
            } else {
                error_log("Error preparing statement: " . $conn->error);
                echo "Error preparing statement for Animal Bite ticket.";
            }
        } 
    }
    if ($ticketNum && $dateStamp) {
        if ($service === "Laboratory") {
            $stmt = $conn->prepare("INSERT INTO lab_ticket (TicketNum, DateStamp, Prioritization) VALUES (?, ?, ?)");
            if ($stmt) {
                $stmt->bind_param("sss", $ticketNum, $dateStamp, $prioritization);
                if ($stmt->execute()) {
                    echo "Laboratory ticket saved successfully!";
                } else {
                    error_log("Error executing query: " . $stmt->error);
                    echo "Error saving Laboratory ticket.";
                }
                $stmt->close();
            } else {
                error_log("Error preparing statement: " . $conn->error);
                echo "Error preparing statement for Laboratory ticket.";
            }
        } else {
            echo "Invalid service type.";
        }
    } else {
        echo "Missing required data.";
    }
    if ($ticketNum && $dateStamp) {
        if ($service === "X-Ray") {
            $stmt = $conn->prepare("INSERT INTO xray_ticket (TicketNum, DateStamp, Prioritization) VALUES (?, ?, ?)");
            if ($stmt) {
                $stmt->bind_param("sss", $ticketNum, $dateStamp, $prioritization);
                if ($stmt->execute()) {
                    echo "Laboratory ticket saved successfully!";
                } else {
                    error_log("Error executing query: " . $stmt->error);
                    echo "Error saving Laboratory ticket.";
                }
                $stmt->close();
            } else {
                error_log("Error preparing statement: " . $conn->error);
                echo "Error preparing statement for Laboratory ticket.";
            }
        } else {
            echo "Invalid service type.";
        }
    } else {
        echo "Missing required data.";
    }
    if ($ticketNum && $dateStamp) {
        if ($service === "Consultation") {
            $stmt = $conn->prepare("INSERT INTO consultation_ticket (TicketNum, DateStamp, Prioritization) VALUES (?, ?, ?)");
            if ($stmt) {
                $stmt->bind_param("sss", $ticketNum, $dateStamp, $prioritization);
                if ($stmt->execute()) {
                    echo "Consultation ticket saved successfully!";
                } else {
                    error_log("Error executing query: " . $stmt->error);
                    echo "Error saving Consultation ticket.";
                }
                $stmt->close();
            } else {
                error_log("Error preparing statement: " . $conn->error);
                echo "Error preparing statement for Consultation ticket.";
            }
        } else {
            echo "Invalid service type.";
        }
    } else {
        echo "Missing required data.";
    }
    if ($ticketNum && $dateStamp) {
        if ($service === "Ultrasound") {
            $stmt = $conn->prepare("INSERT INTO utz_ticket (TicketNum, DateStamp, Prioritization) VALUES (?, ?, ?)");
            if ($stmt) {
                $stmt->bind_param("sss", $ticketNum, $dateStamp, $prioritization);
                if ($stmt->execute()) {
                    echo "Consultation ticket saved successfully!";
                } else {
                    error_log("Error executing query: " . $stmt->error);
                    echo "Error saving Consultation ticket.";
                }
                $stmt->close();
            } else {
                error_log("Error preparing statement: " . $conn->error);
                echo "Error preparing statement for Consultation ticket.";
            }
        } else {
            echo "Invalid service type.";
        }
    } else {
        echo "Missing required data.";
    }
    if ($ticketNum && $dateStamp) {
        if ($service === "ECG") {
            $stmt = $conn->prepare("INSERT INTO ecg_ticket (TicketNum, DateStamp, Prioritization) VALUES (?, ?, ?)");
            if ($stmt) {
                $stmt->bind_param("sss", $ticketNum, $dateStamp, $prioritization);
                if ($stmt->execute()) {
                    echo "Consultation ticket saved successfully!";
                } else {
                    error_log("Error executing query: " . $stmt->error);
                    echo "Error saving Consultation ticket.";
                }
                $stmt->close();
            } else {
                error_log("Error preparing statement: " . $conn->error);
                echo "Error preparing statement for Consultation ticket.";
            }
        } else {
            echo "Invalid service type.";
        }
    } else {
        echo "Missing required data.";
    }
}
?>
