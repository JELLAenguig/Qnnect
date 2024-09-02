$(document).ready(function(){
    let dayOption = null;
    let q1Text = $('#q1').text(); // Get the text from #q1
    
    $('.btns').on('click', function() {
        dayOption = $(this).attr('id'); 
        $('.confirm').css({
            display: 'flex' // Show the alert container
        });
    });

    $('#change').on('click', function() {
        $('.confirm').hide(); // Hide the alert container
    });

    $('#YES').on('click', function() {
        const serviceMapping = {
            'D0': 'Day 0 (Booster)',
            'D3': 'Day 3 (Booster)',
            'D7': 'Day 7 (Booster)',
        };

        if (serviceMapping[dayOption]) {
            $('#GenService').val("Animal Bite");
            $('#serviceInput').val(serviceMapping[dayOption]); 
            $('#hiddenForm').submit();
        }
        
        $('.confirm').hide(); // Hide the alert container
    });
});
