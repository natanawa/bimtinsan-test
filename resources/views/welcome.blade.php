
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bmtinsan Cita - Bmtinsan Cita">
    <meta name="keywords" content="Bmtinsan Cita - Bmtinsan Cita">
    <meta name="author" content="Bmtinsan Cita">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="UDLS2VCQV9igJA1nqs208v1QlaLPfHWogOjT4vHr">
    <title>Bmtinsan Cita - Bmtinsan Cita</title>
    <link rel="icon" href="http://www.bmtinsancita.com/public/upload/image/icon/bmt1-1594871636-1595860453.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->

    <link href="http://www.bmtinsancita.com/public/frontend/html/css/bootstrap.min.css" rel="stylesheet">
    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
    <!-- Flaticon CSS -->
    <link href="http://www.bmtinsancita.com/public/frontend/html/fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="http://www.bmtinsancita.com/public/frontend/html/css/font-awesome.min.css" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="http://www.bmtinsancita.com/public/frontend/html/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="http://www.bmtinsancita.com/public/frontend/html/owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="http://www.bmtinsancita.com/public/frontend/html/css/hippo-off-canvas.css" rel="stylesheet">
    <!-- animate CSS -->
    <link href="http://www.bmtinsancita.com/public/frontend/html/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="http://www.bmtinsancita.com/public/frontend/html/css/code-style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="http://www.bmtinsancita.com/public/frontend/html/css/responsive.css" rel="stylesheet">
    
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
    <script src="http://www.bmtinsancita.com/public/frontend/html/js/vendor/modernizr-2.8.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        .goog-te-gadget {
            display: none;
        }

        .goog-te-banner-frame {
            display: none;
        }
        .h3 .title::after{
            content:"";
            opacity: 0.5;
        }
        .hero-slide .carousel-caption{
            background: #ffffff;
            padding: 10px 20px;
            opacity : 0.7;
        }
        .hero-slide .carousel-caption a.btn:hover{
            background : #ffffff;
            color : #fcbb3c;
            outline : #fcbb3c;
        }
        .mitra .item{
            height: 250px;
        }
        .mitra .item img{
            width : 80%;
            height : 100%;
            margin : 0 auto;
        }
        .gallery-slider__thumbnails{
            position : absolute;
            bottom : 10px;
        }
        .gallery-slider__images .item .img-fill {
            height: 400px;
        }
        .gallery-slider__images .item .img-fill img {
            all: revert;    
        }

        .gallery-slider__images .item .img-fill img {
            position : absolute;
            height :100%;
            width : 100%;
            top : 0;
            left : 0;
            right : 0;
            bottom : 0;
        }
        /* Playground by EThaiZone */
        #parent {
            width: 200px;
            height: 200px;
            border:solid 1px #000;
            background-color: blanchedalmond;
            width: auto;
            height: 422px;
            margin-top: 20px;
            border-width: 11px;
            border-color: grey;
            padding: 0px;

        }
        iframe {
            width:100%;
            height:100%;
            border:0px;
        }

        #parent > a {
            opacity: 0.3;
            position:relative;
            float: right;
            right:10px;
            bottom:50px;
            transition: 0.5s;
        }
        #parent > a {
            opacity: 1;
        }  

    </style>

</head>

