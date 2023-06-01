<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Viatura;
use Illuminate\Http\Request;

class ViaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $resonse['viaturas'] = Viatura::get();
        return view('admin.viaturas.list.index', $resonse);
    }

    public function show($id)
    {


        $response['Viatura'] = Viatura::find($id);
        return view('admin.viaturas.details.index', $response);
    }
    public function create()
    {
        return view('admin.viaturas.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'matricula' => 'required|min:5|max:255',
            'modelo' => 'required|',
            'quantidade' => 'required| numeric|min:2',
            'descricao' => 'required|',
            'imagem_viatura' => 'required| mimes:jpg,png,gif,SVG,EPS',]);

            if ($middle = $request->file('imagem_viatura')) {
                $file = $middle->storeAs('photoEmployee', 'photoEmployee-' . uniqid(rand(1, 5)) . "." . $middle->extension());
            } else {
                $file = null;
            }
        $Viatura = Viatura::create([
            'matricula' => $request->matricula,
            'modelo' => $request->modelo,
            'quantidade' => $request->quantidade,
            'descricao' => $request->descricao,
            'imagem_viatura' => $file
        ]);
        return redirect("admin/viaturas/show/".$Viatura->id)->with('create', '1');
    }

    public function edit($id)
    {

        $response['viatura'] = Viatura::find($id);

        return view('admin.viaturas.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'matricula' => 'required|min:5|max:255',
            'modelo' => 'required|',
            'quantidade' => 'required| numeric|min:2',
            'descricao' => 'required|',
            'imagem_viatura' => 'mimes:jpg,png,gif,SVG,EPS',

        ]);

        if ($file = $request->file('imagem_viatura')) {
            $file = $file->store('Viaturas');
        } else {
            $file = Viatura::find($id)->imagem_viatura;
        }

        Viatura::find($id)->update([
            'matricula' => $request->matricula,
            'modelo' => $request->modelo,
            'quantidade' => $request->quantidade,
            'descricao' => $request->descricao,
            'imagem_viatura' => $file

        ]);


        return redirect()->route('admin.viaturas.index')->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Viatura::find($id)->delete();
        return redirect('admin/viaturas/index')->with('destroy', '1');
    }
}
