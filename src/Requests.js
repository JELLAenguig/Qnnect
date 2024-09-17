$(document).ready(function() {
    // Initialize variables
    var chosenService = null; 
    var chosenPriority = null;

    // Show the alert container when a service button is clicked
    $('.btn').on('click', function() {
        $('.alert-container').css({
            display: 'flex' // Show the alert container
        });
        chosenService = $(this).attr('id'); // Set chosenService based on button id
    });

    // Handle "No" button click in the alert
    $('#No').on('click', function() {
        $('.alert-container').hide();
        $('.consultPopUp').css({
            display: 'flex' // Show the consultation pop-up
        });
    });

    // Handle "OK" button click in the consultation pop-up
    $('#OK').on('click', function() {
        $('.consultPopUp').hide();
    });

    // Handle "Yes" button click in the alert
    $('#Yes').on('click', function() {
        $('.selectApplicable').css({
            display: 'flex' // Show the applicable options
        });
    });

    // Handle button clicks inside the .op-card to get selected option
    $('.op-card button').on('click', function() {
        chosenPriority = $(this).attr('id');
        console.log("Selected priority: " + chosenPriority);

        // Proceed with form submission only if priority is chosen
        if (chosenPriority) {
            // Define service mapping
            const serviceMapping = {
                'laboratory': 'Laboratory',
                'xray': 'X-Ray',
                'ultrasound': 'Ultrasound',
                'ecg': 'ECG'
            };

            // Check if chosenService is valid
            if (chosenService === 'consultation' || serviceMapping[chosenService]) {
                $('#serviceInput').val(chosenService === 'consultation' ? 'Consultation' : serviceMapping[chosenService]);
                $('#priorType').val(chosenPriority);
                $('#hiddenForm').attr('action', 'LabTicket.php'); // Only go to LabTicket.php
                $('#hiddenForm').submit();
            }
        }
    });
    // Handle "Consultation" button click
    $('#consultation').on('click', function() {
        $('.selectApplicable').css({
            display: 'flex' // Show the applicable options
        });
        $('.op-card button').on('click', function() {
            chosenPriority = $(this).attr('id');
            if (chosenPriority) {
                $('#serviceInput').val('Consultation');
                $('#priorType').val(chosenPriority);
                $('#hiddenForm').attr('action', 'LabTicket.php'); // Always go to LabTicket.php
                $('#hiddenForm').submit();
            }
        });
    });
});
