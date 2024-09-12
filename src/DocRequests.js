// DocRequest.js
$(document).ready(function(){
    // Initialize variables
    var chosenService = null; 

    $('.btn').on('click', function() {
        $('.alert-container').css({
            display: 'flex' // Show the alert container
        });
        chosenService = $(this).attr('id'); // Set chosenService based on button id
    });

    $('#No').on('click', function() {
        $('.alert-container').hide();
        $('.consultPopUp').css({
            display: 'flex' // Show the consultation pop-up
        });
    });

    $('#OK').on('click', function(){
        $('.consultPopUp').hide();
    });

    $('#Yes').on('click', function(){
        const serviceMapping = {
            'laboratory': 'Laboratory',
            'xray': 'X-Ray',
            'ultrasound': 'Ultrasound',
            'ecg': 'ECG'
        };

        if (serviceMapping[chosenService]) {
            $('#serviceInput').val(serviceMapping[chosenService]); 
            const actionURL = 'LabTicket.php'; // Only point to LabTicket.php
            $('#hiddenForm').attr('action', actionURL);
            $('#hiddenForm').submit();
        }
        
        $('.alert-container').hide(); 
    });
    $('#consultation').on('click', function(){
        // Directly proceed to LabTicket.php when consultation button is clicked
        $('#serviceInput').val('Consultation');
        const actionURL = 'LabTicket.php'; // Always go to LabTicket.php
        $('#hiddenForm').attr('action', actionURL);
        $('#hiddenForm').submit();
    });

});
