-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Ago-2022 às 23:36
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jogoszerados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nome_cat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_link` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nome_cat`, `cat_link`) VALUES
(1, 'Ação', 'acao.php'),
(2, 'Aventura', 'aventura.php'),
(3, 'Corrida', 'corrida.php'),
(4, 'Tiro em 1 pessoa', 'first.php'),
(5, 'Horror Psicológico', 'horror_psico.php'),
(6, 'Horror', 'horror.php'),
(7, 'Rack and Slash', 'rns.php'),
(8, 'RPG', 'rpg.php');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `id_jogo` int(11) NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_categoria` varchar(50) NOT NULL,
  `imagem` mediumblob NOT NULL,
  `nota` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id_jogo`, `nome`, `descricao`, `id_categoria`, `imagem`, `nota`) VALUES
(1, 'Donkey Kong Country 3', 'Donkey Kong Country 3: Dixie Kongs Double Trouble! é um jogo eletrônico de plataforma desenvolvido pela Rare e publicado pela Nintendo para o Super Nintendo Entertainment System em 1996. É a terceiro título da série Donkey Kong Country e serve como uma se', '2', 0x696d672f313635393239313339392e6a7067, '10.0'),
(2, 'Palmyra', 'Paranormal first-person horror, which takes place in an abandoned orphanage. Walk through the corridors of your childhood, but do remember that you re not only one here.', '5', 0x696d672f313635393239313536392e6a7067, '6.0'),
(3, 'Layers of Fear 2', 'ayers of Fear 2 é um jogo de horror psicológico em primeira pessoa com ênfase na exploração e história. Os jogadores controlam um ator de Hollywood que atende ao chamado de um enigmático diretor para assumir o papel principal em um filme gravado a bordo d', '5', 0x696d672f313635393239313732302e6a7067, '8.0'),
(4, 'Dark Pictures Man of Medan', 'The Dark Pictures Anthology são jogos de terror individuais, cinematográficos, com ramificações e que podem ser jogados com um amigo online. Em Man of Medan, cinco amigos zarpam em uma viagem de mergulho que logo se torna algo muito mais sinistro.', '6', 0x696d672f313635393239323037302e6a7067, '9.0'),
(5, 'The Blair Witch', 'Inspirado pelo folclore cinematográfico de Blair Witch, vivencie um novo jogo de terror psicológico com foco narrativo que estuda suas reações ao medo e estresse.', '5', 0x696d672f313635393239323334332e6a7067, '9.0'),
(6, 'A Plague Tale Innocence', 'Segue o conto sombrio da jovem Amicia e do seu irmãozinho Hugo, numa viagem pelos momentos mais negros da história.', '2', 0x696d672f313635393239323339372e6a7067, '10.0'),
(7, 'Hellblade: Senua s Sacrifice', 'Dos criadores de Heavenly Sword, Enslaved: Odyssey to the West e DmC: Devil May Cry, chega a jornada brutal de um guerreiro pelo mito e loucura. Ambientado na era viking, um arruinado guerreiro celta embarca numa aventura visionária e inquietante pelo Inf', '2', 0x696d672f313635393239323830352e6a7067, '8.0'),
(8, 'The Beast Inside', 'The Beast Inside traz uma visão distinta e emocionante para o gênero do suspense e do survival horror. Jogue com dois protagonistas ligados por uma herança sombria e mergulhe em uma história cheia de segredos esquecidos, tragédias pessoais e intensa loucura.', '5', 0x696d672f313635393239333138342e6a7067, '8.0'),
(9, 'The Convenience Store', 'The Convenience Store is a J-horror game about a college girl on a night shift.', '5', 0x696d672f313635393239333435312e6a7067, '7.0'),
(10, 'Okaeri', 'Okaeri é um jogo de terror psicológico VHS japonês sobre uma garota do ensino médio e sua mãe que se mudou recentemente para uma nova casa.', '5', 0x696d672f313635393239333631322e6a7067, '7.0'),
(11, 'The Dark Occult', 'The Dark Occult é um jogo de terror psicológico que coloca os jogadores em constante ansiedade acrescentando pânico e terror. Você vai encontrar criaturas grotescas, que vão tirar sua vida a qualquer momento. Seu único objetivo é: Sobreviver.', '5', 0x696d672f313635393239333932382e6a7067, '8.3'),
(12, 'Outlast 2', 'Outlast 2 traz-te Sullivan Knoth e os seus seguidores, que abandonaram o nosso mundo cruel para fundar Temple Gate, uma cidade situada nas profundezas do deserto, longe da civilização. Knoth e o seu rebanho estão a preparar-se para as adversidades do fim dos tempos, e tu estás no centro do furacão.', '6', 0x696d672f313635393239343039302e6a7067, '9.5'),
(13, 'Crash Bandicoot 3 Warped', 'Crash Bandicoot: Warped, chamado na Europa de Crash Bandicoot 3: Warped é o terceiro jogo da série Crash Bandicoot e foi lançado pela Naughty Dog para o PlayStation em 31 de outubro de 1998.', '2', 0x696d672f313635393239343231372e6a7067, '9.0'),
(14, 'Education', 'Having done some terrible things in his youth at school, his memories call Bart Blake back to that place, in his nightmares.', '5', 0x696d672f313635393239343432372e6a7067, '6.0'),
(15, 'Locked Up', 'The game takes place in a house where terrible events occurred earlier. You will have to repeatedly wander along the same corridor in order to uncover the causes of insanity and understand who you are.', '5', 0x696d672f313635393239343533352e6a7067, '6.4'),
(16, 'Folia Dear Father', 'Follia – Dear Father is a stealth survival horror that captures the genres essence in the halls and rooms of a university campus. Marcus goes in search of his parents, but instead finds himself struggling for his life against deadly horrors that creep around every corner.', '6', 0x696d672f313635393239343637332e6a7067, '7.0'),
(17, 'Adam Lost Memories', 'Adam - Lost Memories is a psychological horror puzzle game, based on my personal experiences with child abuse.', '5', 0x696d672f313635393239353034352e6a7067, '7.8'),
(18, 'Let Me Leave Corona Zone', 'Jogo Péssimo, entre loopings de corredores infinitos e puzzles, nao dura 3 min de jogo.', '5', 0x696d672f313635393239353136342e6a7067, '3.5'),
(19, 'The Trud', 'The Trud é um jogo de terror que combina um esquema de leva e trás de itens com stealth, nele você terá que buscar explicações e achar o seu caminho enquanto monstros tentam te pegar.', '6', 0x696d672f313635393239353331332e6a7067, '6.5'),
(21, 'The Bunker 58', 'Locked inside of Bunker 58 with major threats surrounding you, you question yourself how much you value your life, and how much you will kill to keep it.', '5', 0x696d672f313635393239353533312e6a7067, '3.4'),
(22, 'Borderlands 3', 'O jogo de tiro e saque original voltou, trazendo milhares de armas e uma nova aventura movida a caos! Exploda novos inimigos em mundos inéditos como um dos quatro Caça-Arcas novos, com árvores de talentos, habilidades e personalização robustas', '4', 0x696d672f313635393330303237322e6a7067, '9.3'),
(23, 'House On The Hill', 'House On The Hill é um jogo de survive Horror ambientado numa mansão abandonada, onde nosso protagonista planeja assaltar joias da família que supostamente estão escondidas lá dentro, porem, a mansão nao está tão abandonada assim.', '8', 0x696d672f313635393330393136362e6a7067, '6.2'),
(24, 'Mortal Shell', 'Mortal Shell é um RPG de ação que testará sua sanidade e perseverança em um mundo despedaçado. Seus oponentes não são piedosos, sua sobrevivência depende de percepção, precisão e instintos elevados. Possua guerreiros esquecidos, explore santuários ocultos dos devotos e enfrente vários Chefes. ', '8', 0x696d672f313635393330393234382e6a7067, '7.0'),
(25, 'Maid of Sker', 'A Donzela de Sker é um terror de sobrevivência em primeira pessoa ambientado em um hotel remoto com uma história macabra do folclore britânico. Enfrente os pesadelos dos Homens do Silêncio. Quando eles chegarem, não entre em pânico – nem mesmo respire.', '6', 0x696d672f313635393330393332342e6a7067, '8.0'),
(26, 'Rage 2', 'RAGE 2 reúne dois grandes estúdios, a Avalanche Studios, mestres da insanidade em mundo aberto, e a id Software, criadores dos jogos de tiro em primeira pessoa, para proporcionar um festival de carnificina no qual você pode ir a qualquer lugar, atirar em qualquer coisa e explodir tudo.', '4', 0x696d672f313635393330393337342e6a7067, '8.5'),
(27, 'Infliction', 'Wander through an interactive nightmare set within the confines of a once-happy household. Piece together the mystery behind a harrowing series of events while struggling to survive encounters with an entity that relentlessly stands in the way of finding absolution.', '5', 0x696d672f313635393330393437332e6a7067, '8.2'),
(28, 'Wounded - The Beginning', 'Wounded is a first-person survival horror game, bringing you the old-school indie horror vibe through a detailed and eerie environment.', '6', 0x696d672f313635393330393634352e6a7067, '7.4'),
(29, 'An Evil Existence', 'Jogo com cara de Resident Evil 7, porem de estagiários kkk, mas da pra perder um tempo tomando sustos.', '5', 0x696d672f313635393330393739382e6a7067, '6.3'),
(30, 'Cold Side', 'ColdS ide is a psychological horror first-person game. It takes place in an abandoned underground laboratory that studied anomalous phenomena.', '6', 0x696d672f313635393330393933352e6a7067, '7.0'),
(31, 'Dark Pictures Little Hope', 'Presos e isolados na cidade abandonada de Little Hope, quatro estudantes e um professor precisam escapar das aparições assustadoras que os perseguem implacavelmente em meio a um nevoeiro impenetrável.', '6', 0x696d672f313635393330393938362e6a7067, '9.3'),
(32, 'Chronos Before the Ashes', 'Chronos: Before the Ashes é um RPG imersivo que narra a jornada duradoura de um herói que tenta salvar sua terra de um grande mal.', '8', 0x696d672f313635393336363936382e6a7067, '7.8'),
(33, 'Misery Mansion', 'Misery Mansion é um jogo de terror de sobrevivência em primeira pessoa. Depois que seu carro quebrou, você se encontra indefeso em uma floresta. Sozinho, você procurará ajuda no escuro. Você descobrirá e explorará uma misteriosa mansão antiga. Mas logo tudo o que você quer é escapar dos horrores internos.', '6', 0x696d672f313635393338383235372e6a7067, '6.8'),
(34, 'The Medium', 'Desvende um mistério sombrio que só uma médium pode resolver. Viaje até um resort abandonado e use suas habilidades psíquicas para revelar seus segredos perturbadores, resolver quebra-cabeças de dupla realidade, sobreviver a espíritos sinistros e explorar dois mundos ao mesmo tempo.', '6', 0x696d672f313635393338383331342e6a7067, '9.0'),
(35, 'Martha', 'Em busca de seu colega desaparecido, seu carro quebra. Você entra na única casa em quilômetros para usar o telefone. O que se segue a seguir só pode ser descrito como uma luta intensa pela sobrevivência. Que horrores havia dentro da casa? Só uma coisa é certa: você precisa sair.\r\n', '6', 0x696d672f313635393338383430372e6a7067, '5.7'),
(36, 'Amnesia Rebirth', 'Uma nova descida até a escuridão, dos criadores da icônica série Amnesia. Uma jornada angustiante pela desolação e desespero, explorando os limites da resistência humana. Também disponível no Modo Aventura para aqueles que querem a história e a aventura sem o horror.', '6', 0x696d672f313635393338383435382e6a7067, '9.3'),
(37, 'Depth 6', 'Existem 6 profundidades para descer; quanto mais longe você for, mais terror você experimentará. Descubra mistérios, resolva quebra-cabeças e mergulhe em um enredo sombrio que Inside Depth 6 tem a oferecer. Viaje por todas as 6 profundezas para descobrir os segredos enterrados.\r\n', '5', 0x696d672f313635393338383534392e6a7067, '7.0'),
(38, 'Evil Inside', 'Evil Inside é um jogo de terror psicológico em primeira pessoa. Após a morte de sua mãe e a prisão de seu pai por causa disso, Mark decide entrar em contato com ela usando o tabuleiro espiritual. Mark enfrentará seus maiores medos para descobrir a verdade.', '5', 0x696d672f313635393338383633352e6a7067, '6.0'),
(39, 'Dont Be Afraid', 'Dont Be Afraid é um jogo de terror e aventura, que permite personificar um menino sequestrado por um psicopata. Você tem que sobreviver, escapar e descobrir como você foi sequestrado. Explorando a gigantesca e misteriosa casa de seu torturador, você logo revelará muitos segredos, escondidos dentro de suas paredes', '6', 0x696d672f313635393338383830302e6a7067, '5.2'),
(40, 'Iblis', 'IBLIS é um jogo de terror psicológico em primeira pessoa. Quanto um jogo pode afetar sua vida real? Desfrute de um ambiente doméstico realista e momentos aterrorizantes de estar imerso em uma história da vida real.\r\n', '5', 0x696d672f313635393338383837372e6a7067, '6.7'),
(41, 'Presence', 'Mergulhe no mundo da tragédia sangrenta que aconteceu no internato e sinta o medo e a presença assustadora de alguém.\r\n', '5', 0x696d672f313635393338393035302e6a7067, '5.5'),
(42, 'Silence Channel', 'Um incidente ruim é como um nó emaranhado, Ele fica ali, esperando que alguém ou algo o desamarre, mas até lá… cicatrizes podem ficar para trás…', '5', 0x696d672f313635393338393139352e6a7067, '5.0'),
(43, 'Wrong Floor', 'Wrong Floor é um jogo de terror em primeira pessoa de aproximadamente 15 minutos. Elevador com o personagem principal cai no porão, mas quem mora lá claramente não gosta. Você pode sair deste lugar terrível?', '5', 0x696d672f313635393338393239332e6a7067, '7.3'),
(44, 'Helpless', 'Um pequeno jogo de terror de sobrevivência com gráficos de estilo retrô semelhantes aos consoles do passado. Explore, colete itens e esconda-se de quando possível.\r\n', '5', 0x696d672f313635393338393433332e6a7067, '4.0'),
(45, 'Night Delivery', 'Night Delivery é um jogo de Horror Psicológico progressivo, onde a cada entrega feita, mais tenso a ambientação e as histórias contadas pelos moradores se revelam ser.', '5', 0x696d672f313635393338393539302e6a7067, '7.0'),
(46, 'Tormented Souls', 'O terror de sobrevivência clássico está de volta! Inspirado na série original Resident Evil e Alone in the Dark, Tormented Souls se moderniza com uma nova reviravolta na aventura de perspectiva fixa - enquanto Caroline Walker investiga o misterioso desaparecimento de meninas gêmeas em uma terrível mansão transformada em hospital.\r\n', '6', 0x696d672f313635393338393731322e6a7067, '8.3'),
(47, 'Project Nightmares', 'Project Nightmares é uma sobrevivência de horror em primeira pessoa com uma estrutura processual de sustos únicos. Conectado a uma máquina, você será induzido a dormir para fazer parte desse pesadelo e descobrir a terrível história de Henrietta Kedward, uma velha horrível com um passado ', '6', 0x696d672f313635393338393736332e6a7067, '8.0'),
(48, 'Burn Me Alive', 'Explore um mundo surreal, resolva quebra-cabeças, lute contra monstros e chegue ao fundo do mistério deste emocionante thriller de terror.\r\n', '6', 0x696d672f313635393338393830382e6a7067, '6.0'),
(49, 'Dark Pictures House of Ashes', 'A Guerra do Iraque está chegando ao fim, e as forças especiais em busca de armas de destruição em massa encontram algo muito mais mortal: um templo sumeriano soterrado com um ninho de criaturas sobrenaturais. Para sobreviver à noite, eles precisam formar uma irmandade com os inimigos ', '6', 0x696d672f313635393338393835312e6a7067, '9.2'),
(50, 'Whitehaven ', 'Descobrir os mistérios do orfanato Whitehaven neste jogo de terror psicológico em primeira pessoa. Explore o lugar, colete pistas e recomponha o que aconteceu anos atrás enquanto você mergulha no fundo de sua mente.', '5', 0x696d672f313635393339313036302e6a7067, '5.5'),
(51, 'Village The Siberia ', 'Descubra o terrível segredo da Sibéria como um garotinho na primeira pessoa.', '5', 0x696d672f313635393430303636392e6a7067, '4.2'),
(52, 'Indicted', 'INDICTED é um jogo de terror psicológico em primeira pessoa, explorando os medos de Arthur, um investigador da polícia com um passado sombrio. Com gráficos e ambientes imersivos, e um toque do terror dos anos 80 e 90. Trazendo assim uma experiência única de terror e sobrevivência.', '6', 0x696d672f313635393430303732362e6a7067, '6.5'),
(53, 'Mothered', 'Uma aventura de terror imersiva em primeira pessoa onde você interpreta o papel de LIANA - uma jovem que chega em casa após uma grande cirurgia e se depara com um estranho manequim que afirma ser sua mãe.', '5', 0x696d672f313635393430303737312e6a7067, '5.2'),
(54, 'Blink The Last Night', 'Uma entidade vingativa vem sequestrar a garota que você está cuidando. Guie seu caminho através de várias reviravoltas psicológicas à medida que você começa a perceber que nem tudo é o que parece. BLINK The Last Night é um primeiro capítulo curto de uma história de terror psicológico de quatro capítulos.', '5', 0x696d672f313635393430303832342e6a7067, '6.0'),
(55, 'Outlast', 'O inferno é um experimento ao qual você não pode sobreviver em Outlast, um jogo de terror de sobrevivência em primeira pessoa desenvolvido por veteranos de algumas das maiores franquias de jogos da história. Como o jornalista investigativo Miles Upshur, explore o Mount Massive Asylum e tente sobreviver tempo suficiente para descobrir seu terrível segredo... se você ousar.', '6', 0x696d672f313635393430303933342e6a7067, '10.0'),
(56, 'The Evil Within', 'Ao investigar a cena de um terrível assassinato em massa, o detetive Sebastian Castellanos e seus parceiros encontram uma força misteriosa e poderosa. Depois de ver o massacre de colegas oficiais, Sebastian é emboscado e fica inconsciente. Quando ele acorda, ele se encontra em um mundo perturbado onde criaturas horríveis vagam entre os mortos.\r\n', '6', 0x696d672f313635393430313031362e6a7067, '9.7'),
(57, 'The Evil Within - The Assigment', 'Experimente o terror de sobrevivência de uma nova perspectiva com The Evil Within: The Assignment. Esta é a primeira de uma experiência de duas partes, guiada pela história, onde os jogadores assumem o papel da detetive Juli Kidman, parceira misteriosa de Sebastian Castellanos, em uma história simultânea que procura responder a algumas das perguntas em torno de seu paradeiro durante The Evil Within.\r\n', '6', 0x696d672f313635393430313131302e6a7067, '8.2'),
(58, 'The Evil Within - The Consequance', 'Ao longo do caminho, ela encontrará novos inimigos perturbadores, descobrirá novos mistérios e descobrirá novos horrores. The Consequence oferece aos fãs de The Evil Within a oportunidade perfeita de continuar descobrindo as motivações ocultas da detetive Kidman e sua misteriosa conexão com Mobius, o grupo sombrio que se acredita estar por trás dos terríveis eventos de The Evil Within.\r\n', '6', 0x696d672f313635393430313139392e6a7067, '8.2'),
(59, 'Martha is Dead', 'Ambientado na Itália de 1944, Martha Is Dead é um suspense psicológico sombrio em primeira pessoa que mescla realidade, superstição e a tragédia da guerra.', '5', 0x696d672f313635393430313233392e6a7067, '8.8'),
(60, 'Outlast Whistleblower', 'Whistleblower permitirá que você jogue como Waylon Park, um engenheiro de software contratado por Murkoff e o homem que enviou e-mails a jornalistas de todo o mundo - incluindo Miles - no início de Outlast. Passando algumas semanas em Mount Massive, durante as quais ele foi incapaz de falar com sua esposa e filho graças a protocolos de segurança rígidos, Waylon desenvolveu uma profunda desconfiança dos cientistas e médicos motivados pelo lucro que lideravam experimentos perigosos e irresponsávei', '6', 0x696d672f313635393430313333322e6a7067, '9.8'),
(61, 'Fobia - Santa Dinfna Hotel', 'Passado, presente e futuro colidem no jogo de sobrevivência de terror Fobia: St. Dinfna Hotel. Explore um hotel em várias linhas do tempo e revele a história de uma seita e seu papel no plano deles.', '6', 0x696d672f313635393438373432332e6a7067, '7.7'),
(62, 'MADiSON', 'MADiSON é um game de terror psicológico em primeira pessoa, com uma experiência de jogo inquietante e uma narrativa perturbadora e convincente, O que você faria se acordasse trancado em um quarto escuro, com as mãos cobertas de sangue? Jogue como Luca e resista a tortura bruta de MADiSON, um demônio que fez com que você continue um ritual sangrento iniciado décadas atrás, e cometa atos abomináveis. Você conseguirá terminar esta cerimônia sinistra?', '5', 0x696d672f313635393830303936392e6a7067, '10.0');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id_jogo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id_jogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
