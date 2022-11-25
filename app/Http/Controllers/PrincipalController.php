<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;

class PrincipalController extends Controller
{
    public function index()
    {
        return view('card');
    }

    public function listar(Request $request){
            $publicacoes = Publication::all();
            return view('card')->with('publicacoes', $publicacoes);
    }
}
