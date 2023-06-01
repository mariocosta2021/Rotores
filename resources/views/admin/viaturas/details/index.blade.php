@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da Viatura')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                <a href="{{ url('admin/viaturas/index') }}">Listar viaturas</a>
                >  Detalhes  da Viatura - {{ $Viatura->modelo }}


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
                                <h5 class=""><b>Informações da Viatura </b> </h5>
                                <hr>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Matricula</b><br>
                                            <small> {{ $Viatura->matricula }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Modelo</b><br>
                                            <small> {{ $Viatura->modelo }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Carga Suportada</b><br>
                                            <small> {{ $Viatura->quantidade }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">

                                            <b>Imagem</b><br>
                                           <img src="">
                                            <small> <a target="_blank" href="/storage/{{ $Viatura->imagem_viatura }}">anexo</a> </small>
                                        </p>
                                    </div>


                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <h5 class=""><b>Detalhes da Viatura </b> </h5>
                                <hr>
                                {{ $Viatura->descricao }}
                            </div>

                            {{--
                                nameSoftware');
            $table->string('category');
            $table->longText('description');
                                --}}








                            <div class="col-12 my-5">
                                <hr>
                                <div class="row">


                                    <div class="col-md-8">
                                        <small class="mb-1 text-dark">
                                            <b>Data de Cadastro:</b>
                                            {{ $Viatura->created_at }}
                                        </small><br>
                                        <small class="mb-1 text-dark">
                                            <b>Última Actualização:</b>
                                            {{ $Viatura->updated_at }}
                                        </small>
                                    </div>
                                    <div class="col-md-4 text-dark text-right">

                                        <br>

                                        <a  href='
                                        {{ url("admin/viaturas/delete/{$Viatura->id}") }}'
                                            class="text-danger" onclick="deleteElemto({{$Viatura->id  }})">
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
    </div> <!-- .container-fluid -->

    <script>
        function deleteElemto(id){
            if(confirm("a apgar")){

});

            }

    </script>
@endsection
