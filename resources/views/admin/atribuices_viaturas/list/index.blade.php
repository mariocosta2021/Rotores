
@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Atribuições de Viaturas ')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Atribuições de Viaturas</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.atribuicoes.create') }}" class="btn btn-primary">Cadastrar</a>
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
                                <th>#</th>
                                <th>Modelo</th>
                                <th>Matricula</th>
                                <th>Carga Suportada</th>
                                <th>Motorista</th>
                                <th>telefone</th>


                                <th class="text-left">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($atribucoesViaturas as $item)
                                <tr class="text-center text-dark">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->viaturas->modelo }} </td>
                                    <td>{{ $item->viaturas->matricula }} </td>
                                    <td>{{ $item->viaturas->quantidade }} </td>
                                    <td>{{ $item->usuarios->name }} </td>
                                    <td>{{ $item->usuarios->telefone }} </td>

                                    <td>
                                        <a href='{{ url("admin/atribuices-viaturas/show/{$item->id}") }}' type="button"
                                            class="btn btn-icons btn-rounded btn-primary">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
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
