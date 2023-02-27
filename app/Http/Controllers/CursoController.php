<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //funciones con tu propios nombres sirven paramandar a llamar mas de una funcion (curso#6)
        public function index(){
            return view('cursos.index');
        }

        public function show($curso){
            return view('cursos.show',compact('curso'));
        }

        public function dany($curso,$categoria=null){
            if($categoria){

                return "Bienvenido al curso: $curso, de la categoria: $categoria";
            }else{
                return "ingresaste a un curso sin categoria: $curso";
            }

        }
}



