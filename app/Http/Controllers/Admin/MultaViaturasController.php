<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MultaViatura;
use App\Models\User;
use App\Models\Viatura;
use Illuminate\Http\Request;
use PDF;
class MultaViaturasController extends Controller
{

public function relatorio(){
    $response['multaviaturas']=MultaViatura::with('viaturas','usuarios')->get();
    $response['total']=MultaViatura::with('viaturas','usuarios')->sum('valoMulta');
    $pdf = PDF::loadview('pdf.multas.index', $response);
    return $pdf->setPaper('a4')->stream('pdf');

}

    public function index()
    {
 $response['multaviaturas']=MultaViatura::with('viaturas','usuarios')->get();
 return view('admin.multasViaturas.list.index',$response);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['viaturas'] = Viatura::get();
        $response['motoristas'] = User::where('level', '=', 'Motorista')->get();
        return view('admin.multasViaturas.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fk_user' => 'required|numeric|min:1',
            'fk_viaturas' => 'required|numeric|min:1',
            'detalhes' => 'required|',
            'valorMulta' => 'required|numeric',
        ]);


        MultaViatura::create([
            'fk_user' => $request->fk_user,
            'fk_viaturas' => $request->fk_viaturas,
            'detalhes' => $request->detalhes,
            'valoMulta' => $request->valorMulta,

        ]);
        return redirect("admin/multas-viaturas/index")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['multa']=MultaViatura::with('viaturas')->with('usuarios')->find($id);

        return view('admin.multasViaturas.details.index',$response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['multaViatura'] = MultaViatura::find($id);
        $response['viaturas'] = Viatura::get();
        $response['motoristas'] = User::where('level', '=', 'Motorista')->get();
        return view('admin.multasViaturas.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'detalhes' => 'required|',
            'valorMulta' => 'required|numeric']);

            MultaViatura::find($id)->update([
            'fk_user' => $request->fk_user,
            'fk_viaturas' => $request->fk_viaturas,
            'detalhes' => $request->detalhes,
            'valoMulta' => $request->valorMulta,  ]);
            return redirect("admin/multas-viaturas/index")->with('edit', '1');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MultaViatura::find($id)->delete();
        return redirect('admin/multas-viaturas/index')->with('destroy', '1');
    }
}
