            <!--Contact Us Section-->
            <section id="contact" class="contact fix animated zoomIn">
                <div class="container">
                    <div class="row">
                        <div class="main_contact p-top-100">

                            <div class="col-md-6 sm-m-top-30 col-sm-offset-3">
                                <form class="" action="subcribe.php">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group"> 
                                                <label>Your Name *</label>
                                                <input id="first_name" name="name" type="text" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Your Email *</label>
                                                <input id="email" name="email" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Your Phone Number *</label>
                                                <input id="number" name="number" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group"> 
                                                <label>Your Message *</label>
                                                <textarea class="form-control" rows="6"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <a href="" class="btn btn-default">SEND MESSAGE <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
<!--Company section-->

            <section id="company" class="company" style="background-color: #000000ed; color: #fff" >
                <div class="container">
                    <div class="row">
                        <div class="main_company roomy-100 text-center">
                            <h3 class="text-uppercase" style="color: #FFF">Kamano.</h3>
                            <p>Lagos Island, Nigeria</p>
                            <p>(+234) 8094845522  -  kamanokompany@gmail.com</p>
                        </div>
                    </div>
                </div>
            </section>


            <!-- scroll up-->
            <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
            </div><!-- End off scroll up -->


            <footer id="footer" class="footer bg-mega" style="background-color: #000; color: #FFF">
                <div class="container">
                    <div class="row">
                        <div class="main_footer p-top-40 p-bottom-30">
                            <div class="col-md-6 text-left sm-text-center">
                                <p class="wow fadeInRight" data-wow-duration="1s">
                                    Kamano 
                                    <?= date('Y') ?>. All Rights Reserved
                                </p>
                            </div>
                            <div class="col-md-6 text-right sm-text-center sm-m-top-20">
                                <ul class="list-inline">
                                    <li><a href="https://instagram.com/kamanomodelmanagement" style="color: #fff">Facebook</a></li>
                                    <li><a href="https://instagram.com/kamanomodels" style="color: #fff">Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>




        </div>

        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>

        <script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>
        <script src="assets/js/gmaps.min.js"></script>
        <script>
            var map = new GMaps({
                el: '.ourmap',
                lat: -12.043333,
                lng: -77.028333,
                scrollwheel: false,
                zoom: 15,
                zoomControl: true,
                panControl: false,
                
                streetViewControl: false,
                mapTypeControl: false,
                overviewMapControl: false,
                clickable: false,
                styles: [{'stylers': [{'hue': 'gray'}, {saturation: -100},
                            {gamma: 0.80}]}]
            });

        </script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
