$(document).ready(function() {
    let chosenService = null;
    let q1Text = $('#q1').text(); // Get the text from #q1
    

    $('.btn').on('click', function() {
        chosenService = $(this).attr('id'); 
        $('.alert-container').css({
            display: 'flex' // Show the alert container
        });
    });

    $('#back').on('click', function() {
        $('.alert-container').hide(); // Hide the alert container
    });

    $('#yes').on('click', function() {
        const serviceMapping = {
            'D0': 'Day 0',
            'D3': 'Day 3',
            'D7': 'Day 7',
            'D14': 'Day 14',
            'D28': 'Day 28/30',
        };

        if (serviceMapping[chosenService]) {
            $('#GenService').val(q1Text);
            $('#serviceInput').val(serviceMapping[chosenService]); 
            $('#hiddenForm').submit();
        }
        
        $('.alert-container').hide(); // Hide the alert container
    });
});
