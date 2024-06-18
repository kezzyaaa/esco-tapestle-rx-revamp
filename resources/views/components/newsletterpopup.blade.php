<!-- Newsletter pop up -->

<div id="newsletterpopup" class="overlay">
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
                                <input type="email" required value="" name="subscribe_pemail" id="subscribe_pemail" placeholder="Email">
                                <span id="error_subscribe_pemail" class="text-danger" style="display: none;"> Email is required</span>

                                <input type="text" required value="" name="subscribe_pname" id="subscribe_pname"  placeholder="Name">
                                <span id="error_subscribe_pname" class="text-danger" style="display: none;"> Name is required</span>

                                <input type="hidden" id="action" name="action" value="insert">
                            </div>
                            <div class="popup-btn-social">
                                <a class="button popup-subscribe" onclick="email_subscribepopup()"><span>Subscribe</span></a>
                                <div class="popup-social-icons d-flex justify-content-end">
                                    {{-- <a class="icon-link facebook fill"><i class="fa fa-facebook"></i></a>
                                    <a class="icon-link youtube fill"><i class="fa fa-youtube"></i></a>
                                    <a class="icon-link linkedin fill"><i class="fa fa-linkedin"></i></a>
                                    <a class="icon-link envelope fill"><i class="fa fa-envelope"></i></a> --}}
                                    @foreach($socialmedias as $socialmedia)
                                        <a class="icon-link" href="{{$socialmedia->link}}" {{$socialmedia->type == 'social' ? 'target="_blank"' : ''}}><i class="fa {{$socialmedia->icon}}"></i></a>
                                    @endforeach
                                </div>
                            </div>
                          </div>
                          <div class="subscribe-bottom">
                            <input required type="checkbox" id="newsletter_popup_agree" true-value="yes" false-value="no">
                            <label for="newsletter_popup_agree">By subscribing you agree to our <a target="_blank" href="/customer-service/data-privacy-policy">Data Privacy Policy</a>.</label>
                            <span id="error_user_consent" class="text-danger" style="display: none;"></span>

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

<script defer src="{{ asset('js/newsletterpopup.js') }}"></script>
