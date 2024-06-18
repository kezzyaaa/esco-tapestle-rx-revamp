
$(document).ready(function() {


});


function email_subscribepopup(){

    var error_email = '';
        var error_name = '';
        var error_user_authorize = '';

        if ($('#subscribe_pemail').val() === '') {
            error_email = '<i class="fa fa-info-circle" aria-hidden="true"></i> Email is required';
            $('#error_subscribe_pemail').html(error_email);
            $('#error_subscribe_pemail').css('display','block');
            $('#subscribe_pemail').css('border-color','#ff6060');
        }
        else{
            error_email = '';
            var email = $("#subscribe_pemail").val();
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if( !emailReg.test(email)) {
                error_email = '<i class="fa fa-info-circle" aria-hidden="true"></i> Please enter a valid email';
                $('#error_subscribe_pemail').html(error_email);
                $('#error_subscribe_pemail').css('display','block');
                $('#subscribe_pemail').css('border-color','#ff6060');
            }else{
                $('#error_subscribe_pemail').html(error_email);
                $('#error_subscribe_pemail').css('display','none');
                $('#subscribe_pemail').css('border-color','');

            }
        }


        if ($('#subscribe_pname').val() === '') {
            error_name = '<i class="fa fa-info-circle" aria-hidden="true"></i> Name is required';
            $('#error_subscribe_pname').html(error_name);
            $('#error_subscribe_pname').css('display','block');
            $('#subscribe_pname').css('border-color','#ff6060');
        }
        else{
            error_name = '';
            $('#error_subscribe_pname').html(error_name);
            $('#error_subscribe_pname').css('display','none');
            $('#subscribe_pname').css('border-color','');
        }

        if ($("#newsletter_popup_agree").prop('checked') != true) {
             error_user_authorize = '(Check here if you accept these terms)';
            $('#error_user_consent').css('display','block');
            $('#error_user_consent').html(error_user_authorize);
            $('#newsletter_popup_agree').css('outline','1px solid #c00');


        }else
        {
            error_user_authorize = '';
            $('#error_user_consent').html(error_user_authorize);
            $('#error_user_consent').css('display','none');
            $('#newsletter_popup_agree').css('outline','');


        }

        if (error_email != '' || error_name != '' || error_user_authorize != '') {
            console.log("failed");
            return false;
        } else {
            var subscribe_pemail = $('#subscribe_pemail').val();
            var subscribe_pname = $('#subscribe_pname').val();
            var consent;
            if ($("#newsletter_popup_agree").prop('checked') != true) {
                consent = "no";
           }else
           {
                consent = "yes";
           }


            $.ajax({
                method: "POST",
                url: "/api/subscribers",
                data: { email:subscribe_pemail, name:subscribe_pname, consent:consent}
              })
                .fail(function(msg) {
                    alert('Failed to accept data');
                })
                .done(function( msg ) {
                    setTimeout( function() {
                        popupClose()
                        setCookie("subscription", 'subscription', 500);
                        $('#subscribe_pemail').val('');
                        $('#subscribe_pname').val('');
                        $('#footer-newsletter-email').val('');
                    },500);

                });



        }

}


function popupClose(){
    var mpopup = document.getElementById("newsletterpopup");
    // setCookie("subscription", 'subscription', 7);
    // open the mPopup
    mpopup.style.opacity = '0';
    setTimeout( function() {
        mpopup.style.visibility = 'hidden';
    },500);
    setTimeout( function() {
        swal('Thanks for joining us!', 'You have successfully subscribed to our newsletter.','success');
    },500);

}

function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

