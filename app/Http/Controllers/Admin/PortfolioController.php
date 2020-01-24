<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cidade;
use App\Models\Portfolio;
use App\Models\Tipo;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{

    public function index()
    {
        $registros = Portfolio::all();
        return view('admin.portfolios.index', compact('registros'));
    }

    public function adicionar()
    {
        $tipos = Tipo::all();
        $cidades = Cidade::all();

        return view('admin.portfolios.adicionar', compact('tipos', 'cidades'));
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        $registro = new Portfolio();

        $registro->titulo = $dados['titulo'];
        $registro->texto = $dados['texto'];
        $registro->publicar = $dados['publicar'];
        $registro->visualizacoes = 0;

        $registro->save();

        \Session::flash('mensagem', [
            'msg' => 'Registro criado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.portfolios');
    }

    public function editar($id)
    {
        $registro = Portfolio::find($id);

        $tipos = Tipo::all();
        $cidades = Cidade::all();

        return view('admin.portfolios.editar', compact('registro', 'tipos','cidades'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Portfolio::find($id);

        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->texto = $dados['texto'];
        $registro->publicar = $dados['publicar'];

        $registro->update();

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.portfolios');
    }

    public function deletar($id)
    {
        Portfolio::find($id)->delete();
        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.portfolios');
    }
}
