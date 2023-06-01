@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Utilizador')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h4 mb-4 page-title">{{ $user->name }}</h2>
                        <div class="row mt-5 align-items-center">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="{{ $user->photo }}" alt="profile image" width="200">
                                <div class="wrapper ps-2 mx-5">
                                    <p class="mb-0 text-gray">Email: {{ $user->email }}</p>
                                    <p class="mb-0 text-gray">Data de Criação: {{ $user->created_at }}</p>
                                    <small class="mb-0 text-muted">{{ $user->level }}</small>
                                </div>
                            </div>
                            <div class="col-md-3 text-center mb-5">
                                <div class=" ml-5" style="height: 150px; width:150px;">
                                    <img src="" alt="">
                                </div>
                            </div>

                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>
@endsection
