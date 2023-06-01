@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Atribuições de viaturas')
@section('content')
<div class="row">
    @foreach ($viatura_desponivel as $item)
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex" style='background-image:url("/storage/{{ $item->imagem_viatura }}");background-position:center;background-size:cover;height:200px;width=500px'>
                        <div class="flex-shrink-0 me-4" >
                            <div class="avatar-md">
                                <span class="avatar-title rounded-circle bg-light text-danger font-size-16">

                                </span>

                            </div>
                        </div>


                        <div class="flex-grow-1 overflow-hidden" >
                            <h5 class="text-truncate font-size-15"><a href="show/{{ $item->id }}" class="text-dark">{{ $item->modelo }}</a></h5>
                            <p class="text-muted mb-4"> </p>
                            <div class="avatar-group">
                                <div class="avatar-group-item">
                                    <a href="show/{{ $item->id }}" class="d-inline-block">

                                    </a>
                                </div>

                                <div class="avatar-group-item"  >
                                    <a href="show/{{ $item->id }}" class="d-inline-block">

                                    </a>
                                </div>

                                <div class="avatar-group-item" >
                                    <a href="show/{{ $item->id }}" class="d-inline-block">
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-success text-white font-size-16">

                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="avatar-group-item">
                                    <a href="show/{{ $item->id }}" class="d-inline-block">
                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="show/{{ $item->id }}">  {!! html_entity_decode(mb_substr($item->descricao, 0, 200, 'UTF-8')) !!}...</a>


                    </div>

                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-3">
                            <span class="badge bg-success">Quantidade de Carga :</span>
                        </li>
                        <li class="list-inline-item me-3">
                            <i class= "bx bx-calendar me-1"></i> {{ $item->quantidade }} KG
                        </li>

                    </ul>
                </div>
            </div>
        </div>


    @endforeach


</div>

@endsection
