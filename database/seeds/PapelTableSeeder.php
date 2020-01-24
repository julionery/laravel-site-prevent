<?php

use App\Models\Papel;
use App\Models\User;
use Illuminate\Database\Seeder;

class PapelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
        'name' => 'Admin',
        'email'=> 'admin@admin.com',
        'password' => bcrypt(123456),
        'remember_token' => str_random(10),
        ])->save();

        if(!Papel::where('nome', '=', 'admin')->count())
        {
            $admin = Papel::create([
                'nome' => 'admin',
                'descricao' => 'Administrado do Sistema'
            ]);
        }

        if(!Papel::where('nome', '=', 'gerente')->count())
        {
            $admin = Papel::create([
                'nome' => 'gerente',
                'descricao' => 'Gerente do Sistema'
            ]);
        }

        if(!Papel::where('nome', '=', 'vendedor')->count())
        {
            $admin = Papel::create([
                'nome' => 'vendedor',
                'descricao' => 'Equipe de Vendas'
            ]);
        }
    }
}
