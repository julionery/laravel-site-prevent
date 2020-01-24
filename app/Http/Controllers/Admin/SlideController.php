<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class SlideController extends Controller
{

    public function index()
    {
        $registros = Slide::all();
        return view('admin.slide.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.slide.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        $registro = new Slide();

        $registro->titulo = $dados['titulo'];
        $registro->subtitulo = $dados['subtitulo'];
        $registro->descricao = $dados['descricao'];
        $registro->texto = $dados['texto'];
        $registro->publicar = $dados['publicar'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/slide";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_original_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);

            $nomeOldImagem = $diretorio.'/'.$nomeArquivo;
            $nomeNewImagem = $diretorio.'/'."_resize_".$rand."_".$data.".jpg";

            Image::make($nomeOldImagem)->resize(1920, 1100)->save($nomeNewImagem);

            $registro->imagem = $nomeNewImagem;
        }

        $registro->save();

        \Session::flash('mensagem', [
            'msg' => 'Registro criado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.slide');
    }

    public function editar($id)
    {
        $registro = Slide::find($id);

        return view('admin.slide.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Slide::find($id);

        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->subtitulo = $dados['subtitulo'];
        $registro->descricao = $dados['descricao'];
        $registro->texto = $dados['texto'];
        $registro->publicar = $dados['publicar'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/slide";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_original_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);

            $nomeOldImagem = $diretorio.'/'.$nomeArquivo;
            $nomeNewImagem = $diretorio.'/'."_resize_".$rand."_".$data.".jpg";

            Image::make($nomeOldImagem)->resize(1920, 1100)->save($nomeNewImagem);

            $registro->imagem = $nomeNewImagem;
        }

        $registro->update();

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.slide');
    }

    public function deletar($id)
    {
        Slide::find($id)->delete();
        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.slide');
    }
}
