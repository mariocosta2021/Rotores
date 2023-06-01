@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de  Viaturas')

@section('content')
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de  Viaturas</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.viaturas.create') }}" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable-1" class="table table-striped table-bordered mb-3">
                            <thead class="bg-primary thead-dark">
                                <tr class="text-center">
                                    <th>Modelo</th>
                                    <th>Matricula</th>
                                    <th>Carga Suportada</th>
                                    <th>DATA DE CRIAÇÃO</th>
                                    <th>ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($viaturas as $item)
                                    <tr class="text-center text-dark">

                                        <td>{{ $item->modelo }} </td>
                                        <td>{{ $item->matricula }} </td>
                                        <td>{{ $item->quantidade }} </td>
                                        <td>{{ $item->created_at }} </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary text-white btn-sm dropdown-toggle"
                                                    type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-navicon text-white" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a href='{{ url("admin/viaturas/show/{$item->id}") }}'
                                                        class="dropdown-item">Detalhes
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
