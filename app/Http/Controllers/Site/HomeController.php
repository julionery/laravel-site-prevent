<?php

namespace App\Http\Controllers\Site;

use App\Models\Configuracao;
use App\Models\Equipe;
use App\Models\Pagina;
use App\Models\Portfolio;
use App\Models\Servico;
use App\Models\Slide;
use App\Models\Sobre;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    public function index()
    {
        $sobre = Pagina::where('tipo', '=', 'sobre')->first();
        $visaoGeral = Pagina::where('tipo', '=', 'visaoGeral')->first();
        $missao = Pagina::where('tipo', '=', 'missao')->first();
        $visao = Pagina::where('tipo', '=', 'visao')->first();
        $valores = Pagina::where('tipo', '=', 'valores')->first();
        $servicos = Pagina::where('tipo', '=', 'servicos')->first();
        $certificacoes = Pagina::where('tipo', '=', 'certificacoes')->first();
        $equipe = Pagina::where('tipo', '=', 'equipe')->first();
        $contato = Pagina::where('tipo', '=', 'contato')->first();

        $portfolio = Portfolio::where('publicar', '=', 'sim')->orderBy('id', 'desc')->take(12)->get()->first();

        if ($portfolio != null) {
            $galeria = $portfolio->galeria()->orderBy('ordem', 'asc')->get();
        }
        $servicosInfo = Servico::where('publicar', '=', 'sim')->get();
        $equipeInfo = Equipe::where('publicar', '=', 'sim')->take(4)->get();
        $slideInfo = Slide::where('publicar', '=', 'sim')->take(4)->get();

        $configuracao = Configuracao::all()->first();

        return view('welcome', compact('sobre', 'visaoGeral', 'missao', 'visao', 'valores', 'servicos', 'certificacoes', 'equipe', 'contato', 'portfolio', 'servicosInfo', 'equipeInfo', 'configuracao', 'galeria', 'slideInfo'));
    }

    public function contato()
    {
        $portfolio = Portfolio::where('publicar', '=', 'sim')->orderBy('id', 'desc')->take(12)->get()->first();
        $configuracao = Configuracao::all()->first();
        $contato = Pagina::where('tipo', '=', 'contato')->first();
        return view('contato', compact('contato','configuracao', 'portfolio'));
    }

    public function enviarContato(Request $request)
    {
        dd($request);

        $sobre = Pagina::where('tipo', '=', 'contato')->first();
        dd($sobre);
        $email = $sobre->email;

        \Mail::send('emails.contato', ['request' => $request], function ($m) use ($request, $email) {
            $m->from($request['email'], $request['nome']);
            $m->replyTo($request['email'], $request['nome']);
            $m->subject("Contato pelo Site");
            $m->to($email, 'Contato do Site');
        });

        \Session::flash('mensagem', [
            'msg' => 'Contato enviado com sucesso!',
            'class' => 'green white-text'
        ]);

        return redirect()->route('site.home');
    }
}
