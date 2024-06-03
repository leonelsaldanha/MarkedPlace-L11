<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
  public function dashboard()
  {
    return view('tecnico.dashboard');  
  } 
}
