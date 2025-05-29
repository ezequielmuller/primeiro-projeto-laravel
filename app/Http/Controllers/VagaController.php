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
    public function create()
    {
        return view('vagas.add');
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

    public function deletar($id) {
        $vaga = Vaga::find($id);
        $vaga->delete();

        return Redirect::to("/vagas");
    }
}