<body id="google_translate_element">
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header>
                        <nav class="navbar-fixed-top " style="background: rgba(42, 179, 4, 0.8);" role="navigation">
                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a style="width: 195px; margin-left: 20px" href=""><img style="width: 60px;"
                                        src="http://www.bmtinsancita.com/public/upload/image/logo/bmt1-1594871636-1595860431.png" alt="Bmtinsan Cita">
                                    </a>
                                    <span class="text-uppercase " style="color: white;font-size: small;font-weight: bold;">Bmtinsan Cita</span>
                                </div>
                                <div class="collapse navbar-collapse navbar-collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class=" active"><a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class=""><a href="#profile">Tentang Kami</a>
                                        </li>
                                        <li class="dropdown "><a
                                            href="produk">Produk <b class="caret"></b></a>
                                            <div class="submenu-wrapper submenu-wrapper-topbottom">
                                                <div class="submenu-inner  submenu-inner-topbottom">
                                                    <ul class="dropdown-menu">
                                                        <li><a
                                                            href="#">Produk Simpanan2</a>
                                                        </li>
                                                        <li><a href="#">
                                                            <hr style="margin: 0; padding: 0;"></a>
                                                        </li>
                                                        <li><a href="#">Semua Produk</a></li>
                                                    </ul>
                                                </div>
                                            </div> 
                                        </li>
                                        <li class=""><a
                                            href="video">Program</a>
                                        </li>
                                        <li class=""><a
                                            href="#">Laporan</a>
                                        </li>
                                        <li class=""><a
                                            href="#">Kontak</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </header>
                    <div class="container">
                        <div class="content-wrapper" style="top:0 !important">
                            <section class="handover-wrapper" style='background-image: url("https://get.clt.re/wp-content/uploads/2014/12/Parallax-Background-Dark-07.jpg"); height: 500px;background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; height: 700px;'>
                                <ul class="row">
                                    <div id="project-kami-slider" class="owl-carousel">
                                        @forelse ($services as $service)
                                        <li class="col-md-10 col-sm-6">
                                            <h2 class="wow fadeInDown" style="margin : 0 0 4px 6px !important">{{ $service->title }}</h2>
                                            <div class="news-card">
                                                <a href="#" class="news-card__card-link"></a>
                                                <img src="{{ asset('uploads/service_photos') }}/{{ $service->services_photo }}" alt="Simpanan Haji"
                                                class="news-card__image">

                                            </div>
                                            <p class="news-card__excerpt" style="margin-left: 5px !important;
                                            width :109% !important;     
                                            margin-top: 10px !important;
                                            height:  125px !important; 
                                            overflow-y: auto;    
                                            text-align: justify !important;
                                            ">{{ $service->short_description }}</p>
                                        </li>
                                        
                                        @empty
                                        @endforelse
                                    </div>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
    <!-- jQuery -->
    <script src="http://www.bmtinsancita.com/public/frontend/html/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="http://www.bmtinsancita.com/public/frontend/html/js/bootstrap.min.js"></script>
    <!-- wow.min.js -->
    <script src="http://www.bmtinsancita.com/public/frontend/html/js/wow.min.js"></script>
    <!-- owl-carousel -->
    <script src="http://www.bmtinsancita.com/public/frontend/html/owl-carousel/owl.carousel.min.js"></script>
    <!-- smoothscroll -->
    <script src="http://www.bmtinsancita.com/public/frontend/html/js/smoothscroll.js"></script>
    <!-- Offcanvas Menu -->
    <script src="http://www.bmtinsancita.com/public/frontend/html/js/hippo-offcanvas.js"></script>
    <!-- easypiechart -->
    <script src="http://www.bmtinsancita.com/public/frontend/html/js/jquery.easypiechart.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="http://www.bmtinsancita.com/public/frontend/html/js/jquery.easing.min.js"></script>
    <!-- Magnific-popup -->
    <script src="http://www.bmtinsancita.com/public/frontend/html/js/jquery.magnific-popup.min.js"></script>
    <!-- Shuffle.min js -->
    <script src="http://www.bmtinsancita.com/public/frontend/html/js/jquery.shuffle.min.js"></script>
    <!-- Custom Script -->
    <script src="http://www.bmtinsancita.com/public/frontend/html/js/scripts.js"></script>
    <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
    <script>
        function manage(txt) {
            var bt = document.getElementById('submit');
            var ele = document.getElementsByTagName('input'); 

        // Loop through each element.
        for (i = 0; i < ele.length; i++) {

            // Check the element type
            if (ele[i].type == 'text' && ele[i].value == '') {
                bt.disabled = true;    // Disable the button.
                return false;
            }
            else {
                bt.disabled = false;   // Enable the button.
            }
        }
    }    

</script>
<script type="text/javascript">
    //Rotating Menu Share Button DesainKode
    $(document).ready(function (ev) {
        var toggle = $('#ss_toggle');
        var menu = $('#ss_menu');
        var rot;

        $('#ss_toggle').on('click', function (ev) {
            rot = parseInt($(this).data('rot')) - 180;
            menu.css('transform', 'rotate(' + rot + 'deg)');
            menu.css('webkitTransform', 'rotate(' + rot + 'deg)');
            if ((rot / 180) % 2 == 0) {
                //Moving in
                toggle.parent().addClass('ss_active');
                toggle.addClass('close');
            } else {
                //Moving Out
                toggle.parent().removeClass('ss_active');
                toggle.removeClass('close');
            }
            $(this).data('rot', rot);
        });

        menu.on('transitionend webkitTransitionEnd oTransitionEnd', function () {
            if ((rot / 180) % 2 == 0) {
                $('#ss_menu div i').addClass('ss_animate');
            } else {
                $('#ss_menu div i').removeClass('ss_animate');
            }
        });

    });

</script>

<script>
    $(document).ready(function () {
        $('.customer-logos').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });

</script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'id',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element');
    }

</script>
<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript">
</script>
<script>
    function translateLanguage(lang) {

        var $frame = $('.goog-te-menu-frame:first');
        if (!$frame.size()) {
            alert("Error: Could not find Google translate frame.");
            return false;
        }
        $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
        return false;
    }

