<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Viatura;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index(){
  $Reponse['viaturas'] =  Viatura::get();
return view('site.home.index',$Reponse);
 }
}
