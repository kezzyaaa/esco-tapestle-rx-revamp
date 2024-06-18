
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js" integrity="sha256-s5TTOyp+xlSmsDfr/aZhg0Gz+JejYr5iTJI8JxG1SkM=" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/app.js') }}?v=10.24"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // Set the Options for "Bloodhound" suggestion engine
            var engine = new Bloodhound({
                remote: {

                    url: '/api/find?filter=',
                    prepare: function (query, settings) {
                        settings.url += encodeURIComponent($('#filterSelect').val());
                        settings.url += '&q=';
                        settings.url += encodeURIComponent($('#search_query').val());
                        return settings;
                    }

                },
                datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
                queryTokenizer: Bloodhound.tokenizers.whitespace
            });

            $("input.typeahead").typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                source: engine.ttAdapter(),

                // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
                name: 'usersList',

                // the key from the array we want to display (name,id,email,etc...)
                templates: {
                    empty: [
                        '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
                    ],
                    header: [
                        '<div class="list-group search-results-dropdown">'
                    ],
                    suggestion: function (data) {


                        switch( $( "#filterSelect" ).val()) {
                            case "products":
                                var str = data.details;
                                var link = '';
                                if(str){
                                    if(window.screen.width <= 767){
                                        if(str.length > 80) str = str.substring(0,80);
                                    }else{
                                        if(str.length > 200) str = str.substring(0,200);
                                    }
                                }
                                var result = "";
                                var prod_brand = "";
                                if(data.brand){
                                    prod_brand = data.brand;
                                }else{
                                    prod_brand = '';
                                }
                                if(data.ext_link){
                                    link = '<a href="' + data.ext_link + '" class="list-group-item">'+
                                            '<div class="row">'+
                                                '<div class="col-4 col-sm-2">'+
                                                    '<img src="/images/product-images/thumb/' + data.image_thumb + '" alt="'+data.name +'">'+
                                                '</div>'+
                                                '<div class="col-8 col-sm-10">'+
                                                    prod_brand + ' ' + data.name + '<br>' + str + '...' +
                                                '</div>'+
                                            '</div>'+
                                        '</a>';
                                }else{

                                    link = '<a href="/products/' + data.slug + '/'+data.id+'" class="list-group-item">'+
                                            '<div class="row">'+
                                                '<div class="col-4 col-sm-2">'+
                                                    '<img src="/images/product-images/thumb/' + data.image_thumb + '" alt="'+data.name +'">'+
                                                '</div>'+
                                                '<div class="col-8 col-sm-10">'+
                                                    prod_brand + ' ' + data.name + '<br>' + str + '...' +
                                                '</div>'+
                                            '</div>'+
                                        '</a>';
                                }

                                return link;

                                break;
                            case "news":
                                var str = data.description;
                                if(str){
                                    if(window.screen.width <= 767){
                                        if(str.length > 80) str = str.substring(0,80);
                                    }else{
                                        if(str.length > 200) str = str.substring(0,200);
                                    }
                                }

                                var result = "";
                                return '<a href="/news/' + data.slug + '" class="list-group-item">'+
                                            '<div class="row">'+
                                                '<div class="col-md-3">'+
                                                    '<img class="d-none d-sm-block" src="/images/news-banner/thumb/' + data.banner_thumb + '" alt="'+data.title +'">'+
                                                '</div>'+
                                                '<div class="col-md-9">'+
                                                    data.title + '<br><span class="text-dark">' + str + '...</span>' +
                                                '</div>'+
                                            '</div>'+
                                        '</a>';
                                break;
                            case "solutions":
                                var str = data.details;
                                if(str){
                                    if(window.screen.width <= 767){
                                        if(str.length > 80) str = str.substring(0,80);
                                    }else{
                                        if(str.length > 200) str = str.substring(0,200);
                                    }
                                }
                                var result = "";
                                if(data.ext_link){
                                    if(data.parent_id){
                                    return '<a href="' + data.ext_link + '" class="list-group-item">'+
                                            '<div class="row">'+
                                                '<div class="col-md-10">'+ data.parent.title + ' >> ' +
                                                    data.title + '<br><span class="text-dark">' + str + '...</span>' +
                                                '</div>'+
                                            '</div>'+
                                        '</a>';
                                    }else{
                                        return '<a href="' + data.ext_link + '" class="list-group-item">'+
                                                '<div class="row">'+
                                                    '<div class="col-md-10">'+
                                                        data.title + '<br><span class="text-dark">' + str + '...</span>' +
                                                    '</div>'+
                                                '</div>'+
                                            '</a>';
                                    }
                                }else{
                                    if(data.parent_id){
                                    return '<a href="/solutions/' + data.slug + '" class="list-group-item">'+
                                            '<div class="row">'+
                                                '<div class="col-md-10">'+ data.parent.title + ' >> ' +
                                                    data.title + '<br><span class="text-dark">' + str + '...</span>' +
                                                '</div>'+
                                            '</div>'+
                                        '</a>';
                                    }else{
                                        return '<a href="/solutions/' + data.slug + '" class="list-group-item">'+
                                                '<div class="row">'+
                                                    '<div class="col-md-10">'+
                                                        data.title + '<br><span class="text-dark">' + str + '...</span>' +
                                                    '</div>'+
                                                '</div>'+
                                            '</a>';
                                    }
                                }


                                break;
                            default:
                                var str = data.details;
                                var link = '';
                                if(str){
                                    if(window.screen.width <= 767){
                                        if(str.length > 80) str = str.substring(0,80);
                                    }else{
                                        if(str.length > 200) str = str.substring(0,200);
                                    }
                                }
                                var result = "";
                                var prod_brand = "";
                                if(data.brand){
                                    prod_brand = data.brand;
                                }else{
                                    prod_brand = '';
                                }
                                if(data.ext_link){
                                    link = '<a href="' + data.ext_link + '" class="list-group-item">'+
                                            '<div class="row">'+
                                                '<div class="col-4 col-sm-2">'+
                                                    '<img src="/images/product-images/thumb/' + data.image_thumb + '" alt="'+data.name +'">'+
                                                '</div>'+
                                                '<div class="col-8 col-sm-10">'+
                                                    prod_brand + ' ' + data.name + '<br>' + str + '...' +
                                                '</div>'+
                                            '</div>'+
                                        '</a>';
                                }else{

                                    link = '<a href="/products/' + data.slug + '/'+data.id+'" class="list-group-item">'+
                                            '<div class="row">'+
                                                '<div class="col-4 col-sm-2">'+
                                                    '<img src="/images/product-images/thumb/' + data.image_thumb + '" alt="'+data.name +'">'+
                                                '</div>'+
                                                '<div class="col-8 col-sm-10">'+
                                                    prod_brand + ' ' + data.name + '<br>' + str + '...' +
                                                '</div>'+
                                            '</div>'+
                                        '</a>';
                                }

                                return link;

                        }



                    }
                },
                display : function (data) {
                        return data.name
                    },
            });

        });
    </script>
