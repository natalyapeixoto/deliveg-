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
        DB::table('ingredientes')->insert([
            'id_categoria' => 3,
            'nome' => 'Alface Crespa',
            'descricao' => 'Alface crespa, somente produtos selecionados e frescos. Esta alface tem formato semelhante ao da alface lisa, com folhas soltas e nas pontas tem pequenos frisos, o que lhe dá o nome. É rica em fibras e contém pequenos teores de minerais como cálcio e fosforo. Folha saborosa e muito comum na mesa dos brasileiros.',
            'foto' => 'alface.png',
            'preco' => 3,
            'estoque' => 400
        ]);
        DB::table('ingredientes')->insert([
            'id_categoria' => 3,
            'nome' => 'Rúcula Hidropônica',
            'descricao' => 'Somente produtos selecionados e frescos. Cultivada pelo sistema de hidroponia, ou seja, dentro de estufas sem uso de solo, os nutrientes que a planta precisa para desenvolvimento e produção são fornecidos somente por água enriquecida com solução nutritiva. Verdura de sabor forte, picante com um tom amargo. Preparada de diversas maneiras, crua em saladas, refogada, também deliciosa quando usada como recheio para pizzas, pães e tortas, melhor ainda acompanhada de tomates secos.',
            'foto' => 'rucula.png',
            'preco' => 4.64,
            'estoque' => 400
        ]);
        DB::table('ingredientes')->insert([
            'id_categoria' => 3,
            'nome' => 'Repolho Branco',
            'descricao' => 'somente hortaliças frescas e cuidadosamente selecionadas. Rico em vitamina C, fonte de fibras, potássio e com baixo teor calórico, é muito apreciado em saladas, suflês e sopas.',
            'foto' => 'repolho.png',
            'preco' => 4.64,
            'estoque' => 400
        ]);
        DB::table('ingredientes')->insert([
            'id_categoria' => 3,
            'nome' => 'Repolho Branco',
            'descricao' => 'somente hortaliças frescas e cuidadosamente selecionadas. Rico em vitamina C, fonte de fibras, potássio e com baixo teor calórico, é muito apreciado em saladas, suflês e sopas.',
            'foto' => 'repolho.png',
            'preco' => 4.64,
            'estoque' => 400
        ]);
    }
}



