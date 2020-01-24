<?php

use Illuminate\Database\Seeder;
use App\Models\Pagina;

class PaginaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $existe = Pagina::where('tipo', '=', 'sobre')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'sobre')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "INSTITUCIONAL";
        $paginaContato->descricao = "DEIXE SEU EMAIL PARA ENTRARMOS EM CONTATO!";
        $paginaContato->texto = "A Prevent Assessoria em Segurança do Trabalho nasceu a partir de uma vontade de fazer com que a Segurança do Trabalho se tornasse acessível para todos, sempre com a preocupação voltada para o trabalhador, de forma a minimizar os impactos que o dia a dia de trabalho causa aos colaboradores a MA consultoria busca soluções simples de acordo com cada trabalho executado para diminuir ao máximo acidentes e doenças do trabalho.";
        $paginaContato->imagem = "img/modelo_img_home.jpg";

        $paginaContato->tipo = "sobre";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina Sobre criada com sucesso!";


        $existe = Pagina::where('tipo', '=', 'visaoGeral')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'visaoGeral')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "VISÃO GERAL";
        $paginaContato->texto = "A Prevent Assessoria em Segurança do Trabalho encontra-se localizada na Avenida Indianópolis, 3214, 
na região do Bairro da Saúde em São Paulo, próximo ao Metrô São Judas, local de fácil acesso para nossos clientes.";

        $paginaContato->tipo = "visaoGeral";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina visaoGeral criada com sucesso!";



        $existe = Pagina::where('tipo', '=', 'missao')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'missao')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Missão";
        $paginaContato->texto = "Texto adicional sobre a Missão";
        $paginaContato->imagem = "img/modelo_img_home.jpg";

        $paginaContato->tipo = "missao";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina missao criada com sucesso!";



        $existe = Pagina::where('tipo', '=', 'visao')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'visao')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Visão";
        $paginaContato->texto = "Texto adicional sobre a visao";
        $paginaContato->imagem = "img/modelo_img_home.jpg";

        $paginaContato->tipo = "visao";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina visao criada com sucesso!";


        $existe = Pagina::where('tipo', '=', 'valores')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'valores')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Valores";
        $paginaContato->texto = "Texto adicional sobre Valores";
        $paginaContato->imagem = "img/modelo_img_home.jpg";

        $paginaContato->tipo = "valores";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina valores criada com sucesso!";


        $existe = Pagina::where('tipo', '=', 'servicos')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'servicos')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Nossos serviços";
        $paginaContato->texto = "A Prevent Assessoria em Segurança do Trabalho atua no ramo de Saúde e Segurança do Trabalho 
oferecendo serviços de elaboração de programas como:";

        $paginaContato->tipo = "servicos";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina servicos criada com sucesso!";



        $existe = Pagina::where('tipo', '=', 'certificacoes')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'certificacoes')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Nossas certificacoes";
        $paginaContato->texto = "Texto adicional sobre as certificacoes";

        $paginaContato->tipo = "certificacoes";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina certificacoes criada com sucesso!";



        $existe = Pagina::where('tipo', '=', 'equipe')->count();

        if($existe)
        {
            $paginaSobre = Pagina::where('tipo', '=', 'equipe')->first();
        }
        else
        {
            $paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = "Equipe";
        $paginaSobre->texto = "Texto sobre a equipe";
        $paginaSobre->tipo = "equipe";

        $paginaSobre->save();

        echo "\nPaginaTableSeeder - Pagina equipe criada com sucesso!";


        $existe = Pagina::where('tipo', '=', 'contato')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'contato')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "PORQUE A PREVENT?";
        $paginaContato->texto = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate eligendi enim iusto tenetur, perspiciatis id tempore aliquid hic ducimus debitis natus quisquam commodi sint voluptas nesciunt laboriosam repellat laudantium placeat quidem quia velit fuga veritatis. Expedita voluptatem vitae totam iusto sequi odio dolor, soluta, omnis laboriosam labore minus excepturi reprehenderit consequuntur assumenda minima, ipsa? Molestias ex quod illum ea tempora quas quos quam ullam, perferendis, voluptatem quo aperiam dolorum fuga ab, aliquid facere saepe laudantium cum vitae deserunt? Nemo dolores blanditiis doloribus recusandae totam ad ex ratione fugit provident consequatur, dolor rem. Reprehenderit veniam nemo, commodi doloremque nisi dolor, illum.";

        $paginaContato->tipo = "contato";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina contato criada com sucesso!";

    }
}
