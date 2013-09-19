/*Load more btn */
$(document).ready(function() {
    //var t = $('#top_news').length;
    var scroll;
    $('.place').slice(0, 3).show();
    // loadmore button
    $('#loadmore').mouseenter(function() {
        //alert('mouseenter');

    });
    $("#loadmore").click(function(e) {
        //alert($('.coffeStore:hidden').length);

        e.preventDefault();
        $('.place:hidden').slice(0, 2).fadeIn("slow");
        var rest = $('.place:hidden').length;

        //scroll = $(window).scrollTop();
        if (rest === 0) {
            alert('End of page !');
            //$('#loadmore').hide();
        }

    });
});