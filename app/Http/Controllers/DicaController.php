<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dica;
use Illuminate\Support\Facades\Auth;

class DicaController extends Controller
{
    public function dica(){
        return view('admin.dica');
    }
    public function add(Request $request)
    {
        $request->validate([
            'dica' => 'required',
            'link' => 'required',
        ]);

        $dica = new Dica();
        $dica->dica = $request->input('dica');
        $dica->link = $request->input('link');
        $dica->save();

        return redirect()->route('dashboard')->with('success', 'Dica adicionada com sucesso!');
    }

    public function listar(Request $request){
        if(Auth::check()){
            $dicas = Dica::all();
            return view('admin.dashboard')->with('dicas', $dicas);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
