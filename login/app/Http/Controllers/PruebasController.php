<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
       public function pruebas()
   {
   	return view('pruebas.pruebas');
   }
}
