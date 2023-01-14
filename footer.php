 <!--/footer-->
 <footer id="footer" class="wthree-footerhny">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact pe-lg-5">
                        <div class="footer-logo mb-3">
                            <a class="navbar-brand" href="index.html"><span class="w3yellow" style="color: darkgreen ;">Pak </span>Airways</a>
                        </div> <br> <br>
                        <p>Great People to Fly With Us. Safety And Comfort Assured.</p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Experience </h4>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> <a href="#index">Executive Economy</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#us">Economy</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#serve">Special Assistance</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#terms">Extra Legroom</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#privacy">In Flight seat Upgrade</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Facilities</h4>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> <a href="#blogs">Air Passenger Rights</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#stats">Conditions of Carriage</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#Plans">Booking Conditions</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#Deals">Traveler's Information</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#Offers">Overseas Pakistanis</a></li>
                        </ul>
                    </div>

                   

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    <p class="copy-footer-29"> &#169 Copyright, <span class="w3yellow" style="color: darkgreen ;">Pak </span>Airways, All rights reserved</p>
                </div>

            </div>
            <div class="social-links text-center text-md-end  pt-md-0">
                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <button onclick="topFunction()" id="movetop" title="Go to top" style="display: block;">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer><!-- End Footer -->


    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
   
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });
        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>