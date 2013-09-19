$(document).ready(function(){
   
    //var t = $('#top_news').length;
    var scroll;
    $('.news').slice(0, 2).show();
    
    // loadmore button
    
    $('#loadmore').mouseenter(function(){
        //alert('mouseenter');
        
    });
   
    $("#loadmore").click(function(e){
        e.preventDefault();
        $('.news:hidden').slice(0,2).show();
        var rest = $('.news:hidden').length;
        
        //scroll = $(window).scrollTop();
        if (rest === 0) {
            alert('No more news !');
            //$('#loadmore').hide();
        }
        
    });
    
    // undo button
    $("#hide").click(function(){
         //e.preventDefault();
         var end = $('.news:visible').length;
         var start = end - 2;
        
//        var scrollTop = $(window).scrollTop(); 
        var lastScroll = 0;
        $(window).scroll(function(){
            
        });
        $('.news').slice(start,end).fadeOut();
        
         
//         alert(scrollBottom);
//         alert(scrollTop);
//         alert(scrollTop-scrollBottom);
         window.scrollTo(0,scroll);
    });
    
//    if (t <2) {
//        $('.news').hide();
//    }
    //$('.loadmore').hide();
    
    
//    $(window).scroll(function(){
//        if(
//            offset.top-$(window).height() <= $(window).scrollTop() &&
//            load === false && ( $('.news').size() >=2 ) 
//        ) {
//            load = true;
//            $('.loadmore').show();
//        }
//    });



    
    
});