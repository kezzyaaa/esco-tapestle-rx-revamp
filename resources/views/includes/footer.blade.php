
    @include('components/footerCarousel')
    @include('components/footerNewsletter')

    <footer style="color: #FFF !important; background-color: #00467F; background-image: url('/images/bg-img/footer-bg-01.svg'); background-position: bottom center; background-repeat:no-repeat;">
        <div class="footer-container" style="">
            <div class="row pt-5 pb-5">
                <div class="col-lg-7 border-right border-secondary">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-logo-details">
                                <img class="float-left pr-2 footer-logo" src="/images/core-img/TAPESTLE RX 2020 white.png" alt="">
                                <p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platforms products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
                            </div>

                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-md-9 border-right border-secondary">
                            <p class="font-weight-bold footer-titles">PRODUCTS</p>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        @foreach ($footerproducts->sortBy('name')  as $footerproduct)
                                            <li><p><a href="{{$footerproduct->path()}}">{{$footerproduct->name}}</a></p></li>
                                            @if($loop->iteration == 15)
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-unstyled">
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>


                            </div>

                        </div>
                        <div class="col-md-3 mt-5 mt-sm-0 pl-4">
                            <p class="font-weight-bold footer-titles">CUSTOMER SERVICE</p>

                            <ul class="list-unstyled">
                                <li><p><a href="{{url("/customer-service/conditions-of-supply")}}">Conditions of Supply</a></p></li>
                                <li><p><a href="{{url("/customer-service/terms-and-conditions")}}">Terms and Conditions</a></p></li>
                                <li><p><a href="{{url("/customer-service/data-privacy-policy")}}">Privacy Policy</a></p></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5  mt-5 mt-sm-0 pl-4">
                    <div class="row">
                        <div class="col-5">
                            <img src="/images/core-img/location.jpg" alt="">
                        </div>
                        <div class="col-7">
                            <p class="font-weight-bold footer-titles">Esco Micro Pte. Ltd</p>
                            <p>21 Changi South Street 1<br>Singapore</p>
                            <p>Tel: +65 65420833</p>
                            <p>Fax: +65 65426920</p>
                            <p>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6 border-right border-secondary">
                            <p class="font-weight-bold footer-titles">Esco Technologies Inc.</p>
                            <p>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738</p>
                            <p>Tel: +1 215-322-2155</p>
                            <p>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p>
                        </div>
                        <div class="col-md-6  mt-5 mt-sm-0 pl-4">
                            <p class="font-weight-bold footer-titles">Esco GB Ltd.</p>
                            <p>Unit 2 R-Revolution @ Gateway 36,<br>Kestrel Way Barnsley, S Yorks S70 799 (Pharma)</p>
                            <p>Tel: +44 (0) 1226 3651529 (Lab)</p>
                            <p>Email: <a href="mailto:egb.info@escoglobal.com">egb.info@escoglobal.com</a> </p>
                        </div>
                    </div>
                </div>

            </div>
            <p class="text-center pb-3 m-0">&copy; 2019 Esco Micro Pte. Ltd. All rights reserved.</p>
        </div>
    </footer>
