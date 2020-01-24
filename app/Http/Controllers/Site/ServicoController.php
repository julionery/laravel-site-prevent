<?php

namespace App\Http\Controllers\Site;

use App\Models\Configuracao;
use App\Models\Pagina;
use App\Models\Portfolio;
use App\Models\Servico;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServicoController extends Controller
{
    public function index($id)
    {
        $servico = Servico::find($id);
        $configuracao = Configuracao::all()->first();

        $seo = [
            'titulo'=>$servico->titulo,
            'descricao'=>$servico->detalhes,
            'imagem'=>asset($servico->imagem),
            'url'=> route('site.servicos', [$servico->id, str_slug($servico->titulo,'_')])
        ];

        return view ('servicos', compact('servico','seo', 'configuracao'));
    }

    public function servico()
    {
        $servico = Servico::all()->last();
        $configuracao = Configuracao::all()->first();

        $seo = [
            'titulo'=>$servico->titulo,
            'descricao'=>$servico->detalhes,
            'imagem'=>asset($servico->imagem),
            'url'=> route('site.servicos', [$servico->id, str_slug($servico->titulo,'_')])
        ];

        return view ('servicos', compact('servico','seo', 'configuracao'));
    }
}
