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
            
            'descricao' => 'Alface crespa, somente produtos selecionados e frescos. 
            Esta alface tem formato semelhante ao da alface lisa, com folhas soltas e nas pontas tem pequenos frisos, o que lhe dá o nome. 
            É rica em fibras e contém pequenos teores de minerais como cálcio e fosforo. Folha saborosa e muito comum na mesa dos brasileiros.',
            
            'foto' => 'alface.png',
            'preco' => 3.05,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Rúcula Hidropônica',
    
            'descricao' => 'Somente produtos selecionados e frescos. Cultivada pelo sistema de hidroponia, ou seja, dentro de estufas sem uso de solo, 
            os nutrientes que a planta precisa para desenvolvimento e produção são fornecidos somente por água enriquecida com solução nutritiva. 
            Verdura de sabor forte, picante com um tom amargo. Preparada de diversas maneiras, crua em saladas, refogada, também deliciosa quando 
            usada como recheio para pizzas, pães e tortas, melhor ainda acompanhada de tomates secos',
    
            'foto' => 'rucula.png',
            'preco' => 4.64,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Repolho Branco',
    
            'descricao' => 'Repolho branco, somente hortaliças frescas e cuidadosamente selecionadas. Rico em vitamina C, 
            fonte de fibras, potássio e com baixo teor calórico, é muito apreciado em saladas, suflês e sopas.',
    
            'foto' => 'repolho.png',
            'preco' => 3.85,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Escarola',
    
            'descricao' => 'A escarola é uma verdura que contribui para uma alimentação saudável por conter vitaminas A, B2, B5, contém cálcio e ferro',
            
            'foto' => 'escarola.png',
            'preco' => 2.25,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Brócolis Ninja',
    
            'descricao' => 'Brócolis Ninja florete, o mais rico em ferro entre as hortaliças, contém vitaminas A, B, C e K e ainda é uma boa 
            fonte de cálcio. Muito apreciado cozido no vapor, refogado, em gratinados, em pizzas ou ainda delicioso como recheio de pães e tortas',
            
            'foto' => 'brocolis.png',
            'preco' => 7.90,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Alho Poró',
    
            'descricao' => 'O alho poró está cada vez mais presente nas mesas dos consumidores brasileiros, seja em uma salada ou 
            no preparo de receitas mais elaboradas. Ele possui nutrientes semelhantes ao alho como vitaminas A, C e do Complexo B. 
            Também apresentam minerais como: Flúor, Iodo, Ferro e Fósforo. A maior propriedade deste alimento, porém, está na substância chamada 
            alicina que auxilia no na circulação e nas doenças coronárias.',
            
            'foto' => 'alhoporo.png',
            'preco' => 9.90,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Alface Lisa',
    
            'descricao' => 'Alface lisa hidropônica, somente produtos selecionados e frescos. Cultivada pelo sistema de hidroponia, 
            ou seja, dentro de estufas sem uso de solo, os nutrientes que a planta precisa para desenvolvimento e produção são fornecidos 
            somente por água enriquecida com solução nutritiva. Esta variedade tem formato arredondado, com folhas soltas e lisas, uma das mais 
            consumidas pelos brasileiros. Folha de sabor suave, deliciosa quando temperada com sal e limão.',
            
            'foto' => 'alfacelisa.png',
            'preco' => 3.69,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Nabo',
    
            'descricao' => 'O nabo é uma raiz para ser comida cozida acompanhada de arroz e de legumes. 
            Ela é rica em potássio e de baixo valor calórico. Direto do produtor para sua mesa.',
            
            'foto' => 'nabo.png',
            'preco' => 3.55,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Couve Manteiga',
    
            'descricao' => 'A couve é rica em Vitamina A, vitamina B1, vitamina B2, vitamina B3, vitamina B5, Vitamina C e vitamina K. 
            A Couve ainda é uma excelente fonte de Cálcio, cloro, enxofre, Ferro, Fósforo, Magnésio, silício e sódio.',
            
            'foto' => 'couve.png',
            'preco' => 7.15,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 3,
            'nome' => 'Agrião Orgânico',
    
            'descricao' => 'O agrião é um vegetal crucíferos. Os vegetais crucíferos são associados com a redução 
            dos riscos de câncer em muitos estudos. Além dos efeitos antioxidantes e das vitaminas presente no agrião. 
            Suas folhas auxilia no combate da atividade dos radicais livres no organismo!',
            
            'foto' => 'agriao.png',
            'preco' => 9.05,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Limão Tahiti',
    
            'descricao' => 'O limão tahiti trata-se de um fruto redondo, pequeno e muito suculento. 
            Apresenta casca fina e lisa, de cor verde ou amarela-clara. A polpa tem de cinco a seis sementes, é rica em suco 
            e de sabor ácido, porém agradável. Contém vitamina B1, B2 e B3, provitamina A (caroteno), que se encontra principalmente na casca e, 
            vitamina A na polpa fresca e sumo. Aproximadamente 100g.',
            
            'foto' => 'limao.png',
            'preco' => 0.54,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Banana Prata',
    
            'descricao' => 'É a fruta mais popular do Brasil e um dos símbolos de países tropicais, a banana prata é também 
            chamada de banana anã grande. Com alto valor nutritivo, é rica em açúcar e sais minerais, como potássio, e vitaminas A, B1, B2 e C. 
            Considerada uma das melhores fontes de potássio, é muito consumida pelos atletas e esportistas para prevenir contra cãibras. 
            A oferta de fibras no alimento promove sensação de saciedade e diminui a absorção de gorduras saturadas pelo intestino, 
            controlando os níveis de colesterol. Aproximadamente 190g.',
            
            'foto' => 'banana.png',
            'preco' => 3.65,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Manga Palmer',
    
            'descricao' => 'A manga é rica em proteínas como potássio, magnésio e ferro, além de vitamina A, do complexo B e C, e
             fibras. É ótima no combate a câimbras, estresse e problemas cardíacos. Aproximadamente 500g.',
            
            'foto' => 'manga.png',
            'preco' => 4.29,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Mamão Papaya',
    
            'descricao' => 'O mamão Papaya é considerado um fruto que pode auxiliar no aumento da qualidade de vida em razão das suas sementes, 
            casca e polpa, possuem quantidade substancial de nutrientes próprios á saúde. Ótimo para ser utilizado em vitaminas matinais. Aproximadamente 600g.',
            
            'foto' => 'mamao.png',
            'preco' => 6.25,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Laranja Pera',
    
            'descricao' => 'A laranja pera é rica em sais minerais como o cálcio, potássio, sódio e fósforo e vitaminas do complexo B. 
            Menor que as outras laranjas, tem um sabor levemente doce, ideal para o preparo de sucos ou para o consumo natural. Aproximadamente 200g.',
            
            'foto' => 'laranja.png',
            'preco' => 5.40,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Abacaxi Pérola',
    
            'descricao' => 'Abacaxi Pérola, fruto de forma cônica, poupa branca, suculenta e pouco ácida. Rico em vitamina C, B1, B6, ferro, 
            magnésio, e também uma fonte de fibras. Delicioso para consumir in natura, ou ainda preparar sucos e deliciosas sobremesas.',
            
            'foto' => 'abacaxi.png',
            'preco' => 8.55,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Pêra Princesa',
    
            'descricao' => 'A Pêra Princesa é uma fruta dura, granulosa e ácida, recomendada para ser cozida sem se desmanchar. U
            ma fruta rica em vitaminas C, A e do complexo B e uma poderosa fonte de antioxidante e outros nutrientes essencial para saúde. Aproximadamente 200g.',
            
            'foto' => 'pera.png',
            'preco' => 2.02,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Melão Amarelo',
    
            'descricao' => 'O melão amarelo é menos calórico e sua durabilidade pode chegar a um mês quando conservado na geladeira. Aproximadamente 2,7kg.',
            
            'foto' => 'melao.png',
            'preco' => 6.10,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Abacate Jorel',
    
            'descricao' => 'O abacate possui um sabor adocicado com polpa verde-amarelada, de consistência mole, e envolve uma grande semente. 
            Tem mais de 15% de gorduras (extraídas comercialmente tanto da semente, como do mesocarpo do fruto, e de aplicação cosmética) que são em sua 
            maioria gorduras monoinsaturadas, as mesmas do azeite de oliva. Aproximadamente 900g.',
            
            'foto' => 'abacate.png',
            'preco' => 5.55,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 2,
            'nome' => 'Maracujá Azedo',
    
            'descricao' => 'O maracujá tem alto teor em vitamina C, ótimo antioxidante, e contém vitamina A, substância importante no 
            combate ao câncer. Está presente no maracujá também o potássio, que equilibra o nível de sódio e evita a pressão alta e doenças 
            vasculares cerebrais. Aproximadamente 500g',
            
            'foto' => 'maracuja.png',
            'preco' => 4.05,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Batata Marte',
    
            'descricao' => 'A batata é um dos alimentos mais importantes como fonte de energia, por ser rica em carboidratos ou açúcares, 
            principalmente o amido, um polissacarídeo. Ela também é rica em água, vitamina B1, vitamina B2, vitamina C e sais minerais, 
            entre os quais é importante salientar o potássio. A batata é cultivada e consumida no mundo todo, sendo, desta forma, um dos alimentos mais 
            apreciados por todos.',
            
            'foto' => 'batata.png',
            'preco' => 6.09,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Cenoura Solar',
    
            'descricao' => 'A cenoura é muito rica em betacaroteno (poderoso antioxidante e anticancerígeno). 
            Também é uma excelente fonte de fibras, minerais (fósforo, potássio, cálcio e sódio) e vitaminas (A, B2, B3 e C). Aproximadamente 150g.',
            
            'foto' => 'cenoura.png',
            'preco' => 4.60,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Cebola Argentina',
    
            'descricao' => 'As cebolas são uma boa fonte de cromo, o componente mineral na tolerância à glicose, 
            uma molécula que ajuda as células a responderem adequadamente à insulina. Aproximadamente 190g',
            
            'foto' => 'cebola.png',
            'preco' => 3.40,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Tomate Extra',
    
            'descricao' => 'O tomate é rico em vitamina A e B9, cálcio, fósforo, magnésio e potássio, que ajuda a desenvolver 
            ossos e músculos, além de proteger o sistema imunológico. Aproximadamente 225g.',
            
            'foto' => 'tomate.png',
            'preco' => 6.70,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Chuchu Domar',
    
            'descricao' => 'O chuchu representa importante fonte de minerais como ferro, magnésio, potássio, fósforo e cálcio. 
            Possui alto teor de fibras, o que faz com que desempenhe um importante papel no funcionamento dos intestinos. Em menor proporção, 
            o chuchu possui uma pequena quantidade de vitaminas do complexo B e um pequeno teor de vitamina C. Se for cozido sem sal, o chuchu é 
            recomendado para o tratamento da pressão arterial alta e tem efeitos diuréticos. Aproximadamente 500g.',
            
            'foto' => 'chuchu.png',
            'preco' => 4.40,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Batata Doce',
    
            'descricao' => 'A batata doce roxa tem propriedades anti-inflamatórias, graças à vitamina C, vitamina B6, betacaroteno, 
            e manganês. Elas são eficazes na cura de inflamações internas e externas. Além disso, é uma boa fonte de fibra, ajudando a promover 
            um sistema digestivo mais saudável. Aproximadamente 440g',
            
            'foto' => 'batatadoce.png',
            'preco' => 2.80,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Pepino Americano',
    
            'descricao' => 'O pepino é uma fruta de baixa caloria e rico em fibras sabendo disso ele vai ajudar você a saciar a 
            fome sem acrescentar uma quantidade substancial de calorias a sua refeição. Aproximadamente 180g.',
            
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
    
            'descricao' => 'A beterraba é um tubérculo que possui várias propriedades nutritivas e medicinais. Promovem o bom funcionamento do 
            organismo e previnem doenças como a anemia, e distúrbios do fígado e do baço. Aproximadamente 330g.',
            
            'foto' => 'beterraba.png',
            'preco' => 1.20,
            'estoque' => 400
        ]);
    
        DB::table('produto')->insert([
            'id_categoria' => 1,
            'nome' => 'Pimentão Vermelho',
    
            'descricao' => 'O pimentão é um vegetal de sabor levemente picante, rico em fibra, vitamina C e vitamina A, minerais como cálcio, 
            ferro e fósforo. É também um excelente antioxidante natural e um bom protetor das células. Aproximadamente 250g.',
            
            'foto' => 'pimentao.png',
            'preco' => 3.90,
            'estoque' => 400
        ]);
    
    }
}

