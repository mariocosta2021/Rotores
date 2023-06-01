<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/dashboard/bootstrap.min.css">
    <title>Relatório de Solitações De Viaturas - {{ date('d-m-Y') }}</title>
</head>

<body >

    <header class="col-12 mt-2 mb-5">


        <p>
        <h2 class="text-center">Relatório de Solitações De Viaturas</h2>

        <b>Data:</b> {{ date('d-m-Y') }}<br>
        <b>Total somado:</b> {!! number_format($total, 2, ',', '.') . ' ' . 'KZ' !!}<br>
        </p>
    </header>

    <section class="col-12">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">

                    <th>Cliente</th>
                    <th>Quantidade Carga</th>

                    <th>Valor a Pagar</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($solicacoes as $item)
                    <tr class="text-center text-dark">
                        <td>{{ $item->usuarios->name }} </td>


                        <td>{{ $item->quantidadeCarga }} </td>
                        <td> {!! number_format($item->valorPagar, 2, ',', '.') . ' ' . 'KZ' !!}  </td>

                        <td>{{ $item->status }} </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>


</body>

</html>
