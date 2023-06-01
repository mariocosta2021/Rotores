@extends('layouts.merge.dashboard')
@section('titulo', 'Fábrica de Softwares')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">

                    <form  method="POST" action="{{ route('admin.viaturas.store') }}"     enctype="multipart/form-data">
                        @csrf
                    <div class="card-body bg-light">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h4 class="card-title"><b>
                            <a href="{{ route('admin.viaturas.index') }}}">Listar Viaturas</a>
                >Cadastrar Viaturas
                        </b></h4>
                        <hr>
                        @include('forms._formviaturas.index')
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
