<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'nome' => 'Legumes'        
        ]);
        DB::table('categoria')->insert([
            'nome' => 'Frutas'        
        ]);
        DB::table('categoria')->insert([
            'nome' => 'Verduras'        
        ]);
        DB::table('categoria')->insert([
            'nome' => 'Todos'        
        ]);
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Alface Crespa',
            
            'descricao' => 'Folha saborosa e muito comum na mesa dos brasileiros.',
            
            'foto' => 'alface.png',
            'preco' => 3.05,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Rúcula Hidropônica',
    
            'descricao' => ' Cultivada pelo sistema de hidroponias',
    
            'foto' => 'rucula.png',
            'preco' => 4.64,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Repolho Branco',
    
            'descricao' => 'Repolho branco é muito apreciado em saladas, suflês e sopas.',
    
            'foto' => 'repolho.png',
            'preco' => 3.85,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Escarola',
    
            'descricao' => 'A escarola é uma verdura',
            
            'foto' => 'escarola.png',
            'preco' => 2.25,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Brócolis Ninja',
    
            'descricao' => 'Brócolis Ninja florete',
            
            'foto' => 'brocolis.png',
            'preco' => 7.90,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Alho Poró',
    
            'descricao' => 'possui nutrientes',
            
            'foto' => 'alhoporo.png',
            'preco' => 9.90,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Alface Lisa',
    
            'descricao' => 'Alface lisa hidropônica.',
            
            'foto' => 'alfacelisa.png',
            'preco' => 3.69,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Nabo',
    
            'descricao' => 'O nabo é uma raiz para ser comida cozida.',
            
            'foto' => 'nabo.png',
            'preco' => 3.55,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Couve Manteiga',
    
            'descricao' => 'A couve é rica em Vitamina A.',
            
            'foto' => 'couve.png',
            'preco' => 7.15,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Agrião Orgânico',
    
            'descricao' => 'O agrião é um vegetal crucíferos.',
            
            'foto' => 'agriao.png',
            'preco' => 9.05,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Limão Tahiti',
    
            'descricao' => 'O limão tahiti trata-se de um fruto redondo.',
            
            'foto' => 'limao.png',
            'preco' => 0.54,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Banana Prata',
    
            'descricao' => 'É a fruta mais popular do Brasil.',
            
            'foto' => 'banana.png',
            'preco' => 3.65,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Manga Palmer',
    
            'descricao' => 'A manga é rica em proteínas.',
            
            'foto' => 'manga.png',
            'preco' => 4.29,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Mamão Papaya',
    
            'descricao' => 'O mamão Papaya é considerado um fruto que pode auxiliar no aumento da qualidade de vida.',
            
            'foto' => 'mamao.png',
            'preco' => 6.25,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Laranja Pera',
    
            'descricao' => 'A laranja pera é rica em sais minerais.',
            
            'foto' => 'laranja.png',
            'preco' => 5.40,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Abacaxi Pérola',
    
            'descricao' => 'Abacaxi Pérola, fruto de forma cônica.',
            
            'foto' => 'abacaxi.png',
            'preco' => 8.55,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Pêra Princesa',
    
            'descricao' => 'A Pêra Princesa é uma fruta dura.',
            
            'foto' => 'pera.png',
            'preco' => 2.02,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Melão Amarelo',
    
            'descricao' => 'O melão amarelo é menos calórico.',
            
            'foto' => 'melao.png',
            'preco' => 6.10,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Abacate Jorel',
    
            'descricao' => 'O abacate possui um sabor adocicado.',
            
            'foto' => 'abacate.png',
            'preco' => 5.55,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Maracujá Azedo',
    
            'descricao' => 'O maracujá tem alto teor em vitamina C.',
            
            'foto' => 'maracuja.png',
            'preco' => 4.05,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Batata Marte',
    
            'descricao' => 'A batata é um dos alimentos mais importantes.',
            
            'foto' => 'batata.png',
            'preco' => 6.09,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Cenoura Solar',
    
            'descricao' => 'A cenoura é muito rica em betacaroteno.',
            
            'foto' => 'cenoura.png',
            'preco' => 4.60,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Cebola Argentina',
    
            'descricao' => 'As cebolas são uma boa fonte de cromo.',
            
            'foto' => 'cebola.png',
            'preco' => 3.40,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Tomate Extra',
    
            'descricao' => 'O tomate é rico em vitamina A e B9.',
            
            'foto' => 'tomate.png',
            'preco' => 6.70,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Chuchu Domar',
    
            'descricao' => 'O chuchu representa importante fonte de minerais',
            
            'foto' => 'chuchu.png',
            'preco' => 4.40,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Batata Doce',
    
            'descricao' => 'A batata doce roxa tem propriedades anti-inflamatória.',
            
            'foto' => 'batatadoce.png',
            'preco' => 2.80,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Pepino Americano',
    
            'descricao' => 'O pepino é uma fruta de baixa caloria.',
            
            'foto' => 'pepino.png',
            'preco' => 1.10,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Beringela Okala',
    
            'descricao' => 'A berinjela é rica em fibras, tem baixa caloria e promove melhor funcionamento intestinal. Aproximadamente 450g.',
            
            'foto' => 'beringela.png',
            'preco' => 3.90,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Beterraba Toronto',
    
            'descricao' => 'A beterraba é um tubérculo.',
            
            'foto' => 'beterraba.png',
            'preco' => 1.20,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Pimentão Vermelho',
    
            'descricao' => 'O pimentão é um vegetal.',
            
            'foto' => 'pimentao.png',
            'preco' => 3.90,
            'estoque' => 400
        ]);
    
    }
}

