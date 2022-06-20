<html>

<head>

<title>História Aqui <?php if(isset($_GET['op'])){echo $_GET['op'];} ?></title>
  <!-- CSS only -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta charset="UTF-8">
</head>

<body>



<?php if(isset($_GET['op'])){ ?>

<?php if($_GET['op'] == 1) { ?>

	<div class="container">
    <div class="row">
      <div class="col-sm">

        <!-- Image and text -->
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="index.php">
            <img src="img\864685.png" width="30" height="30" class="d-inline-block align-top" alt="">
            História Aqui
          </a>
        </nav>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Dropdown link
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php?op=1">Guerra Civil Chinesa</a>
                <a class="dropdown-item" href="index.php?op=2">Revolução Francesa</a>
                <a class="dropdown-item" href="index.php?op=3">Peste Negra</a>
              </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="row">
      <div class="col-sm">
        &nbsp;
      </div>
      <div class="row">
        <div class="col-sm">
          <img src="img\guerra-civil-chinesa (1).jpg" class="d-block w-100">
          <br>
          <h3>
            Guerra Civil Chinesa
          </h3>
          <h5 style="text-align: justify;">
            Guerra Civil Chinesa (1927–1937; 1946–1949) foi uma série de conflitos entre forças chinesas nacionalistas e
            comunistas. Sua localização temporal é discutível, e de modo geral refere-se à Guerra Civil Chinesa apenas
            como a fase final ocorrida após o término da Segunda Guerra Mundial; no entanto o conflito remonta ao fim da
            dinastia Qing, em 1911.
          </h5>
          <br>
          <p style="text-align: justify;">
            As hostilidades irromperam em 1927, durante a Expedição do Norte de Chiang Kai-shek, com o expurgo de
            antiesquerdistas do Kuomintang ("Partido Nacional do Povo", nacionalista, fundado pelo médico Sun Yat-sen) e
            uma série de levantes comunistas urbanos fracassados. O poder comunista foi então melhor estabelecido na
            área rural, e os seus defensores utilizavam táticas de guerrilha para neutralizar a força nacionalista, que
            era superior. Após uma campanha de três anos, Chiang finalmente conseguiu destruir os sovietes Jiangxi
            (bases rurais comunistas) criados por Mao Tsé-Tung, mas após a Grande Marcha (1934-1935), os comunistas
            conseguiram reinstalar-se em Yan'an, no norte do país.
          </p>
        </div>
        <div class="col-sm">
          <div class="accordion" id="accordionExample">
            <div class="col">
              <div class="card">
                <div class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    A Primeira Frente Unida
                  </button>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p style="text-align: justify;">
                      Sun Yat-sen, líder do Kuomintang (KMT), procurou a ajuda de potências estrangeiras para derrotar
                      os
                      senhores da guerra que tinham tomado o controle do norte da China após a queda da dinastia Qing em
                      1911 com a Revolução de Xinhai. As democracias ocidentais ignoraram os esforços do líder
                      nacionalista para atrair ajuda. No entanto, em 1921, Sun Yat-sen voltou-se para a União Soviética.
                      Fazendo uso do pragmatismo político, os líderes soviéticos lançaram uma política ambígua apoiando
                      o
                      KMT de Sun ao mesmo tempo que o recém-fundado Partido Comunista da China (PCC). Os soviéticos
                      esperavam a consolidação dos comunistas, mas estavam preparados para a vitória de qualquer lado.
                      Assim começou a luta pelo poder entre os nacionalistas e comunistas.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="headingTwo">
                  <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    Campanhas Anticomunistas (1927 - 1937)
                  </button>
                </div>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Durante a Revolução Agrária, os ativistas do Partido Comunista recuaram a clandestinidade ou ao
                      interior, onde promoveram um levante militar (o Levante de Nanchang em 1 de Agosto de 1927),
                      uniram
                      forças aos rebeldes camponeses remanescentes e passaram a gerenciar várias áreas do sul da China.
                      Os
                      esforços dos nacionalistas para sufocar a revolta fracassaram, mas danificou seriamente o campo
                      comunista.</p>

                    <p>Depois de Chiang Kai-shek abortar um golpe para derrubá-lo conduzido por Feng Yuxiang, Wang
                      Jingwei
                      e Yan Xishan, dedicou seus esforços para desfazer os focos de atividade comunista. As duas
                      primeiras
                      campanhas falharam e a terceira foi abortada devido ao incidente de Mukden. A quarta campanha
                      (1932-1933) começou com algumas vitórias, mas as tropas de Chiang cometeram grande erro em tentar
                      atingir o coração da República Soviética da China sob Mao Tse-tung. Finalmente, no final de 1933,
                      Chiang lançou uma quinta campanha orquestrada pelos seus consultores alemães que implicaram no
                      cerco
                      sistemático da região soviética de Jiangxi com fortins fortificados. No outono de 1934, os
                      comunistas enfrentam a possibilidade real de serem completamente derrotados. Parecia que era
                      chegada
                      a hora de dar o golpe de misericórdia no PCC, para atacar depois os últimos senhores da guerra
                      antes
                      de possam começar a atacar seus ocupantes japoneses na Manchúria.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="headingThree">
                  <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                    Guerra Sino-Japonesa (1937 - 1945)
                  </button>
                </div>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Durante a invasão e ocupação da Manchúria pelos japoneses, Chiang Kai-shek se recusou a aliar-se
                      com
                      os comunistas para lutar contra os japoneses, já que considerava os primeiros uma ameaça maior. Em
                      12 de dezembro de 1936, os generais Zhang Xueliang e Yang Hucheng, ambos do KMT, seqüestraram
                      Chiang
                      Kai-shek e ordenaram-lhe para assinar uma trégua com os comunistas. Esse episódio se tornaria
                      conhecido como o Incidente de Xi’an. As duas partes concordaram em suspender as hostilidades e
                      formar uma Segunda Frente Unida, que se concentrariam todas as suas energias contra os japoneses.
                    </p>

                    <p>No entanto, a aliança era apenas nominal. A verdadeira colaboração e coordenação entre o KMT e o
                      PCC
                      foram mantidas minimamente durante toda a Segunda Guerra Mundial. No meio da Segunda Frente Unida,
                      os comunistas e o Kuomintang ainda estavam procurando obter ganhos territoriais na "China Livre"
                      (ou
                      seja, áreas não ocupadas pelos japoneses ou governadas por governos fantoches). A situação atingiu
                      a
                      um ponto que no final de 1940 e início de 1941, confrontos de considerável importância tiveram
                      lugar
                      entre as forças comunistas e do KMT. Em dezembro de 1940, Chiang Kai-shek exigiu a retirada do
                      Novo
                      Quarto Exército do PCC, nas províncias de Anhui e Jiangsu. Os novos comandantes do Exército Quarto
                      fizeram à retirada exigida pelo KMT, mas foram emboscados por forças nacionalistas que
                      infligiram-lhes uma retumbante derrota em janeiro de 1941.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="headingFour">
                  <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="false" aria-controls="collapseFour">
                    Ultimas Etapas do Confito
                  </button>
                </div>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Com o colapso das negociações de paz entre o Kuomintang e o Partido Comunista Chinês, a guerra total
                    entre estas duas forças são retomadas. A União Soviética forneceu ajuda limitada para os comunistas,
                    e os Estados Unidos ajudaram os nacionalistas com centenas de milhões de dólares em suprimentos,
                    equipamentos militares e munições, bem como o transporte aéreo de muitas tropas nacionalistas da
                    região central da China à Manchúria, uma área que Chiang Kai-Shek via como estrategicamente vital
                    para a defesa Nacionalista nas zonas controladas contra um avanço comunista.</p>

                    <p>Tardiamente, o governo nacionalista também tentou obter o apoio popular através de reformas
                    internas. O esforço foi em vão, no entanto, por causa da corrupção desenfreada no governo, que vinha
                    acompanhada ao caos político e económico, incluindo hiperinflação maciça. No final de 1948, a
                    posição nacionalista era desoladora. As tropas nacionalistas desmoralizadas e indisciplinadas não
                    mostraram-se páreo para o Exército de Libertação Popular dos comunistas. Os comunistas estavam bem
                    estabelecidos no norte e nordeste, enquanto os nacionalistas, que tinham uma vantagem em número de
                    homens e armas, controlavam território e população muito maior do que os seus adversários, e contava
                    com o apoio internacional considerável, no entanto, sofreu com a falta de moral e a corrupção
                    desenfreada que reduzia grandemente a sua capacidade de luta e o seu apoio civil. Especialmente
                    durante a II Guerra Mundial, o melhor das tropas nacionalistas ou foram feridos ou mortos, enquanto
                    os comunistas haviam sofrido perdas menores.</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-light bg-light ml-auto">
            <a class="navbar-brand" href="#" style="text-align: center; width: 100%; font-size: 10pt">
              HistóriaAqui - Copyright 2021 - Todos os direitos reservados
            </a>
          </nav>
        </div>
      </div>

<?php } elseif($_GET['op'] == 2){ ?>

	<div class="container">
        <div class="row">
            <div class="col-sm">

                <!-- Image and text -->
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="img\864685.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        História Aqui
                    </a>
                </nav>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php?op=1">Guerra Civil Chinesa</a>
                <a class="dropdown-item" href="index.php?op=2">Revolução Francesa</a>
                <a class="dropdown-item" href="index.php?op=3">Peste Negra</a>
              </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-sm">
                &nbsp;
            </div>
            <div class="row">
                <div class="col-sm">
                    <img src="img\c50717b417f48d45607fbb586221edc1.jpg" class="d-block w-100">
                    <br>
                    <h3>
                        Revolução Francesa
                    </h3>
                    <h5 style="text-align: justify;">
                        Revolução Francesa (em francês: Révolution française) foi um período, entre 1789 e 1799, de
                        intensa agitação política e social na França, que teve um impacto duradouro na história do país
                        e, mais amplamente, em todo o continente europeu.
                    </h5>
                    <br>
                    <p style="text-align: justify;">
                        A monarquia absolutista que tinha governado a nação durante séculos entrou em colapso em apenas
                        três anos. A sociedade francesa passou por uma transformação épica, quando privilégios feudais,
                        aristocráticos e religiosos evaporaram-se sobre um ataque sustentado de grupos políticos
                        radicais, das massas nas ruas e de camponeses na região rural do país.[1] Antigos ideais da
                        tradição e da hierarquia de monarcas, aristocratas e da Igreja Católica foram abruptamente
                        derrubados pelos novos princípios de Liberté, Égalité, Fraternité (em português: liberdade,
                        igualdade e fraternidade). As casas reais da Europa ficaram aterrorizadas com a revolução e
                        iniciaram um movimento contrário que, até 1814, tinha restaurado a antiga monarquia, mas muitas
                        reformas importantes tornaram-se permanentes. O mesmo aconteceu com os antagonismos entre os
                        partidários e inimigos da revolução, que lutaram politicamente ao longo dos próximos dois
                        séculos.
                    </p>
                    <p style="text-align: justify;">
                        Em meio a uma crise fiscal, o povo francês estava cada vez mais irritado com a incompetência do
                        rei Luís XVI e com a indiferença contínua e a decadência da aristocracia do país. Esse
                        ressentimento, aliado aos cada vez mais populares ideais iluministas, alimentaram sentimentos
                        radicais e a revolução começou em 1789, com a convocação dos Estados Gerais em maio. O primeiro
                        ano da revolução foi marcado pela proclamação, por membros do Terceiro Estado, do Juramento do
                        Jogo da Péla em junho, pela Tomada da Bastilha em julho, pela aprovação da Declaração dos
                        Direitos do Homem e do Cidadão em agosto e por uma épica marcha sobre Versalhes, que obrigou a
                        corte real a voltar para Paris em outubro. Os anos seguintes foram dominados por lutas entre
                        várias assembleias liberais e de direita feitas por apoiantes da monarquia no sentido de travar
                        grandes reformas no país.
                    </p>
                </div>
                <div class="col-sm">
                    <div class="accordion" id="accordionExample">
                        <div class="col">
                            <div class="card">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Antigo Regime: Crises Financeiras
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p style="text-align: justify;">
                                            A causa mais forte de Revolução foi econômica, já que as causas sociais,
                                            como de
                                            costume, não conseguem ser ouvidas por si sós. Os historiadores sugerem o
                                            ano de
                                            1789 como o início da Revolução Francesa. Mas esta, por uma das "ironias" da
                                            história, começou dois anos antes, com uma reação dos notáveis franceses —
                                            clérigos e nobres — contra o absolutismo, tendo sido inspirada em ideias
                                            iluministas, e se pretendia reformar e para isso buscava limitar seus
                                            privilégios. Luís XVI convocou a nobreza e o clero para contribuírem no
                                            pagamento de impostos, na altamente aristocrática Assembleia dos Notáveis
                                            (1787).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Monarquia Constitucional
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Após a Assembleia Nacional, o rei demitiu o ministro Jacques Necker,
                                            conhecido
                                            por suas posições reformistas. Em razão disso, a população de Paris se
                                            mobilizou
                                            e tomou as ruas da cidade. Os ânimos mais exaltados conclamavam todos a
                                            tomar as
                                            armas. O rei decidiu reagir fechando a Assembleia, mas foi impedido por uma
                                            sublevação popular em Paris, reproduzida a seguir em outras cidades e no
                                            campo.
                                            O Conde de Artois (futuro Carlos X) e outros dirigentes reacionários,
                                            defrontados a tais ameaças, fugiram do país, transformando-se no grupo dos
                                            émigrés. A burguesia parisiense, temendo que a população da cidade
                                            aproveitasse
                                            a queda do antigo sistema de governo para recorrer à ação direta,
                                            apressou-se a
                                            estabelecer um governo provisório local, a Comuna. Este governo popular, em
                                            13
                                            de julho, organizou a Guarda Nacional, uma milícia burguesa para resistir
                                            tanto
                                            a um possível retorno do rei, quanto a uma eventual mais violenta da
                                            população
                                            civil, cujo comando coube ao deputado da Assembleia e herói da independência
                                            dos
                                            Estados Unidos, Marie Joseph Motier, o Marquês de La Fayette. A bandeira dos
                                            Bourbons foi substituída por uma de cores vermelha, azul e branca, que
                                            passou a
                                            ser a bandeira nacional. E, em toda a França, foram constituídas unidades da
                                            milícia e governos provisórios.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Convenção (1792 - 1795)
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p style="text-align: justify;">
                                            Após o término das deliberações da Assembleia Constituinte em 1791, a
                                            burguesia
                                            passou a uma posição conservadora, por entender que as principais mudanças
                                            já
                                            haviam sido implementadas na sociedade francesa. A situação do povo mais
                                            pobre,
                                            porém, pouco tinha mudado. Os camponeses continuavam sem terra e nas cidades
                                            a
                                            situação tornava-se cada vez mais desesperadora. Em agosto de 1792, uma
                                            intensa
                                            mobilização popular destronou o rei, e depois de elaborar a Carta Magna
                                            francesa, a Assembleia Nacional Constituinte dissolveu-se. A Assembleia
                                            Legislativa substituiu a Constituinte. Havia ameaça de intervenção externa,
                                            crise econômica e inflação.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        República Jacobia
                                    </button>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Os jacobinos, com apoio dos sans-culottes e da Comuna de Paris (designação
                                            que
                                            foi dada ao novo governo local da cidade), assumiram o poder no momento
                                            crítico
                                            da Revolução. A Convenção reconheceu a existência do Ser Supremo e da
                                            imortalidade da alma. A virtude seria o elemento essencial da República. Em
                                            21
                                            de janeiro de 1793, Luís XVI foi executado na guilhotina na praça da
                                            Revolução.
                                            Vários países europeus, como a Áustria, Prússia, Holanda, Espanha e
                                            Inglaterra,
                                            indignados e temendo que o exemplo francês se refletisse em seus
                                            territórios,
                                            formaram a Primeira Coligação contra a França. Encabeçando a Coligação, a
                                            Inglaterra financiava os grandes exércitos continentais para conter a
                                            ascensão
                                            burguesa da França, seu potencial concorrente nos negócios europeus.</p>

                                        <p>No departamento de Vendeia, no oeste da França, camponeses
                                            contrarrevolucionários, instigados pela Igreja, pela nobreza e pelos
                                            ingleses,
                                            tomaram o poder. Os girondinos tentaram frear a proposta de mobilização
                                            geral do
                                            povo francês, temendo a perda do poder e a radicalização da revolução, que
                                            ameaçaria suas propriedades e bens. Em resposta, em 2 de junho de 1793, a
                                            população de Paris, agitada pelos partidários de Hébert, cercou o prédio da
                                            convenção, pedindo a prisão dos deputados girondinos. Os membros da Gironda
                                            foram expulsos da convenção deixando uma triste herança: inflação, carestia
                                            e
                                            avanço da contrarrevolução, tudo isso agravado pela guerra no plano externo.
                                            Marat, Hébert, Danton, Saint-Just e Robespierre assumiram o poder, dando
                                            início
                                            ao período da Convenção Montanhesa. A contrarrevolução camponesa da Vendeia
                                            e a
                                            ameaça externa colocavam a revolução à beira do abismo. Para combater essa
                                            situação, os jacobinos organizaram os comitês, cujos objetivos eram
                                            controlar o
                                            governo, combater os contrarrevolucionários e mobilizar a França para uma
                                            guerra
                                            total em defesa da revolução.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFive">
                                    <button class="accordion-button" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Impacto
                                    </button>
                                </div>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Entre os britânicos que acolheram (inicialmente) a Revolução Francesa como um
                                        acontecimento positivo conta-se Dugald Stewart. Stewart seguiu os acontecimentos
                                        em Paris nesse verão dramático de 1789. Ele acreditava nos princípios pelos
                                        quais a revolução se batia. Sentiu-se repelido quando leu os comentários de
                                        Edmund Burke no seu "Reflections on the Revolution in France". Burke previu
                                        acertadamente que a Revolução Francesa acabaria na perdição, terror, morte e
                                        ditadura. Um aluno de Stewart, James Mackintosh, escreveu em resposta uma
                                        apaixonada defesa da causa francesa. Nos anos seguintes, Stewart defendeu ainda
                                        a Revolução, apesar de o terror e o caos serem evidentes. Em novembro de 1791,
                                        Dugald Stewart escreve a um amigo: "As pequenas desordens que podem ocorrer num
                                        país onde as coisas em geral correm tão bem são de menor importância".</p>

                                        <p>Já no ano seguinte ver-se-ia que Burke tinha razão. Edmund Burke faleceu em
                                        1797, convicto de que a Revolução Francesa acabaria por terminar na ditadura.
                                        Napoleão veio dar-lhe razão. Burke ganhou na sociedade britânica uma reputação
                                        de um homem clarividente e perspicaz. Em forte contraste, Dugald Stewart perdeu
                                        o respeito dos seus concidadãos e foi ostracizado em Edimburgo, onde vivia.
                                        James Mackintosh pediu desculpas publicamente por criticar Burke e tornou-se um
                                        forte crítico do regime francês e das revoluções em geral.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-light bg-light ml-auto">
                        <a class="navbar-brand" href="#" style="text-align: center; width: 100%; font-size: 10pt">
                            HistóriaAqui - Copyright 2021 - Todos os direitos reservados
                        </a>
                    </nav>
                </div>
            </div>

<?php }else{?>

 <div class="container">
        <div class="row">
            <div class="col-sm">

                <!-- Image and text -->
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="img\864685.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        História Aqui
                    </a>
                </nav>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php?op=1">Guerra Civil Chinesa</a>
                <a class="dropdown-item" href="index.php?op=2">Revolução Francesa</a>
                <a class="dropdown-item" href="index.php?op=3">Peste Negra</a>
              </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-sm">
                &nbsp;
            </div>
            <div class="row">
                <div class="col-sm">
                    <img src="img\53604811_605.jpg" class="d-block w-100">
                    <br>
                    <h3>
                        Peste Negra
                    </h3>
                    <h5 style="text-align: justify;">
                        A Peste Negra (também conhecida como Grande Peste, Peste ou Praga) foi a pandemia mais
                        devastadora registada na história humana, tendo resultado na morte de 75 a 200 milhões de
                        pessoas na Eurásia, atingindo o pico na Europa entre os anos de 1347 e 1351.
                    </h5>
                    <br>
                    <p style="text-align: justify;">
                        Acredita-se que a bactéria Yersinia pestis, que resulta em várias formas de peste (septicémica,
                        pneumónica e, a mais comum, bubónica), tenha sido a causa. A Peste Negra foi o primeiro
                        grande surto europeu de peste e a segunda pandemia da doença. A praga criou uma série de
                        convulsões religiosas, sociais e económicas, com efeitos profundos no curso da história da
                        Europa.

                        A Peste Negra provavelmente teve a sua origem na Ásia Central ou na Ásia Oriental, de
                        onde viajou ao longo da Rota da Seda, atingindo a Crimeia em 1343.De lá, era provavelmente
                        transportada por pulgas que viviam nos ratos que viajavam em navios mercantes genoveses,
                        espalhando-se por toda a bacia do Mediterrâneo, atingindo o resto da Europa através da península
                        italiana.
                    </p>
                </div>
                <div class="col-sm">
                    <div class="accordion" id="accordionExample">
                        <div class="col">
                            <div class="card">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Origens
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p style="text-align: justify;">
                                            A doença da peste, causada por Yersinia pestis, é geralmente presente em
                                            populações de pulgas transportadas por roedores terrestres, incluindo
                                            marmotas
                                            em várias áreas, incluindo Uganda, oeste da Arábia, Curdistão, Norte da
                                            Índia, Deserto de Gobi, no Norte da China, e Ásia Central. Devido às
                                            mudanças climáticas na Ásia, os roedores começaram a fugir dos prados
                                            secos para
                                            áreas mais populosas, espalhando a doença. Em outubro de 2010, médicos
                                            geneticistas sugeriram que todas as três grandes ondas da peste tiveram
                                            a sua
                                            origem na China. Pesquisas em 2017 sobre sepulturas nestorianas datadas
                                            de 1338 a 1339, perto de Issyk-Kul, no Quirguistão, com inscrições
                                            referentes a
                                            peste, levaram muitos epidemiologistas a pensar que marcam o surto da
                                            epidemia;
                                            de onde poderia facilmente se espalhar para a China e para a Índia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Surto na Europa
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Parece ter havido várias introduções na Europa. A peste atingiu a Sicília em
                                            outubro de 1347, transportada por doze galés genovesas e rapidamente se
                                            espalhou por toda a ilha. As galés de Kaffa chegaram a Génova e Veneza em
                                            janeiro de 1348, mas foi o surto em Pisa, algumas semanas depois, que marcou
                                            o
                                            ponto de entrada para o norte da Itália. No final de janeiro, uma das galés
                                            expulsas da Itália chegou a Marselha.</p>

                                        <p>Da Itália, a doença espalhou-se para o noroeste por toda a Europa, atingindo
                                            a
                                            França, a Espanha que foi atingida pelo calor — a epidemia ocorreu nas
                                            primeiras
                                            semanas de julho, Portugal e Inglaterra em junho de 1348, continuando também
                                            a espalhar-se para o leste e norte através de Alemanha, Escócia e
                                            Escandinávia
                                            de 1348 a 1350. Foi introduzida na Noruega em 1349, quando um navio
                                            desembarcou
                                            em Askøy, espalhando-se depois para Bjørgvin (moderna Bergen) e Islândia.
                                        </p>

                                        <p>Por fim, continuou a propagar-se para o noroeste da Rússia em 1351.[48] A
                                            peste
                                            foi menos comum em partes da Europa com comércio menos desenvolvido com os
                                            seus
                                            vizinhos e através de quarentenas, incluindo a maioria do País Basco, partes
                                            isoladas da Bélgica, da Holanda, Polônia e aldeias alpinas isoladas de todo
                                            o
                                            continente.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Surto no Oriente Médio
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>A peste atingiu várias regiões do Médio Oriente durante a pandemia, levando a um
                                        grave despovoamento e mudanças permanentes nas estruturas económicas e sociais.
                                        Pode
                                        ter-se espalhado da Ásia Central com os mongóis para um posto comercial na
                                        Crimeia,
                                        de nome Kaffa, controlado pela República de Génova. Quando roedores infectados
                                        infectaram novos roedores, a doença espalhou-se por toda a região. No outono de
                                        1347, a peste atingiu Alexandria no Egipto, através do comércio do porto com
                                        Constantinopla e outros portos no Mar Negro. Durante 1347, a doença viajou para
                                        o
                                        leste, para Gaza, e para o norte, ao longo da costa leste, para as cidades
                                        modernas
                                        do Líbano, Síria, Israel e Palestina, incluindo Ashkelon, Acre, Jerusalém,
                                        Sidon,
                                        Damasco, Homs e Alepo. Em dois anos, a peste espalhou-se por todo o império
                                        muçulmano, da Arábia ao norte da África. Entre 1348 e 1349, a doença atingiu
                                        Antioquia. Os moradores da cidade fugiram para o norte, mas a maioria acabou
                                        morrendo durante a viagem.</p>

                                    <p>Meca foi infectada em 1349. Durante o mesmo ano, os registos mostram que a cidade
                                        de
                                        Mosul sofreu uma epidemia maciça e a cidade de Bagdade passou por uma segunda
                                        ronda
                                        da doença.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Causas
                                </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Hoje, a explicação dominante para a peste negra é a teoria da peste, que atribui o
                                    surto a Yersinia pestis, também responsável por uma epidemia iniciada no sul da
                                    China em 1865, que se espalhou mais tarde para a Índia. A investigação do agente
                                    patogénico que causou a praga do século XIX foi iniciada por equipas de cientistas
                                    que visitaram Hong Kong em 1894, entre os quais o bacteriologista franco-suíço
                                    Alexandre Yersin, após o qual o agente patogénico foi nomeado. O mecanismo pelo
                                    qual Y. pestis é normalmente transmitido foi estabelecido em 1898 por Paul-Louis
                                    Simond e descobriu-se que envolvia picadas de pulgas cujos intestinos estavam
                                    obstruídos pela replicação de Y. pestis vários dias após a alimentação em um
                                    hospedeiro infectado. Esse bloqueio mata as pulgas e leva-as a um comportamento
                                    alimentar agressivo e tenta eliminar o bloqueio por regurgitação, resultando em
                                    milhares de bactérias da peste sendo liberadas no local de alimentação, infectando o
                                    hospedeiro. O mecanismo da peste bubónica também dependia de duas
                                    populações de roedores: uma resistente à doença, que actua como hospedeiro, mantendo
                                    a doença endémica, e uma segunda que carece de resistência. Quando a segunda
                                    população morre, as pulgas passam para outros hospedeiros, incluindo pessoas,
                                    criando assim uma epidemia humana.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-light bg-light ml-auto">
                <a class="navbar-brand" href="#" style="text-align: center; width: 100%; font-size: 10pt">
                    HistóriaAqui - Copyright 2021 - Todos os direitos reservados
                </a>
            </nav>
        </div>
    </div>

<?php } ?>

<?php }else{ ?>

	<div class="container">
    <div class="row">
      <div class="col-sm">

        <!-- Image and text -->
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="index.php">
            <img src="img\864685.png" width="30" height="30" class="d-inline-block align-top" alt="">
            História Aqui
          </a>
        </nav>
      </div>
    </div>

    <div class="col-sm">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php?op=1">Guerra Civil Chinesa</a>
                <a class="dropdown-item" href="index.php?op=2">Revolução Francesa</a>
                <a class="dropdown-item" href="index.php?op=3">Peste Negra</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img\primeira-guerra-mundial-1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img\as-grandes-navegacoes-mudaram-o-mapa-do-mundo-2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img\aldrin_apollo_11.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
      <br>

      <div class="row">
        <div class="col-sm">
          <figure class="figure">
            <a href="index.php?op=1">
              <img src="img\guerra-civil-chinesa.jpg" class="figure-img img-fluid rounded"
                alt="A generic square placeholder image with rounded corners in a figure.">
            </a>
            <figcaption class="figure-caption">Guerra Civil Chinesa: Saiba como aconteceu</figcaption>
          </figure>
        </div>

        <div class="col-sm" style="text-align: center;">
          <figure class="figure">
            <a href="index.php?op=2">
              <img src="img\3af3d07c325998142650c615b8d04a0f.jpg" class="figure-img img-fluid rounded"
                alt="A generic square placeholder image with rounded corners in a figure.">
            </a>
            <figcaption class="figure-caption"><p style="text-align: left;">Revolução Francesa: Quais são seus impactos na nossa sociedade atual?</p>
            </figcaption>
          </figure>
        </div>

        <div class="col-sm" style="text-align: right;">
          <figure class="figure">
            <a href="index.php?op=3">
              <img src="img\design_sem_nome_5_o5LFRN1.jpg" class="figure-img img-fluid rounded"
                alt="A generic square placeholder image with rounded corners in a figure.">
            </a>
            <figcaption class="figure-caption"><p style="text-align: left;">Peste Negra: A mais mortal na história da humanidade</p> </figcaption>
          </figure>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <nav class="navbar navbar-light bg-light ml-auto">
            <a class="navbar-brand" href="#" style="text-align: center; width: 100%; font-size: 10pt">
              HistóriaAqui - Copyright 2021 - Todos os direitos reservados
            </a>
          </nav>
        </div>
      </div>
    </div>
  </div>


  <br>

<?php } ?>

</body>

</html>