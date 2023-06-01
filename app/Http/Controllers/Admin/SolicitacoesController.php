<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Atribucoesviatura;
use App\Models\Solicacoes;
use App\Models\Viatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
class SolicitacoesController extends Controller
{


    public function relatorio(){
        $response['solicacoes'] = Solicacoes::with('viaturas', 'usuarios')->get();
        $response['total']= Solicacoes::with('viaturas', 'usuarios')->sum('valorPagar');
        $pdf = PDF::loadview('pdf.solicitacoes.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
    }
    public function index()
    {

        if (Auth::user()->level == "Administrador") {
            $response['solicacoes'] = Solicacoes::with('viaturas', 'usuarios')->get();
        } else {
            $response['solicacoes'] = Solicacoes::with('viaturas', 'usuarios')->where('fk_user', Auth::user()->id)->get();
        }
        return view('admin.solicitacoes.listaSolitacoes.index', $response);
    }

    public function cadastrar(Request $request)
    {
        $request->validate([

            'latitude' => 'required|numeric|',
            'longitude' => 'required|numeric|',
            'valorPagar' => 'required|numeric|',
            'informacaoCarga' => 'required|',
            'EntregaData' => 'required|',
            'anexo' => 'required|mimes:jpg,png,gif,SVG,EPS,pdf,doxc',
        ]);
        $file = $request->file('anexo')->store('solicacoes');

        Solicacoes::create([
            'fk_user' => Auth::user()->id,
            'fk_viaturas' => $request->fk_viaturas,
            'anexo' => $file,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'valorPagar' => $request->valorPagar,
            'status' => 'Pendente',
            'informacaoCarga' => $request->informacaoCarga,
            'Entrega' => $request->EntregaData,
            'quantidadeCarga' => $request->quantidadeCarga,
        ]);
        return redirect("admin/solicitacoes-viaturas/index")->with('create', '1');
    }
    public function create()
    {
        return view('admin.solicitacoes.create.index');
    }

    public function solicitar($id)
    {
        $response['viatura'] = Viatura::find($id);
        return view('admin.solicitacoes.buscar.index', $response);
    }
    public function buscar(Request $request)
    {
        $kg = $request->quantidade_KG;
        $viatura_desponivel = Viatura::max('quantidade');
        if ($viatura_desponivel <= $request->quantidade_KG) {

            return redirect("admin/solicitacoes-viaturas/create")->with('indesponivelS', '1');
        } else {
            $response['viatura_desponivel'] = Viatura::get();
            return view('admin.solicitacoes.list.index', $response);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['viatura'] = Viatura::find($id);

        return view('admin.solicitacoes.show.index', $response);
    }

    public function detalhes($id){
        $response['atribucoesViatura']=Solicacoes::with('viaturas')->with('usuarios')->find($id);
        return view('admin.solicitacoes.detalhes.index',$response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                 $response['solicacoes'] = Solicacoes::with('viaturas', 'usuarios')->get();

        return view('admin.solicitacoes.edit.index', $response);
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
        Solicacoes::find($id)->update([
            'status' => $request->status,
]);
return redirect("admin/solicitacoes-viaturas/index")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Solicacoes::find($id)->delete();
        return redirect('admin/solicitacoes-viaturas/index')->with('destroy', '1');
    }
}
