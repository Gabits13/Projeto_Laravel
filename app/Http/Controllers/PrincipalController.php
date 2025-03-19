<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        return view('principal');
    }

    public function sobrenos(){
        return view('sobrenos');
    }

    public function contato(){
        return view('contato');
    }

    public function servicos(){
        return view('servicos');
    }

    public function portifolio(){
        return view('portifolio');
    }
}
