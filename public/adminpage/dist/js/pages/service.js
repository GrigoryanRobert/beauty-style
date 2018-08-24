$(function() {

    var token = $('meta[name="_token"]').attr('content');

    $('.servise-update').click(function(){
       var serviseid = $(this).parent().closest('tr').children(':first-child').html();
       var servisename = $(this).parent().closest('tr').children(':nth-child(2)').html();
       var servisedesc = $(this).parent().closest('tr').children(':nth-child(3)').html();
       var serviselink = $(this).parent().closest('tr').children(':nth-child(4)').html();
       var serviseimage = $(this).parent().closest('tr').children(':nth-child(5)').find("img").attr('src');
        alert (serviseimage);

    });
    $('.language-delete').click(function(){
        var serviseid = $( this ).attr( "data-id" );
        var token = $('meta[name="_token"]').attr('content');
        $.ajax({
            url: 'delete_languages',
            type: "post",
            data: {
                "_token": token,
                "id": id
            },
            success: function(data){
                $('#language-'+id).remove();
            }
        });
    });

    $('.add-article').click(function(){
        var id = $(this).data('textarea');
        var url = id.split("_");
        var language_iso = url[1];
        var title = $('input .'+url+'-'+language_iso+"-pagetitle" ).val();
        alert(title);

        var ckContent = CKEDITOR.instances[id].getData();
        $.ajax({
            type: "POST",
            url: page_location+'_text',
            data: {
                "_token": token,
                "ckContent":ckContent,
                "language_iso":language_iso,
                "page_location":page_location
            },
            success: function (data) {
                alert('You succesfuly add text');
                window.location.reload(true);
            }
        });
    });

    $('.edit-article').click(function(){

        var edit_id = $(this).data('articleid');
        var title = $(this).data('pagetitle');

        var edit_article = $(this).parent().closest('div').children('textarea').attr('id');
        var ckContent = CKEDITOR.instances[edit_article].getData();
        var pagetitle = $('.'+title+'-pagetitle').val();

        $.ajax({
            type: "POST",
            url: page_location+'_text_edit',
            data: {
                "pagetitle": pagetitle,
                "_token": token,
                "ckContent":ckContent,
                "id":edit_id
            },
            success: function (data) {
                alert('you succesfuly edit your page');
            }
        });

    });

    $('#works_type').click(function(e){
        e.preventDefault();
        var language = $('#language option:selected').val();
        var all = $('#all').val();
        var web = $('#web').val();
        var mobile = $('#mobile').val();

        $.ajax({
            type: "POST",
            url: 'works_type_post',
            data: {
                "_token": token,
                "language":language,
                "all":all,
                "web":web,
                "mobile":mobile
            },
            success: function (data) {
                alert('you succesfuly translate your page');

            }
        });

    });

    $('#services_type').click(function(e){
        e.preventDefault();
        var language = $('#servicelanguage option:selected').val();
        var web_design = $('#web_design').val();
        var web_development = $('#web_development').val();
        var mobile_applications = $('#mobile_applications').val();
        var responsive_websites = $('#responsive_websites').val();


        $.ajax({
            type: "POST",
            url: 'services_type_post',
            data: {
                "_token": token,
                "language":language,
                "web_design":web_design,
                "web_development":web_development,
                "mobile_applications":mobile_applications,
                "responsive_websites":responsive_websites
            },
            success: function (data) {
                alert(data);
                window.location.reload(true);

            }
        });

    });

    $('#contacts_placeholder').click(function(){

        var language = $('#language option:selected').val();

        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();
        var submit = $('#submit').val();

        $.ajax({
            type: "POST",
            url: 'contacts_placheholder_post',
            data: {
                "_token": token,
                "language":language,
                "name":name,
                "email":email,
                "message":message,
                "submit":submit
            },
            success: function (data) {
                alert('you are succesfuly translate your page');
            }
        });

    });

});
