<?php

namespace App\Http\Controllers\Admin;

use App\Models\Servico;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ServicoController extends Controller
{

    public function index()
    {
        $registros = Servico::all();
        return view('admin.servicos.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.servicos.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        $registro = new Servico();

        $registro->titulo = $dados['titulo'];
        $registro->publicar = $dados['publicar'];
        $registro->detalhes = $dados['detalhes'];
        $registro->texto = $dados['texto'];
        $registro->visualizacoes = 0;

        $registro->save();

        \Session::flash('mensagem', [
            'msg' => 'Registro criado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.servicos');
    }

    public function editar($id)
    {
        $registro = Servico::find($id);

        return view('admin.servicos.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Servico::find($id);

        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->detalhes = $dados['detalhes'];
        $registro->publicar = $dados['publicar'];

        $registro->update();

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.servicos');
    }

    public function deletar($id)
    {
        Servico::find($id)->delete();
        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.servicos');
    }
}
