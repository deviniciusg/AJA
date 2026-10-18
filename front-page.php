<?php
/**
 * Aliança Jurídica pela Amazônia (AJA) - Página Inicial (Front Page)
 *
 * Suporte nativo completo para Elementor (Canvas / Header-Footer / the_content)
 * com fallback dinâmico para a estrutura do tema.
 */

$page_id = get_queried_object_id();
$page_template = get_post_meta($page_id, '_wp_page_template', true);

if ($page_template === 'elementor_canvas') {
    $canvas_file = WP_PLUGIN_DIR . '/elementor/modules/page-templates/templates/canvas.php';
    if (file_exists($canvas_file)) {
        require $canvas_file;
        return;
    }
}

if ($page_template === 'elementor_header_footer') {
    $hf_file = WP_PLUGIN_DIR . '/elementor/modules/page-templates/templates/header-footer.php';
    if (file_exists($hf_file)) {
        require $hf_file;
        return;
    }
}

// Native theme rendering for front-page and template-home.php

/**
 * Aliança Jurídica pela Amazônia (AJA) - Página Inicial (Front Page)
 *
 * Configurada para renderizar exatamente o design do code.html,
 * com integração dinâmica para receber postagens de blog em 3 categorias:
 * 1. "portfolio"   -> Seção de Membros e Portfólio de Atuação (#portfolio)
 * 2. "editais"     -> Seção de Editais e Chamadas para Submissão (#editais)
 * 3. "publicacoes" -> Seção de Publicações, Artigos e Notas Técnicas (#conhecimento)
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">
  <div class="flex flex-col w-full">

    <!-- HERO SECTION: PLATAFORMA DE ARTICULAÇÃO & ESTADO DE DIREITO -->
    <section class="relative w-full overflow-hidden bg-primary -mt-20 pt-28 pb-12 lg:pb-16 min-h-[660px] lg:min-h-[100vh] xl:min-h-[100vh] flex items-center">
      <!-- Split Background: Cor Sólida à Esquerda e Foto da Garça em Voo à Direita -->
      <div class="absolute inset-0 z-0 pointer-events-none select-none">
        <!-- Metade Direita: Foto da Garça em Voo (Desktop) -->
        <div class="hidden lg:block absolute top-0 right-0 bottom-0 w-1/2 xl:w-[52%] h-full overflow-hidden hero-garca-wrap">
          <img alt="Garça em voo sobre as águas amazônicas - Aliança Jurídica pela Amazônia"
            class="w-full h-full object-cover object-[center_center] hero-garca-img"
            src="<?php echo esc_url(aja_asset('home-garca.jpg')); ?>" />
          <!-- Suave transição degradê na borda esquerda para fundir na cor sólida -->
          <div class="absolute inset-y-0 left-0 w-36 xl:w-52 bg-gradient-to-r from-primary via-primary/75 to-transparent"></div>
          <!-- Vinhetas suaves no topo e rodapé para harmonizar com o header e indicadores -->
          <div class="absolute inset-x-0 top-0 h-28 bg-gradient-to-b from-primary/60 to-transparent"></div>
          <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-primary/85 to-transparent"></div>
        </div>

        <!-- Mobile: Imagem de fundo sutil com véu escuro garantindo contraste total -->
        <div class="lg:hidden absolute inset-0 overflow-hidden">
          <img alt="Garça em voo sobre as águas amazônicas"
            class="w-full h-full object-cover object-center hero-garca-img"
            src="<?php echo esc_url(aja_asset('home-garca.jpg')); ?>" />
          <div class="absolute inset-0 bg-primary/90 backdrop-blur-[1px]"></div>
        </div>

        <!-- Marca d'água oficial da identidade visual AJA no Hero -->
        <div class="hidden lg:block absolute left-[-40px] bottom-[-40px] w-96 h-96 pointer-events-none select-none opacity-[0.08] hero-watermark">
          <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-claro-01.png')); ?>" alt="" class="w-full h-full object-contain" />
        </div>
      </div>

      <div class="relative z-10 max-w-[1440px] w-full mx-auto px-margin-mobile lg:px-margin my-auto py-8 lg:py-12">
        <!-- Split Grid: Metade esquerda recebe os textos e chamadas; metade direita destaca a foto da garça -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
          <!-- Metade da Esquerda (50% / 6 colunas): Textos e Chamadas sobre a cor sólida -->
          <div class="lg:col-span-6 xl:col-span-6 flex flex-col gap-6 max-w-xl xl:max-w-2xl">
            <!-- Header Badge -->
            <div class="flex flex-wrap items-center gap-3 hero-fade-in hero-delay-1">
              <span
                class="inline-flex items-center gap-2 px-3 py-1 bg-surface-container-lowest/15 backdrop-blur-md rounded-lg text-primary-fixed text-label-md font-label-md uppercase tracking-widest border border-white/10">
                <span class="w-2 h-2 rounded-full bg-cyan-accent radar-pulse"></span>
                Plataforma de Articulação Jurídica
              </span>
              <span class="text-surface-container-highest/80 text-label-md font-label-md uppercase tracking-wider">
                Estado de Direito na Amazônia
              </span>
            </div>

            <!-- Main Headline -->
            <h1
              class="font-display-lg text-display-lg-mobile lg:text-[42px] xl:text-display-lg text-surface-container-lowest font-bold tracking-tight leading-[1.12] hero-fade-in hero-delay-2">
              Fortalecendo o <span class="text-tertiary-fixed font-bold">Estado de Direito</span> na Amazônia Brasileira
            </h1>

            <!-- Subtitle -->
            <p class="font-body-lg text-body-lg text-surface-container leading-relaxed hero-fade-in hero-delay-3">
              A Aliança Jurídica pela Amazônia (AJA) é uma rede jurídica diversa e representativa que conecta advogados, pesquisadores, organizações da sociedade civil, clínicas de direito e coletivos de base para potencializar a justiça socioambiental, povos e territórios.
            </p>

            <!-- Chamadas & Botões de Ação -->
            <div class="flex flex-wrap items-center gap-3 pt-2 hero-fade-in hero-delay-4">
              <a class="interactive-btn inline-flex items-center justify-center px-5 py-3 rounded-lg bg-surface-container-lowest/15 backdrop-blur-md text-surface-container-lowest font-label-lg text-label-lg uppercase tracking-wider transition-all duration-200 hover:bg-surface-container-lowest/25 border border-white/20"
                href="#sobre-nos">
                Conheça a AJA
              </a>
              <a class="interactive-btn arrow-hover inline-flex items-center justify-center px-5 py-3 rounded-lg bg-tertiary-fixed text-on-tertiary-fixed font-label-lg text-label-lg uppercase tracking-wider transition-all duration-200 hover:bg-tertiary-fixed-dim hover:shadow-lg font-bold shadow-md"
                href="#faca-parte">
                <span>Faça Parte da Rede</span>
                <span class="material-symbols-outlined ml-1.5 text-[18px]">arrow_forward</span>
              </a>
              <a class="interactive-btn inline-flex items-center justify-center px-4 py-3 rounded-lg bg-white/10 hover:bg-white/20 text-white font-label-lg text-label-lg uppercase tracking-wider transition-all duration-200 border border-white/20 hover:border-white/40 gap-1.5 backdrop-blur-md shadow-sm font-semibold"
                href="#newsletter" title="Assinar o Boletim Territorial da AJA">
                <span class="material-symbols-outlined text-[18px]">forward_to_inbox</span>
                <span>Newsletter</span>
            </div>

            <!-- Card da Foto da Garça para Mobile -->
            <div class="lg:hidden mt-4 w-full aspect-[4/3] rounded-xl overflow-hidden shadow-2xl border border-white/15 relative">
              <img alt="Garça sobrevoando rio na Amazônia"
                class="w-full h-full object-cover object-center"
                src="<?php echo esc_url(aja_asset('home-garca.jpg')); ?>" />
            </div>
          </div>

          <!-- Metade da Direita (50% / 6 colunas): Área de destaque da Garça em Voo (Desktop) -->
          <div class="hidden lg:flex lg:col-span-6 xl:col-span-6 pointer-events-none min-h-[460px] lg:min-h-[560px]">
          </div>
        </div>
      </div>
    </section>


    <!-- SECTION 1: SOBRE NÓS (APRESENTAR QUEM SOMOS) -->
    <section class="w-full py-space-xl bg-surface" id="sobre-nos">
      <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin reveal">
        <!-- Section Tagline -->
        <div class="flex items-center gap-3 mb-space-md">
          <span class="w-8 h-[2px] bg-secondary accent-line-expand"></span>
          <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Apresentar Quem Somos</span>
        </div>

        <!-- Split Editorial Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
          <!-- Left Column: Manifesto & Narrative -->
          <div class="lg:col-span-7 flex flex-col gap-space-lg">
            <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg font-medium text-ink-primary leading-tight">
              Uma rede jurídica diversa e representativa pelo fortalecimento do Estado de Direito
            </h2>

            <div class="flex flex-col gap-4 font-body-lg text-body-md text-on-surface-variant max-w-2xl leading-relaxed">
              <p>
                <strong>Aliança Jurídica pela Amazônia (AJA)</strong> é uma rede jurídica diversa e representativa que visa o fortalecimento do Estado de Direito na Amazônia Brasileira, formada por advogados, pesquisadores, organizações da sociedade civil, clínicas de direito, coletivos jurídicos de base e demais profissionais comprometidos com a defesa da justiça socioambiental que atuam na ou pela Amazônia.
              </p>
              <p>
                A AJA atua como um espaço articulador e colaborativo, conectando e potencializando atores e iniciativas já existentes; incentivando o diálogo e a cooperação em temas transversais e valorizando a diversidade de saberes, jurídicos e tradicionais, para enfrentar de forma integrada os desafios da região, contribuindo para a proteção de direitos humanos e socioambientais, e para a segurança jurídica de povos e territórios.
              </p>
              <p>
                Com enfoque no protagonismo amazônida, a AJA busca influenciar mudanças estruturais no ecossistema jurídico e institucional da região, apoiando o fortalecimento das instituições de justiça, da democracia ambiental e da governança territorial, promovendo ações que visam a construção de uma Amazônia mais justa, segura, próspera e regenerativa.
              </p>
            </div>

            <!-- Quote Block -->
            <blockquote class="p-6 bg-surface-container-lowest rounded-xl border-l-4 border-secondary shadow-sm">
              <p class="font-body-lg text-ink-primary italic leading-relaxed">
                "Mais do que uma articulação jurídica, a AJA é um movimento por um futuro no qual a floresta e seus povos tenham voz, proteção e centralidade na formulação das decisões que afetam seus territórios."
              </p>
            </blockquote>
          </div>

          <!-- Right Column: Visual & Registros da Rede AJA -->
          <div class="lg:col-span-5 flex flex-col gap-5 reveal">
            <!-- Foto Principal: Encontro da Rede AJA -->
            <div class="relative overflow-hidden rounded-2xl bg-surface-container-high h-[300px] lg:h-[320px] shadow-md group interactive-card">
              <img alt="Integrantes e parceiros da Aliança Jurídica pela Amazônia reunidos em encontro da rede"
                class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105"
                src="<?php echo esc_url(aja_asset('fotos/encontro-rede-aja.jpg')); ?>" />
              <div
                class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/35 to-transparent flex flex-col justify-end p-5 text-surface-container-lowest">
                <span class="font-label-sm text-[11px] uppercase tracking-widest text-primary-fixed-dim font-bold">Plataforma de Articulação</span>
                <p class="font-title-md text-title-md font-bold mt-1">Integrantes da AJA em encontro da rede</p>
                <p class="text-xs text-surface-container-highest/90 mt-0.5 leading-snug">Conectando advogados, pesquisadores e organizações pelos direitos territoriais.</p>
              </div>
            </div>

            <!-- Foto Secundária: Diálogos e Debates Estratégicos -->
            <div class="relative overflow-hidden rounded-2xl bg-surface-container-high h-[210px] shadow-sm group interactive-card">
              <img alt="Painel de debates e construção coletiva da Aliança Jurídica pela Amazônia"
                class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105"
                src="<?php echo esc_url(aja_asset('fotos/painel-debate-aja.jpg')); ?>" />
              <div
                class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/30 to-transparent flex flex-col justify-end p-4 text-surface-container-lowest">
                <span class="font-label-sm text-[10px] uppercase tracking-widest text-tertiary-fixed font-bold">Diálogo &amp; Cooperação</span>
                <p class="text-sm font-bold text-surface-container-lowest">Espaços de construção contínua e incidência política</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 2: NOSSA HISTÓRIA (MEMÓRIA & CONSTRUÇÃO COLETIVA) -->
    <section class="w-full py-space-xl bg-surface-container border-t border-border-subtle" id="historia">
      <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin reveal">
        <div class="flex items-center gap-3 mb-space-md">
          <span class="w-8 h-[2px] bg-primary accent-line-expand"></span>
          <span class="font-label-md text-label-md text-primary uppercase tracking-widest font-bold">Origem e Trajetória</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
          <div class="lg:col-span-5 flex flex-col gap-6">
            <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-medium leading-tight">
              Nossa História: Da inquietação à construção de uma aliança permanente
            </h2>
            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              A Aliança Jurídica pela Amazônia (AJA) nasce de uma inquietação compartilhada. Uma inquietação que não surgiu de um único lugar, nem de uma única voz, mas de experiências acumuladas no tempo por profissionais que pesquisam, resistem e atuam com o Direito na Amazônia.
            </p>
            <div class="p-6 bg-surface-container-lowest rounded-xl border border-border-subtle flex flex-col gap-3 shadow-sm">
              <span class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold">A Pergunta Fundacional</span>
              <p class="font-body-lg text-ink-primary font-medium italic">
                "O que podemos fazer juntos para fortalecer a atuação jurídica no combate a tantos conflitos socioambientais e violações de direitos na Amazônia?"
              </p>
            </div>
            <!-- Registro Histórico: Coquetel de Lançamento da AJA -->
            <div class="relative rounded-2xl overflow-hidden shadow-md group interactive-card border border-border-subtle bg-surface-container-high">
              <img alt="Coquetel de lançamento da Aliança Jurídica pela Amazônia"
                class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105"
                src="<?php echo esc_url(aja_asset('fotos/coquetel-lancamento-aja.jpg')); ?>" />
              <div class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/25 to-transparent flex flex-col justify-end p-4 text-surface-container-lowest">
                <span class="font-label-sm text-[10px] uppercase tracking-widest text-secondary-fixed font-bold">Construção Coletiva</span>
                <p class="text-sm font-bold text-surface-container-lowest mt-0.5">Coquetel de Lançamento da AJA</p>
                <p class="text-[11px] text-surface-container-highest/90">Mobilização e integração dos membros fundadores da rede.</p>
              </div>
            </div>
          </div>

          <div class="lg:col-span-7 flex flex-col gap-6 font-body-md text-body-md text-on-surface-variant leading-relaxed">
            <div class="p-6 bg-surface-container-lowest rounded-xl shadow-sm border border-border-subtle flex flex-col gap-4">
              <h3 class="font-title-lg text-title-lg text-ink-primary font-bold">O Diagnóstico Compartilhado e as Assimetrias do Campo</h3>
              <p>
                Antes do seu lançamento, durante a COP 30, a AJA já se manifestava como um diagnóstico compartilhado. Conversas informais e diálogos bilaterais entre advogados, pesquisadoras e organizações que atuam na Amazônia revelavam uma certa recorrência na fragmentação do campo jurídico, na baixa articulação entre diferentes áreas do Direito e na ausência de um espaço capaz de promover convergência estratégica em torno da defesa socioambiental e dos direitos territoriais na região. Essa inquietação não partiu de um único ator, mas de múltiplas trajetórias que se encontravam na percepção de que os desafios amazônicos exigem respostas jurídicas sistêmicas, integradas e de longo prazo.
              </p>
              <p>
                A prática nos territórios evidenciava, também, a necessidade dessa articulação. De um lado, observava-se a pujância da advocacia corporativa privada, estruturada e com alta capacidade de incidência. De outro, observava-se a advocacia voltada à defesa de direitos humanos, ambientais e de povos e comunidades tradicionais marcada por assimetrias profundas de recursos, apoio técnico e proteção institucional. Além disso, a discussão sobre temas estratégicos para o futuro da Amazônia, como restauração ecológica, bioeconomia, financiamento climático e mercados regenerativos, carecem de mais protagonismo e articulação jurídica, limitando a capacidade de incidência em espaços de decisão nacionais e internacionais.
              </p>
            </div>

            <div class="p-6 bg-surface-container-lowest rounded-xl shadow-sm border border-border-subtle flex flex-col gap-4">
              <h3 class="font-title-lg text-title-lg text-ink-primary font-bold">A Janela de Oportunidade e o Processo Coletivo</h3>
              <p>
                Diante desse cenário, um grupo de advogados, pesquisadores e organizações de direitos humanos e ambientais enxergou uma janela de oportunidade política com a realização da COP30 em Belém. A centralidade da Amazônia no debate climático global reforçou a necessidade de garantir uma presença jurídica estratégica, coordenada e alinhada com as lutas dos territórios. Experiências de outros países da Pan-Amazônia, como a Colômbia, já estavam demonstrando que articulações jurídicas bem estruturadas são capazes de influenciar agendas, produzir posicionamentos comuns e ampliar o impacto político da atuação jurídica em contextos multilaterais.
              </p>
              <p>
                Com efeito, em maio de 2025, impulsionado e gerenciado pelo time de “rule of law” da Amazon Investor Coalition, iniciou-se um processo estruturado de construção coletiva da AJA. Pautado por uma metodologia colaborativa, horizontal e plural, durante 7 (sete) meses, mais de 25 profissionais de diferentes áreas do Direito, vinculados a organizações da sociedade civil, coletivos de advocacia popular, entidades de pesquisa acadêmica, escritórios de advocacia e outras frentes de atuação se reuniram para definir propósitos, princípios, formas de governança e estratégias de atuação.
              </p>
            </div>

            <div class="p-6 bg-primary text-surface-container-lowest rounded-xl shadow-sm flex flex-col gap-3">
              <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary-fixed font-bold">O Modelo de Aliança</span>
              <p class="leading-relaxed">
                A escolha pelo modelo de aliança reflete uma decisão estratégica: articular atores autônomos, preservar suas identidades institucionais e potencializar, de forma coordenada, as agendas já existentes. A AJA foi concebida como um catalisador político-jurídico, capaz de validar, conectar e amplificar ações, pesquisas e estratégias desenvolvidas por seus membros, fortalecendo sua incidência sistêmica sem centralizar ou substituir iniciativas.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 3: ATUAÇÃO (PLENÁRIAS, GRUPOS TEMÁTICOS E PIQCTS) -->
    <section class="w-full py-space-xl bg-surface border-t border-border-subtle" id="atuacao">
      <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin reveal">
        <div class="flex items-center gap-3 mb-2">
          <span class="w-8 h-[2px] bg-secondary accent-line-expand"></span>
          <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Estrutura Operacional</span>
        </div>
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-4">
          <div>
            <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-medium">
              Nossa Atuação: Espaços de Construção Contínua
            </h2>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant max-w-lg">
            A atuação da AJA é estruturada em espaços de construção contínua: as reuniões plenárias, que reúnem todos os membros para alinhamento estratégico e tomada de decisões coletivas, e os Grupos Temáticos (GTs), que são o coração do trabalho técnico e colaborativo da rede.
          </p>
        </div>

        <!-- Highlight Box: Governança Coletiva & Metodologia com Imagem do Universo Jurídico -->
        <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-border-subtle mb-10 overflow-hidden grid grid-cols-1 lg:grid-cols-12 items-stretch reveal interactive-card">
          <div class="lg:col-span-7 p-6 lg:p-8 flex flex-col justify-between gap-6">
            <div class="flex flex-col gap-3">
              <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-secondary"></span>
                <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Governança Coletiva &amp; Prática Jurídica</span>
              </div>
              <h3 class="font-title-lg text-title-lg text-ink-primary font-bold">Reuniões Plenárias e Grupos Temáticos (GTs)</h3>
              <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                As plenárias reúnem a totalidade de membros para alinhamentos estratégicos horizontais, enquanto os GTs atuam como polos vivos de produção de conhecimento jurídico, desenho de estratégias e articulações práticas para responder aos desafios centrais da Amazônia.
              </p>
            </div>
            <div class="pt-4 border-t border-border-subtle/70 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
              <div>
                <span class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold block">Como Atuar</span>
                <span class="font-body-sm text-xs text-on-surface-variant">Membros associados integram um ou mais GTs de acordo com sua área técnica de incidência.</span>
              </div>
              <a class="interactive-btn arrow-hover font-label-md text-label-md text-primary font-bold hover:text-moss-light inline-flex items-center gap-1 transition-colors whitespace-nowrap shrink-0" href="#faca-parte">
                <span>Inscrever-se para um GT</span>
                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
              </a>
            </div>
          </div>
          <div class="lg:col-span-5 relative min-h-[250px] lg:min-h-full overflow-hidden bg-surface-container-high group">
            <img src="<?php echo esc_url(aja_asset('fotos/advocacia-juridica-amazonia.jpg')); ?>"
                 alt="Profissional do Direito em análise jurídica com a Deusa da Justiça (Thêmis) ao fundo"
                 class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/25 to-transparent flex flex-col justify-end p-5 text-surface-container-lowest">
              <span class="font-label-sm text-[10px] uppercase tracking-widest text-tertiary-fixed font-bold">Prática Jurídica &amp; Estado de Direito</span>
              <p class="text-sm font-bold text-surface-container-lowest mt-0.5">Rigor Técnico e Defesa Socioambiental</p>
              <p class="text-[11px] text-surface-container-highest/90">Construindo teses e garantias para os povos e o bioma amazônico.</p>
            </div>
          </div>
        </div>

        <!-- The 3 Thematic Groups (GTs) Cards (Sem Fotos, com Paleta Própria e Lideranças) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter mb-10 stagger-grid">
          
          <!-- GT 01: Território, Segurança e Acesso à Justiça -->
          <div class="bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden border border-border-subtle group interactive-card card-border-glow"
               style="border-top: 5px solid #F2B950;">
            <div class="flex flex-col">
              <!-- Top Banner Temático Colorido (Sem Foto) -->
              <div class="p-6 pb-5 border-b border-border-subtle/80 relative overflow-hidden" style="background: linear-gradient(135deg, rgba(242, 185, 80, 0.16) 0%, rgba(124, 31, 31, 0.05) 100%);">
                <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-02.png')); ?>" alt="" class="absolute -right-4 -bottom-4 w-24 h-24 opacity-10 pointer-events-none select-none object-contain" />
                <div class="flex items-center justify-between gap-2 mb-3 relative z-10">
                  <span class="px-2.5 py-1 rounded-md text-[11px] font-bold uppercase tracking-wider shadow-2xs"
                        style="background-color: #F2B950; color: #7C1F1F;">
                    GT 01
                  </span>
                  <span class="text-[11px] font-bold uppercase tracking-wider" style="color: #7C1F1F;">
                    Território &amp; Segurança
                  </span>
                </div>
                <h3 class="font-title-lg text-title-lg text-ink-primary font-bold leading-snug">
                  GT de Território, Segurança e Acesso à Justiça
                </h3>
              </div>

              <!-- Descrição Editorial Completa -->
              <div class="p-6 flex flex-col gap-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed text-[13.5px]">
                <p>
                  Entre as frentes estratégicas da Aliança Jurídica pela Amazônia, o GT de Território, Segurança e Acesso à Justiça atua na construção de respostas integradas para os desafios que envolvem direitos territoriais, segurança pública e garantia de direitos na região.
                </p>
                <p>
                  O grupo trabalha com temas como direitos territoriais, regularização e gestão fundiária, territórios tradicionais e Amazônia urbana, além de segurança pública e enfrentamento a crimes ambientais.
                </p>
                <p>
                  O GT busca discutir e construir estratégias transversais, produzindo conhecimento coletivo, elaborando propostas e articulando respostas integradas. Parte do entendimento de que proteger o território é também proteger vidas e culturas.
                </p>

                <!-- Tags de Eixos Temáticos -->
                <div class="flex flex-wrap gap-1.5 pt-2">
                  <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(242, 185, 80, 0.18); color: #7C1F1F;">Direitos Territoriais</span>
                  <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(242, 185, 80, 0.18); color: #7C1F1F;">Gestão Fundiária</span>
                  <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(242, 185, 80, 0.18); color: #7C1F1F;">Segurança Pública</span>
                  <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(242, 185, 80, 0.18); color: #7C1F1F;">Crimes Ambientais</span>
                </div>
              </div>
            </div>

            <div class="p-6 pt-4 border-t border-surface-container flex items-center justify-between">
              <a class="font-label-md text-label-md uppercase tracking-wider font-bold inline-flex items-center gap-1.5 transition-colors group/link hover:opacity-85"
                 style="color: #7C1F1F;"
                 href="#faca-parte">
                <span>Integrar este GT</span>
                <span class="material-symbols-outlined text-[16px] group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
              </a>
              <span class="w-2.5 h-2.5 rounded-full" style="background-color: #F2B950;"></span>
            </div>
          </div>

          <!-- GT 02: Litigância e Ativismo Judicial -->
          <div class="bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden border border-border-subtle group interactive-card card-border-glow"
               style="border-top: 5px solid #406284;">
            <div class="flex flex-col">
              <!-- Top Banner Temático Colorido (Sem Foto) -->
              <div class="p-6 pb-5 border-b border-border-subtle/80 relative overflow-hidden" style="background: linear-gradient(135deg, rgba(166, 190, 228, 0.22) 0%, rgba(64, 98, 132, 0.06) 100%);">
                <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-12.png')); ?>" alt="" class="absolute -right-4 -bottom-4 w-24 h-24 opacity-10 pointer-events-none select-none object-contain" />
                <div class="flex items-center justify-between gap-2 mb-3 relative z-10">
                  <span class="px-2.5 py-1 rounded-md text-[11px] font-bold uppercase tracking-wider shadow-2xs"
                        style="background-color: #A6BEE4; color: #406284;">
                    GT 02
                  </span>
                  <span class="text-[11px] font-bold uppercase tracking-wider" style="color: #406284;">
                    Incidência Estratégica
                  </span>
                </div>
                <h3 class="font-title-lg text-title-lg text-ink-primary font-bold leading-snug">
                  GT de Litigância e Ativismo Judicial
                </h3>
              </div>

              <!-- Descrição Editorial Completa -->
              <div class="p-6 flex flex-col gap-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed text-[13.5px]">
                <p>
                  Para construir espaços de coordenação entre profissionais e organizações que atuam estrategicamente no sistema de justiça, o GT de Litigância e Ativismo Judicial fortalece esse campo por meio da troca de experiências, da construção coletiva de estratégias e do fortalecimento da atuação diante dos desafios socioambientais da Amazônia. Embora a AJA não seja uma organização de litigância, entendemos a importância de fomentar esse debate e fortalecer iniciativas que atuam nessa frente.
                </p>
                <p>
                  O grupo atua na construção de estratégias jurídicas voltadas à justiça climática, ao direito ambiental e à defesa de direitos difusos e coletivos.
                </p>

                <!-- Tags de Eixos Temáticos -->
                <div class="flex flex-wrap gap-1.5 pt-2">
                  <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(166, 190, 228, 0.25); color: #406284;">Justiça Climática</span>
                  <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(166, 190, 228, 0.25); color: #406284;">Direito Ambiental</span>
                  <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(166, 190, 228, 0.25); color: #406284;">Direitos Difusos</span>
                  <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(166, 190, 228, 0.25); color: #406284;">STF / STJ</span>
                </div>
              </div>
            </div>

            <div class="p-6 pt-4 border-t border-surface-container flex items-center justify-between">
              <a class="font-label-md text-label-md uppercase tracking-wider font-bold inline-flex items-center gap-1.5 transition-colors group/link hover:opacity-85"
                 style="color: #406284;"
                 href="#faca-parte">
                <span>Integrar este GT</span>
                <span class="material-symbols-outlined text-[16px] group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
              </a>
              <span class="w-2.5 h-2.5 rounded-full" style="background-color: #406284;"></span>
            </div>
          </div>

          <!-- GT 03: Finanças Sustentáveis e Economias da Sociobiodiversidade -->
          <div class="bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden border border-border-subtle group interactive-card card-border-glow"
               style="border-top: 5px solid #6E7642;">
            <div class="flex flex-col">
              <!-- Top Banner Temático Colorido (Sem Foto) -->
              <div class="p-6 pb-5 border-b border-border-subtle/80 relative overflow-hidden" style="background: linear-gradient(135deg, rgba(110, 118, 66, 0.18) 0%, rgba(118, 31, 32, 0.05) 100%);">
                <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-03.png')); ?>" alt="" class="absolute -right-4 -bottom-4 w-24 h-24 opacity-10 pointer-events-none select-none object-contain" />
                <div class="flex items-center justify-between gap-2 mb-3 relative z-10">
                  <span class="px-2.5 py-1 rounded-md text-[11px] font-bold uppercase tracking-wider shadow-2xs"
                        style="background-color: #6E7642; color: #ffffff;">
                    GT 03
                  </span>
                  <span class="text-[11px] font-bold uppercase tracking-wider" style="color: #761F20;">
                    Sociobiodiversidade
                  </span>
                </div>
                <h3 class="font-title-lg text-title-lg text-ink-primary font-bold leading-snug">
                  GT de Finanças Sustentáveis e Economias da Sociobiodiversidade
                </h3>
              </div>

              <!-- Descrição Editorial Completa -->
              <div class="p-6 flex flex-col gap-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed text-[13.5px]">
                <p>
                  Na Aliança Jurídica pela Amazônia, os Grupos Temáticos conectam diferentes áreas para enfrentar desafios estratégicos da região. Um deles é o GT de Finanças Sustentáveis e Economias da Sociobiodiversidade, que atua com direito intelectual e cultural associado à sociobiodiversidade, negócios justos, uso da biodiversidade e do conhecimento tradicional, além de bioeconomia e bens ambientais, como carbono, água e PSA.
                </p>
                <p>
                  O grupo articula o campo jurídico com a realidade econômica dos povos e comunidades tradicionais, construindo estratégias para que a bioeconomia também seja uma economia de justiça. Parte do reconhecimento de que a floresta tem valor e trabalha para que esse valor se traduza em direitos, prosperidade e proteção.
                </p>

                <!-- Tags de Eixos Temáticos -->
                <div class="flex flex-wrap gap-1.5 pt-2">
                  <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(110, 118, 66, 0.18); color: #761F20;">Conhecimento Tradicional</span>
                  <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(110, 118, 66, 0.18); color: #761F20;">Negócios Justos</span>
                  <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(110, 118, 66, 0.18); color: #761F20;">Créditos de Carbono</span>
                  <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(110, 118, 66, 0.18); color: #761F20;">PSA &amp; Bioeconomia</span>
                </div>
              </div>
            </div>

            <div class="p-6 pt-4 border-t border-surface-container flex items-center justify-between">
              <a class="font-label-md text-label-md uppercase tracking-wider font-bold inline-flex items-center gap-1.5 transition-colors group/link hover:opacity-85"
                 style="color: #761F20;"
                 href="#faca-parte">
                <span>Integrar este GT</span>
                <span class="material-symbols-outlined text-[16px] group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
              </a>
              <span class="w-2.5 h-2.5 rounded-full" style="background-color: #6E7642;"></span>
            </div>
          </div>

        </div>

        <!-- TRANSVERSALIDADE PIQCTS (DESTAQUE INEGOCIÁVEL) -->
        <div class="w-full bg-surface-container-low rounded-2xl p-8 lg:p-10 border-2 border-primary/20 shadow-sm flex flex-col md:flex-row items-center gap-8">
          <div class="w-16 h-16 rounded-2xl bg-primary text-surface-container-lowest flex items-center justify-center shrink-0 shadow-md">
            <span class="material-symbols-outlined text-[36px]">group_work</span>
          </div>
          <div class="flex flex-col gap-2 flex-1">
            <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">
              Abordagem Transversal Obrigatória
            </span>
            <h3 class="font-title-lg text-title-lg text-ink-primary font-bold">
              Defesa dos Direitos Humanos e Observância aos Direitos dos PIQCTs
            </h3>
            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Todos os grupos temáticos adotam uma abordagem transversal de defesa aos Direitos Humanos, garantindo observância aos direitos dos povos indígenas, quilombolas e comunidades tradicionais (PIQCTs) nas discussões e decisões de cada GT — colocando a Amazônia no centro, e não na margem, das soluções jurídicas e institucionais.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================== -->
    <!-- SECTION 4: ESTRUTURA E GOVERNANÇA                              -->
    <!-- ============================================================== -->
    <section class="w-full py-space-xl bg-surface-container-low border-t border-border-subtle scroll-mt-20" id="estrutura">
      <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin reveal">

        <!-- Cabeçalho Principal da Estrutura -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
          <div>
            <div class="flex items-center gap-3 mb-2">
              <span class="w-8 h-[2px] bg-secondary accent-line-expand"></span>
              <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Governança &amp; Estrutura</span>
            </div>
            <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg font-medium text-ink-primary leading-tight">
              Estrutura da Aliança Jurídica pela Amazônia
            </h2>
          </div>
        </div>

        <!-- Abas Interativas de Navegação da Estrutura -->
        <div class="mb-10 flex items-center gap-2 overflow-x-auto pb-2 scrollbar-none text-nowrap" id="estrutura-nav-tabs">
          <button type="button" class="estrutura-tab-btn active px-4 py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider font-bold transition-all duration-200 shadow-sm" data-target="all">
            📋 Toda a Estrutura
          </button>
          <button type="button" class="estrutura-tab-btn px-4 py-2.5 rounded-lg bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider font-bold hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-target="comite">
            🏛️ Comitê Executivo
          </button>
          <button type="button" class="estrutura-tab-btn px-4 py-2.5 rounded-lg bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider font-bold hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-target="conselho">
            ⚖️ Conselho Consultivo
          </button>
          <button type="button" class="estrutura-tab-btn px-4 py-2.5 rounded-lg bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider font-bold hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-target="lideres">
            🌳 Líderes de GTs
          </button>
        </div>

        <?php
        // Query para buscar todos os membros cadastrados na categoria 'equipe'
        $all_team_query = new WP_Query(array(
            'category_name'  => 'equipe',
            'posts_per_page' => -1,
            'orderby'        => array('menu_order' => 'ASC', 'date' => 'DESC'),
            'post_status'    => 'publish',
        ));

        $comite_posts   = array();
        $conselho_posts = array();
        $lideres_posts  = array();

        if ($all_team_query->have_posts()) {
            while ($all_team_query->have_posts()) {
                $all_team_query->the_post();
                $p = get_post();
                $instance = get_post_meta($p->ID, '_aja_team_instance', true);
                if (empty($instance)) {
                    $badge_txt = mb_strtolower(get_post_meta($p->ID, '_aja_badge', true) . ' ' . $p->post_title);
                    if (strpos($badge_txt, 'conselh') !== false) {
                        $instance = 'conselho';
                    } elseif (strpos($badge_txt, 'lider') !== false || strpos($badge_txt, 'líder') !== false || strpos($badge_txt, 'gt 0') !== false) {
                        $instance = 'lideres';
                    } else {
                        $instance = 'comite';
                    }
                }

                if ($instance === 'conselho') {
                    $conselho_posts[] = $p;
                } elseif ($instance === 'lideres') {
                    $lideres_posts[] = $p;
                } elseif ($instance === 'comite') {
                    $comite_posts[] = $p;
                }
            }
            wp_reset_postdata();
        }

        // Função auxiliar para renderizar card de membro real do WordPress
        $render_team_card = function($post_obj, $default_badge_style = 'bg-secondary-fixed/30 text-secondary border-secondary-fixed', $gt_slot = '') {
            $post_id       = $post_obj->ID;
            $title         = get_the_title($post_id);
            $badge         = get_post_meta($post_id, '_aja_badge', true) ?: 'Integrante AJA';
            $subtitle      = get_post_meta($post_id, '_aja_subtitle', true) ?: get_post_meta($post_id, '_aja_subtitle_gt', true);
            $location      = get_post_meta($post_id, '_aja_location', true);
            $link          = get_post_meta($post_id, '_aja_action_link', true) ?: get_post_meta($post_id, '_aja_pdf_url', true);
            $raw_content   = trim($post_obj->post_content);
            $raw_excerpt   = trim($post_obj->post_excerpt);
            $best_raw      = (mb_strlen(wp_strip_all_tags($raw_content)) >= mb_strlen(wp_strip_all_tags($raw_excerpt))) ? $raw_content : $raw_excerpt;
            if (empty($best_raw)) {
                $best_raw = get_the_excerpt($post_obj);
            }
            $short_bio     = wp_strip_all_tags($best_raw);
            $full_bio_html = wpautop(wp_kses_post($best_raw));
            $has_thumb     = has_post_thumbnail($post_id);
            $thumb_url     = $has_thumb ? get_the_post_thumbnail_url($post_id, 'full') : '';

            // Detecção de paleta oficial de GT (GT 01, GT 02, GT 03)
            $card_border_style     = '';
            $badge_inline_style    = '';
            $subtitle_inline_style = '';
            $btn_inline_style      = '';
            $dot_color             = '';

            if (!empty($gt_slot)) {
                $haystack = mb_strtolower($badge . ' ' . $subtitle . ' ' . $title);
                if (strpos($haystack, 'gt 02') !== false || strpos($haystack, 'gt 2') !== false || strpos($haystack, 'litig') !== false || strpos($haystack, 'marina') !== false || strpos($haystack, 'júlia') !== false || strpos($haystack, 'julia') !== false || $gt_slot === 'gt-02') {
                    $badge                 = 'Co-liderança • GT 02';
                    $card_border_style     = 'border-top: 5px solid #406284;';
                    $badge_inline_style    = 'background-color: #A6BEE4; color: #406284; border-color: #A6BEE4;';
                    $subtitle_inline_style = 'color: #406284;';
                    $btn_inline_style      = 'color: #406284;';
                    $dot_color             = '#406284';
                } elseif (strpos($haystack, 'gt 01') !== false || strpos($haystack, 'gt 1') !== false || strpos($haystack, 'territ') !== false || strpos($haystack, 'lincon') !== false || $gt_slot === 'gt-01') {
                    $card_border_style     = 'border-top: 5px solid #F2B950;';
                    $badge_inline_style    = 'background-color: #F2B950; color: #7C1F1F; border-color: #F2B950;';
                    $subtitle_inline_style = 'color: #7C1F1F;';
                    $btn_inline_style      = 'color: #7C1F1F;';
                    $dot_color             = '#F2B950';
                } else {
                    $card_border_style     = 'border-top: 5px solid #6E7642;';
                    $badge_inline_style    = 'background-color: #6E7642; color: #ffffff; border-color: #6E7642;';
                    $subtitle_inline_style = 'color: #761F20;';
                    $btn_inline_style      = 'color: #761F20;';
                    $dot_color             = '#6E7642';
                }
            }
            ?>
            <div class="aja-member-card cursor-pointer bg-surface-container-lowest border border-border-subtle rounded-xl p-5 flex flex-col justify-between hover:-translate-y-1 hover:shadow-lg hover:border-secondary/60 transition-all duration-300 ease-out group interactive-card card-border-glow"
                 <?php if ($card_border_style) : ?>style="<?php echo esc_attr($card_border_style); ?>"<?php endif; ?>
                 role="button"
                 tabindex="0"
                 aria-label="<?php echo esc_attr('Ver bio completa de ' . $title); ?>"
                 data-member-name="<?php echo esc_attr($title); ?>"
                 data-member-badge="<?php echo esc_attr($badge); ?>"
                 data-member-badge-style="<?php echo esc_attr($default_badge_style); ?>"
                 data-member-badge-inline="<?php echo esc_attr($badge_inline_style); ?>"
                 data-member-subtitle="<?php echo esc_attr($subtitle); ?>"
                 data-member-subtitle-inline="<?php echo esc_attr($subtitle_inline_style); ?>"
                 data-member-location="<?php echo esc_attr($location); ?>"
                 data-member-link="<?php echo esc_url($link); ?>"
                 data-member-img="<?php echo esc_url($thumb_url); ?>">
              <div>
                <div class="w-full aspect-square mb-4 p-1 bg-transparent flex items-center justify-center relative">
                  <?php if ($has_thumb) : ?>
                    <?php echo get_the_post_thumbnail($post_id, 'full', array(
                        'class' => 'w-full h-full object-contain object-center transition-all duration-300 ease-out group-hover:-translate-y-1.5 group-hover:drop-shadow-md',
                        'alt'   => $title
                    )); ?>
                  <?php else : ?>
                    <div class="w-full h-full rounded-full flex flex-col items-center justify-center bg-surface-container-high text-outline transition-transform duration-300 ease-out group-hover:-translate-y-1">
                      <svg class="w-16 h-16 opacity-40 mb-1" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                      <span class="text-[11px] font-bold text-ink-primary/60 uppercase tracking-wider">AJA</span>
                    </div>
                  <?php endif; ?>
                </div>

                <span class="inline-block text-[11px] font-bold uppercase tracking-wider px-2.5 py-1 rounded border mb-2 <?php echo esc_attr($badge_inline_style ? '' : $default_badge_style); ?>"
                      <?php if ($badge_inline_style) : ?>style="<?php echo esc_attr($badge_inline_style); ?>"<?php endif; ?>>
                  <?php echo esc_html($badge); ?>
                </span>

                <h4 class="font-title-lg text-title-lg font-bold text-ink-primary leading-snug group-hover:text-primary transition-colors">
                  <?php echo esc_html($title); ?>
                </h4>

                <?php if (!empty($subtitle)) : ?>
                  <p class="text-xs font-semibold <?php echo esc_attr($subtitle_inline_style ? '' : 'text-secondary'); ?> mt-1"
                     <?php if ($subtitle_inline_style) : ?>style="<?php echo esc_attr($subtitle_inline_style); ?>"<?php endif; ?>>
                    <?php echo esc_html($subtitle); ?>
                  </p>
                <?php endif; ?>

                <?php if (!empty($short_bio)) : ?>
                  <p class="text-xs text-on-surface-variant leading-relaxed mt-2.5 line-clamp-3">
                    <?php echo esc_html($short_bio); ?>
                  </p>
                  <template class="aja-member-bio-content"><?php echo $full_bio_html; ?></template>
                <?php endif; ?>
              </div>

              <div class="mt-4 pt-3 border-t border-border-subtle/80 flex items-center justify-between gap-2 text-[11px]">
                <span class="aja-open-bio-btn inline-flex items-center gap-1 font-bold <?php echo esc_attr($btn_inline_style ? 'hover:opacity-80' : 'text-primary group-hover:text-secondary'); ?> transition-colors"
                      <?php if ($btn_inline_style) : ?>style="<?php echo esc_attr($btn_inline_style); ?>"<?php endif; ?>>
                  <span>Ler bio completa</span>
                  <span class="material-symbols-outlined text-[15px] group-hover:translate-x-0.5 transition-transform">open_in_full</span>
                </span>

                <?php if (!empty($link)) : ?>
                  <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation();" class="font-bold text-on-surface-variant hover:text-primary shrink-0 flex items-center gap-0.5 ml-auto">
                    <span>Perfil</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                  </a>
                <?php elseif (!empty($location)) : ?>
                  <div class="flex items-center gap-1 text-outline truncate max-w-[130px]" title="<?php echo esc_attr($location); ?>">
                    <svg class="w-3.5 h-3.5 text-secondary shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    <span class="truncate"><?php echo esc_html($location); ?></span>
                  </div>
                <?php elseif (!empty($dot_color)) : ?>
                  <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: <?php echo esc_attr($dot_color); ?>;"></span>
                <?php endif; ?>
              </div>
            </div>
            <?php
        };

        // Função auxiliar para renderizar Card Placeholder elegante
        $render_placeholder_card = function($item) {
            $badge_style = !empty($item['badge_style']) ? $item['badge_style'] : 'bg-primary-fixed/40 text-primary border-primary-fixed';
            $card_border_style = !empty($item['card_border_style']) ? $item['card_border_style'] : '';
            $badge_inline_style = !empty($item['badge_inline_style']) ? $item['badge_inline_style'] : '';
            $subtitle_inline_style = !empty($item['subtitle_inline_style']) ? $item['subtitle_inline_style'] : '';
            $btn_inline_style = !empty($item['btn_inline_style']) ? $item['btn_inline_style'] : $subtitle_inline_style;
            $dot_color = !empty($item['dot_color']) ? $item['dot_color'] : '';
            ?>
            <div class="aja-member-card cursor-pointer bg-surface-container-lowest/80 border-2 border-dashed border-border-subtle hover:border-primary/50 rounded-xl p-5 flex flex-col justify-between hover:-translate-y-1 hover:shadow-lg transition-all duration-300 ease-out group interactive-card"
                 <?php if ($card_border_style) : ?>style="<?php echo esc_attr($card_border_style); ?>"<?php endif; ?>
                 role="button"
                 tabindex="0"
                 aria-label="<?php echo esc_attr('Ver bio completa de ' . $item['name']); ?>"
                 data-member-name="<?php echo esc_attr($item['name']); ?>"
                 data-member-badge="<?php echo esc_attr($item['role']); ?>"
                 data-member-badge-style="<?php echo esc_attr($badge_style); ?>"
                 data-member-badge-inline="<?php echo esc_attr($badge_inline_style); ?>"
                 data-member-subtitle="<?php echo esc_attr($item['subtitle']); ?>"
                 data-member-subtitle-inline="<?php echo esc_attr($subtitle_inline_style); ?>"
                 data-member-location="<?php echo esc_attr(!empty($item['location']) ? $item['location'] : ''); ?>">
              <div>
                <div class="w-full aspect-square rounded-full mb-4 bg-surface-container flex flex-col items-center justify-center text-outline relative overflow-hidden group-hover:bg-surface-container-high group-hover:-translate-y-1 transition-all duration-300 ease-out">
                  <svg class="w-16 h-16 opacity-35 mb-1 text-on-surface-variant" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                  <span class="text-[10px] font-bold text-ink-primary/70 uppercase tracking-widest bg-surface-container-lowest/90 px-2 py-0.5 rounded shadow-xs">[Foto a preencher]</span>
                </div>

                <div class="flex items-center justify-between gap-1 mb-2">
                  <span class="inline-block text-[11px] font-bold uppercase tracking-wider px-2.5 py-1 rounded border <?php echo esc_attr($badge_inline_style ? '' : $badge_style); ?>"
                        <?php if ($badge_inline_style) : ?>style="<?php echo esc_attr($badge_inline_style); ?>"<?php endif; ?>>
                    <?php echo esc_html($item['role']); ?>
                  </span>
                  <span class="text-[10px] uppercase font-semibold text-outline-variant bg-surface-container px-1.5 py-0.5 rounded">
                    <?php echo esc_html(!empty($item['status']) ? $item['status'] : 'A definir'); ?>
                  </span>
                </div>

                <h4 class="font-title-lg text-title-lg font-bold text-ink-primary leading-snug group-hover:text-primary transition-colors">
                  <?php echo esc_html($item['name']); ?>
                </h4>

                <p class="text-xs font-semibold <?php echo esc_attr($subtitle_inline_style ? '' : 'text-secondary'); ?> mt-1"
                   <?php if ($subtitle_inline_style) : ?>style="<?php echo esc_attr($subtitle_inline_style); ?>"<?php endif; ?>>
                  <?php echo esc_html($item['subtitle']); ?>
                </p>

                <p class="text-xs text-on-surface-variant leading-relaxed mt-2.5 line-clamp-3">
                  <?php echo esc_html($item['desc']); ?>
                </p>
                <template class="aja-member-bio-content"><p><?php echo esc_html($item['desc']); ?></p></template>
              </div>

              <div class="mt-4 pt-3 border-t border-border-subtle/80 flex items-center justify-between gap-2 text-[11px]">
                <span class="aja-open-bio-btn inline-flex items-center gap-1 font-bold <?php echo esc_attr($btn_inline_style ? 'hover:opacity-80' : 'text-primary group-hover:text-secondary'); ?> transition-colors"
                      <?php if ($btn_inline_style) : ?>style="<?php echo esc_attr($btn_inline_style); ?>"<?php endif; ?>>
                  <span>Ler bio completa</span>
                  <span class="material-symbols-outlined text-[15px] group-hover:translate-x-0.5 transition-transform">open_in_full</span>
                </span>
                <?php if (!empty($dot_color)) : ?>
                  <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: <?php echo esc_attr($dot_color); ?>;"></span>
                <?php endif; ?>
              </div>
            </div>
            <?php
        };
        ?>

        <div class="flex flex-col gap-14" id="estrutura-blocks-container">
          <!-- ============================================================== -->
          <!-- BLOCO 1: COMITÊ EXECUTIVO                                       -->
          <!-- ============================================================== -->
          <div class="estrutura-instance-block" data-instance="comite" id="bloco-comite">
            <div class="p-6 bg-surface-container-lowest border border-border-subtle rounded-2xl mb-6 flex flex-col md:flex-row md:items-center justify-between gap-4">
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-primary text-on-primary flex items-center justify-center shrink-0 shadow-sm">
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
                </div>
                <div>
                  <div class="flex items-center gap-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-primary">Instância de Gestão</span>
                    <span class="text-xs text-outline">•</span>
                    <span class="text-xs text-on-surface-variant font-medium">Deliberação Contínua</span>
                  </div>
                  <h4 class="font-display-lg text-xl sm:text-2xl font-bold text-ink-primary mt-0.5">
                    Comitê Executivo
                  </h4>
                  <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 max-w-2xl leading-relaxed">
                    Responsável pela gestão estratégica contínua, representação institucional, articulação política nacional e coordenação operacional permanente das iniciativas da Aliança.
                  </p>
                </div>
              </div>
              <div class="flex items-center gap-2 shrink-0">
                <span class="px-3 py-1 rounded-full bg-primary/10 text-primary font-label-sm text-[12px] font-bold">
                  🏛️ Coordenação Geral
                </span>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 stagger-grid">
              <?php
              if (!empty($comite_posts)) {
                  foreach ($comite_posts as $cp) {
                      $render_team_card($cp, 'bg-primary-fixed/40 text-primary border-primary-fixed');
                  }
              }

              // Placeholders do Comitê Executivo
              $comite_placeholders = array(
                  array(
                      'role'        => 'Coordenação Executiva',
                      'name'        => '[Nome a preencher]',
                      'subtitle'    => '[Cargo / Função a preencher]',
                      'desc'        => '[Descrição a preencher]',
                      'location'    => '[A preencher]',
                      'badge_style' => 'bg-primary-fixed/40 text-primary border-primary-fixed',
                      'status'      => 'A preencher'
                  ),
                  array(
                      'role'        => 'Articulação Política',
                      'name'        => '[Nome a preencher]',
                      'subtitle'    => '[Cargo / Função a preencher]',
                      'desc'        => '[Descrição a preencher]',
                      'location'    => '[A preencher]',
                      'badge_style' => 'bg-primary-fixed/40 text-primary border-primary-fixed',
                      'status'      => 'A preencher'
                  ),
                  array(
                      'role'        => 'Gestão Operacional',
                      'name'        => '[Nome a preencher]',
                      'subtitle'    => '[Cargo / Função a preencher]',
                      'desc'        => '[Descrição a preencher]',
                      'location'    => '[A preencher]',
                      'badge_style' => 'bg-primary-fixed/40 text-primary border-primary-fixed',
                      'status'      => 'A preencher'
                  ),
                  array(
                      'role'        => 'Comunicação da Rede',
                      'name'        => '[Nome a preencher]',
                      'subtitle'    => '[Cargo / Função a preencher]',
                      'desc'        => '[Descrição a preencher]',
                      'location'    => '[A preencher]',
                      'badge_style' => 'bg-primary-fixed/40 text-primary border-primary-fixed',
                      'status'      => 'A preencher'
                  ),
              );

              $needed_comite = max(0, 4 - count($comite_posts));
              for ($i = 0; $i < $needed_comite; $i++) {
                  $render_placeholder_card($comite_placeholders[$i]);
              }
              ?>
            </div>
          </div>

          <!-- ============================================================== -->
          <!-- BLOCO 2: CONSELHO CONSULTIVO                                    -->
          <!-- ============================================================== -->
          <div class="estrutura-instance-block" data-instance="conselho" id="bloco-conselho">
            <div class="p-6 bg-surface-container-lowest border border-border-subtle rounded-2xl mb-6 flex flex-col md:flex-row md:items-center justify-between gap-4">
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-secondary text-on-secondary flex items-center justify-center shrink-0 shadow-sm">
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                </div>
                <div>
                  <div class="flex items-center gap-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-secondary">Instância Orientadora</span>
                    <span class="text-xs text-outline">•</span>
                    <span class="text-xs text-on-surface-variant font-medium">Saber Plural &amp; Ética</span>
                  </div>
                  <h4 class="font-display-lg text-xl sm:text-2xl font-bold text-ink-primary mt-0.5">
                    Conselho Consultivo
                  </h4>
                  <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 max-w-2xl leading-relaxed">
                    Colegiado de juristas de destaque, lideranças comunitárias tradicionais, pesquisadores sêniores e referências socioambientais que orientam as diretrizes estratégicas e éticas da Aliança.
                  </p>
                </div>
              </div>
              <div class="flex items-center gap-2 shrink-0">
                <span class="px-3 py-1 rounded-full bg-secondary/10 text-secondary font-label-sm text-[12px] font-bold">
                  ⚖️ Orientação Estratégica
                </span>
              </div>
            </div>

            <div class="bg-surface-container-lowest border-2 border-dashed border-border-subtle rounded-2xl p-6 sm:p-8 flex flex-col gap-4">
              <div class="flex flex-wrap items-center justify-between gap-3">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-fixed/40 text-secondary border border-secondary-fixed text-xs font-bold uppercase tracking-wider">
                  <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                  Conselho em processo de formação
                </span>
                <span class="text-[11px] uppercase font-semibold text-outline-variant bg-surface-container px-2.5 py-1 rounded">
                  Texto a preencher
                </span>
              </div>

              <div class="font-body-md text-body-md text-on-surface-variant leading-relaxed space-y-3">
                <p class="font-medium text-ink-primary">
                  O Conselho Consultivo da Aliança Jurídica pela Amazônia (AJA) encontra-se atualmente em processo de formação.
                </p>
                <p class="text-outline italic">
                  [Espaço reservado para texto descritivo sobre o Conselho Consultivo — papel institucional, critérios de composição, diversidade epistêmica e atribuições estratégicas a preencher.]
                </p>
              </div>
            </div>
          </div>

          <!-- ============================================================== -->
          <!-- BLOCO 3: LÍDERES DE CADA GT (GRUPOS TEMÁTICOS)                 -->
          <!-- ============================================================== -->
          <div class="estrutura-instance-block" data-instance="lideres" id="bloco-lideres">
            <div class="p-6 bg-surface-container-lowest border border-border-subtle rounded-2xl mb-6 flex flex-col md:flex-row md:items-center justify-between gap-4">
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-tertiary text-on-tertiary flex items-center justify-center shrink-0 shadow-sm">
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                </div>
                <div>
                  <div class="flex items-center gap-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-tertiary">Coordenações Temáticas</span>
                    <span class="text-xs text-outline">•</span>
                    <span class="text-xs text-on-surface-variant font-medium">3 Eixos Centrais da AJA</span>
                  </div>
                  <h4 class="font-display-lg text-xl sm:text-2xl font-bold text-ink-primary mt-0.5">
                    Líderes de Grupos Temáticos (GTs)
                  </h4>
                  <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 max-w-2xl leading-relaxed">
                    Coordenações responsáveis por articular as plenárias temáticas, desenhar teses jurídicas e mobilizar os membros em torno das três frentes de ação prioritárias da Aliança.
                  </p>
                </div>
              </div>
              <div class="flex items-center gap-2 shrink-0">
                <span class="px-3 py-1 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-[12px] font-bold">
                  🌳 Frentes Temáticas
                </span>
              </div>
            </div>

            <!-- Grid com 4 colunas dedicadas às lideranças e co-lideranças dos 3 GTs -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 stagger-grid">
              <?php
              $julia_gt02_placeholder = array(
                  'role'                  => 'Co-liderança • GT 02',
                  'name'                  => 'Júlia Soares',
                  'subtitle'              => 'GT Litigância e Ativismo Judicial',
                  'desc'                  => 'Bacharela em Direito pela USP, atua em direitos dos povos indígenas e comunidades tradicionais, participação social e políticas públicas. Analista de Políticas Públicas Jr. no IDEC.',
                  'location'              => 'São Paulo - SP',
                  'badge_style'           => 'text-[#406284] border-[#A6BEE4] bg-[#A6BEE4]/30',
                  'card_border_style'     => 'border-top: 5px solid #406284;',
                  'badge_inline_style'    => 'background-color: #A6BEE4; color: #406284; border-color: #A6BEE4;',
                  'subtitle_inline_style' => 'color: #406284;',
                  'btn_inline_style'      => 'color: #406284;',
                  'dot_color'             => '#406284',
                  'img'                   => 'assets/Membros/julia-soares.png'
              );

              $has_julia_post = false;
              if (!empty($lideres_posts)) {
                  foreach ($lideres_posts as $lp_check) {
                      $t_lower = mb_strtolower($lp_check->post_title);
                      if (strpos($t_lower, 'júlia') !== false || strpos($t_lower, 'julia') !== false) {
                          $has_julia_post = true;
                          break;
                      }
                  }
              }

              $julia_rendered = false;

              // Se houver posts reais de líderes de GT
              if (!empty($lideres_posts)) {
                  foreach ($lideres_posts as $gt_idx => $lp) {
                      $gt_slot = 'gt-0' . (($gt_idx % 3) + 1);
                      $render_team_card($lp, 'bg-tertiary-fixed/40 text-tertiary border-tertiary-fixed', $gt_slot);

                      $lp_haystack = mb_strtolower(get_post_meta($lp->ID, '_aja_badge', true) . ' ' . get_post_meta($lp->ID, '_aja_subtitle', true) . ' ' . $lp->post_title);
                      if (!$has_julia_post && !$julia_rendered && (strpos($lp_haystack, 'gt 02') !== false || strpos($lp_haystack, 'litig') !== false || strpos($lp_haystack, 'marina') !== false || $gt_idx === 1)) {
                          $render_placeholder_card($julia_gt02_placeholder);
                          $julia_rendered = true;
                      }
                  }
              }

              // Placeholders de Líderes de GTs
              $gt_placeholders = array(
                  array(
                      'role'                  => 'Liderança • GT 01',
                      'name'                  => '[Nome a preencher]',
                      'subtitle'              => 'GT Território, Segurança e Acesso à Justiça',
                      'desc'                  => '[Descrição a preencher]',
                      'location'              => '[A preencher]',
                      'badge_style'           => 'text-[#7C1F1F] border-[#F2B950] bg-[#F2B950]/25',
                      'card_border_style'     => 'border-top: 5px solid #F2B950;',
                      'badge_inline_style'    => 'background-color: #F2B950; color: #7C1F1F; border-color: #F2B950;',
                      'subtitle_inline_style' => 'color: #7C1F1F;',
                      'btn_inline_style'      => 'color: #7C1F1F;',
                      'dot_color'             => '#F2B950',
                      'status'                => 'A preencher'
                  ),
                  array(
                      'role'                  => 'Co-liderança • GT 02',
                      'name'                  => '[Nome a preencher]',
                      'subtitle'              => 'GT Litigância e Ativismo Judicial',
                      'desc'                  => '[Descrição a preencher]',
                      'location'              => '[A preencher]',
                      'badge_style'           => 'text-[#406284] border-[#A6BEE4] bg-[#A6BEE4]/30',
                      'card_border_style'     => 'border-top: 5px solid #406284;',
                      'badge_inline_style'    => 'background-color: #A6BEE4; color: #406284; border-color: #A6BEE4;',
                      'subtitle_inline_style' => 'color: #406284;',
                      'btn_inline_style'      => 'color: #406284;',
                      'dot_color'             => '#406284',
                      'status'                => 'A preencher'
                  ),
                  $julia_gt02_placeholder,
                  array(
                      'role'                  => 'Liderança • GT 03',
                      'name'                  => '[Nome a preencher]',
                      'subtitle'              => 'GT Finanças Sustentáveis & Sociobiodiversidade',
                      'desc'                  => '[Descrição a preencher]',
                      'location'              => '[A preencher]',
                      'badge_style'           => 'text-[#761F20] border-[#6E7642] bg-[#6E7642]/25',
                      'card_border_style'     => 'border-top: 5px solid #6E7642;',
                      'badge_inline_style'    => 'background-color: #6E7642; color: #ffffff; border-color: #6E7642;',
                      'subtitle_inline_style' => 'color: #761F20;',
                      'btn_inline_style'      => 'color: #761F20;',
                      'dot_color'             => '#6E7642',
                      'status'                => 'A preencher'
                  ),
              );

              $rendered_total = count($lideres_posts) + ($julia_rendered ? 1 : 0);
              $needed_gt = max(0, 4 - $rendered_total);
              for ($i = 0; $i < $needed_gt; $i++) {
                  if ($i === 2 && $julia_rendered) {
                      continue;
                  }
                  $render_placeholder_card($gt_placeholders[$i]);
              }
              ?>
            </div>
          </div>
        </div>

        <!-- SCRIPT INTERATIVO PARA AS ABAS DA SEÇÃO ESTRUTURA -->
        <script>
        (function() {
          function initEstruturaTabs() {
            var tabs = document.querySelectorAll('.estrutura-tab-btn');
            var blocks = document.querySelectorAll('.estrutura-instance-block');

            if (!tabs.length || !blocks.length) return;

            tabs.forEach(function(btn) {
              btn.addEventListener('click', function() {
                var target = this.getAttribute('data-target');

                tabs.forEach(function(b) {
                  b.classList.remove('active', 'bg-primary', 'text-on-primary');
                  b.classList.add('bg-surface-container', 'text-on-surface-variant');
                });

                this.classList.add('active', 'bg-primary', 'text-on-primary');
                this.classList.remove('bg-surface-container', 'text-on-surface-variant');

                blocks.forEach(function(block) {
                  var blockInstance = block.getAttribute('data-instance');
                  if (target === 'all' || blockInstance === target) {
                    block.style.display = 'block';
                  } else {
                    block.style.display = 'none';
                  }
                });
              });
            });
          }

          if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initEstruturaTabs);
          } else {
            initEstruturaTabs();
          }
        })();
        </script>
      </div>
    </section>

    <!-- TRANSIÇÃO FOTOGRÁFICA: POVOS DA FLORESTA & CENTRO DA AÇÃO -->
    <div class="relative w-full h-64 sm:h-80 md:h-96 lg:h-[420px] overflow-hidden border-t border-border-subtle bg-earth-dark group">
      <img alt="Mulher indígena sorrindo sob a copa da floresta amazônica"
        class="w-full h-full object-cover object-center transform transition-transform duration-700 ease-out"
        src="<?php echo esc_url(aja_asset('fotos/pexels-billsalazar-27010820.jpg')); ?>" />
      <div class="absolute inset-0 bg-gradient-to-b from-black/15 via-transparent to-black/35 pointer-events-none"></div>
    </div>

    <!-- ========================================================================= -->
    <!-- SECTION 4 (ATIVA): PORTFÓLIO DE MEMBROS DA AJA (VERSÃO SIMPLIFICADA)      -->
    <!-- ========================================================================= -->
    <section class="w-full py-space-xl bg-surface-container border-t border-border-subtle" id="portfolio">
      <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin reveal">
        <!-- Section Header -->
        <div class="flex items-center gap-3 mb-2">
          <span class="w-8 h-[2px] bg-primary accent-line-expand"></span>
          <span class="font-label-md text-label-md text-primary uppercase tracking-widest font-bold">Dar Visibilidade a Quem Faz Parte</span>
        </div>
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-4">
          <div>
            <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-medium">
              Portfólio de Membros da AJA
            </h2>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
            Uma rede viva e capilarizada que conecta advogados populares, pesquisadores acadêmicos, clínicas de direitos e organizações comprometidas com a defesa dos povos e territórios da Amazônia.
          </p>
        </div>

        <!-- Bloco Descritivo do Portfólio [A preencher] + Botão para Portfólio Completo -->
        <div class="bg-surface-container-lowest border-2 border-dashed border-border-subtle rounded-2xl p-8 lg:p-10 shadow-xs flex flex-col lg:flex-row lg:items-center justify-between gap-8 interactive-card">
          <div class="flex flex-col gap-4 max-w-3xl">
            <div class="flex flex-wrap items-center gap-3">
              <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-fixed/40 text-primary border border-primary-fixed text-xs font-bold uppercase tracking-wider">
                Portfólio da Rede
              </span>
              <span class="text-[11px] uppercase font-semibold text-outline-variant bg-surface-container px-2.5 py-1 rounded">
                Texto a preencher
              </span>
            </div>

            <div class="font-body-md text-body-md text-on-surface-variant leading-relaxed space-y-3">
              <p class="text-outline italic">
                [A preencher — Espaço reservado para o texto institucional que descreve o Portfólio de Membros da Aliança Jurídica pela Amazônia (AJA), sua diversidade de atuação e capilaridade nos territórios.]
              </p>
            </div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4 shrink-0 w-full lg:w-auto">
            <a class="interactive-btn arrow-hover px-6 py-4 rounded-lg bg-primary hover:bg-moss-light text-on-primary font-label-lg text-label-lg uppercase tracking-wider transition-all duration-200 inline-flex items-center justify-center gap-2 shadow-sm hover:shadow-md text-center font-bold"
              href="<?php echo esc_url(home_url('/portfolio/')); ?>">
              <span>Acessar Portfólio Completo</span>
              <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- SECTION 4 (OCULTA PARA USO FUTURO): PORTFÓLIO COM CATEGORIAS E CARDS      -->
    <!-- Para ativar futuramente, basta remover a classe "hidden" e o display:none -->
    <!-- ========================================================================= -->
    <section class="hidden w-full py-space-xl bg-surface-container border-t border-border-subtle" id="portfolio-completo-futuro" style="display: none;" aria-hidden="true">
      <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
        <!-- Section Header -->
        <div class="flex items-center gap-3 mb-2">
          <span class="w-8 h-[2px] bg-primary"></span>
          <span class="font-label-md text-label-md text-primary uppercase tracking-widest font-bold">Dar Visibilidade a Quem Faz Parte</span>
        </div>
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-4">
          <div>
            <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-medium">
              Portfólio de Membros da AJA
            </h2>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
            Uma rede viva e capilarizada que conecta advogados populares, pesquisadores acadêmicos, clínicas de direitos e organizações comprometidas com a defesa dos povos e territórios da Amazônia.
          </p>
        </div>

        <!-- Network Interactive Tabs Filter -->
        <div class="flex items-center gap-2 overflow-x-auto pb-4 mb-8 text-nowrap" id="network-filter-tabs">
          <button
            class="network-tab active px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider transition-colors shadow-sm"
            data-target="all" type="button">Todos os Membros</button>
          <button
            class="network-tab px-4 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-colors shadow-sm"
            data-target="advocacia" type="button">Advocacia Popular & Coletivos</button>
          <button
            class="network-tab px-4 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-colors shadow-sm"
            data-target="pesquisa" type="button">Pesquisa & Clínicas Jurídicas</button>
          <button
            class="network-tab px-4 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-colors shadow-sm"
            data-target="sociedade" type="button">Organizações da Sociedade Civil</button>
          <button
            class="network-tab px-4 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-colors shadow-sm"
            data-target="diretoria" type="button">Articulação & Conselho</button>
        </div>

        <!-- Grid of Leaders & Nodes (Alimentado dinamicamente pela Categoria "portfolio") -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter mb-space-xl">
          <?php
          $portfolio_query = new WP_Query(array(
              'category_name'  => 'portfolio',
              'posts_per_page' => 12,
              'post_status'    => 'publish',
          ));

          if ($portfolio_query->have_posts()) :
              while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                  $post_id        = get_the_ID();
                  $cat_filter     = aja_get_portfolio_cat($post_id);
                  $badge          = aja_get_post_badge($post_id, 'Membro da Rede');
                  $subtitle       = aja_get_post_subtitle($post_id, '');
                  $location       = get_post_meta($post_id, '_aja_location', true);
                  
                  // Cor dinâmica para o badge de acordo com a categoria
                  $badge_color = 'text-secondary';
                  if ($cat_filter === 'diretoria') {
                      $badge_color = 'text-primary';
                  } elseif ($cat_filter === 'pesquisa') {
                      $badge_color = 'text-moss-light';
                  } elseif ($cat_filter === 'sociedade') {
                      $badge_color = 'text-clay-warm';
                  }
                  ?>
                  <div
                    class="network-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group border border-border-subtle"
                    data-category="<?php echo esc_attr($cat_filter); ?>">
                    <div class="h-56 bg-surface-container flex flex-col items-center justify-center text-center border-b border-border-subtle select-none overflow-hidden relative">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('aja-card-thumb', array('class' => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105')); ?>
                      <?php else : ?>
                        <div class="p-6 flex flex-col items-center justify-center">
                          <span class="material-symbols-outlined text-4xl text-outline mb-1.5 opacity-60">image</span>
                          <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant font-medium">
                            Imagem a ser colocada
                          </span>
                        </div>
                      <?php endif; ?>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                      <div>
                        <span class="font-label-sm text-label-sm <?php echo esc_attr($badge_color); ?> font-bold uppercase tracking-wider">
                          <?php echo esc_html($badge); ?>
                        </span>
                        <h3 class="font-title-lg text-title-lg text-ink-primary font-bold mt-1">
                          <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors">
                            <?php the_title(); ?>
                          </a>
                        </h3>
                        <div class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">
                          <?php the_excerpt(); ?>
                        </div>
                      </div>
                      <div class="mt-4 pt-3.5 border-t border-surface-container flex flex-col gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                        <?php if (!empty($location)) : ?>
                          <div class="flex items-center gap-1.5 text-on-surface-variant" title="<?php echo esc_attr($location); ?>">
                            <span class="material-symbols-outlined text-[16px] text-primary shrink-0">location_on</span>
                            <span class="leading-tight"><?php echo esc_html($location); ?></span>
                          </div>
                        <?php endif; ?>
                        <?php if (!empty($subtitle)) : ?>
                          <div class="flex items-center gap-1.5 text-[11px] uppercase font-bold text-clay-warm" title="<?php echo esc_attr($subtitle); ?>">
                            <span class="material-symbols-outlined text-[15px] text-clay-warm shrink-0">work</span>
                            <span class="leading-tight"><?php echo esc_html($subtitle); ?></span>
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                  <?php
              endwhile;
              wp_reset_postdata();
          else :
              // Fallback: Exibição dos cards de exemplo caso ainda não haja posts publicados no WordPress
              ?>
              <!-- Card 1 (Fallback) -->
              <div
                class="network-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group border border-border-subtle"
                data-category="advocacia">
                <div class="h-56 bg-surface-container flex flex-col items-center justify-center p-6 text-center border-b border-border-subtle select-none">
                  <span class="material-symbols-outlined text-4xl text-outline mb-1.5 opacity-60">image</span>
                  <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant font-medium">
                    Imagem a ser colocada
                  </span>
                </div>
                <div class="p-6 flex flex-col flex-1 justify-between">
                  <div>
                    <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">Advocacia Popular</span>
                    <h3 class="font-title-lg text-title-lg text-ink-primary font-bold mt-1">[A preencher]</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">
                      [A preencher]
                    </p>
                  </div>
                  <div class="mt-4 pt-3.5 border-t border-surface-container flex flex-col gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                    <div class="flex items-center gap-1.5 text-on-surface-variant" title="[A preencher]">
                      <span class="material-symbols-outlined text-[16px] text-primary shrink-0">location_on</span>
                      <span class="leading-tight">[A preencher]</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-[11px] uppercase font-bold text-clay-warm" title="[A preencher]">
                      <span class="material-symbols-outlined text-[15px] text-clay-warm shrink-0">work</span>
                      <span class="leading-tight">[A preencher]</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card 2 (Fallback) -->
              <div
                class="network-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group border border-border-subtle"
                data-category="diretoria">
                <div class="h-56 bg-surface-container flex flex-col items-center justify-center p-6 text-center border-b border-border-subtle select-none">
                  <span class="material-symbols-outlined text-4xl text-outline mb-1.5 opacity-60">image</span>
                  <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant font-medium">
                    Imagem a ser colocada
                  </span>
                </div>
                <div class="p-6 flex flex-col flex-1 justify-between">
                  <div>
                    <span class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider">Articulação & Conselho</span>
                    <h3 class="font-title-lg text-title-lg text-ink-primary font-bold mt-1">[A preencher]</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">
                      [A preencher]
                    </p>
                  </div>
                  <div class="mt-4 pt-3.5 border-t border-surface-container flex flex-col gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                    <div class="flex items-center gap-1.5 text-on-surface-variant" title="[A preencher]">
                      <span class="material-symbols-outlined text-[16px] text-primary shrink-0">location_on</span>
                      <span class="leading-tight">[A preencher]</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-[11px] uppercase font-bold text-clay-warm" title="[A preencher]">
                      <span class="material-symbols-outlined text-[15px] text-clay-warm shrink-0">work</span>
                      <span class="leading-tight">[A preencher]</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card 3 (Fallback) -->
              <div
                class="network-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group border border-border-subtle"
                data-category="pesquisa">
                <div class="h-56 bg-surface-container flex flex-col items-center justify-center p-6 text-center border-b border-border-subtle select-none">
                  <span class="material-symbols-outlined text-4xl text-outline mb-1.5 opacity-60">image</span>
                  <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant font-medium">
                    Imagem a ser colocada
                  </span>
                </div>
                <div class="p-6 flex flex-col flex-1 justify-between">
                  <div>
                    <span class="font-label-sm text-label-sm text-moss-light font-bold uppercase tracking-wider">Pesquisa & Clínicas Jurídicas</span>
                    <h3 class="font-title-lg text-title-lg text-ink-primary font-bold mt-1">[A preencher]</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">
                      [A preencher]
                    </p>
                  </div>
                  <div class="mt-4 pt-3.5 border-t border-surface-container flex flex-col gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                    <div class="flex items-center gap-1.5 text-on-surface-variant" title="[A preencher]">
                      <span class="material-symbols-outlined text-[16px] text-primary shrink-0">location_on</span>
                      <span class="leading-tight">[A preencher]</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-[11px] uppercase font-bold text-clay-warm" title="[A preencher]">
                      <span class="material-symbols-outlined text-[15px] text-clay-warm shrink-0">work</span>
                      <span class="leading-tight">[A preencher]</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card 4 (Fallback) -->
              <div
                class="network-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group border border-border-subtle"
                data-category="sociedade">
                <div class="h-56 bg-surface-container flex flex-col items-center justify-center p-6 text-center border-b border-border-subtle select-none">
                  <span class="material-symbols-outlined text-4xl text-outline mb-1.5 opacity-60">image</span>
                  <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant font-medium">
                    Imagem a ser colocada
                  </span>
                </div>
                <div class="p-6 flex flex-col flex-1 justify-between">
                  <div>
                    <span class="font-label-sm text-label-sm text-clay-warm font-bold uppercase tracking-wider">Organizações da Sociedade Civil</span>
                    <h3 class="font-title-lg text-title-lg text-ink-primary font-bold mt-1">[A preencher]</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">
                      [A preencher]
                    </p>
                  </div>
                  <div class="mt-4 pt-3.5 border-t border-surface-container flex flex-col gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                    <div class="flex items-center gap-1.5 text-on-surface-variant" title="[A preencher]">
                      <span class="material-symbols-outlined text-[16px] text-primary shrink-0">location_on</span>
                      <span class="leading-tight">[A preencher]</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-[11px] uppercase font-bold text-clay-warm" title="[A preencher]">
                      <span class="material-symbols-outlined text-[15px] text-clay-warm shrink-0">work</span>
                      <span class="leading-tight">[A preencher]</span>
                    </div>
                  </div>
                </div>
              </div>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <!-- SECTION 5: COOPERAÇÃO E PARCEIROS ESTRATÉGICOS -->
    <section class="w-full py-16 bg-surface border-t border-border-subtle" id="parceiros">
      <a id="apoiadores" class="sr-only"></a>
      <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin reveal">
        <div class="flex flex-col items-center text-center mb-10">
          <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Articulação Coletiva</span>
          <h3 class="font-headline-sm text-headline-sm text-ink-primary font-medium mt-1">Parceiros Institucionais</h3>
        </div>
        <!-- Partners Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 items-stretch py-2 stagger-grid">
          <!-- 1. Amazon Investor Coalition -->
          <a href="https://amazoninvestor.org/" target="_blank" rel="noopener noreferrer"
            class="relative px-5 py-6 rounded-2xl bg-surface-container-lowest shadow-sm border border-border-subtle flex items-center justify-center text-center hover:shadow-lg hover:border-primary/50 transition-all duration-300 group h-32 lg:h-36"
            title="Amazon Investor Coalition">
            <img alt="Amazon Investor Coalition"
              class="max-h-16 lg:max-h-20 w-auto max-w-[90%] object-contain opacity-95 group-hover:opacity-100 transition-all duration-300 group-hover:scale-105"
              src="<?php echo esc_url(aja_asset('parceiros/amazon investor coalition.png')); ?>" />
            <span class="absolute -bottom-3.5 left-1/2 -translate-x-1/2 px-3 py-1 rounded-md bg-earth-dark text-white text-[12px] font-label-sm font-medium whitespace-nowrap shadow-xl opacity-0 group-hover:opacity-100 group-hover:-translate-y-1 transition-all duration-200 pointer-events-none z-30">
              Amazon Investor Coalition
            </span>
          </a>

          <!-- 2. Center for Climate Crime Analysis -->
          <a href="https://climatecrimeanalysis.org/" target="_blank" rel="noopener noreferrer"
            class="relative px-5 py-6 rounded-2xl bg-surface-container-lowest shadow-sm border border-border-subtle flex items-center justify-center text-center hover:shadow-lg hover:border-primary/50 transition-all duration-300 group h-32 lg:h-36"
            title="Center for Climate Crime Analysis">
            <img alt="Center for Climate Crime Analysis"
              class="max-h-16 lg:max-h-20 w-auto max-w-[90%] object-contain opacity-95 group-hover:opacity-100 transition-all duration-300 group-hover:scale-105"
              src="<?php echo esc_url(aja_asset('parceiros/center for climate crime analysis.png')); ?>" />
            <span class="absolute -bottom-3.5 left-1/2 -translate-x-1/2 px-3 py-1 rounded-md bg-earth-dark text-white text-[12px] font-label-sm font-medium whitespace-nowrap shadow-xl opacity-0 group-hover:opacity-100 group-hover:-translate-y-1 transition-all duration-200 pointer-events-none z-30">
              CCCA
            </span>
          </a>

          <!-- 3. LACLIMA -->
          <a href="https://www.laclima.org/" target="_blank" rel="noopener noreferrer"
            class="relative px-5 py-6 rounded-2xl bg-surface-container-lowest shadow-sm border border-border-subtle flex items-center justify-center text-center hover:shadow-lg hover:border-primary/50 transition-all duration-300 group h-32 lg:h-36"
            title="LACLIMA">
            <img alt="LACLIMA"
              class="max-h-16 lg:max-h-20 w-auto max-w-[90%] object-contain opacity-95 group-hover:opacity-100 transition-all duration-300 group-hover:scale-105"
              src="<?php echo esc_url(aja_asset('parceiros/lacilma.png')); ?>" />
            <span class="absolute -bottom-3.5 left-1/2 -translate-x-1/2 px-3 py-1 rounded-md bg-earth-dark text-white text-[12px] font-label-sm font-medium whitespace-nowrap shadow-xl opacity-0 group-hover:opacity-100 group-hover:-translate-y-1 transition-all duration-200 pointer-events-none z-30">
              LACLIMA
            </span>
          </a>

          <!-- 4. Maparajuba Advocacia Popular -->
          <a href="https://maparajuba.org/" target="_blank" rel="noopener noreferrer"
            class="relative px-5 py-6 rounded-2xl bg-surface-container-lowest shadow-sm border border-border-subtle flex items-center justify-center text-center hover:shadow-lg hover:border-primary/50 transition-all duration-300 group h-32 lg:h-36"
            title="Maparajuba Advocacia Popular">
            <img alt="Maparajuba Advocacia Popular"
              class="max-h-14 lg:max-h-18 w-auto max-w-[94%] object-contain opacity-95 group-hover:opacity-100 transition-all duration-300 group-hover:scale-105"
              src="<?php echo esc_url(aja_asset('parceiros/maparajuba.png')); ?>" />
            <span class="absolute -bottom-3.5 left-1/2 -translate-x-1/2 px-3 py-1 rounded-md bg-earth-dark text-white text-[12px] font-label-sm font-medium whitespace-nowrap shadow-xl opacity-0 group-hover:opacity-100 group-hover:-translate-y-1 transition-all duration-200 pointer-events-none z-30">
              Maparajuba Advocacia Popular
            </span>
          </a>

          <!-- 5. Rede Amazonidas pelo Clima -->
          <a href="https://www.rac-br.org/" target="_blank" rel="noopener noreferrer"
            class="relative px-5 py-6 rounded-2xl bg-surface-container-lowest shadow-sm border border-border-subtle flex items-center justify-center text-center hover:shadow-lg hover:border-primary/50 transition-all duration-300 group h-32 lg:h-36"
            title="Rede Amazonidas pelo Clima">
            <img alt="Rede Amazonidas pelo Clima"
              class="max-h-16 lg:max-h-20 w-auto max-w-[90%] object-contain opacity-95 group-hover:opacity-100 transition-all duration-300 group-hover:scale-105"
              src="<?php echo esc_url(aja_asset('parceiros/rede anazonidas pelo clima.png')); ?>" />
            <span class="absolute -bottom-3.5 left-1/2 -translate-x-1/2 px-3 py-1 rounded-md bg-earth-dark text-white text-[12px] font-label-sm font-medium whitespace-nowrap shadow-xl opacity-0 group-hover:opacity-100 group-hover:-translate-y-1 transition-all duration-200 pointer-events-none z-30">
              Rede Amazonidas pelo Clima
            </span>
          </a>

          <!-- 6. Rede Liberdade -->
          <a href="https://redeliberdade.org.br/" target="_blank" rel="noopener noreferrer"
            class="relative px-5 py-6 rounded-2xl bg-surface-container-lowest shadow-sm border border-border-subtle flex items-center justify-center text-center hover:shadow-lg hover:border-primary/50 transition-all duration-300 group h-32 lg:h-36"
            title="Rede Liberdade">
            <img alt="Rede Liberdade"
              class="max-h-14 lg:max-h-18 w-auto max-w-[94%] object-contain opacity-95 group-hover:opacity-100 transition-all duration-300 group-hover:scale-105"
              src="<?php echo esc_url(aja_asset('parceiros/rede liberdade.png')); ?>" />
            <span class="absolute -bottom-3.5 left-1/2 -translate-x-1/2 px-3 py-1 rounded-md bg-earth-dark text-white text-[12px] font-label-sm font-medium whitespace-nowrap shadow-xl opacity-0 group-hover:opacity-100 group-hover:-translate-y-1 transition-all duration-200 pointer-events-none z-30">
              Rede Liberdade
            </span>
          </a>
        </div>
      </div>
    </section>

    <!-- SECTION 6: SEJA MEMBRO / FAÇA PARTE -->
    <section class="w-full py-space-xl bg-surface-container border-t border-border-subtle" id="faca-parte">
      <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin reveal">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
          <!-- Guidelines Column -->
          <div class="lg:col-span-6 flex flex-col gap-6">
            <div class="flex items-center gap-3">
              <span class="w-8 h-[2px] bg-secondary accent-line-expand"></span>
              <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">
                Faça Parte • Porta de entrada para integrar os Grupos Temáticos
              </span>
            </div>
            <h2
              class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-medium leading-tight">
              Faça Parte da Aliança Jurídica pela Amazônia
            </h2>
            <div class="flex flex-col gap-4 font-body-lg text-body-md text-on-surface-variant leading-relaxed">
              <p>
                A Aliança Jurídica pela Amazônia é um espaço aberto à colaboração de advogados(as), pesquisadores(as), organizações da sociedade civil, escritórios de advocacia, coletivos jurídicos e clínicas de direitos que compartilham do nosso propósito e dos princípios que orientam nossa atuação.
              </p>
              <p>
                Se você acredita em uma Amazônia com justiça, integridade territorial e protagonismo dos povos, queremos caminhar junto com você.
              </p>
              <p>
                Preencha o formulário de adesão e venha contribuir com esta rede.
              </p>
            </div>

            <!-- Dúvidas e Contato Oficial -->
            <div class="p-5 bg-surface-container-lowest border border-border-subtle rounded-xl flex items-center gap-3 text-body-sm text-on-surface shadow-xs mt-2">
              <span class="material-symbols-outlined text-[22px] text-secondary shrink-0">mail</span>
              <span>Em caso de dúvidas, entre em contato pelo e-mail: <a href="mailto:info@ajamazonia.org" class="font-bold text-secondary hover:underline">info@ajamazonia.org</a></span>
            </div>
          </div>

          <!-- Conversion Action Box -->
          <div class="lg:col-span-6">
            <div class="bg-surface-container-lowest p-8 lg:p-12 rounded-2xl shadow-sm border border-border-subtle flex flex-col gap-6 interactive-card">
              <div class="flex items-center justify-between">
                <span class="px-3 py-1 rounded bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-bold uppercase tracking-wider">
                  Adesão Aberta
                </span>
                <span class="font-label-sm text-label-sm text-outline">Processo Contínuo</span>
              </div>

              <div class="flex flex-col gap-3">
                <h3 class="font-headline-sm text-headline-sm text-ink-primary font-bold">
                  Formulário Oficial de Adesão à AJA
                </h3>
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                  Clique no botão abaixo para acessar o formulário oficial de adesão e cadastrar seus dados e área de interesse nos Grupos Temáticos.
                </p>
              </div>

              <div class="p-6 bg-surface-container-low rounded-xl flex flex-col gap-3 border border-border-subtle">
                <div class="flex items-center gap-2 font-label-md text-label-md text-ink-primary font-bold">
                  <span class="material-symbols-outlined text-[20px] text-primary">verified</span>
                  Quem pode se associar:
                </div>
                <ul class="font-body-sm text-body-sm text-on-surface-variant space-y-1.5 list-disc pl-5">
                  <li>Advogados e advogadas atuantes na defesa socioambiental</li>
                  <li>Pesquisadores, professores e membros de clínicas de direito</li>
                  <li>Organizações da sociedade civil e ONGs</li>
                  <li>Coletivos jurídicos de base e assessorias populares</li>
                  <li>Escritórios de advocacia comprometidos com o fortalecimento do Estado de Direito</li>
                </ul>
              </div>

              <a class="w-full py-4 px-6 rounded-lg bg-primary hover:bg-moss-light text-on-primary font-label-lg text-label-lg uppercase tracking-wider transition-all duration-200 flex items-center justify-center gap-2 shadow-md hover:shadow-lg font-bold text-center"
                href="https://docs.google.com/forms/d/e/1FAIpQLSeAuZ5N3FxsVX0HrQ9dhrCqyEPuAmWgR-IOEXm1m35Z_Nxjhg/viewform?usp=send_form"
                target="_blank" rel="noopener noreferrer">
                <span>Preencher Formulário de Adesão</span>
                <span class="material-symbols-outlined text-[20px]">open_in_new</span>
              </a>

              <p class="font-body-sm text-body-sm text-outline text-center">
                Formulário seguro no Google Forms. Tempo estimado: 5 minutos.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- SECTION 7: EDITAIS & OPORTUNIDADES (CATEGORIA 2: "editais")                  -->
    <!-- ========================================================================= -->
    <section class="w-full py-space-xl bg-surface border-t border-border-subtle" id="editais">
      <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin reveal">
        <!-- Section Header -->
        <div class="flex items-center gap-3 mb-2">
          <span class="w-8 h-[2px] bg-secondary accent-line-expand"></span>
          <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Editais</span>
        </div>
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-4">
          <div>
            <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-medium">
              Editais
            </h2>
          </div>
          <p class="font-body-sm text-body-sm text-on-surface-variant max-w-sm">
            Mecanismos públicos e transparentes para mobilização de inteligência jurídica, parcerias e iniciativas na Amazônia.
          </p>
        </div>

        <!-- Estado Informativo: Nenhuma chamada aberta no momento -->
        <div class="p-8 lg:p-12 rounded-2xl bg-surface-container-low border border-border-subtle flex flex-col md:flex-row items-center justify-between gap-6 interactive-card">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-surface-container text-outline flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[28px]">folder_open</span>
            </div>
            <div>
              <span class="px-2.5 py-1 rounded bg-surface-container text-on-surface-variant font-label-sm text-[11px] font-bold uppercase tracking-wider inline-block mb-2">
                Status Atual
              </span>
              <h3 class="font-title-lg text-title-lg text-ink-primary font-bold">
                Nenhuma chamada aberta no momento
              </h3>
              <p class="font-body-md text-body-md text-on-surface-variant mt-1 max-w-2xl leading-relaxed">
                Não há editais ou chamadas públicas para artigos com inscrições abertas no momento. Novas oportunidades serão comunicadas oportunamente através dos canais oficiais da Aliança.
              </p>
            </div>
          </div>
          <div class="shrink-0 w-full md:w-auto">
            <a href="<?php echo esc_url(home_url('/contato/')); ?>"
               class="w-full md:w-auto px-5 py-3 rounded-lg bg-surface-container-lowest border border-border-subtle hover:border-primary text-ink-primary hover:text-primary font-bold text-xs uppercase tracking-wider transition-colors inline-flex items-center justify-center gap-2">
              <span class="material-symbols-outlined text-[18px]">mail</span>
              <span>Fale Conosco</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- SECTION 8: CONHECIMENTO & PRODUÇÃO INTELECTUAL (CATEGORIA 3: "publicacoes")-->
    <!-- ========================================================================= -->
    <section class="w-full py-space-xl bg-surface-container border-t border-border-subtle" id="conhecimento">
      <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin reveal">
        <!-- Section Header -->
        <div class="flex items-center gap-3 mb-2">
          <span class="w-8 h-[2px] bg-secondary accent-line-expand"></span>
          <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Vitrine de Conhecimento</span>
        </div>
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-4">
          <div>
            <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-medium">
              Publicações, Artigos e Notas Técnicas
            </h2>
          </div>
        </div>

        <?php
        if (function_exists('aja_render_publicacoes_grid')) {
            echo aja_render_publicacoes_grid(12);
        } else {
            echo do_shortcode('[aja_publicacoes limit="12"]');
        }
        ?>
      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- SECTION: NOTÍCIAS & ATUALIDADES DA REDE (CATEGORIA: "noticias") -->
    <!-- ========================================================================= -->
    <section class="w-full py-space-xl bg-surface border-t border-border-subtle" id="noticias">
      <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin reveal">
        <!-- Section Header -->
        <div class="flex items-center gap-3 mb-2">
          <span class="w-8 h-[2px] bg-secondary accent-line-expand"></span>
          <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Comunicação & Atualidades</span>
        </div>
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-4">
          <div>
            <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-medium">
              Notícias e Comunicados da AJA
            </h2>
            <p class="font-body-md text-body-md text-on-surface-variant mt-2 max-w-2xl leading-relaxed">
              Acompanhe as ações, coberturas institucionais, eventos nos territórios e manifestações públicas da Aliança Jurídica pela Amazônia.
            </p>
          </div>
        </div>

        <?php
        $noticias_query = new WP_Query([
            'category_name'  => 'noticias',
            'posts_per_page' => 12,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC'
        ]);
        $has_news = $noticias_query->have_posts();
        ?>

        <?php if ($has_news) : ?>
          <!-- Sistema de Filtros e Busca Rápida de Notícias -->
          <div class="mb-8 flex flex-col gap-4 bg-surface-container-lowest rounded-2xl p-5 sm:p-6 border border-border-subtle shadow-sm" id="noticias-filter-system">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
              <!-- Abas de Filtro de Notícias -->
              <div class="flex items-center gap-2 overflow-x-auto pb-2 lg:pb-0 text-nowrap" id="noticias-tabs">
                <button type="button" class="noticias-filter-btn active px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider transition-all duration-200 shadow-sm" data-filter="all">
                  Todas as Notícias
                </button>
                <button type="button" class="noticias-filter-btn px-4 py-2 rounded-lg bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-filter="cobertura">
                  🌐 Coberturas & Eventos
                </button>
                <button type="button" class="noticias-filter-btn px-4 py-2 rounded-lg bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-filter="comunicado">
                  📢 Comunicados Oficiais
                </button>
                <button type="button" class="noticias-filter-btn px-4 py-2 rounded-lg bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-filter="territorio">
                  🌳 Ações em Territórios
                </button>
              </div>

              <!-- Busca Rápida -->
              <div class="relative w-full lg:w-72 shrink-0">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary">
                  <span class="material-symbols-outlined text-[18px]">search</span>
                </div>
                <input type="text" id="noticias-search-input" placeholder="Buscar notícia, local ou tema..." 
                       class="w-full pl-9 pr-8 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface text-body-sm font-body-sm placeholder:text-outline focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-sm transition-all" />
                <button type="button" id="noticias-search-clear" class="absolute inset-y-0 right-0 pr-2.5 flex items-center text-outline hover:text-on-surface hidden">
                  <span class="material-symbols-outlined text-[16px]">cancel</span>
                </button>
              </div>
            </div>

            <!-- Contador e Reset -->
            <div class="flex items-center justify-between text-xs text-on-surface-variant pt-2 border-t border-border-subtle/50">
              <span id="noticias-count-display">Carregando notícias...</span>
              <button type="button" id="noticias-reset-filters" class="text-secondary hover:underline font-semibold hidden">
                Limpar filtros
              </button>
            </div>
          </div>

          <!-- Grade de Cards de Notícias -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter stagger-grid" id="noticias-cards-grid">
            <?php
            while ($noticias_query->have_posts()) : $noticias_query->the_post();
                $news_id       = get_the_ID();
                $news_badge    = aja_get_post_badge($news_id, 'Notícia');
                $news_sub      = aja_get_post_subtitle($news_id, 'Comunicação AJA');
                $news_loc      = get_post_meta($news_id, '_aja_location', true);
                $news_link     = aja_get_post_action_link($news_id);
                $news_btn      = aja_get_post_action_label($news_id, 'Ler Notícia Completa');
                $news_date     = get_the_date('d \d\e F, Y');
                $news_excerpt  = get_the_excerpt() ?: wp_trim_words(get_the_content(), 24);
                $has_thumb     = has_post_thumbnail($news_id);
                $news_thumb    = $has_thumb ? get_the_post_thumbnail_url($news_id, 'large') : '';

                // Categorização para os filtros
                $text_all = mb_strtolower(get_the_title() . ' ' . $news_badge . ' ' . $news_sub . ' ' . $news_excerpt . ' ' . $news_loc);
                $filter_cat = 'cobertura';
                if (strpos($text_all, 'comunicado') !== false || strpos($text_all, 'nota') !== false || strpos($text_all, 'oficial') !== false) {
                    $filter_cat = 'comunicado';
                } elseif (strpos($text_all, 'territór') !== false || strpos($text_all, 'comunidade') !== false || strpos($text_all, 'indígen') !== false || strpos($text_all, 'quilomb') !== false || strpos($text_all, 'tapajós') !== false || strpos($text_all, 'campo') !== false) {
                    $filter_cat = 'territorio';
                }
                ?>
                <div class="noticia-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col border border-border-subtle group"
                     data-category="<?php echo esc_attr($filter_cat); ?>"
                     data-search="<?php echo esc_attr($text_all); ?>">
                  <?php if ($has_thumb && !empty($news_thumb)) : ?>
                  <div class="h-48 overflow-hidden relative">
                    <img alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?php echo esc_url($news_thumb); ?>" />
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/95 backdrop-blur text-secondary font-label-sm text-[11px] font-bold uppercase tracking-wider shadow-sm">
                      <?php echo esc_html($news_badge); ?>
                    </span>
                  </div>
                  <?php endif; ?>
                  <div class="p-6 flex flex-col flex-1 justify-between">
                    <div>
                      <?php if (!$has_thumb || empty($news_thumb)) : ?>
                      <div class="mb-3">
                        <span class="inline-flex px-2.5 py-1 rounded bg-surface-container text-secondary font-label-sm text-[11px] font-bold uppercase tracking-wider shadow-2xs">
                          <?php echo esc_html($news_badge); ?>
                        </span>
                      </div>
                      <?php endif; ?>
                      <div class="flex items-center justify-between text-xs text-on-surface-variant mb-2">
                        <span class="font-label-sm text-clay-warm font-semibold truncate max-w-[60%]"><?php echo esc_html($news_sub); ?></span>
                        <span class="inline-flex items-center gap-1 font-label-sm text-outline shrink-0">
                          <span class="material-symbols-outlined text-[14px]">calendar_today</span>
                          <?php echo esc_html($news_date); ?>
                        </span>
                      </div>
                      <h3 class="font-title-lg text-title-lg text-ink-primary font-bold mt-1">
                        <a href="<?php echo esc_url($news_link); ?>" class="hover:text-primary transition-colors">
                          <?php echo esc_html(get_the_title()); ?>
                        </a>
                      </h3>
                      <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">
                        <?php echo esc_html($news_excerpt); ?>
                      </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-surface-container flex items-center justify-between gap-2">
                      <span class="font-label-sm text-[11px] text-on-surface-variant/80 uppercase font-medium truncate">
                        <?php if (!empty($news_loc)) : ?>
                          📍 <?php echo esc_html($news_loc); ?>
                        <?php else : ?>
                          Rede AJA
                        <?php endif; ?>
                      </span>
                      <a class="font-label-sm text-label-sm text-primary font-bold hover:underline inline-flex items-center gap-1 shrink-0" 
                         href="<?php echo esc_url($news_link); ?>">
                        <?php echo esc_html($news_btn); ?> <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                      </a>
                    </div>
                  </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>

            <!-- Estado Vazio de Busca -->
            <div id="noticias-empty-state" class="col-span-full py-12 px-6 bg-surface-container-lowest border border-dashed border-outline-variant rounded-2xl text-center hidden">
              <span class="material-symbols-outlined text-4xl text-outline mb-2">find_in_page</span>
              <h4 class="font-title-lg text-title-lg text-ink-primary font-bold">Nenhuma notícia encontrada</h4>
              <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 max-w-md mx-auto">
                Não encontramos notícias para o filtro selecionado ou termo pesquisado. Tente buscar outras palavras-chave.
              </p>
              <button type="button" id="noticias-empty-reset-btn" class="mt-4 px-4 py-2 bg-primary text-on-primary rounded-lg font-label-md text-label-md uppercase tracking-wider hover:bg-primary-container transition-colors shadow-sm font-bold">
                Exibir Todas as Notícias
              </button>
            </div>
          </div>
        <?php else : ?>
          <!-- Estado Vazio quando não há notícias cadastradas -->
          <div class="py-16 px-6 bg-surface-container-lowest border border-dashed border-border-subtle rounded-3xl text-center max-w-xl mx-auto shadow-xs">
            <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mx-auto mb-4 text-primary">
              <span class="material-symbols-outlined text-3xl">newspaper</span>
            </div>
            <h3 class="font-headline-sm text-xl text-ink-primary font-bold">Nenhuma notícia publicada no momento</h3>
            <p class="font-body-md text-sm text-on-surface-variant mt-2 leading-relaxed">
              As novidades, coberturas institucionais e comunicados da rede serão divulgados nesta seção assim que publicados.
            </p>
            <div class="mt-6 flex items-center justify-center">
              <a href="<?php echo esc_url(home_url('/publicacoes/')); ?>" class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-lg bg-surface-container-low border border-border-subtle text-ink-primary font-label-md text-xs uppercase tracking-wider font-semibold hover:bg-surface-container transition-colors shadow-sm">
                <span class="material-symbols-outlined text-[16px]">article</span>
                Conhecer as Publicações e Artigos
              </a>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <!-- SCRIPT DE FILTRAGEM INSTANTÂNEA DE NOTÍCIAS -->
    <script>
    (function() {
      function initNoticiasFilters() {
        var tabs = document.querySelectorAll('.noticias-filter-btn');
        var cards = document.querySelectorAll('.noticia-card');
        var searchInput = document.getElementById('noticias-search-input');
        var searchClear = document.getElementById('noticias-search-clear');
        var countDisplay = document.getElementById('noticias-count-display');
        var resetBtn = document.getElementById('noticias-reset-filters');
        var emptyState = document.getElementById('noticias-empty-state');
        var emptyResetBtn = document.getElementById('noticias-empty-reset-btn');

        if (!cards.length) return;

        var currentFilter = 'all';
        var currentSearch = '';

        function filterNews() {
          var visibleCount = 0;
          cards.forEach(function(card) {
            var cat = card.getAttribute('data-category') || '';
            var searchTxt = card.getAttribute('data-search') || '';

            var matchesFilter = (currentFilter === 'all') || (cat === currentFilter);
            var matchesSearch = (currentSearch === '') || (searchTxt.indexOf(currentSearch) !== -1);

            if (matchesFilter && matchesSearch) {
              card.style.display = 'flex';
              visibleCount++;
            } else {
              card.style.display = 'none';
            }
          });

          if (countDisplay) {
            if (currentFilter === 'all' && currentSearch === '') {
              countDisplay.textContent = 'Exibindo todas as ' + visibleCount + ' notícias';
            } else {
              countDisplay.textContent = 'Encontradas ' + visibleCount + ' notícias';
            }
          }

          if (emptyState) {
            if (visibleCount === 0) {
              emptyState.classList.remove('hidden');
            } else {
              emptyState.classList.add('hidden');
            }
          }

          if (resetBtn) {
            if (currentFilter !== 'all' || currentSearch !== '') {
              resetBtn.classList.remove('hidden');
            } else {
              resetBtn.classList.add('hidden');
            }
          }
        }

        // Tabs click
        tabs.forEach(function(btn) {
          btn.addEventListener('click', function() {
            tabs.forEach(function(b) {
              b.classList.remove('active', 'bg-primary', 'text-on-primary');
              b.classList.add('bg-surface-container', 'text-on-surface-variant');
            });
            btn.classList.add('active', 'bg-primary', 'text-on-primary');
            btn.classList.remove('bg-surface-container', 'text-on-surface-variant');

            currentFilter = btn.getAttribute('data-filter') || 'all';
            filterNews();
          });
        });

        // Search input
        if (searchInput) {
          searchInput.addEventListener('input', function() {
            currentSearch = this.value.trim().toLowerCase();
            if (searchClear) {
              if (currentSearch.length > 0) {
                searchClear.classList.remove('hidden');
              } else {
                searchClear.classList.add('hidden');
              }
            }
            filterNews();
          });
        }

        // Search clear
        if (searchClear) {
          searchClear.addEventListener('click', function() {
            if (searchInput) searchInput.value = '';
            currentSearch = '';
            searchClear.classList.add('hidden');
            filterNews();
          });
        }

        // Reset button
        function resetAll() {
          currentFilter = 'all';
          currentSearch = '';
          if (searchInput) searchInput.value = '';
          if (searchClear) searchClear.classList.add('hidden');
          tabs.forEach(function(b, idx) {
            if (idx === 0) {
              b.classList.add('active', 'bg-primary', 'text-on-primary');
              b.classList.remove('bg-surface-container', 'text-on-surface-variant');
            } else {
              b.classList.remove('active', 'bg-primary', 'text-on-primary');
              b.classList.add('bg-surface-container', 'text-on-surface-variant');
            }
          });
          filterNews();
        }

        if (resetBtn) resetBtn.addEventListener('click', resetAll);
        if (emptyResetBtn) emptyResetBtn.addEventListener('click', resetAll);

        filterNews();
      }

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initNoticiasFilters);
      } else {
        initNoticiasFilters();
      }
    })();
    </script>

    <!-- TRANSIÇÃO FOTOGRÁFICA: FAUNA AQUÁTICA AMAZÔNICA (ARIRANHA) -->
    <div class="relative w-full h-64 sm:h-80 md:h-96 lg:h-[420px] overflow-hidden border-t border-border-subtle bg-earth-dark group">
      <img alt="Ariranha nadando nas águas de rio amazônico"
        class="w-full h-full object-cover object-center transform transition-transform duration-700 ease-out"
        src="<?php echo esc_url(aja_asset('fotos/pexels-jeangc-28587106.png')); ?>" />
      <div class="absolute inset-0 bg-gradient-to-b from-black/10 via-transparent to-black/20 pointer-events-none"></div>
    </div>

    <!-- SECTION 9: CONTATO INSTITUCIONAL ("VAMOS CONVERSAR?") -->
    <section class="w-full py-space-xl bg-surface border-t border-border-subtle" id="contato">
      <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin reveal">
        <div class="bg-surface-container-lowest rounded-2xl p-8 lg:p-14 shadow-sm border border-border-subtle interactive-card">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
            <div class="lg:col-span-6 flex flex-col gap-4">
              <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Canais Oficiais</span>
              <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-medium">
                Vamos Conversar?
              </h2>
              <div class="font-body-md text-body-md text-on-surface-variant max-w-lg leading-relaxed flex flex-col gap-3">
                <p>
                  A Aliança Jurídica pela Amazônia (AJA) valoriza o diálogo e a colaboração com profissionais, organizações e instituições comprometidas com a justiça socioambiental e o fortalecimento do Estado de Direito na Amazônia.
                </p>
                <p>
                  Entre em contato conosco para saber mais sobre nossas iniciativas, parcerias e formas de atuação.
                </p>
              </div>

              <!-- Interactive Links & Contact Channels -->
              <div class="flex flex-col gap-3 mt-4 font-body-sm text-body-sm text-on-surface">
                <!-- Email Sede -->
                <div class="flex items-center gap-3">
                  <span class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0">
                    <span class="material-symbols-outlined text-[20px]">mail</span>
                  </span>
                  <div class="flex flex-col">
                    <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline">Sede Institucional</span>
                    <a class="font-medium text-ink-primary hover:text-moss-light transition-colors"
                      href="mailto:sede@ajamazonia.org">sede@ajamazonia.org</a>
                  </div>
                </div>
                <!-- Email Info / Adesão -->
                <div class="flex items-center gap-3">
                  <span class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0">
                    <span class="material-symbols-outlined text-[20px]">alternate_email</span>
                  </span>
                  <div class="flex flex-col">
                    <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline">Adesões & Informações</span>
                    <a class="font-medium text-ink-primary hover:text-moss-light transition-colors"
                      href="mailto:info@ajamazonia.org">info@ajamazonia.org</a>
                  </div>
                </div>
                <!-- Instagram -->
                <div class="flex items-center gap-3">
                  <span class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                      <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                  </span>
                  <div class="flex flex-col">
                    <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline">Instagram</span>
                    <a class="font-medium text-ink-primary hover:text-moss-light transition-colors"
                      href="https://www.instagram.com/ajamazonia/" target="_blank"
                      rel="noopener noreferrer">@ajamazonia</a>
                  </div>
                </div>
                <!-- LinkedIn -->
                <div class="flex items-center gap-3">
                  <span class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                      <path
                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                    </svg>
                  </span>
                  <div class="flex flex-col">
                    <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline">LinkedIn</span>
                    <a class="font-medium text-ink-primary hover:text-moss-light transition-colors"
                      href="https://www.linkedin.com/company/alian%C3%A7a-jur%C3%ADdica-pela-amaz%C3%B4nia/?originalSubdomain=br" target="_blank"
                      rel="noopener noreferrer">Aliança Jurídica pela Amazônia</a>
                  </div>
                </div>
                <!-- Sede Institucional -->
                <div class="flex items-center gap-3">
                  <span class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0">
                    <span class="material-symbols-outlined text-[20px]">pin_drop</span>
                  </span>
                  <div class="flex flex-col">
                    <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline">Sede Institucional</span>
                    <span class="font-medium text-ink-primary">[Endereço a preencher]</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Newsletter Box -->
            <div class="lg:col-span-6 mt-6 lg:mt-0 scroll-mt-28" id="newsletter">
              <div class="bg-surface-container-low p-6 lg:p-8 rounded-xl flex flex-col gap-4 border border-border-subtle shadow-sm transition-all duration-300">
                <div class="flex items-center gap-2">
                  <span class="w-8 h-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-[20px]">forward_to_inbox</span>
                  </span>
                  <span class="font-title-md text-title-md font-bold text-ink-primary">Boletim Territorial AJA</span>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">
                  Assine para receber análises jurídicas exclusivas, notas técnicas sobre julgamentos ambientais e convocações para chamadas da rede.
                </p>
                <div class="flex flex-col sm:flex-row gap-2 mt-2">
                  <input
                    class="flex-1 h-12 px-4 rounded-lg bg-surface-container-lowest text-on-surface font-body-md focus:outline-none focus:ring-2 focus:ring-primary border border-border-subtle"
                    placeholder="Seu e-mail profissional" type="email" id="newsletter-email-input" />
                  <button
                    class="h-12 px-6 rounded-lg bg-primary hover:bg-moss-light text-on-primary font-label-md text-label-md uppercase tracking-wider transition-colors shrink-0 font-bold shadow-sm"
                    type="button" onclick="alert('Obrigado pelo interesse! Seu cadastro foi recebido com sucesso.');">
                    Cadastrar
                  </button>
                </div>
                <span class="font-label-sm text-label-sm text-outline flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-[14px]">lock</span>
                  Garantimos a privacidade dos dados nos moldes da LGPD.
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Smooth Focus Script para Newsletter -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      var newsButtons = document.querySelectorAll('a[href="#newsletter"]');
      newsButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
          setTimeout(function() {
            var inp = document.getElementById('newsletter-email-input');
            if (inp) {
              inp.focus();
              var box = document.getElementById('newsletter');
              if (box) {
                box.classList.add('ring-2', 'ring-primary');
                setTimeout(function() { box.classList.remove('ring-2', 'ring-primary'); }, 2000);
              }
            }
          }, 400);
        });
      });
    });
    </script>

    <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
    <?php get_template_part('template-parts/cta-faca-parte'); ?>

  </div>
</main>

<?php
get_footer();
