
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>marketplace</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}">
  <!-- CSS Global Icons -->
  @yield('css_top')
  <link rel="stylesheet" href="{{asset('assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/icon-line/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/icon-etlinefont/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/icon-line-pro/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/icon-hs/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/dzsparallaxer/dzsparallaxer.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/dzsparallaxer/dzsscroller/scroller.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/dzsparallaxer/advancedscroller/plugin.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/animate.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/fancybox/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/typedjs/typed.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/hamburgers/hamburgers.min.css')}}">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="{{asset('assets/css/unify-core.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/unify-components.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/unify-globals.css')}}">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  @yield('css_bottom')
</head>

<body>
  <main>



    <!-- Header -->
    <header id="js-header" class="u-header u-header--static">
      <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3">
      
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal bg-nav-drakgold d-lg-block d-none">
          <div class="container">
          <!-- Logo -->
            <a href="index.html" class="navbar-brand d-flex">
              <img src="{{asset('images/logo/logo.jpg')}}" alt="" class="logo">
            </a>
            <div class="d-inline-block g-hidden-md-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
              <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697?ref=htmlstream" target="_blank">Purchase now</a>
            </div>
          </div>
        <!-- End Logo -->
        </nav>
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal bg-nav-gold">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <a href="index.html" class="navbar-brand d-lg-none d-flex ">
              <img src="{{asset('images/logo/logo.jpg')}}" alt="" class="logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right btn ml-auto" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
              <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->


            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 mx-auto">

                <!-- Home -->
                <li class="hs-has-mega-menu nav-item" data-animation-in="fadeIn" data-animation-out="fadeOut" data-max-width="60%" data-position="left">
                  <a id="mega-menu-home" class="nav-link text-white g-py-7 px-3" href="#" aria-haspopup="true" aria-expanded="false">หมวดหมู่ร้านค้า
                    <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
                  </a>
                  <!-- Mega Menu -->
                  <div class="w-100 hs-mega-menu u-shadow-v11 font-weight-normal g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-mt-18 g-mt-8--lg--scrolling" aria-labelledby="mega-menu-home">
                    <div class="row align-items-stretch no-gutters">
                      <!-- Home (col) -->
                      <div class="col-lg-6">
                        <ul class="list-unstyled">
                          <li class="dropdown-item active">
                            <a href="unify-main/home/home-default.html" class="nav-link">Default</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-incredible.html" class="nav-link">Incredible</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-studio.html" class="nav-link">Studio</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-allure.html" class="nav-link">Allure</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-inspire.html" class="nav-link">Inspire</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-portfolio.html" class="nav-link">Portfolio</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-creative.html" class="nav-link">Creative</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-projects.html" class="nav-link">Projects</a>
                          </li>
                        </ul>
                      </div>
                      <!-- End Home (col) -->

                      <!-- Home (col) -->
                      <div class="col-lg-6 g-brd-left--lg g-brd-gray-light-v5">
                        <ul class="list-unstyled">
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-discover.html" class="nav-link">Discover</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-brave.html" class="nav-link">Brave</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-business.html" class="nav-link">Business</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-corporate.html" class="nav-link">Corporate</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-web-agency.html" class="nav-link">Web Agency</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-aspire.html" class="nav-link">Aspire</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-showcase.html" class="nav-link">Showcase</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="unify-main/home/home-news.html" class="nav-link">News</a>
                          </li>
                        </ul>
                      </div>
                      <!-- End Home (col) -->
                    </div>
                  </div>
                  <!-- End Mega Menu -->
                </li>
                <!-- End Home -->


                <!-- All store -->
                <li class="nav-item">
                  <a href="#" class="nav-link g-py-7 text-white px-3">ร้านค้าทั้งหมด</a>
                </li>
                <!-- End All store -->

                <!-- Recommended stores -->
                <li class="nav-item">
                  <a href="#" class="nav-link g-py-7 text-white px-3">ร้านค้าแนะนำ</a>
                </li>
                <!-- End Recommended -->

                <!-- Recommended stores -->
                <li class="nav-item">
                  <a href="#" class="nav-link g-py-7 text-white px-3">ค้นหาร้านค้า</a>
                </li>
                <!-- End Recommended -->

                <!-- Recommended stores -->
                <li class="nav-item">
                  <a href="#" class="nav-link g-py-7 text-white px-3">ชุมชน</a>
                </li>
                <!-- End Recommended -->

              </ul>
            </div>
            <!-- End Navigation -->

            
          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->
    @yield('body')

    <!-- Copyright Footer -->
    <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
            <div class="d-lg-flex">
              <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2019 &copy; All Rights Reserved.</small>
              <ul class="u-list-inline">
                <li class="list-inline-item">
                  <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">Privacy Policy</a>
                </li>
                <li class="list-inline-item">
                  <span>|</span>
                </li>
                <li class="list-inline-item">
                  <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">Terms of Use</a>
                </li>
                <li class="list-inline-item">
                  <span>|</span>
                </li>
                <li class="list-inline-item">
                  <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">License</a>
                </li>
                <li class="list-inline-item">
                  <span>|</span>
                </li>
                <li class="list-inline-item">
                  <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-4 align-self-center">
            <ul class="list-inline text-center text-md-right mb-0">
              <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Facebook">
                <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Skype">
                <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                  <i class="fa fa-skype"></i>
                </a>
              </li>
              <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Linkedin">
                <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Pinterest">
                <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                  <i class="fa fa-pinterest"></i>
                </a>
              </li>
              <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Twitter">
                <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Dribbble">
                <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                  <i class="fa fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Copyright Footer -->
    <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  @yield('js_top')
  <script src="{{asset('assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('assets/vendor/popper.js/popper.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>


  <!-- JS Implementing Plugins -->
  <script src="{{asset('assets/vendor/slick-carousel/slick/slick.js')}}"></script>
  <script src="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
  <script src="{{asset('assets/vendor/dzsparallaxer/dzsparallaxer.js')}}"></script>
  <script src="{{asset('assets/vendor/dzsparallaxer/dzsscroller/scroller.js')}}"></script>
  <script src="{{asset('assets/vendor/dzsparallaxer/advancedscroller/plugin.js')}}"></script>
  <script src="{{asset('assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/typedjs/typed.min.js')}}"></script>

  <!-- JS Unify -->
  <script src="{{asset('assets/js/hs.core.js')}}"></script>
  <script src="{{asset('assets/js/components/hs.carousel.js')}}"></script>
  <script src="{{asset('assets/js/components/hs.header.js')}}"></script>
  <script src="{{asset('assets/js/helpers/hs.hamburgers.js')}}"></script>
  <script src="{{asset('assets/js/components/hs.tabs.js')}}"></script>
  <script src="{{asset('assets/js/components/hs.popup.js')}}"></script>
  <script src="{{asset('assets/js/components/text-animation/hs.text-slideshow.js')}}"></script>
  <script src="{{asset('assets/js/components/hs.go-to.js')}}"></script>

  <!-- JS Customization -->
  <script src="{{asset('assets/js/custom.js')}}"></script>
  @yield('js_bottom')
  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of text animation (typing)
        $(".u-text-animation.u-text-animation--typing").typed({
          strings: [
            "an awesome template",
            "perfect template",
            "just like a boss"
          ],
          typeSpeed: 60,
          loop: true,
          backDelay: 1500
        });
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });


      $(document).ready(function(){
          $("#btn").click(function(){
            $("#message").append("<div class='text-right'><p class='badge you-mes'>"+ $("#myInput").val() +"</p></div>" + "<div class='text-right list-chat-time'><span>12:00</span></div>");
            $("#message").append("<p class='badge friend-message'>ขอบคุณครับ</p> <br>"  + "<div class='list-chat-time'><span>Jeans Shop</span></div>");
            $( '#newsletterform' ).append(function(){
                this.reset();
            });
            // $("#demo").append("<span class='badge badge-secondary'>ขอบคุณครับ</span>");
          });
      });
  </script>







</body>

</html>