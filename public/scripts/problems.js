$(window).on('load', function() {
    $('#informationButton').on('click', function() {
        $("#aboutPageWrapper").addClass('active');
    });

    $('#closeButton').on('click', function() {
        $("#aboutPageWrapper").removeClass('active');
    });
});