
(function($) {

	"use strict";
    var custom_meta_title;
    var custom_slug;


    $(document).ready(function() {
        urlCountInfo();
        metaTitleCountInfo();
        metaDescriptionCountInfo();

        var slug = $('#slug').val();
        var title = $('#title').val();

        var meta_title = $('#meta_title').val();
        custom_slug = (slug == string_to_slug(title))?false:true;
        custom_meta_title =(meta_title == title)?false:true;
        // console.log(custom_slug)
    });



    $('#slug').on('keyup', function() {
        custom_slug = true;
        urlCountInfo();
    });

    $('#meta_title').on('keyup', function() {
        custom_meta_title = true;
        metaTitleCountInfo();
    });

    $('#meta_description').on('keyup', function() {
        metaDescriptionCountInfo();
    });

    $('#title').on('keyup', function() {
        var title = $('#title').val();
        var slug = string_to_slug(title);
        if(!custom_slug){
            $('#slug').val(slug);
            urlCountInfo();
        }
        if(!custom_meta_title){
            $('#meta_title').val(title);
            metaTitleCountInfo();
        }
    });

    function string_to_slug (str) {
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();

        // remove accents, swap ñ for n, etc
        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
        var to   = "aaaaeeeeiiiioooouuuunc------";
        for (var i=0, l=from.length ; i<l ; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }

        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

        return str;
    }

    function checklenght(str){
        length = str.length;
        return length;
    }


    function urlCountInfo(){
        var slug = $('#slug').val();
        $('#slug-temp').text(slug);
        console.log($('#slug').val());

        $('#url-count').text(checklenght($('#url-complete').text()));
        if(checklenght($('#url-complete').text()) > 60){
            $('#checkOrfailSlug').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-warning"></i> Shorter URLs tend to rank better than long URLs');
            if(checklenght($('#url-complete').text()) > 80){
                $('#checkOrfailSlug').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-danger"></i> If you go way beyond (say 80+ characters), this is likely to have a negative impact on your ranking.');
            }
        }else{
            $('#checkOrfailSlug').html('<i class="fa fa-check-circle text-success" aria-hidden="true"></i> Awesome');
            if(checklenght($('#url-complete').text()) < 50){
                $('#checkOrfailSlug').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-danger"></i> URL is too short');
            }
        }
    }
    function metaTitleCountInfo(){
        $('#title-count').text(checklenght($('#meta_title').val()));

        if(checklenght($('#meta_title').val()) > 60){
            $('#checkOrfailTitle').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-danger"></i> Meta title is too long');
        }else{
            $('#checkOrfailTitle').html('<i class="fa fa-check-circle text-success" aria-hidden="true"></i> Nice');
            if(checklenght($('#meta_title').val()) < 30){
                $('#checkOrfailTitle').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-danger"></i> Meta title is too short');
            }
        }
    }

    function metaDescriptionCountInfo(){
        $('#metadesc-count').text(checklenght($('#meta_description').val()));

        if(checklenght($('#meta_description').val()) > 160 ){
            $('#checkOrfailDescription').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-danger"></i> Meta Description is too long');
        }else{
            $('#checkOrfailDescription').html('<i class="fa fa-check-circle text-success" aria-hidden="true"></i> Wonderful');
            if(checklenght($('#meta_description').val()) < 100){
                $('#checkOrfailDescription').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-danger"></i> Meta Description is too short');
            }
        }
    }


})(jQuery);
