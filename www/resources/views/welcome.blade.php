<!DOCTYPE html>
<html>
<head>
    <title>ASOO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!--Custom Theme files-->
    {{ Html::style('css/bootstrap.min.css') }}
    {{ Html::style('css/template/style.css') }}
    {{ Html::style('css/template/index.css') }}
    {{ Html::style('css/template/swipebox.css') }}
    <!--//Custom Theme files-->
    <!--js-->
    {{ Html::script('js/template/jquery-1.11.1.min.js') }}
    <!--//js-->
    <!--web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Nova+Round' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
    <!--start-smooth-scrolling-->
    {{ Html::script('js/template/move-top.js') }}
    {{ Html::script('js/template/easing.js') }}
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();

                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--//end-smooth-scrolling-->
</head>
<body>
<!--banner-->
<div class="banner">
    <div class="header"><!--header-->
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="{{ url('/') }}">ASOO</a></h1>
                </div>
                <!--navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}" class="active">Home</a></li>
                        <li><a href="#about" class="scroll">About</a></li>
                        <li><a href="#features" class="scroll">Features</a></li>
                        <li><a href="#contact" class="scroll">Contact Us</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
            </nav>
        </div>

    </div>
    <!--//header-->
    <!--banner-text-->
    <div class="banner-text">
        <!--banner Slider starts Here-->
        {{ Html::script('js/template/responsiveslides.min.js') }}
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 3
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
        </script>
        <!--//End-slider-script-->
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <h2>Saving your time</h2>
                    <p>Automated System of Orders<br>helps you order a sheet or a reference<br>and take away, which already have printed.</p>
                    <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Sign In</a>
                </li>
                <li>
                    <h3>Fully DB faculties</h3>
                    <p>The "ASOO" contains all faculties of the university.</p>
                    <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Sign In</a>
                </li>
            </ul>
        </div>
    </div>
    <!--//banner-text-->
</div>
<!--//banner-->
<!--modal-sign-->
<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body modal-spa">
                    <form action="#" method="post">
                        <div class="form-left">
                            <label>Name :</label>
                            <input type="text" name="Your Name" placeholder="Enter Your Name" required="">
                        </div>
                        <div class="form-right">
                            <label>Course :</label>
                            <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                <option value="0">40 & 27-Mile Adults</option>
                                <option value="1">40 & 27-Mile Child</option>
                                <option value="2">8-Mile Family Ride</option>
                                <option value="3">Century</option>
                                <option value="4">Metric Century</option>
                            </select>
                        </div>
                        <div class="form-left">
                            <label>Date :</label>
                            <input type="date" name="Date" >
                        </div>
                        <div class="form-right">
                            <label>City :</label>
                            <input type="text" name="City" placeholder="Enter Your City" required="">
                        </div>
                        <div class="clearfix"> </div>
                        <label>Contact Info :</label>
                        <input type="text" name="Address" placeholder="Enter Contact Details" required="">
                        <input type="submit" value="Register Now">
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
<!--//modal-sign-->
<!--about-->
<div id="about" class="about">
    <div class="container">
        <div class="title">
            <h3>About Us </h3>
            <p>Automated System of Orders helps you order with the web a sheet or reference and take away, which already have printed.</p>
        </div>
        <div class="about-row">
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-user effect-1" aria-hidden="true"></span>
                <h4>1. Sign In</h4>
                <p>Authorize in account by login and pass.</p>
                <h6> </h6>
            </div>
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>
                <h4>2. Order</h4>
                <p>Create an order from your account.</p>
                <h6> </h6>
            </div>
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-check effect-1" aria-hidden="true"></span>
                <h4>3. Confirmation</h4>
                <p>Wait the order confirmation by the manager and take away a sheet from dean's office.</p>
                <h6> </h6>
            </div>
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-stats effect-1" aria-hidden="true"></span>
                <h4>4. Efficiency</h4>
                <p>Increase your efficiency by saving the time to take order.</p>
                <h6> </h6>
            </div>
            <div class="clerfix"> </div>
        </div>
    </div>
</div>
<!--//about-->
<!--features-->
<div id="features" class="features">
    <div class="container">
        <div class="title">
            <h3>Features</h3>
        </div>
        <div class="features-row">
            <div class="col-md-4 features-grids">
                <div class="features-left">
                    <h4>Orders Done</h4>
                    <h5>200 </h5>
                </div>
                <div class="features-right">
                    <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                </div>
                <div class="clerfix"> </div>
            </div>
            <div class="col-md-4 features-grids features-grids-mdl">
                <div class="features-left">
                    <h4>Visitors</h4>
                    <h5>300 </h5>
                </div>
                <div class="features-right">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </div>
                <div class="clerfix"> </div>
            </div>
            <div class="col-md-4 features-grids">
                <div class="features-left">
                    <h4>Faculties</h4>
                    <h5>7 </h5>
                </div>
                <div class="features-right">
                    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                </div>
                <div class="clerfix"> </div>
            </div>
            <div class="clerfix"> </div>
        </div>
    </div>
</div>
<!--//about-->
<!--contact-->
<div class="contact" id="contact">
    <div class="container">
        <div class="title">
            <h3>Contact</h3>
            <p>We encourage you to share your ideas and improvements with us.
                Please see the contact information. If you still don’t see what you’re looking for, please contact our support.
            </p>
        </div>
        <div class="contact-grids">
            <div class="col-md-5 address">
                <h4>Contact Info</h4>
                <div class="address-row">
                    <div class="col-md-2 address-left">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 address-right">
                        <h5>Visit Us</h5>
                        <p>220013, Republic of Belarus, Minsk, P.Browki St., 6 </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address-row">
                    <div class="col-md-2 address-left">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 address-right">
                        <h5>Mail Us</h5>
                        <p><a href="mailto:kanc@bsuir.by"> kanc@bsuir.by</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address-row">
                    <div class="col-md-2 address-left">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 address-right">
                        <h5>Call Us</h5>
                        <p>+375 17 293-80-41</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-7 contact-form">
                <form action="#" method="post">
                    <input type="text" name="First Name" placeholder="First Name" required="">
                    <input class="email" name="Last Name" type="text" placeholder="Last Name" required="">
                    <input type="text" name="Number" placeholder="Mobile Number" required="">
                    <input class="email" name="Email" type="text" placeholder="Email" required="">
                    <textarea name="Message" placeholder="Message" required=""></textarea>
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//contact-->
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-left">
            <p>© 2016 ASOO . All rights reserved</p>
        </div>
    </div>
</div>
<!--//footer-->
<!--smooth-scrolling-of-move-up-->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--//smooth-scrolling-of-move-up-->
<!-- Include jQuery & Filterizr -->
{{ Html::script('js/template/jquery.filterizr.js') }}
{{ Html::script('js/template/controls.js') }}
<!-- swipe box js -->
{{ Html::script('js/template/jquery.swipebox.min.js') }}
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<!-- //swipe box js -->
<!--search jQuery-->
{{ Html::script('js/template/main.js') }}
<!--//search jQuery-->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{ Html::script('js/bootstrap.min.js') }}
</body>
</html>