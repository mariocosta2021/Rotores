@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes  de Multa de Viaturas')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                <a href="{{ url('admin/multas-viatura/index') }}">Lista de Multa de Viaturas</a>
                >  Detalhes de Multa de Viaturas Nº {{ $multa->id }}


            </b></h2>
        </div>
    </div>


    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="row  align-items-center">


                            <div class="col-12 mt-2">
                                <h5 class=""><b> Detalhes da viatura </b> </h5>
                                <hr>
                            </div>

                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b> Modelo</b><br>
                                            <small> {{ $multa->viaturas->modelo }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Matricula</b><br>
                                            <small> {{ $multa->viaturas->matricula }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Quantidade de KG Suportada</b><br>
                                            <small>{{ $multa->viaturas->quantidade }} </small>
                                        </p>
                                    </div>


                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Imagem da Viatura</b><br>

                                            <small> <a target="_blank" href="/storage/{{ $multa->viaturas->imagem_viatura }}">Anexo</a> </small>


                                        </p>
                                    </div>


                                </div>
                            <div class="col-12 mt-2">
                                <h5 class=""><b>Informações do Motorista </b> </h5>
                                <hr>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Nome do Motorista</b><br>
                                            <small> {{ $multa->usuarios->name }}</small>
                                        </p>
                                    </div>


                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Email</b><br>
                                            <small> {{ $multa->usuarios->email }}</small>
                                        </p>
                                    </div>


                                </div>
                            </div>


                            </div>

                            <div class="col-12 mt-2">
                                <h5 class=""><b>Informações da Multa</b> </h5>
                                <hr>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b> Valor da Multa</b><br>
                                            <small>  {!! number_format($multa->valoMulta, 2, ',', '.') . ' ' . 'KZ' !!}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Descrição da Multa</b><br>
                                            <small>{{ $multa->detalhes }} </small>
                                        </p>
                                    </div>



                                </div>
                            </div>


                            </div>



                            <div class="col-12 my-5">
                                <hr>
                                <div class="row">


                                    <div class="col-md-8">
                                        <small class="mb-1 text-dark">
                                            <b>Data de Cadastro:</b>
                                            {{ $multa->created_at }}
                                        </small><br>
                                        <small class="mb-1 text-dark">
                                            <b>Última Actualização:</b>
                                            {{ $multa->updated_at }}
                                        </small>
                                    </div>
                                    <div class="col-md-4 text-dark text-right">

                                        <br>

                                        <a
                                            href='{{ url("admin/multas-viatura/delete/{$multa->id}") }}'
                                            class="text-danger">
                                            <i class="fa fa-trash"></i>
                                            Eliminar
                                        </a>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>





            </div> <!-- /.col-12 -->
        </div> <!-- .row -->



    @endsection
