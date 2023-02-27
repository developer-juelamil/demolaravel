<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // el metodo invoke se utiliza para mandar a llamar solamente una funcion
    public function __invoke(){
        return view('home');
    }
}
