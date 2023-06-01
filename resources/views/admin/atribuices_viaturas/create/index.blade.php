@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro De Atribuçoes Viaturas')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form  enctype="multipart/form-data"  method="POST" action="{{ route('admin.atribuicoes.store') }}" >
                    @csrf

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body bg-light">
                    <h4 class="card-title"><b>
                        <a href="{{ url('admin/atribuices-viaturas/index') }}">Listar Atribuçoes  Viaturas</a>
                > Cadastro  de Atribuçoes  Viaturas
                     </b></h4>
                    <hr>
                    @include('forms._formAtribuices_viaturas.index')
                </div>





                <div class="card-body bg-light">
                    <div class="col-md-12">
                        <div class="form-group text-center">
                            <button type="submit" class="btn px-5 col-md-4 btn-primary">
                                Salvar
                            </button>
                        </div>
                    </div>
                </div>

            </form>
            </div>
        </div>

    </div>


@endsection
