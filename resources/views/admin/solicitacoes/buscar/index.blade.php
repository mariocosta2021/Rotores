@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Solicitação')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/gastos-combustivel/index') }}">Listar Solicitações</a>
                    > Cadastrar solicitação


                </b></h2>
        </div>


</div>
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
                                            {{ $viatura->modelo }}
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Matricula</b><br>
                                            {{ $viatura->matricula }}
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Quantidade de KG Suportada</b><br>
                                            {{ $viatura->quantidade }}
                                        </p>
                                    </div>
                                    <input name="fk_viaturas" hidden
                                    value="{{ $viatura->id }}">


                                </div>
                                <button onclick="getLocation()"  type="button" class="btn btn-primary">Obter endereço</button>
                                <form method="POST" action="{{ route('admin.cadastrar.store') }}" enctype="multipart/form-data">
                                    @csrf
                                <div class="col-12 mt-2">
                                    <h5 class=""><b>Informação do pagamento </b> </h5>
                                    <hr>
                                </div>

                                <div class="col-12 mb-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="text-dark">
                                                <b>Latitude </b><br>
                                                <small> <input onclick="calculard()" type="text" name="latitude" id="latitude"  value="{{ isset($client->name) ? $client->name: old('name') }}"
                                                    class="form-control border rounded" placeholder="" required> </small>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-dark">
                                                <b>Longitude</b><br>
                                                <small> <input type="text" onclick="calculard()" name="longitude" id="longitude" value="{{ isset($client->name) ? $client->name: old('name') }}"
                                                    class="form-control border rounded" placeholder="" required> </small>
                                            </p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="text-dark">
                                                <b>Quantidade de Carga</b><br>
                                                <small> <input onclick="calculard()" type="number" name="quantidadeCarga" id="quantidadeCarga" value="{{ isset($client->name) ? $client->name: old('name') }}"
                                                    class="form-control border rounded" placeholder="Quatidade" required> </small>
                                            </p>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="text-dark">
                                                <b>Valor a Pagar </b><br>
                                                <small> <input required readonly type="text" name="valorPagar" id="valorPagar" value="{{ isset($client->name) ? $client->name: old('name') }}"
                                                    class="form-control border rounded" placeholder="" required> </small>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-dark">
                                                <b>Data de Entrega </b><br>
                                                <small> <input type="date" name="EntregaData" id="EntregaData" value="{{ isset($client->name) ? $client->name: old('name') }}"
                                                    class="form-control border rounded" placeholder="" required> </small>
                                            </p>
                                        </div>
                                        <div class="col-md-5">
                                            <p class="text-dark">
                                                <b>Anexo de Pagamento </b><br>
                                                <small> <input type="file" name="anexo" id="anexo" value="{{ isset($client->name) ? $client->name: old('name') }}"
                                                    class="form-control border rounded" placeholder="" required> </small>
                                            </p>
                                        </di
                                    </div>
                                </div>


                            </div>


                            <div class="col-12 mt-2">
                                <h5 class=""><b>Outras Informações </b> </h5>
                                <hr>
                            </div>
                            <div class="col-12 mb-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-dark">
                                            <b>Informações do que vai carregar </b><br>
                                            <small>   <textarea id="editor1" name="informacaoCarga" rows="12"  class="form-control border-secondary no-resize"
                                                placeholder="Descrição do curso">                 {{ isset($multaViatura->detalhes) ? $multaViatura->detalhes : old('detalhes') }}
                                            </textarea> </small>
                                        </p>
                                    </div>


                                </div>
                            </div>
<center>
    <input name="fk_viaturas" hidden
    value="{{ $viatura->id }}">
    <button type="submit" class="btn btn-success"> <i
        class="mdi mdi-truck-fast me-1"></i> Enviar
    Solicitação</button></cente>

                        </div>



                            <div class="col-12 my-5">
                                <hr>


                            </div>
                        </div>
                    </div>

                </div>



            </div> <!-- /.col-12 -->
        </div> <!-- .row -->

        <script>
           function calculard(){
           var latitude = document.getElementById("latitude");
           var latitude = latitude.value;

           var quantidadeCarga = document.getElementById("quantidadeCarga");
           var quantidadeCarga = quantidadeCarga.value;

           var longitude = document.getElementById("longitude");
           var longitude = longitude.value;






var p1=latitude;

var  p2 =longitude;


function getDistanceFromLatLonInKm(position1, position2) {
    "use strict";
    var deg2rad = function (deg) { return deg * (Math.PI / 180); },
        R = 6371,
        dLat = deg2rad(position2.lat - position1.lat),
        dLng = deg2rad(position2.lng - position1.lng),
        a = Math.sin(dLat / 2) * Math.sin(dLat / 2)
            + Math.cos(deg2rad(position1.lat))
            * Math.cos(deg2rad(position1.lat))
            * Math.sin(dLng / 2) * Math.sin(dLng / 2),
        c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    return ((R * c *1000).toFixed());
}

var distancia = (getDistanceFromLatLonInKm(
   {lat: -8.8351219, lng: 13.2745593},
   {lat: p1, lng: p2}
));

valorPagar=(distancia*10)+3000;
console.log(valorPagar);


document.getElementById('valorPagar').value =valorPagar;}



function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{x.innerHTML="O seu navegador não suporta Geolocalização.";}
  }
function showPosition(position)
  {


document.getElementById('latitude').value =position.coords.latitude;
document.getElementById('longitude').value =position.coords.longitude;

var latitude = document.getElementById("latitude");
           var latitude = latitude.value;

           var quantidadeCarga = document.getElementById("quantidadeCarga");
           var quantidadeCarga = quantidadeCarga.value;

           var longitude = document.getElementById("longitude");
           var longitude = longitude.value;






var p1=latitude;

var  p2 =longitude;


function getDistanceFromLatLonInKm(position1, position2) {
    "use strict";
    var deg2rad = function (deg) { return deg * (Math.PI / 180); },
        R = 6371,
        dLat = deg2rad(position2.lat - position1.lat),
        dLng = deg2rad(position2.lng - position1.lng),
        a = Math.sin(dLat / 2) * Math.sin(dLat / 2)
            + Math.cos(deg2rad(position1.lat))
            * Math.cos(deg2rad(position1.lat))
            * Math.sin(dLng / 2) * Math.sin(dLng / 2),
        c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    return ((R * c *1000).toFixed());
}

var distancia = (getDistanceFromLatLonInKm(
   {lat: -8.8351219, lng: 13.2745593},
   {lat: p1, lng: p2}
));

valorPagar=(distancia*10)+3000;
console.log(valorPagar);


document.getElementById('valorPagar').value =valorPagar;
  }
            </script>
     </form>
    @endsection
