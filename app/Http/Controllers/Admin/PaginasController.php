<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Pagina;
use Intervention\Image\Facades\Image;

class PaginasController extends Controller
{
    public function index()
    {
        $paginas = Pagina::all();
        return view('admin.paginas.index', compact('paginas'));
    }

    public function editar($id)
    {
        $pagina = Pagina::find($id);
        return view('admin.paginas.editar', compact('pagina'));
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();
        $pagina = Pagina::find($id);

        $pagina->titulo = trim($dados['titulo']);

        if(isset($dados['texto'])) {
            $pagina->texto = trim($dados['texto']);
        }

        if(isset($dados['descricao'])){
            $pagina->descricao = trim($dados['descricao']);
        }
        if(isset($dados['email'])){
            $pagina->email = trim($dados['email']);
        }
        if(isset($dados['facebook'])){
            $pagina->facebook = trim($dados['facebook']);
        }
        if(isset($dados['google'])){
            $pagina->google = trim($dados['google']);
        }
        if(isset($dados['twitter'])){
            $pagina->twitter = trim($dados['twitter']);
        }
        if(isset($dados['linkedin'])){
            $pagina->linkedin = trim($dados['linkedin']);
        }
        if(isset($dados['youtube'])){
            $pagina->youtube = trim($dados['youtube']);
        }
        if(isset($dados['vimeo'])){
            $pagina->vimeo = trim($dados['vimeo']);
        }
        if(isset($dados['instagram'])){
            $pagina->instagram = trim($dados['instagram']);
        }
        if(isset($dados['github'])){
            $pagina->github = trim($dados['github']);
        }

        if(isset($dados['mapa']) && trim($dados['mapa']) != ''){
            $pagina->mapa = trim($dados['mapa']);
        }else{
            $pagina->mapa = null;
        }

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/paginas/".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $pagina->imagem = $diretorio.'/'.$nomeArquivo;
        }

        if ($pagina->tipo == 'header') {
            $diretorio = "img/home";
            $nomeOldImagem = $pagina->imagem;
            $nomeNewImagem = $diretorio . '/' . "ImagemHome.jpg";

            Image::make($nomeOldImagem)->resize(1900, 800)->save($nomeNewImagem);
            $pagina->imagem = $nomeNewImagem;
        }

        if ($pagina->tipo == 'portfolio') {
            $diretorio = "img/portfolio";
            $nomeOldImagem = $pagina->imagem;
            $nomeNewImagem = $diretorio . '/' . "ImagemPortfolio.jpg";

            Image::make($nomeOldImagem)->resize(1900, 800)->save($nomeNewImagem);
            $pagina->imagem = $nomeNewImagem;
        }

        if ($pagina->tipo == 'noticias') {
            $diretorio = "img/noticias";
            $nomeOldImagem = $pagina->imagem;

            $nomeNewImagem = $diretorio . '/' . "ImagemNoticia.jpg";

            Image::make($nomeOldImagem)->resize(1900, 800)->save($nomeNewImagem);
            $pagina->imagem = $nomeNewImagem;
        }

        if ($pagina->tipo == 'servicos') {
            $diretorio = "img/home";
            $nomeOldImagem = $pagina->imagem;
            $nomeNewImagem = $diretorio . '/' . "ImagemServico.jpg";

            Image::make($nomeOldImagem)->resize(1900, 800)->save($nomeNewImagem);
            $pagina->imagem = $nomeNewImagem;
        }

        $pagina->update();

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);

        return redirect()->route('admin.paginas');

    }

}
