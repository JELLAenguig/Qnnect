$(document).ready(function(){
    $("#showSkipped").click(function(){
        $(".theQueue").hide();  // Hide the queue section
        $(".theSkipped").show(); // Show the skipped patients section
    });

    // Optional: Initially hide the skipped section
    $(".theSkipped").hide();
});
