<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="section-footer mt-5 border-top">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
        <!-- Section: Social media -->
        <section class="p-3 text-white" style="background-color: #FF9E53"></section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Nomads Travel</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #FF9E53; height: 2px" />
                        <p>
                            Nomads Travel, the best travel package out there, Go explore the world!
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">FEATURES</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #FF9E53; height: 2px" />
                        <p>
                            <a href="{{ route('home') }}#testimonialsHeading" class="text-dark">Reviews</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Community</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Social Media Kit</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Affiliate</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">ACCOUNT</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #FF9E53; height: 2px" />
                        <p>
                            <a href="{{ route('support') }}" class="text-dark">Refund</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Security</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Rewards</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">COMPANY</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #FF9E53; height: 2px" />
                        <p>
                            <a href="#!" class="text-dark">Career</a>
                        </p>
                        <p>
                            <a href="{{ route('support') }}" class="text-dark">Help Center</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Media</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #FF9E53; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> Jakarta Selatan, Indonesia</p>
                        <p><i class="fas fa-envelope mr-3"></i> support@support.com</p>
                        <p><i class="fas fa-phone mr-3"></i> 0821 - 2222 - 8888</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © @php
                echo date('Y');
            @endphp
            Copyright
            @php
                $url = route('home');
                $url = preg_replace("(^https?://)", "", $url );
            @endphp
            <a class="text-dark" href="{{ route('home') }}">{{ $url }}</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>
<!-- End of .container -->
