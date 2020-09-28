<?php

namespace App\Http\Controllers;

use App\Cadastro;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastroController extends Controller
{
    public function __construct()
    {
        if (!Session::has('cadastros')) {
            Session::put('cadastros', []);
        }
    }

    public function index(Request $request)
    {
        return view ('cadastros.index', [
            'cadastros' => Cadastro::all()
        ]);
    }

    public function create()
    {
        return view('cadastros.create');
    }

    public function store(Request $request)
    {
        $cadastro = new Cadastro();
        $cadastro->nome = $request->get('nome');
        $cadastro->sexo = $request->get('sexo');
        $cadastro->idade = $request->get('idade');
        $cadastro->robby = $request->get('robby');
        $cadastro->datanascimento = $request->get('datanascimento');

        $cadastro->save();

        return redirect()->action('CadastroController@index');
    }
   
    public function edit($id)
    {
        $cadastro = Cadastro::find($id);
        return view('cadastros.edit', compact('cadastro'));
    }

    public function update($id, Request $request)
    {
        $cadastro = Cadastro::find($id);
        $cadastro->nome = $request->nome;
        $cadastro->sexo = $request->sexo;
        $cadastro->idade = $request->idade;
        $cadastro->robby = $request->robby;
        $cadastro->datanascimento = $request->datanascimento;
        $cadastro->save();
        return redirect()->action('CadastroController@index');
    }
    
    public function destroy($id)
    {
       
      Cadastro::destroy($id);
      return redirect()->action('CadastroController@index');

    }
}
