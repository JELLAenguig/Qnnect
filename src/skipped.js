$(document).ready(function(){
    $('.today-que').on('click', function(){
        $('.PopOut').css({
            display: 'flex' // Show the alert container
        });
    })
    $('#exit').on('click', function(){
        $('.PopOut').hide();
    })
});