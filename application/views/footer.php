<!--footer section start-->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="foo-grids">
                <div class="col-md-3 footer-grid">
                    <h4 class="footer-head">Who We Are</h4>
                    <p>Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle.</p>
                    <p>Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle Mroogle.</p>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4 class="footer-head">Help</h4>
                    <ul>
                        <li><a href="http://brain-pro.com/mroogle/howitworks.html">How it Works</a></li>
                        <li><a href="http://brain-pro.com/mroogle/sitemap.html">Sitemap</a></li>
                        <li><a href="http://brain-pro.com/mroogle/faq.html">Faq</a></li>
                        <li><a href="http://brain-pro.com/mroogle/feedback.html">Feedback</a></li>
                        <li><a href="http://brain-pro.com/mroogle/contact.html">Contact</a></li>

                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4 class="footer-head">Information</h4>
                    <ul>
                        <li><a href="http://brain-pro.com/mroogle/terms.html">Terms of Use</a></li>
                        <li><a href="http://brain-pro.com/mroogle/popular-search.html">Popular searches</a></li>
                        <li><a href="http://brain-pro.com/mroogle/privacy.html">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4 class="footer-head">Contact Us</h4>
                    <span class="hq">Our headquarters</span>
                    <address>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-map-marker"></span></li>
                            <li>KSA KSA KSA KSA KSA KSA KSA KSA KSA KSA KSA KSA KSA KSA KSA KSA</li>
                            <div class="clearfix"></div>
                        </ul>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-earphone"></span></li>
                            <li>+00 966 533228877</li>
                            <div class="clearfix"></div>
                        </ul>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-envelope"></span></li>
                            <li><a href="mailto:info@mroogle.com">mail@mroogle.com</a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </address>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="footer-logo">
                <a href="<?php base_url('/post/accueil') ?>"><img src="<?php base_url('assets/images/logo.png')?>"></a>
            </div>
            <div class="footer-social-icons">
                <ul>
                    <li><a class="facebook" href=""><span>Facebook</span></a></li>
                    <li><a class="twitter" href=""><span>Twitter</span></a></li>
                    <li><a class="flickr" href=""><span>Flickr</span></a></li>
                    <li><a class="googleplus" href=""><span>Google+</span></a></li>
                    <li><a class="dribbble" href=""><span>Dribbble</span></a></li>
                </ul>
            </div>
            <div class="copyrights">
                <p> © 2018 Mroogle. All Rights Reserved</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <script src="<?php base_url('/assets/js/jquery-1.11.2.min.js') ?>"></script>
</footer>
<!--footer section end-->
<div id="toTop" onclick="topFunction()" style="display: block;" >
    <i class="fa fa-chevron-up"></i>

</div>
<style>
    #toTop {
        width: 40px;
        height: 40px;
        background-color: rgba(0, 0, 0, 0.6);
        text-align: center;
        padding: 10px;
        line-height: 20px;
        position: fixed;
        bottom: 10px;
        right: 10px;
        cursor: pointer;
        display: none;
        color: #fff;
        font-size: 20px;
    }
</style>
<script>
    // When the user scrolls down 40PX from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    $('#toTop').hide();
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            setTimeout(function() {
                $("#toTop").fadeIn(500);
            });      } else {
            setTimeout(function() {
                $("#toTop").fadeOut(500);
            });           }
    }
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        $('html, body').animate({ scrollTop: 0 }, 500);

    }

</script>
