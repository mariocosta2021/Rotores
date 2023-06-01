<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/dashboard/bootstrap.min.css">
    <title>Relatório de Multa de Viaturas - {{ date('d-m-Y') }}</title>
</head>

<body >

    <header class="col-12 mt-2 mb-5">


        <p>
        <h2 class="text-center">Relatório de Multa de Viaturas</h2>

        <b>Data:</b> {{ date('d-m-Y') }}<br>
        <b>Total somado:</b> {!! number_format($total, 2, ',', '.') . ' ' . 'KZ' !!}<br>
        </p>
    </header>

    <section class="col-12">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">


                    <th>Modelo</th>
                    <th>Matricula</th>
                    <th>Valor da Multa</th>
                    <th>Motorista</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($multaviaturas as $item)
                    <tr class="text-center text-dark">
                        <td>{{ $item->viaturas->modelo }} </td>
                        <td>{{ $item->viaturas->matricula }} </td>
                        <td> {!! number_format($item->valoMulta, 2, ',', '.') . ' ' . 'KZ' !!}  </td>
                        <td>{{ $item->usuarios->name }} </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>


</body>

</html>
