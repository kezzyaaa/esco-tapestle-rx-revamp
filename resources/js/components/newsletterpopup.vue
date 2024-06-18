<template>
    <div>
        <div class="popup"> <a class="close">&times;</a>
            <div id="dialog" class="window">
              <div class="box">
                <div class="popup-content">
                    <div class="popup-content-details">
                        <div class="newletter-title">
                          <p>STAY UPDATED!</p>
                        </div>
                        <div class="box-content newleter-content">
                          <label>Sign up to our newsletter and receive the latest news and udpates about our products!</label>
                          <div id="frm_subscribe">
                            <form name="subscribe" id="subscribe_popup"  @submit.prevent="addSubscriber()" method="post">
                              <div>
                                <!-- <span class="required">*</span><span>Email</span>-->
                                <div class="popup-inputs">
                                    <input type="email" required value="" name="subscribe_pemail" id="subscribe_pemail" v-model="subscribe_pemail" placeholder="Email">
                                <span class="text-danger">{{subscribe_pemail_error}}</span>

                                    <input type="text" required value="" name="subscribe_pname" id="subscribe_pname" v-model="subscribe_pname" placeholder="Name">
                                    <span  class="text-danger">{{subscribe_pname_error}}</span>
                                    <input type="hidden" id="action" name="action" value="insert">
                                </div>
                                <div class="popup-btn-social">
                                    <input class="button popup-subscribe" type="submit" value="Subscribe">
                                    <div class="popup-social-icons d-flex justify-content-end">
                                        <a class="icon-link facebook fill"><i class="fa fa-facebook"></i></a>
                                        <a class="icon-link youtube fill"><i class="fa fa-youtube"></i></a>
                                        <a class="icon-link linkedin fill"><i class="fa fa-linkedin"></i></a>
                                        <a class="icon-link envelope fill"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                              </div>
                              <div class="subscribe-bottom">
                                <input required type="checkbox" id="newsletter_popup_agree" v-model="consent" true-value="yes" false-value="no">
                                <label for="newsletter_popup_agree">By subscribing you agree to our <a target="_blank" href="/customer-service/data-privacy-policy">Data Privacy Policy</a>.</label>
                                <span id="error_user_consent" class="text-danger">{{subscribe_consent_error}}</span>
                              </div>
                            </form>

                          </div>
                          <!-- /#frm_subscribe -->
                        </div>
                    </div>
                    <div class="popup-content-image">

                    </div>
                </div>

                <!-- /.box-content -->
              </div>
            </div>
          </div>

    </div>

</template>

<script>

    export default {
        data: function() {
            return {
                subscribe_pemail:'',
                subscribe_pname: '',
                subscribe_pemail_error: '',
                subscribe_pname_error: '',
                subscribe_consent_error: '',
                consent: 'no'
            };
        },
    methods:{
        addSubscriber(){
            axios.post('./api/subscribers', {email:this.subscribe_pemail, name:this.subscribe_pname, consent:this.consent})

            .then(({data}) => {
                    this.subscribe_consent_error = '';
                    this.subscribe_pname_error = '';
                    this.subscribe_pemail_error = '';

                    setTimeout( function() {
                        popupClose()
                        setCookie("subscription", 'subscription', 500);
                    },500);


            })

            .catch(error => {
                if (error.response) {
                // The request was made and the server responded with a status code
                // that falls out of the range of 2xx
                console.log(error.response.data.errors);

                if(error.response.data.errors.email){
                    if(error.response.data.errors.email[0] == 'validation.required'){
                        this.subscribe_pemail_error = 'Email is required'
                    }else if(error.response.data.errors.email[0] == 'validation.email'){
                        this.subscribe_pemail_error = 'Please enter a valid email'
                    }

                }
                else{
                    this.subscribe_pemail_error = '';
                }

                if(error.response.data.errors.name){

                    this.subscribe_pname_error = 'Name is required'

                }else{
                    this.subscribe_pname_error = ''

                }

                if(error.response.data.errors.consent){

                    this.subscribe_consent_error = 'Please check this if you accept the terms'

                }else{
                    this.subscribe_consent_error = ''

                }

                }
                // console.log(error.config);
            });

            // .then(function(){
            //     Event.$emit('taskCreated',{title: this.title});
            //     this.title = '';
            //     return false;
            // })
            // .catch(error => this.errors.record(error.response.data));

            // alert('adding task');
        }
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



</script>
