@extends('layouts.merge.dashboard')
@section('titulo', 'Dashboard')
@section('content')
@if('Administrador' == Auth::user()->level)
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                            <div class="wrapper">
                                <h3 class="mb-0 font-weight-semibold">{{ $Administrador }}</h3>
                                <h5 class="mb-0 font-weight-medium text-primary">Utilizadores</h5>
                                <p class="mb-0 text-muted">%</p>
                            </div>
                            <div class="wrapper my-auto ml-auto ml-lg-4">
                                <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                            <div class="wrapper">
                                <h3 class="mb-0 font-weight-semibold">{{ $motorista }}</h3>
                                <h5 class="mb-0 font-weight-medium text-primary">Motoristas</h5>
                                <p class="mb-0 text-muted">%</p>
                            </div>
                            <div class="wrapper my-auto ml-auto ml-lg-4">
                                <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                            <div class="wrapper">
                                <h3 class="mb-0 font-weight-semibold"> {{ $viatura }}</h3>
                                <h5 class="mb-0 font-weight-medium text-primary">Viaturas </h5>
                                <p class="mb-0 text-muted">%</p>
                            </div>
                            <div class="wrapper my-auto ml-auto ml-lg-4">
                                <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                            <div class="wrapper">
                                <h3 class="mb-0 font-weight-semibold">{{ $Cliente }}</h3>
                                <h5 class="mb-0 font-weight-medium text-primary">Clientes</h5>
                                <p class="mb-0 text-muted">%</p>
                            </div>
                            <div class="wrapper my-auto ml-auto ml-lg-4">
                                <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif



    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">

                        @if ('Administrador' == Auth::user()->level || 'Motorista' == Auth::user()->level)
                        Estatistica de Solitações de Viaturas
                        <a href="{{ route('admin.solicitacoes.relatorio') }}" >
                            <i class="fa fa-file-pdf-o text-white"></i>Imprimir Relatório</a>
                        @else
Minhas solicitações
                        @endif
                       </h4>
                    <div class="d-flex flex-column flex-lg-row">

                    </div>

                    <div class="card-options" align="left">
                        <h6 align="right"> Total Parcial: {!! number_format($valorPago, 2, ',', '.') . ' ' . 'KZ' !!} </h6>
                    </div>
                    <div class="d-flex flex-column flex-lg-row">

                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas height="300" id="myChart1" style="height:10%; width:0cm "></canvas>
                </div>
            </div>
        </div>

    </div>


    <script src="/dashboard/chart.min.js"></script>
    <script>
        var jan = JSON.parse('<?php echo $jan; ?>');

        var fev = JSON.parse('<?php echo $fev; ?>');
        var mar = JSON.parse('<?php echo $mar; ?>');
        var abr = JSON.parse('<?php echo $abr; ?>');
        var maio = JSON.parse('<?php echo $maio; ?>');
        var jun = JSON.parse('<?php echo $jun; ?>');
        var jul = JSON.parse('<?php echo $jul; ?>');
        var ago = JSON.parse('<?php echo $ago; ?>');
        var set = JSON.parse('<?php echo $set; ?>');
        var out = JSON.parse('<?php echo $out; ?>');
        var nov = JSON.parse('<?php echo $nov; ?>');
        var dez = JSON.parse('<?php echo $dez; ?>');
        const ctx = document.getElementById('myChart1').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',

            data: {
                labels: ['Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Ago', 'Setembro',
                    'Outubro', 'Novembro', 'Dezembro'
                ],
                datasets: [{
                    label: 'Solicitações',
                    data: [jan, fev, mar, abr, maio, jun, jul, ago, set, out, nov, dez],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(254, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(254, 159, 64, 0.2)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection
