@extends('layouts.merge.site')
@section('titulo', 'Sistema de gestão')
@section('content')

<main>
    <div class="sidebar-menu-wrapper">
      <div class="mobile_sidebar_menu">
        <button type="button" class="close_btn">
          <i class="fal fa-times"></i>
        </button>
        <div class="about_content mb_60">
          <div class="brand_logo mb_15">
            <a href="{{ route('site.home') }}"
              ><img
                src="assets/images/logo/logo_01_1x.png"
                srcset="assets/images/logo/logo_01_2x.png 2x"
                alt="logo_not_found"
            /></a>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </div>
    <section class="breadcrumb_section text-center clearfix">
      <div
        class="page_title_area has_overlay d-flex align-items-center clearfix"
        data-bg-image="/site/assets/images/breadcrumb/bg_13.jpg">
        <div class="overlay"></div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <h1 class="page_title text-white mb-0">Galeria de Viaturas</h1>
        </div>
      </div>
      <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
        <div class="container">

        </div>
      </div>
    </section>
    <section class="gallery_section sec_ptb_100 clearfix">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
            <div
              class="section_title mb_60 text-center"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <h2 class="title_text mb_15"><span>Nossas Viaturas</span></h2>
              <p class="mb-0">
              Escolha uma viatura  para transportar sua carga
              </p>
            </div>
          </div>
        </div>

        <div class="feature_vehicle_filter mb-0 element-grid clearfix">
            @foreach ( $viaturas as $item)
          <div class="element-item sedan" data-category="sedan">
            <div
              class="feature_vehicle_item"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <h3 class="item_title mb-0">
                <a href="{{ route('admin.solicitacoes.create') }}">{{ $item->modelo }}</a>
              </h3>
              <div class="item_image position-relative">
                <a class="image_wrap" href="{{ route('admin.solicitacoes.create') }}"
                  ><img src="/storage/{{ $item->imagem_viatura }}" alt="image_not_found"/>
                </a>
              </div>
              <ul class="info_list ul_li_center clearfix">
                <li>Matricula</li>
                <li>{{ $item->matricula }}</li>

              </ul>
            </div>
          </div>


          @endforeach
        </div>

      </div>
    </section>


  </main>

@endsection
