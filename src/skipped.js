$(document).ready(function(){
    $('.today-skipped').on('click', function(){
        $('.PopOut').css({
            display: 'flex' // Show the alert container
        });
    })
    $('#exit').on('click', function(){
        $('.PopOut').hide();
    })
});