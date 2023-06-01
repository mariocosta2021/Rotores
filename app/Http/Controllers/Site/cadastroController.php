<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class cadastroController extends Controller
{



    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:40|unique:users',
            'telefone' => 'required|string|max:40',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'level' => "Cliente",
            'password' => Hash::make($request->password),
            'telefone'  => $request->telefone,


        ]);

        event(new Registered($user));

        //Auth::login($user);

        return redirect()->route('site.home')->with('create', '1');
    }
}