</script>
<script>
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 2,
            itemsDesktop: [1000, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: false,
            navigation: true,
            navigationText: ["", ""],
            autoPlay: true
        });
    });

</script>
<script>
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 2,
            itemsDesktop: [1000, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: false,
            navigation: true,
            navigationText: ["", ""],
            autoPlay: true
        });
    });

</script>
<script>
    $(document).ready(function () {
            /*
        variables
        */

        var $imagesSlider = $(".gallery-slider .gallery-slider__images>div"),
        $thumbnailsSlider = $(".gallery-slider__thumbnails>div");
    /*
        sliders
        */
        // images options
        $imagesSlider.slick({
            speed:300,
            slidesToShow:1,
            slidesToScroll:1,
            cssEase:'linear',
            fade:true,
            draggable:false,
            asNavFor:".gallery-slider__thumbnails>div",
            prevArrow:'.gallery-slider__images .prev-arrow',
            nextArrow:'.gallery-slider__images .next-arrow'
        });

        // thumbnails options
        $thumbnailsSlider.slick({
            speed:300,
            slidesToShow:5,
            slidesToScroll:1,
            cssEase:'linear',
            centerMode:true,
            draggable:false,
            focusOnSelect:true,
            asNavFor:".gallery-slider .gallery-slider__images>div",
            prevArrow:'.gallery-slider__thumbnails .prev-arrow',
            nextArrow:'.gallery-slider__thumbnails .next-arrow',
            responsive: [
            {
                breakpoint: 720,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
            ]
        });

    });

</script>
<script>
    // Startup Scripts
    $(document).ready(function () {
        $('.hero').css('height', ($(window).height() - $('header').outerHeight()) +
            'px'); // Set hero to fill page height

        $('#scroll-hero').click(function () {
            $('html,body').animate({
                scrollTop: $("#hero-bloc").height()
            }, 'slow');
        });
    });


    // Window resize 
    $(window).resize(function () {
        $('.hero').css('height', ($(window).height() - $('header').outerHeight()) +
            'px'); // Refresh hero height   
    });

</script>
<script>
    $(document).ready(function () {
        $("#project-kami-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1000, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: false,
            navigation: true,
            navigationText: ["", ""],
            autoPlay: false
        });
    });

</script>

<script>
    $(document).ready(function () {
        $('.tarkikComandSlider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            dots: true,
        });
    });

</script>
<script>
    $(document).ready(function (ev) {
        $('#custom_carousel').on('slide.bs.carousel', function (evt) {
            $('#custom_carousel .controls li.active').removeClass('active');
            $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass(
                'active');
        })
    });

</script>
<script>
    $(document).ready(function (ev) {
        const height = (elem) => {

            return elem.getBoundingClientRect().height

        }

        const distance = (elemA, elemB, prop) => {

            const sizeA = elemA.getBoundingClientRect()[prop]
            const sizeB = elemB.getBoundingClientRect()[prop]

            return sizeB - sizeA

        }

        const factor = (elemA, elemB, prop) => {

            const sizeA = elemA.getBoundingClientRect()[prop]
            const sizeB = elemB.getBoundingClientRect()[prop]

            return sizeB / sizeA

        }


    });

</script>
<script type="text/javascript">
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    function hanyaHuruf(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32)
            return false;
        return true;
    }

</script>
<script type="text/javascript">
    //Rotating Menu Share Button DesainKode
    $(document).ready(function (ev) {
        var toggle = $('#ss_toggle');
        var menu = $('#ss_menu');
        var rot;

        $('#ss_toggle').on('click', function (ev) {
            rot = parseInt($(this).data('rot')) - 180;
            menu.css('transform', 'rotate(' + rot + 'deg)');
            menu.css('webkitTransform', 'rotate(' + rot + 'deg)');
            if ((rot / 180) % 2 == 0) {
                //Moving in
                toggle.parent().addClass('ss_active');
                toggle.addClass('close');
            } else {
                //Moving Out
                toggle.parent().removeClass('ss_active');
                toggle.removeClass('close');
            }
            $(this).data('rot', rot);
        });

        menu.on('transitionend webkitTransitionEnd oTransitionEnd', function () {
            if ((rot / 180) % 2 == 0) {
                $('#ss_menu div i').addClass('ss_animate');
            } else {
                $('#ss_menu div i').removeClass('ss_animate');
            }
        });

    });

</script>
<script>
    $(document).ready(function () {
        $(".language").on("click", function (e) {
            $("li.language").removeClass("active");
            $(this).addClass("active");
        });
    });

</script>
</body>

</html>
