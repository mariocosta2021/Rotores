@extends('layouts.merge.site')
@section('titulo', 'Lista de Viaturas')
@section('content')

<main>
    <div class="sidebar-menu-wrapper">
        <div class="mobile_sidebar_menu"><button type="button" class="close_btn"><i
                    class="fal fa-times"></i></button>
            <div class="about_content mb_60">
                <div class="brand_logo mb_15"><a href="index.html"><img src="/site/assets/images/logo/logo_01_1x.png"
                            srcset="/site/assets/images/logo/logo_01_2x.png 2x" alt="logo_not_found"></a></div>
                <p class="mb-0">Nullam id dolor auctor, dignissim magna eu, mattis ante. Pellentesque
                    tincidunt, elit a facilisis efficitur, nunc nisi scelerisque enim, rhoncus malesuada est velit a
                    nulla. Cras porta mi vitae dolor tristique euismod. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit</p>
            </div>
            <div class="menu_list mb_60 clearfix">
                <h3 class="title_text text-white">Menu List</h3>
                <ul class="ul_li_block clearfix">
                    <li class="active dropdown"><a href="#!" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="index_1.html">Home Page V.1</a></li>
                            <li><a href="index_2.html">Home Page V.2</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.html">Our Cars</a></li>
                    <li><a href="review.html">Reviews</a></li>
                    <li><a href="about.html">About</a></li>
                    <li class="dropdown"><a href="#!" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="service.html">Our Service</a></li>
                            <li><a href="gallery.html">Car Gallery</a></li>
                            <li><a href="account.html">My Account</a></li>
                            <li><a href="reservation.html">Reservation</a></li>
                            <li class="dropdown"><a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Blogs</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog_details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Our Cars</a>
                                <ul class="dropdown-menu">
                                    <li><a href="car.html">Cars</a></li>
                                    <li><a href="car_details.html">Car Details</a></li>
                                </ul>
                            </li>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="faq.html">F.A.Q.</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#!" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Contact Us</a>
                        <ul class="dropdown-menu">
                            <li><a href="contact.html">Contact Default</a></li>
                            <li><a href="contact_wordwide.html">Contact Wordwide</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="booking_car_form">
                <h3 class="title_text text-white mb-2">Book A Car</h3>
                <p class="mb_15">Nullam id dolor auctor, dignissim magna eu, mattis ante. Pellentesque
                    tincidunt, elit a facilisis efficitur.</p>
                <form action="#">
                    <div class="form_item">
                        <h4 class="input_title text-white">Pick Up Location</h4>
                        <div class="position-relative"><input id="location_one" type="text" name="location"
                                placeholder="City, State or Airport Code"> <label for="location_one"
                                class="input_icon"><i class="fas fa-map-marker-alt"></i></label></div>
                    </div>
                    <div class="form_item">
                        <h4 class="input_title text-white">Pick A Date</h4><input type="date" name="date">
                    </div><button type="submit" class="custom_btn bg_default_red btn_width text-uppercase">Book A
                        Car <img src="/site/assets/images/icons/icon_01.png" alt="icon_not_found"></button>
                </form>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix"
            data-bg-image="/site/assets/images/breadcrumb/bg_09.jpg">
            <div class="overlay"></div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title text-white mb-0">Login</h1>
            </div>
        </div>
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="register_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="register_card mb_60" data-bg-color="##F2F2F2" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="reg_image" data-aos="fade-up" data-aos-delay="300"><img
                                src="/site/assets/images/about/img_03.jpg" alt="image_not_found"></div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="reg_form" data-aos="fade-up" data-aos-delay="500">
                            <h3 class="form_title">Login:</h3>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                </ul>
                            </div>
                        @endif
                            <p>Economia de até 15% com nossas soluções de aluguel de carros, cobertura global e uma equipe dedicada ao cliente</p><span class="new_account mb_15"></span>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form_item"><input type="text" name="username" :value="old('username')" required
                                        placeholder="seu nome de usuário"></div>
                                <div class="form_item"><input type="password" name="password" required
                                        placeholder="Password"></div><button type="submit"
                                    class="custom_btn bg_default_red text-uppercase">Login <img
                                        src="/site/assets/images/icons/icon_01.png" alt="icon_not_found"></button> <span
                                    class="reset_pass mb_15"><a href="#!"></a></span>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="register_card mb-0" data-bg-color="##F2F2F2" data-aos="fade-up" data-aos-delay="100">
                <div class="section_title mb_30 text-center">
                    <h2 class="title_text mb-0" data-aos="fade-up" data-aos-delay="300"><span>Cadastrar</span></h2>
                </div>
                <form method="POST" action="{{ route('site.cadastrar') }}">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        </ul>
                    </div>
                @endif
                    <div class="row justify-content-lg-between">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="500">
                            <div class="form_item"><input type="text" name="name"
                                value="{{ isset($user->name) ? $user->name : old('name') }}" required autofocus placeholder="Seu nome">
                            </div>
                            <div class="form_item"><input type="email"  name="email"
                                value="{{ isset($user->email) ? $user->email : old('email') }}" required placeholder="Seu email*">
                            </div>
                            <div class="form_item"><input type="password" name="password"
                                autocomplete="new-password" placeholder="Password" required
                                    placeholder="Password*"></div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="700">

                            <div class="form_item"><input type="password"    name="password_confirmation" placeholder="Confirmar Password" required placeholder="Confirmar Password*"></div>
                        <div class="form_item"><input type="number" name="telefone" placeholder="número de telefone*">
                        </div>
                        <label></label>
                            <div class="form_item"><input name="username" type="text"
                                    placeholder="Nome de Usuário"  value="{{ isset($user->username) ? $user->username : old('username') }}"></div>
                            <p>Seus dados pessoais serão usados ​​no mapeamento com os veículos que você adicionou ao site, para gerenciar o acesso à sua conta e para outros fins descritos em nosso
                            </p><button type="submit" class="custom_btn bg_default_red text-uppercase mb-0">Cadastrar
                                <img src="/site/assets/images/icons/icon_01.png" alt="icon_not_found"></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

@endsection
