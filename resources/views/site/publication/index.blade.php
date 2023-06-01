@extends('layouts.merge.site')
@section('titulo', ' Publicações')
@section('content')

    <main id="main">
        <div class="header-bg5 page-area">
            <div class="home-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="height: 70vh !important;">
                        <div class="slider-content text-center">
                            <div class="header-bottom">
                                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding" style="margin: 0 auto !important;">
            <div class="container">
                <div class="row">

                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="section-headline text-center">
                            <h2>Publicações</h2>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="well-middle">
                            <div class="single-well">
                                <h4 class="sec-head">Pode consultar e descarregar aqui documentos relevantes: </h4>
                                <p>
                                    <b> Publicações </b>
                                </p>
                                <ul>



                                    <tr>
                                        @foreach ($publications as $item)
                                            <div <td style="width: 700px;"><a href="/storage/{{ $item->file }}"
                                                    target="_blank"><i class="fa fa-check"></i>{{ $item->title }}</a>
                                                </td>
                                                <td
                                                    style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">

                                                </td>
                                            </div>
                                        @endforeach
                                    </tr>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End col-->

                </div>
            </div>
        </div>
        <!-- End About Section -->

    </main>
@endsection
