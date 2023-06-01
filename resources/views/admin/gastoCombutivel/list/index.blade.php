@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Gastos de Combustível ')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Gastos de Combustível </b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.gastosCombustivel.create') }}" class="btn btn-primary">Cadastrar</a>

                    </div>
                    <a href="{{ route('admin.gastosCombustivel.relatorio') }}" >
                        <i class="fa fa-file-pdf-o text-white"></i>Imprimir Relatório
                    </a>
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
                        <th>Cadastrado por</th>
                        <th>Valor do gasto</th>

                                <th>ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gastosCombustivel as $item)
                                <tr class="text-center text-dark">
                                    <td>{{ $item->id }} </td>
                                    <td>{{ $item->viaturas->modelo }} </td>
                                    <td>{{ $item->viaturas->matricula }} </td>
                                    <td>{{ $item->viaturas->quantidade }} </td>
                                    <td>{{ $item->usuarios->name }} </td>
                                    <td> {!! number_format($item->gastos, 2, ',', '.') . ' ' . 'KZ' !!} </td>

                                    <td>
                                        <a href='{{ url("admin/gastos-combustivel/show/{$item->id}") }}' type="button"
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
