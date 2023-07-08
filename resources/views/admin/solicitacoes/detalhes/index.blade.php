@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da solicitação')

@section('content')
    <div class="card mb-2">


        <div class="card-body">
            <h2 class="h5 page-title"><b>
                <a href="{{ url('admin/Atribuições de Viatura/index') }}">Listar Atribuições de Viatura</a>
                >  Detalhes da solicitação Nº {{ $atribucoesViatura->id }}


            </b></h2>
            @if (Auth::user()->level == 'Administrador')
            <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST" enctype="multipart/form-data"
            action="{{ route('admin.solicitacoes.update', $atribucoesViatura->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group col-md-4">
                <label for="level">Editar Status</label>
                <select name="status" id="status" class="form-control" required>
                    @if (isset($atribucoesViatura->status))
                        <option value="{{ $atribucoesViatura->status }}" class="text-primary h5" selected>
                            {{ $atribucoesViatura->status }}
                        </option>
                    @else
                        <option disabled selected>selecione o nivel de acesso</option>
                    @endif


                    <option value="Pendente">Pendente</option>
                    <option value="Pago">Pago</option>
                    <option value="Negado">Negado</option>


                </select>
                <button type="Submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
            @endif
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
                                            <small> {{ $atribucoesViatura->viaturas->modelo }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Matricula</b><br>
                                            <small> {{ $atribucoesViatura->viaturas->matricula }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Quantidade de KG Suportada</b><br>
                                            <small>{{ $atribucoesViatura->viaturas->quantidade }} </small>
                                        </p>
                                    </div>


                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Imagem da Viatura</b><br>

                                            <small> <a target="_blank"  href="/storage/{{ $atribucoesViatura->viaturas->imagem_viatura }}">Vizualizar Viatura</a> </small>


                                        </p>
                                    </div>


                                </div>
                            <div class="col-12 mt-2">
                                <h5 class=""><b>Informações do Cliente </b> </h5>
                                <hr>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Nome do Motorista</b><br>
                                            <small> {{ $atribucoesViatura->usuarios->name }}</small>
                                        </p>
                                    </div>



                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Email</b><br>
                                            <small> {{ $atribucoesViatura->usuarios->email }}</small>
                                        </p>
                                    </div>


                                </div>
                            </div>


                            </div>

                            <div class="col-12 mt-2">
                                <h5 class=""><b>Informações do pagamento</b> </h5>
                                <hr>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Latitude</b><br>
                                            <small> {{ $atribucoesViatura->latitude }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Longitude</b><br>
                                            <small>{{ $atribucoesViatura->longitude }} </small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Quantidade de Carga</b><br>
                                            <small> {{ $atribucoesViatura->quantidadeCarga }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>  Valor a Pagar</b><br>
                                            <small> {!! number_format($atribucoesViatura->valorPagar, 2, ',', '.') . ' ' . 'KZ' !!}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>

                                                Data de Entrega</b><br>
                                            <small> {{ $atribucoesViatura->Entrega }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>

                                                Anexo de Pagamento</b><br>
                                            <small class="d-none"> <a target="_blank" href="/storage/{{  $atribucoesViatura->anexo}}">Baixar Comprovativa</a></small> <br>
                                            <small> <a target="_blank" href="{{asset('comprovativo_20230706_182136_4102414722_signed.pdf')}}">Baixar Comprovativa</a></small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>

                                                Status</b><br>
                                            <small> {{ $atribucoesViatura->status }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>

                                                Informações do que vai carregar</b><br>
                                            <small> {{ $atribucoesViatura->informacaoCarga }}</small>
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
                                            {{ $atribucoesViatura->created_at }}
                                        </small><br>
                                        <small class="mb-1 text-dark">
                                            <b>Última Actualização:</b>
                                            {{ $atribucoesViatura->updated_at }}
                                        </small>
                                    </div>
                                    <div class="col-md-4 text-dark text-right">

                                        <br>

                                        <a
                                            href='{{ url("admin/solicitacoes-viaturas/delete/{$atribucoesViatura->id}") }}'
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
