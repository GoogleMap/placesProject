$(document).ready(function() {
    $('li').on('mouseenter', function() {
        $(this).css('background', '#FFFBCC');

    });
    $('li').on('mouseleave', function() {
        $(this).css('background', '#CCA37A');
    });
    
    // Flip panels
    $("#flip").click(function() {
        $("#panel").slideToggle();
    });
     $("#flip1").click(function() {
        $("#panel1").slideToggle();
    });

});