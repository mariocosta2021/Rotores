<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sistema de Gestão de Frotas</title>
    <link rel="shortcut icon" href="/site/assets/images/logo/favourite_icon.png" />
    <link
      rel="stylesheet"
      type="text/css"
      href="/site/assets/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="/site/assets/css/fontawesome.css" />
    <link rel="stylesheet" type="text/css" href="/site/assets/css/aos.css" />
    <link rel="stylesheet" type="text/css" href="/site/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/site/assets/css/slick.css" />
    <link rel="styles heet" type="text/css" href="/site/assets/css/slick-theme.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="/site/assets/css/magnific-popup.css"
    />
    <link rel="stylesheet" type="text/css" href="/site/assets/css/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="/site/assets/css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="/site/assets/css/style.css" />
  </head>
  <body>
    <div id="thetop"></div>
    <div class="backtotop">
      <a href="#" class="scroll"><i class="far fa-arrow-up"></i></a>
    </div>
    <div class="preloader">
      <div class="animation_preloader">
        <div class="spinner"></div>
        <p class="text-center">Loading</p>
      </div>
      <div class="loader">
        <div class="row vh-100">
          <div class="col-3 loader_section section-left">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader_section section-left">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader_section section-right">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader_section section-right">
            <div class="bg"></div>
          </div>
        </div>
      </div>
    </div>
    <header class="header_section secondary_header sticky text-white clearfix">
      <div class="header_top clearfix">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <ul class="header_contact_info ul_li clearfix">

                <li><i class="fal fa-phone"></i> +94658457896</li>
              </ul>
            </div>
            <div class="col-lg-5">
              <ul class="primary_social_links ul_li_right clearfix">
                <li>
                  <a href="#!"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#!"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#!"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#!"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header_bottom clearfix">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
              <div class="brand_logo">
                <a href="{{ route('site.home') }}"
                  ><img
                    src="/site/assets/images/logo/logo_01_1x.png"
                    srcset="/site/assets/images/logo/logo_01_2x.png 2x"
                    alt="logo_not_found" />
                  <img
                    src="/site/assets/images/logo/logo_02_1x.png"
                    srcset="/site/assets/images/logo/logo_02_2x.png 2x"
                    alt="logo_not_found"
                /></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 order-last">
              <ul class="header_action_btns ul_li_right clearfix">


                <li class="dropdown">
                  <button
                    type="button"
                    class="user_btn"
                    id="user_dropdown"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fal fa-user"></i>
                  </button>

                  <div
                    class="user_dropdown rotors_dropdown dropdown-menu clearfix"
                    aria-labelledby="user_dropdown"
                  >
                  @if(isset(Auth::user()->name))

                    <div class="profile_info clearfix">
                      <a href="#!" class="user_thumbnail"
                        ><img
                          src="/site/assets/images/meta/img_01.png"
                          alt="thumbnail_not_found"
                      /></a>


                      <div class="user_content">
                        <h4 class="user_name">
                          <a href="{{ route('admin.home') }}">{{ Auth::user()->name }}</a>
                        </h4>
                        <span class="user_title">{{ Auth::user()->level }}</span>
                      </div>

                    </div>
                    @endif
                    <ul class="ul_li_block clearfix">
                        @if(isset(Auth::user()->name))
                      <li>
                        <a href="{{ route('admin.home') }}"
                          ><i class="fal fa-user-circle"></i> Perfil</a
                        >
                      </li>
                      @endif
                      @if(!isset(Auth::user()->name))
                      <li>


                        <a href="{{ route('login') }}"><i class="fal fa-sign-out"></i> Login</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </li>

              </ul>
            </div>
