$(document).ready(function() {
    $('.filter-show').on('click', function() {
        const filterForm = $('#filterForm');

        if (filterForm.is(':visible')) {
            filterForm.css('display', 'none');  // Hide the form
        } else {
            filterForm.css('display', 'flex');  // Show the form as flex
        }
    });
});
