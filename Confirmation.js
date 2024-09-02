$(document).ready(function() {
    $('.btn').on('click', function() {
        $('.alert-container').css({
            display: 'flex' // Show the alert container
        });
    });

    $('#back').on('click', function() {
        $('.alert-container').hide(); // Hide the alert container
    });
});
