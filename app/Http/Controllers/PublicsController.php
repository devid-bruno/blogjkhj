<?php

namespace App\Http\Controllers;
use Hash;
use Session;
use App\Models\User;
use App\Models\Publication;
use App\Models\Dica;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class PublicsController extends Controller
{
    public function index()
    {
        return view('dicas');
    }

    public function listardicas(Request $request){
        if(Auth::check()){
            $dicas = Dica::all();
            return view('dicas')->with('dicas', $dicas);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function publication()
    {
        if(Auth::check()){
            return view('admin.addpublication');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function listar(Request $request){
        if(Auth::check()){
            $publicacoes = Publication::all();
            return view('admin.dashboard')->with('publicacoes', $publicacoes);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function add(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'publicacao' => 'required',
        ]);

        $publicacao = new Publication();
        $publicacao->titulo = $request->input('titulo');
        $publicacao->publicacao = $request->input('publicacao');
        $publicacao->save();

        return redirect()->route('admin.listpublications')->with('success', 'Publicação adicionada com sucesso!');
    }
    public function excluir($id){
        Publication::find($id)->delete();
        return redirect()->route('dashboard');
    }
}
