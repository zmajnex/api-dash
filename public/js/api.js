$( document ).ready(function() {
    $('#stop').removeClass('red').addClass('border');
    $('#working').removeClass('green').addClass('border');

    $( "#start" ).click(function() {
        $('#ready').removeClass('yellow').addClass('border');
        $('#working').removeClass('border').addClass('green');
        $('#stop').removeClass('red').addClass('border');
    });

    $( "#stop-btn" ).click(function() {
        $('#working').removeClass('green').addClass('border');
        $('#stop').removeClass('border').addClass('red');
        $('#ready').removeClass('yellow').addClass('border');
    });

});