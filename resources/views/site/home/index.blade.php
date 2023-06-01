@extends('layouts.merge.site')
@section('titulo', 'Sistema de gestão')
@section('content')


    <main class="mt-0">
        <div class="sidebar-menu-wrapper">
            <div class="mobile_sidebar_menu">
                <button type="button" class="close_btn">
                    <i class="fal fa-times"></i>
                </button>
                <div class="about_content mb_60">
                    <div class="brand_logo mb_15">
                        <a href="index.html"><img src="/site/assets/images/logo/logo_01_1x.png"
                                srcset="/site/assets/images/logo/logo_01_2x.png 2x" alt="logo_not_found" /></a>
                    </div>
                    <p class="mb-0">
                        Nullam id dolor auctor, dignissim magna eu, mattis

                    </p>
                </div>


            </div>
            <div class="overlay"></div>
        </div>
        <section class="slider_section text-white text-center position-relative clearfix">
            <div class="main_slider clearfix">
                <div class="item has_overlay d-flex align-items-center"
                    data-bg-image="/site/assets/images/backgrounds/caroo.JPG">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="slider_content text-center">
                                    <h3 class="text-white text-uppercase" data-animation="fadeInUp" data-delay=".3s">
                                        Transporta sua Carga de Forma segura
                                    </h3>
                                    <p data-animation="fadeInUp" data-delay=".5s">
                                        Sistema de Gestao de Frotas
                                    </p>
                                    <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".7s">
                                        <a class="custom_btn bg_default_red btn_width text-uppercase" href="{{ route('admin.solicitacoes.create') }}">Solicitar agora
                                            <img src="/site/assets/images/icons/icon_01.png" alt="icon_not_found" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item has_overlay d-flex align-items-center"
                    data-bg-image="/site/D.T_1.png">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="slider_content text-center">
                                    <h3 class="text-white text-uppercase" data-animation="fadeInUp" data-delay=".3s">
                                     Não perca mais tempo
                                    </h3>
                                    <p data-animation="fadeInUp" data-delay=".5s">
              Solicite Agora
                                    </p>
                                    <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".7s">
                                        <a class="custom_btn bg_default_red btn_width text-uppercase" href="{{ route('admin.solicitacoes.create') }}">Solicitar
                                            <img src="/site/assets/images/icons/icon_01.png" alt="icon_not_found" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel_nav clearfix">
                <button type="button" class="main_left_arrow">
                    <i class="fal fa-chevron-left"></i>
                </button>
                <button type="button" class="main_right_arrow">
                    <i class="fal fa-chevron-right"></i>
                </button>
            </div>
        </section>

        <section class="feature_section sec_ptb_150 clearfix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                        <div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="title_text mb_15"><span>Veículos em destaque</span></h2>
                            <p class="mb-0">
                             Escolha uma viatura para transportar a sua carga
                            </p>
                        </div>
                    </div>
                </div>

                <div class="feature_vehicle_filter element-grid clearfix">


                    @foreach ($viaturas as $item)
                        <div class="element-item luxury" data-category="luxury">
                            <div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="500">
                                <h3 class="item_title mb-0">
                                    <a href="{{ route('admin.solicitacoes.create') }}">{{ $item->modelo }}</a>
                                </h3>
                                <div class="item_image position-relative">
                                    <a class="image_wrap" href="{{ route('admin.solicitacoes.create') }}"><img height="100" width="100" src="/storage/{{ $item->imagem_viatura }}"
                                            alt="{{ $item->imagem_viatura }}" />

                                    </a><span class="item_price bg_default_blue">Quantidade de :{{ $item->quantidade }} KG</span>
                                </div>
                                <ul class="info_list ul_li_center clearfix">
                                    <li>Sports</li>
                                    <li>Auto</li>
                                    <li>2 Passengers</li>
                                    <li>Hybrid</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="abtn_wrap text-center clearfix" data-aos="fade-up" data-aos-delay="100">
                    <a class="custom_btn bg_default_red btn_width text-uppercase" href="{{ route('admin.solicitacoes.create') }}">Reserve uma viatura
                        <img src="/site/assets/images/icons/icon_01.png" alt="icon_not_found" /></a>
                </div>
            </div>
        </section>
        <section class="service_section sec_ptb_150 pb-0 mb_100 text-white clearfix"
            data-bg-gradient="linear-gradient(0deg, #0C0C0F, #292D45)">

        </section>

        <hr class="m-0" data-aos="fade-up" data-aos-delay="100" />
        <section class="testimonial_section sec_ptb_150 clearfix">
            <div class="container">
                <div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="title_text mb-0">
                        <span>O que os clientes dizem sobre nós</span>
                    </h2>
                </div>
                <div class="testimonial_carousel_wrap position-relative">
                    <div class="testimonial_carousel" data-slick='{"dots": false}' data-aos="fade-up" data-aos-delay="300">
                        <div class="item">
                            <div class="testimonial_item2 text-center">
                                <p class="mb_30">
                                    “Ut id lobortis eros, sed finibus dui. Cras eget purus
                                    lacus. Suspendisse sodales massa quis turpis ultrices
                                    ultricies. Cras euismod eros at vehicula sagittis.
                                    Suspendisse condimentum tortor nec enim pellentesque
                                    feugiat. Nulla tempor urna vitae sapien iaculis, auctor
                                    condimentum enim auctor”
                                </p>
                                <div class="admin_info">
                                    <div class="admin_image">
                                        <img src="/site/assets/images/meta/img_01.png" alt="image_not_found" />
                                    </div>
                                    <h4 class="admin_name">Marianna Frazoni</h4>
                                    <ul class="rating_star ul_li_center clearfix">
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_item2 text-center">
                                <p class="mb_30">
                                    “Ut id lobortis eros, sed finibus dui. Cras eget purus
                                    lacus. Suspendisse sodales massa quis turpis ultrices
                                    ultricies. Cras euismod eros at vehicula sagittis.
                                    Suspendisse condimentum tortor nec enim pellentesque
                                    feugiat. Nulla tempor urna vitae sapien iaculis, auctor
                                    condimentum enim auctor”
                                </p>
                                <div class="admin_info">
                                    <div class="admin_image">
                                        <img src="/site/assets/images/meta/img_01.png" alt="image_not_found" />
                                    </div>
                                    <h4 class="admin_name">Marianna Frazoni</h4>
                                    <ul class="rating_star ul_li_center clearfix">
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_item2 text-center">
                                <p class="mb_30">
                                    “Ut id lobortis eros, sed finibus dui. Cras eget purus
                                    lacus. Suspendisse sodales massa quis turpis ultrices
                                    ultricies. Cras euismod eros at vehicula sagittis.
                                    Suspendisse condimentum tortor nec enim pellentesque
                                    feugiat. Nulla tempor urna vitae sapien iaculis, auctor
                                    condimentum enim auctor”
                                </p>
                                <div class="admin_info">
                                    <div class="admin_image">
                                        <img src="/site/assets/images/meta/img_01.png" alt="image_not_found" />
                                    </div>
                                    <h4 class="admin_name">Marianna Frazoni</h4>
                                    <ul class="rating_star ul_li_center clearfix">
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_nav position_ycenter">
                        <button type="button" class="ts_left_arrow">
                            <i class="fal fa-angle-left"></i>
                        </button>
                        <button type="button" class="ts_right_arrow">
                            <i class="fal fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
