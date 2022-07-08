$( document ).ready(function() {
    $('.wp-block-image').animate({ opacity: 1 }, { duration: 2000 });

    $('#sidebar-wrapper').animate({width: '250px'}, 100);
});

$(document).ready( function(){
    $('#collapse').click( function() {
        var toggleWidth = $("#sidebar-wrapper").width() == 250 ? "0px" : "250px";
        $('#sidebar-wrapper').animate({ width: toggleWidth }, 100);
        if($('.head-buttons').css('padding-left') == '250px'){
            $('.head-buttons').animate({paddingLeft: '0px' }, 600);
        }else{
            $('.head-buttons').animate({paddingLeft: '250px' }, 450);
        }

        if($('#wrapper').css('padding-left') == '250px'){
            $('#wrapper').animate({paddingLeft: '0px' }, 50);
            $('.wp-block-image img').css('width', '100%');
        }else{
            $('#wrapper').animate({paddingLeft: '250px' }, 150);
            $('.wp-block-image img').css('width', '80%');
        }
    });
});