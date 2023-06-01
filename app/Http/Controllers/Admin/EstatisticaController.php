<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GastosCombustivel;
use App\Models\MultaViatura;

use Illuminate\Http\Request;

class EstatisticaController extends Controller
{
    public function combustivel()
    {
        $response['valorPago'] = GastosCombustivel::sum('gastos');

        $jan = GastosCombustivel::whereMonth('created_at', '=', 01)->count();
        $response['jan'] = json_encode($jan);


        $fev = GastosCombustivel::whereMonth('created_at', '=', 02)->count();

        $response['fev'] = json_encode($fev);

        $mar = GastosCombustivel::whereMonth('created_at', '=', 03)->count();
        $response['mar'] = json_encode($mar);

        $abr = GastosCombustivel::whereMonth('created_at', '=', 04)->count();
        $response['abr'] = json_encode($abr);
        $maio = GastosCombustivel::whereMonth('created_at', '=', 05)->count();
        $response['maio'] = json_encode($maio);

        $jun = GastosCombustivel::whereMonth('created_at', '=', 06)->count();
        $response['jun'] = json_encode($jun);
        $jul = GastosCombustivel::whereMonth('created_at', '=', 07)->count();
        $response['jul'] = json_encode($jul);
        $ago = GastosCombustivel::whereMonth('created_at', '=', '08')->count();
        $response['ago'] = json_encode($ago);
        /**d */
        $set = GastosCombustivel::whereMonth('created_at', '=', '09')->count();
        $response['set'] = json_encode($set);

        $out = GastosCombustivel::whereMonth('created_at', '=', '10')->count();
        $response['out'] = json_encode($out);
        $nov = GastosCombustivel::whereMonth('created_at', '=', 11)->count();
        $response['nov'] = json_encode($nov);
        $dez = GastosCombustivel::whereMonth('created_at', '=', 12)->count();
        $response['dez'] = json_encode($dez);
        return view('admin.estatistica.combustivel.index', $response);

    }

    public function multa(){
        $response['valorPago'] = MultaViatura::sum('valoMulta');

        $jan = MultaViatura::whereMonth('created_at', '=', 01)->count();
        $response['jan'] = json_encode($jan);


        $fev = MultaViatura::whereMonth('created_at', '=', 02)->count();

        $response['fev'] = json_encode($fev);

        $mar = MultaViatura::whereMonth('created_at', '=', 03)->count();
        $response['mar'] = json_encode($mar);

        $abr = MultaViatura::whereMonth('created_at', '=', 04)->count();
        $response['abr'] = json_encode($abr);
        $maio = MultaViatura::whereMonth('created_at', '=', 05)->count();
        $response['maio'] = json_encode($maio);

        $jun = MultaViatura::whereMonth('created_at', '=', 06)->count();
        $response['jun'] = json_encode($jun);
        $jul = MultaViatura::whereMonth('created_at', '=', 07)->count();
        $response['jul'] = json_encode($jul);
        $ago = MultaViatura::whereMonth('created_at', '=', '08')->count();
        $response['ago'] = json_encode($ago);
        /**d */
        $set = MultaViatura::whereMonth('created_at', '=', '09')->count();
        $response['set'] = json_encode($set);

        $out = MultaViatura::whereMonth('created_at', '=', '10')->count();
        $response['out'] = json_encode($out);
        $nov = MultaViatura::whereMonth('created_at', '=', 11)->count();
        $response['nov'] = json_encode($nov);
        $dez = MultaViatura::whereMonth('created_at', '=', 12)->count();
        $response['dez'] = json_encode($dez);
        return view('admin.estatistica.multa.index', $response);

    }
}
