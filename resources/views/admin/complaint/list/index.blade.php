@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Denúncias')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Lista de Denúncias
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>TELEFONE</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($complaints as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }} </td>
                            <td>{{ $item->email }} </td>
                            <td>{{ $item->phone }} </td>


                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-dark btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/denucias/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>



                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection
