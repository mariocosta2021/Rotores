<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



use Illuminate\Validation\Rules;
class ClientsController extends Controller
{
    public function index()
    {
        //
        $response['users'] = User::where('level','Cliente')->get();
        return view('admin.cliente.list.index', $response);
    }



    public function create()
    {

        return view('admin.user.create.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if(Auth::user()->level != 'Administrador' && Auth::user()->id != $id ) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        }else{

            $response['user'] = User::find($id);
            return view('admin.user.details.index', $response);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->level != 'Administrador' && Auth::user()->id != $id ) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        }else{

            $response['user'] = User::find($id);
            return view('admin.cliente.list.index', $response);
        }
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
        if(Auth::user()->level != 'Administrador' && Auth::user()->id != $id ) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        }else{

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
            $user = User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'level' => $request->level,
                'password' => Hash::make($request->password),
            ]);


            return redirect()->route('admin.home')->with('edit', '1');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $count = User::count();

        if ($count > 1) {
            User::find($id)->delete();
            return redirect()->back()->with('destroy', '1');
        } else {
            return redirect()->back();
        }
    }}
