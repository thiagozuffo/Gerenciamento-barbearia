<?php

use Illuminate\Database\Seeder;
use App\Produto;
class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create(['nome', 'preco', 'descricao' => 'shampoo', '12', 'muito bom']);
        Produto::create(['nome', 'preco', 'descricao' => 'creme', '1.99', 'muito bom']);
        Produto::create(['nome', 'preco', 'descricao' => 'gilette', '9', 'muito bom']);
        Produto::create(['nome', 'preco', 'descricao' => 'gel', '12', 'muito bom']);
    }
}
