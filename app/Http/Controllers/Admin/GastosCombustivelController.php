<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GastosCombustivel;
use App\Models\User;
use App\Models\Viatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class GastosCombustivelController extends Controller
{


    public function relatorio(){
        $response['gastosCombustivel'] = GastosCombustivel::with('viaturas')->with('usuarios')->get();
        $response['total'] = GastosCombustivel::with('viaturas')->with('usuarios')->sum('gastos');
        $pdf = PDF::loadview('pdf.combustivel.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');

    }
    public function index()
    {
        $Response['gastosCombustivel'] = GastosCombustivel::with('viaturas')->with('usuarios')->get();

        return view('admin.gastoCombutivel.list.index', $Response);
    }


    public function show($id)
    {
        $response['atribucoesViatura']=GastosCombustivel::with('viaturas')->with('usuarios')->find($id);

        return view('admin.gastoCombutivel.details.index',$response);
    }
    public function create()
    {
        $response['viaturas'] = Viatura::get();
        return view('admin.gastoCombutivel.create.index', $response);
    }


    public function store(Request $request)
    {
        $validation = $request->validate([

            'fk_viaturas' => 'required|numeric|min:1',
            'gastos' => 'required|numeric|',
        ]);
        GastosCombustivel::create([
            'fk_user' => Auth::user()->id,
            'fk_viaturas' => $request->fk_viaturas,
            'gastos' => $request->gastos,
        ]);

        return redirect("admin/gastos-combustivel/index")->with('create', '1');
    }


    public function edit($id)
    {
        $response['gastos'] = GastosCombustivel::find($id);
        $response['viaturas'] = Viatura::get();
        return view('admin.gastoCombutivel.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'gastos' => 'required|numeric|',

        ]);


        GastosCombustivel::find($id)->update([
            'fk_user' => Auth::user()->id,
            'fk_viaturas' => $request->fk_viaturas,
            'gastos' => $request->gastos,

        ]);
        return redirect("admin/gastos-combustivel/index")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GastosCombustivel::find($id)->delete();
        return redirect('admin/gastos-combustivel/index')->with('destroy', '1');
    }
}
