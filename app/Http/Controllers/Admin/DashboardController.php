<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Solicacoes;
use App\Models\Video;
use App\Models\User;
use App\Models\Viatura;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if( Auth::user()->level=='Administrador' || Auth::user()->level=='Motorista' ){
            $response['motorista']=User::where('level','=','Motorista')->count();
            $response['Administrador']=User::where('level','=','Administrador')->count();
            $response['viatura']=Viatura::count();
            $response['Cliente']=User::where('level','=','Cliente')->count();

            $response['valorPago'] = Solicacoes::where('status','=','Pago')->sum('valorPagar');

            $jan = Solicacoes::whereMonth('created_at', '=', 01)->count();
            $response['jan'] = json_encode($jan);


            $fev = Solicacoes::whereMonth('created_at', '=', 02)->count();

            $response['fev'] = json_encode($fev);

            $mar = Solicacoes::whereMonth('created_at', '=', 03)->count();
            $response['mar'] = json_encode($mar);

            $abr = Solicacoes::whereMonth('created_at', '=', 04)->count();
            $response['abr'] = json_encode($abr);
            $maio = Solicacoes::whereMonth('created_at', '=', 05)->count();
            $response['maio'] = json_encode($maio);

            $jun = Solicacoes::whereMonth('created_at', '=', 06)->count();
            $response['jun'] = json_encode($jun);
            $jul = Solicacoes::whereMonth('created_at', '=', 07)->count();
            $response['jul'] = json_encode($jul);
            $ago = Solicacoes::whereMonth('created_at', '=', '08')->count();
            $response['ago'] = json_encode($ago);
            /**d */
            $set = Solicacoes::whereMonth('created_at', '=', '09')->count();
            $response['set'] = json_encode($set);

            $out = Solicacoes::whereMonth('created_at', '=', '10')->count();
            $response['out'] = json_encode($out);
            $nov = Solicacoes::whereMonth('created_at', '=', 11)->count();
            $response['nov'] = json_encode($nov);
            $dez = Solicacoes::whereMonth('created_at', '=', 12)->count();
            $response['dez'] = json_encode($dez);
        }

        else{


            $response['valorPago'] = Solicacoes::where('status','=','Pago')->where('fk_user',Auth::user()->id)->sum('valorPagar');

            $jan = Solicacoes::where('fk_user',Auth::user()->id)->whereMonth('created_at', '=', 01)->count();
            $response['jan'] = json_encode($jan);


            $fev = Solicacoes::where('fk_user',Auth::user()->id)->whereMonth('created_at', '=', 02)->count();

            $response['fev'] = json_encode($fev);

            $mar = Solicacoes::where('fk_user',Auth::user()->id)->whereMonth('created_at', '=', 03)->count();
            $response['mar'] = json_encode($mar);

            $abr = Solicacoes::whereMonth('created_at', '=', 04)->count();
            $response['abr'] = json_encode($abr);
            $maio = Solicacoes::where('fk_user',Auth::user()->id)->whereMonth('created_at', '=', 05)->count();
            $response['maio'] = json_encode($maio);

            $jun = Solicacoes::where('fk_user',Auth::user()->id)->whereMonth('created_at', '=', 06)->count();
            $response['jun'] = json_encode($jun);
            $jul = Solicacoes::where('fk_user',Auth::user()->id)->whereMonth('created_at', '=', 07)->count();
            $response['jul'] = json_encode($jul);
            $ago = Solicacoes::where('fk_user',Auth::user()->id)->whereMonth('created_at', '=', '08')->count();
            $response['ago'] = json_encode($ago);
            /**d */
            $set = Solicacoes::where('fk_user',Auth::user()->id)->whereMonth('created_at', '=', '09')->count();
            $response['set'] = json_encode($set);

            $out = Solicacoes::where('fk_user',Auth::user()->id)->whereMonth('created_at', '=', '10')->count();
            $response['out'] = json_encode($out);
            $nov = Solicacoes::where('fk_user',Auth::user()->id)->whereMonth('created_at', '=', 11)->count();
            $response['nov'] = json_encode($nov);
            $dez = Solicacoes::whereMonth('created_at', '=', 12)->count();
            $response['dez'] = json_encode($dez);
        }

        return view('admin.home.index',$response);
    }
}
