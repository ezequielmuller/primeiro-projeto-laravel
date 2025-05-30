<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vaga;

use Auth;
use Redirect;

class VagaController extends Controller
{

    public function index()
    {
        $vagas = Vaga::get();
        return view('vagas.index', ['vagas' => $vagas]);
    }

    // Cadastrar Vaga
    public function create()
    {
        return view(view: 'vagas.add');
    }


    public function store(Request $request)
    {

        $vaga = new Vaga();
        $dados = $request->all();

        $vaga->nome = $dados['nome'];
        $vaga->desc = $dados['desc'];
        $vaga->salario = floatval($dados['salario']);
        $vaga->img = "";
        $vaga->user_id = Auth::user()->id;
        $vaga->categoria_id = 1;


        $vaga->save();

        return Redirect::to("/vagas");
    }

    //Deletar Vaga
    public function deletar($id)
    {
        $vaga = Vaga::find($id);
        $vaga->delete();

        return Redirect::to("/vagas");
    }

    // Ver Vaga
    public function show($id)
    {

        $vaga = Vaga::find($id);

        return view('vagas.show', ['vaga' => $vaga]);
    }

    // Alterar Vaga
    public function edit($id)
    {
        $vaga = Vaga::find($id);

        return view('vagas.edit', ['vaga' => $vaga]);
    }

    public function update(Request $request, $id){
        $vaga = Vaga::find($id);
        $dados = $request->all();

        $vaga->nome = $dados['nome'];
        $vaga->desc = $dados['desc'];
        $vaga->nome = floatval($dados['salario']);

        $vaga->img = "";
        $vaga->user_id = Auth::user()->id;
        $vaga->categoria_id = 1;
        $vaga->update();

        return Redirect::to("/vagas/$id");
    }
}
