$(document).ready(function(){


    var height = $(window).height();
    console.log(height);

    $('#app').css({
        'height': height
    });

    $( window ).resize(function() {
         height = $(window).height();
        console.log(height);
        $('#app').css({
            'height': height
        });
    });


});