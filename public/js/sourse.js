$(document).ready(function(){


    // var height = $(window).height();
    // console.log(height);
    //
    // $('#app').css({
    //     'height': height
    // });
    //
    // $( window ).resize(function() {
    //      height = $(window).height();
    //     console.log(height);
    //     $('#app').css({
    //         'height': height
    //     });
    // });

    $('.master-category-checked').click(function () {
        var $this = $(this);
        // $this will contain a reference to the checkbox
        if ($this.is(':checked')) {
            // the checkbox was checked
            alert( this.value );
            $('.parekmaxer').css('display','block')

        } else {
            // the checkbox was unchecked
            alert('unchecked');
        }
    });


});