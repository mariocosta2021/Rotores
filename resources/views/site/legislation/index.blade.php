@extends('layouts.merge.site')
@section('titulo', 'Legislação')
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
                            <h1>Legislação</h1>
                        </div>
                    </div>

                </div>

                @if ($legislations)
                    <div class="container">

                        <div class="col-md-12 mb-5">

                            <p class="text-dark">
                                @foreach ($legislations as $item)
                                    @if ($item->legislation == 'Constituição Da República De Angola')
                                        <br>
                                        <a href="/storage/{{ $item->file }}" class="text-dark mb-2" target="_blank">
                                            <i class="lni lni-arrow-right"></i>
                                            <u>{{ $item->title }}</u>
                                        </a>
                                    @endif
                                @endforeach


                            <h4 class="my-3">Legislação Eleitoral</h4>
                            @foreach ($legislations as $item)
                                @if ($item->legislation == 'Legislação Eleitoral')
                                    <br>
                                    <a href="/storage/{{ $item->file }}" class="text-dark mb-2" target="_blank">
                                        <i class="lni lni-arrow-right"></i>
                                        <u>{{ $item->title }}</u>
                                    </a>
                                @endif
                            @endforeach

                            <h4 class="my-3">Legislação Complementar</h4>
                            @foreach ($legislations as $item)
                                @if ($item->legislation == 'Legislação Complementar')
                                    <br>
                                    <a href="/storage/{{ $item->file }}" class="text-dark mb-2" target="_blank">
                                        <i class="lni lni-arrow-right"></i>
                                        <u>{{ $item->title }}</u>
                                    </a>
                                @endif
                            @endforeach

                            </p>
                        </div>

                    </div>
                @endif
            </div>
        </div>
        <!-- End About Section -->
    </main>
@endsection