(‘4’, '2', 'Escarola', ' A escarola é uma verdura que contribui para uma alimentação saudável por conter vitaminas A, B2, B5, contém cálcio e ferro.', 'escarola.png', '2.25', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES (‘5’, '2', 'Brócolis Ninja', 'Brócolis Ninja florete, o mais rico em ferro entre as hortaliças, contém vitaminas A, B, C e K e ainda é uma boa fonte de cálcio. Muito apreciado cozido no vapor, refogado, em gratinados, em pizzas ou ainda delicioso como recheio de pães e tortas', 'brocolis.png', '7.90', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES (‘6’, '2', 'Alho Poró', 'O alho poró está cada vez mais presente nas mesas dos consumidores brasileiros, seja em uma salada ou no preparo de receitas mais elaboradas. Ele possui nutrientes semelhantes ao alho como vitaminas A, C e do Complexo B. Também apresentam minerais como: Flúor, Iodo, Ferro e Fósforo. A maior propriedade deste alimento, porém, está na substância chamada alicina que auxilia no na circulação e nas doenças coronárias.', 'alhoporo.png', '9.90', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES (‘7’, '2', 'Alface Lisa', 'Alface lisa hidropônica, somente produtos selecionados e frescos. Cultivada pelo sistema de hidroponia, ou seja, dentro de estufas sem uso de solo, os nutrientes que a planta precisa para desenvolvimento e produção são fornecidos somente por água enriquecida com solução nutritiva. Esta variedade tem formato arredondado, com folhas soltas e lisas, uma das mais consumidas pelos brasileiros. Folha de sabor suave, deliciosa quando temperada com sal e limão.', 'alfacelisa.png', '3.69', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES (‘8’, '2', 'Nabo', 'O nabo é uma raiz para ser comida cozida acompanhada de arroz e de legumes. Ela é rica em potássio e de baixo valor calórico. Direto do produtor para sua mesa.', 'nabo.png', '3.55', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES (’9’, '2', 'Caouve Manteiga', 'A couve é rica em Vitamina A, vitamina B1, vitamina B2, vitamina B3, vitamina B5, Vitamina C e vitamina K. A Couve ainda é uma excelente fonte de Cálcio, cloro, enxofre, Ferro, Fósforo, Magnésio, silício e sódio.', 'couve.png', '7.15', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES (’10’, '2', 'Agrião Orgânico', 'O agrião é um vegetal crucíferos. Os vegetais crucíferos são associados com a redução dos riscos de câncer em muitos estudos. Além dos efeitos antioxidantes e das vitaminas presente no agrião. Suas folhas auxilia no combate da atividade dos radicais livres no organismo!', 'agriao.png', '9.05', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('11', '1', 'Limão Tahiti', 'O limão tahiti trata-se de um fruto redondo, pequeno e muito suculento. Apresenta casca fina e lisa, de cor verde ou amarela-clara. A polpa tem de cinco a seis sementes, é rica em suco e de sabor ácido, porém agradável. Contém vitamina B1, B2 e B3, provitamina A (caroteno), que se encontra principalmente na casca e, vitamina A na polpa fresca e sumo. Aproximadamente 100g.', 'limao.png', '0.54', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('12', '1', 'Banan Prata', 'É a fruta mais popular do Brasil e um dos símbolos de países tropicais, a banana prata é também chamada de banana anã grande. Com alto valor nutritivo, é rica em açúcar e sais minerais, como potássio, e vitaminas A, B1, B2 e C. Considerada uma das melhores fontes de potássio, é muito consumida pelos atletas e esportistas para prevenir contra cãibras. A oferta de fibras no alimento promove sensação de saciedade e diminui a absorção de gorduras saturadas pelo intestino, controlando os níveis de colesterol. Aproximadamente 190g.', 'banana.png', '3.65', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('13', '1', 'Manga Palmer', 'A manga é rica em proteínas como potássio, magnésio e ferro, além de vitamina A, do complexo B e C, e fibras. É ótima no combate a câimbras, estresse e problemas cardíacos. Aproximadamente 500g.', 'manga.png', '4.29', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('14', '1', 'Mamão Papaya', 'O mamão Papaya é considerado um fruto que pode auxiliar no aumento da qualidade de vida em razão das suas sementes, casca e polpa, possuem quantidade substancial de nutrientes próprios á saúde. Ótimo para ser utilizado em vitaminas matinais. Aproximadamente 600g.', 'mamao.png', '6.25', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('15', '1', 'Laranja Pera', 'A laranja pera é rica em sais minerais como o cálcio, potássio, sódio e fósforo e vitaminas do complexo B. Menor que as outras laranjas, tem um sabor levemente doce, ideal para o preparo de sucos ou para o consumo natural. Aproximadamente 200g.', 'laranja.png', '5.40', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('16', '1', 'Abacaxi Pérola', 'Abacaxi Pérola, fruto de forma cônica, poupa branca, suculenta e pouco ácida. Rico em vitamina C, B1, B6, ferro, magnésio, e também uma fonte de fibras. Delicioso para consumir in natura, ou ainda preparar sucos e deliciosas sobremesas.', 'abacaxi.png', '8.55', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('17', '1', 'Pera Princesa', 'A pera Princesa é uma fruta dura, granulosa e ácida, recomendada para ser cozida sem se desmanchar. Uma fruta rica em vitaminas C, A e do complexo B e uma poderosa fonte de antioxidante e outros nutrientes essencial para saúde. Aproximadamente 200g.', 'pera.png', '2.02', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('18', '1', 'Melão Amarelo', 'O melão amarelo é menos calórico e sua durabilidade pode chegar a um mês quando conservado na geladeira. Aproximadamente 2,7kg.', 'melao.png', '6.10', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('19', '1', 'Abacate Jorel', 'O abacate possui um sabor adocicado com polpa verde-amarelada, de consistência mole, e envolve uma grande semente. Tem mais de 15% de gorduras (extraídas comercialmente tanto da semente, como do mesocarpo do fruto, e de aplicação cosmética) que são em sua maioria gorduras monoinsaturadas, as mesmas do azeite de oliva. Aproximadamente 900g.', 'abacate.png', '5.55', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('20', '1', 'Maracujá Azedo', 'O maracujá tem alto teor em vitamina C, ótimo antioxidante, e contém vitamina A, substância importante no combate ao câncer. Está presente no maracujá também o potássio, que equilibra o nível de sódio e evita a pressão alta e doenças vasculares cerebrais. Aproximadamente 500g', 'maracuja.png', '4.05', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('21', '3', 'Batata Marte', 'A batata é um dos alimentos mais importantes como fonte de energia, por ser rica em carboidratos ou açúcares, principalmente o amido, um polissacarídeo. Ela também é rica em água, vitamina B1, vitamina B2, vitamina C e sais minerais, entre os quais é importante salientar o potássio. A batata é cultivada e consumida no mundo todo, sendo, desta forma, um dos alimentos mais apreciados por todos. ', 'batata.png', '6.09', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('22', '3', 'Cenoura Solar', 'A cenoura é muito rica em betacaroteno (poderoso antioxidante e anticancerígeno). Também é uma excelente fonte de fibras, minerais (fósforo, potássio, cálcio e sódio) e vitaminas (A, B2, B3 e C). Aproximadamente 150g.', 'cenoura.png', '4.60', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('23', '3', 'Cebola Argentina', 'As cebolas são uma boa fonte de cromo, o componente mineral na tolerância à glicose, uma molécula que ajuda as células a responderem adequadamente à insulina. Aproximadamente 190g.', 'cebola.png', '3.40', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('24', '3', 'Tomate Extra', 'O tomate é rico em vitamina A e B9, cálcio, fósforo, magnésio e potássio, que ajuda a desenvolver ossos e músculos, além de proteger o sistema imunológico. Aproximadamente 225g.', 'tomate.png', '6.70', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('25', '3', 'Chuchu Domar', 'O chuchu representa importante fonte de minerais como ferro, magnésio, potássio, fósforo e cálcio. Possui alto teor de fibras, o que faz com que desempenhe um importante papel no funcionamento dos intestinos. Em menor proporção, o chuchu possui uma pequena quantidade de vitaminas do complexo B e um pequeno teor de vitamina C. Se for cozido sem sal, o chuchu é recomendado para o tratamento da pressão arterial alta e tem efeitos diuréticos. Aproximadamente 500g.', 'chuchu.png', '4.40', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('26', '3', 'Batata Doce', 'A batata doce roxa tem propriedades anti-inflamatórias, graças à vitamina C, vitamina B6, betacaroteno, e manganês. Elas são eficazes na cura de inflamações internas e externas. Além disso, é uma boa fonte de fibra, ajudando a promover um sistema digestivo mais saudável. Aproximadamente 440g.', 'batatadoce.png', '2.80', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('27', '3', 'Pepino Americano', 'O pepino é uma fruta de baixa caloria e rico em fibras sabendo disso ele vai ajudar você a saciar a fome sem acrescentar uma quantidade substancial de calorias a sua refeição. Aproximadamente 180g.', 'pepino.png', '1.10', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('28', '3', 'Beringela Okala', 'A berinjela é rica em fibras, tem baixa caloria e promove melhor funcionamento intestinal. Aproximadamente 450g.', 'beringela.png', '3.90', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('29', '3', 'Beterraba Toronto', 'A beterraba é um tubérculo que possui várias propriedades nutritivas e medicinais. Promovem o bom funcionamento do organismo e previnem doenças como a anemia, e distúrbios do fígado e do baço. Aproximadamente 330g.', 'beterraba.png', '1.20', '400');

INSERT INTO `deliveg_db_v2`.`produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `foto`, `preco`, `estoque`) VALUES ('30', '3', 'Pimentão Vermelho', 'O pimentão é um vegetal de sabor levemente picante, rico em fibra, vitamina C e vitamina A, minerais como cálcio, ferro e fósforo. É também um excelente antioxidante natural e um bom protetor das células. Aproximadamente 250g.', 'pimentao.png', '3.90', '400');