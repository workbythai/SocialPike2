
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
          <!-- เมนูเมื่อ Login แล้ว -->
          <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal bg-nav-drakgold d-none z-index-1000" id="navcolor">
            <div class="container">
              <a href="index.html" class="navbar-brand d-flex">
                <img src="{{asset('images/logo/logo.jpg')}}" alt="" class="logo">
              </a>
              <div class="d-flex g-hidden-md-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
                <div class="d-block text-white text-right">
                  <p class="mb-0">Welcome</p>
                  <p class="mb-0">Mr.Socia Ecommerce</p>
                </div>
                <div class="img-menu-profile">
                  <img src="{{asset('images/profile/2.jpg')}}" class="img-fix">
                </div>
                <button id="profile-btn" type="button" class="btn bg-transparent border-0 text-x-large text-white">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </nav>
          <div class="container position-relative d-lg-block d-none">
            <div id="profile-menu">
              <div class="bg-white py-2 border px-2">
                <div class="d-flex">
                  <div class="img-menu-profile ml-0">
                    <img src="{{asset('images/profile/2.jpg')}}" class="img-fix">
                  </div>
                  <div class="ml-2 text-secondary">
                    <p class="mb-0 font-weight-bold">Mr.Socia Ecommerce</p>
                    <p class="mb-0 text-small">socall@gmail.com</p>
                  </div>
                </div>
                <hr class="my-3 border-secondary">
                <ul class="list-group ">
                  <li class="list-group-item border-0 py-2 text-secondary">
                    <span class="px-1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <span class="px-1">แก้ไขข้อมูลส่วนตัว</span>
                  </li>
                  <li class="list-group-item border-0 py-2 text-secondary">
                    <span class="px-1"><i class="fa fa-suitcase" aria-hidden="true"></i></span>
                    <span class="px-1">แก้ไขร้านค้า</span>
                  </li>
                  <li class="list-group-item border-0 py-2 text-secondary">
                    <span class="px-1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <span class="px-1">ที่อยู่จัดส่ง</span>
                  </li>
                  <li class="list-group-item border-0 py-2 text-secondary">
                    <span class="px-1"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                    <span class="px-1">ออกจากระบบ</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- END เมนูที่ Login แล้ว -->

          <!-- เมนูที่ยังไม่ได้ Login -->
          <nav id="navcolor" class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal bg-nav-drakgold d-lg-block d-none">
            <div class="container">
              <a href="index.html" class="navbar-brand d-flex">
                <img src="{{asset('images/logo/logo.jpg')}}" alt="" class="logo">
              </a>

              <form class="input-form">
                <input class="form-control input-search" placeholder="ค้นหาร้านค้าและสินค้า" />
                <button id="searchsubmit" class="btn bg-gold search-submit" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>

              <div class="btn-group mx-3" role="group" aria-label="Basic example">
                <button type="button" id="openstore" class="btn btn-secondary mx-2 btn-open-store">เปิดร้านค้าฟรี</button>
                <button type="button" id="loginuser" class="btn btn-secondary mx-2 btn-login-navbar" data-toggle="modal" data-target="#myModal">สมัครใหม่ / เข้าสู่ระบบ</button>
              </div>
            </div>
          </nav>



          <!-- End เมนูที่ยังไม่ได้ Login -->

          <!-- เมนูทั้งหมด -->
          <nav id="navbottom" class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal bg-nav-gold">
            <div class="container">
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

              <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
                <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 mx-auto">
                  <li class="hs-has-mega-menu nav-item" data-animation-in="fadeIn" data-animation-out="fadeOut" data-max-width="60%" data-position="left">
                    <a id="mega-menu-home" class="nav-link text-white g-py-7 px-3" href="#" aria-haspopup="true" aria-expanded="false">หมวดหมู่ร้านค้า
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
                    </a>
                    <!-- mega menu -->
                    <div class="w-100 hs-mega-menu u-shadow-v11 font-weight-normal g-brd-top g-brd-top-2 mt-2 g-bg-white g-mt-8--lg--scrolling">
                       <!-- aria-labelledby="mega-menu-home" -->
                      <div class="row align-items-stretch no-gutters">
                        <div class="col-lg-6 mega-border-right">
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
                        <div class="col-lg-6 mega-border-right g-brd-left--lg g-brd-gray-light-v5">
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
                      </div>
                    </div>
                    <!-- end mega menu -->
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link g-py-7 text-white px-3">ร้านค้าทั้งหมด</a>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="nav-link g-py-7 text-white px-3">ร้านค้าแนะนำ</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link g-py-7 text-white px-3">ค้นหาร้านค้า</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link g-py-7 text-white px-3">ชุมชน</a>
                  </li>
                </ul>

                <div class="mx-3">
                  <form class="input-form d-lg-none d-flex mb-3 w-100">
                    <input class="form-control input-search" placeholder="ค้นหาร้านค้าและสินค้า" />
                    <button class="btn bg-gold search-submit" type="submit">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </form>
                </div>

                <div class="btn-group mx-3 d-lg-none d-block mb-3 text-center" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-secondary mx-2 btn-open-store">เปิดร้านค้าฟรี</button>
                  <button type="button" class="btn btn-secondary mx-2 btn-login-navbar">สมัครใหม่ / เข้าสู่ระบบ</button>
                </div>

                </div>

              
            </div>
          </nav>
          <!-- <div id="btn"> Click Me</div>
          <div id="nav" style="" class="hide">
              <ul>
                  <li>sample</li>
                  <li>sample</li>
                  <li>sample</li>
              </ul>
          </div> -->
        </div>
      </header>

      <section>
          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">เข้าสู่ระบบ</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  Modal body..
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>
      </section>

      <section class="position-fixed c-fixed">
        <button type="button" class="btn btn-cog" id="openmain">
          <i class="fa fa-cog" aria-hidden="true"></i>
        </button>
        <button type="button" class="btn btn-cog" id="closemain" style="display:none;">
          <i class="fa fa-cog" aria-hidden="true"></i>
        </button>

        <div id="mySidebar" class="sidebarcolor">
          <a href="#" class="d-flex" onclick="themecolor('#000000')">
            <div class="w-theme bg-black"></div>
            <div class="w-theme bg-secondary"></div>
            <div class="w-theme bg-black-gray"></div>
            <div class="w-theme bg-light"></div>
          </a>
          <a href="#" id="btn-green" class="d-flex" onclick="themecolor('#009688')">
            <div class="w-theme bg-dark-green"></div>
            <div class="w-theme bg-green1"></div>
            <div class="w-theme bg-green2"></div>
            <div class="w-theme g-bg-white"></div>
          </a>
        </div>
      </section>

      <!-- End Header -->
      @yield('body')

      <!-- Copyright Footer -->
      <footer class="g-color-white-opacity-0_8 g-py-20 bg-nav-drakgold">
        <div class="container">
          <div class="text-center">
            <a href="#" class="text-white">สนใจร่วมเปิดร้านค้ากับเรา</a>
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

        $(document).ready(function(){
          $("#openmain").click(function(){
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("openmain").style.display = "none";
            document.getElementById("openmain").style.right = "250px";
            document.getElementById("closemain").style.display = "block";
            document.getElementById("closemain").style.right = "250px";
          });
        });
        $(document).ready(function(){
          $("#closemain").click(function(){
            document.getElementById("mySidebar").style.width = "0px";
            document.getElementById("openmain").style.display = "block";
            document.getElementById("openmain").style.right = "0px";
            document.getElementById("closemain").style.display = "none";
            document.getElementById("closemain").style.right = "0px";
            
          });
        });

        $(document).ready(function(){
          $("#profile-btn").click(function(){
            $("#profile-menu").fadeToggle(150 , "linear");          
          });
        });

        // var menu = document.getElementById('navcolor');
        // var menubottom = document.getElementById('navbottom');
        // var submitform = document.getElementById('searchsubmit');

        function themecolor(color) {
        // document.getElementById('btn-drak')color = function() {
              $("#navcolor").css("background-color" , color);
              $("#navbottom").css("background-color" , color);
              $("#mySidebar").css("background-color" , color);
              $("#searchsubmit").css("background-color" , color);
              $("#closemain").css("background-color" , color);
              $("#closemain").css("border-color" , color);
              $("#openstore").css("background-color" , color);
              $("#openstore").css("color" , color);
              $("#openstore").css("border-color" , color);
              $("#openmain").css("background-color" , color);
              $(".prduct-tab").css("border-color" , color);
              $("#openmain").css("color" , color);
              $("#openmain").css("border-color" , color);
              $("#loginuser").css("background-color" ,color);
              $("#loginuser").css("color" , color);
              $("#loginuser").css("border-color" , color);
              $(".list-all-caht").css("background-color" , color);
              $(".prduct-tab.active").css("background-color" , color);
              $(".prduct-tab.active").css("border-color" , color);
              $(".prduct-tab").css("background-color" , color);
              $("#profile-se").css("background-color" , color);
              $(".title-page").css("color" , color);
              $(".hr-title").css("border-color" , color);
              $(".bg-nav-drakgold").css("background-color" , color);
        // }
      }

        // document.getElementById('btn-green').onclick = function() {
        //       $("#navcolor").css("background-color" , "rgb(0, 150, 136)");
        //       $("#navbottom").css("background-color" , "rgb(76, 175, 80)");
        //       $("#mySidebar").css("background-color" , "rgb(76, 175, 80)");
        //       $("#closemain").css("background-color" , "rgb(76, 175, 80)");
        //       $("#closemain").css("border-color" , "rgb(76, 175, 80)");
        //       $("#openstore").css("background-color" , "#fff");
        //       $("#openstore").css("color" , "#000");
        //       $("#openstore").css("border-color" , "#fff");
        //       $("#openmain").css("background-color" , "#fff");
        //       $("#openmain").css("color" , "#000");
        //       $("#openmain").css("border-color" , "#fff");
        //       $("#loginuser").css("background-color" , "rgb(139, 195, 74)");
        //       $("#loginuser").css("color" , "rgb(255, 255, 255)");
        //       $("#loginuser").css("border-color" , "rgb(139, 195, 74)");
        //       $(".list-all-caht").css("background-color" , "rgb(0, 150, 136)");
        //       $(".prduct-tab.active").css("background-color" , "rgb(0, 150, 136)");
        //       $(".prduct-tab.active").css("border-color" , "rgb(0, 150, 136)");
        //       $(".prduct-tab").css("background-color" , "rgb(76, 175, 80)");
        //       $(".prduct-tab").css("border-color" , "rgb(76, 175, 80)");
        //       $("#profile-se").css("background-color" , "#6c757d");
        //       $("#community").css("background-color" , "#009688");
        //       $(".text-gold").css("color" , "#009688");
        //       $(".border-gold ").css("border-color" , "#4CAF50");
        //       $(".title-page").css("color" , "rgb(139, 195, 74)");
        //       $(".hr-title").css("border-color" , "#8bc34a");
        //       $("#searchsubmit").css("background-color" , "#8bc34a");
        // }
    </script>







  </body>

  </html>