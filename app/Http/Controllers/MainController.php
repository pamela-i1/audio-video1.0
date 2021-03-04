<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
    	//$name = config('app.name');
    	//mostrar la informacion sin detener a ejecucion del nombre, para ciclos, etc
        //dd($name);
        //detiene la ejecucion del codigo
    	//dd();
    	//return view($name);
    	return view ('x');
    }
}
