<?php
/**
 * Template Name: Página - Sobre Nós
 * Description: Página institucional Sobre Nós da Aliança Jurídica pela Amazônia (AJA) com visão geral, princípios e atalhos para subseções.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- HERO DA PÁGINA SOBRE NÓS -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle relative overflow-hidden">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
        <div class="lg:col-span-7 flex flex-col justify-center">
          <div class="flex items-center gap-2.5 mb-3">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
            <span class="text-xs text-outline">/</span>
            <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Sobre a Aliança</span>
          </div>

          <h1 class="font-headline-lg text-3xl sm:text-4xl lg:text-5xl text-ink-primary font-bold leading-tight max-w-3xl">
            Sobre nós
          </h1>

          <div class="flex flex-col gap-4 font-body-lg text-body-md text-on-surface-variant max-w-2xl mt-4 leading-relaxed">
            <p>
              <strong>Aliança Jurídica pela Amazônia (AJA)</strong> é uma rede jurídica diversa e representativa que visa o fortalecimento do Estado de Direito na Amazônia Brasileira, formada por advogados, pesquisadores, organizações da sociedade civil, clínicas de direito, coletivos jurídicos de base e demais profissionais comprometidos com a defesa da justiça socioambiental que atuam na ou pela Amazônia.
            </p>
            <p>
              A AJA atua como um espaço articulador e colaborativo, conectando e potencializando atores e iniciativas já existentes; incentivando o diálogo e a cooperação em temas transversais e valorizando a diversidade de saberes, jurídicos e tradicionais, para enfrentar de forma integrada os desafios da região, contribuindo para a proteção de direitos humanos e socioambientais, e para a segurança jurídica de povos e territórios.
            </p>
            <p>
              Com enfoque no protagonismo amazônida, a AJA busca influenciar mudanças estruturais no ecossistema jurídico e institucional da região, apoiando o fortalecimento das instituições de justiça, da democracia ambiental e da governança territorial, promovendo ações que visam a construção de uma Amazônia mais justa, segura, próspera e regenerativa. Mais do que uma articulação jurídica, a AJA é um movimento por um futuro no qual a floresta e seus povos tenham voz, proteção e centralidade na formulação das decisões que afetam seus territórios.
            </p>
          </div>
        </div>

        <div class="lg:col-span-5">
          <div class="relative rounded-2xl overflow-hidden shadow-lg border border-border-subtle group h-[360px] sm:h-[420px] lg:h-[440px] bg-earth-dark">
            <img src="<?php echo esc_url(aja_asset('fotos/pessoa-segurando-cocar-na-canoa.jpg')); ?>"
                 alt="Liderança indígena segurando cocar cerimonial na canoa no rio amazônico"
                 class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/30 to-transparent flex flex-col justify-end p-6 sm:p-7">
              <span class="px-2.5 py-1 rounded bg-secondary/90 text-white font-label-sm text-[11px] font-bold uppercase tracking-wider w-fit mb-2">Centralidade Territorial</span>
              <p class="text-white font-title-sm text-sm sm:text-base font-semibold leading-snug">
                "Proteger o território é também proteger vidas, culturas e saberes ancestrais."
              </p>
              <p class="text-surface-container-high text-xs mt-1 font-body-sm opacity-90">
                Aliança Jurídica pela Amazônia • Carta de Princípios
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEÇÃO 1: SUBSEÇÕES EM DESTAQUE (NAVEGAÇÃO RÁPIDA) -->
  <section class="w-full py-12 lg:py-16 bg-surface border-b border-border-subtle">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <div class="flex items-center gap-3 mb-2">
        <span class="w-8 h-[2px] bg-secondary"></span>
        <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Subseções Institucionais</span>
      </div>
      <h2 class="font-headline-lg text-2xl sm:text-3xl font-bold text-ink-primary mb-8">
        Conheça a AJA em Detalhes
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Subseção 1: Nossa História -->
        <a href="<?php echo esc_url(home_url('/nossa-historia/')); ?>"
           class="p-8 rounded-2xl bg-surface-container-lowest border border-border-subtle hover:border-secondary hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
          <div>
            <div class="w-12 h-12 rounded-xl bg-secondary/15 text-secondary flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
              <span class="material-symbols-outlined text-[26px]">history_edu</span>
            </div>
            <span class="font-label-sm text-[11px] uppercase tracking-wider text-secondary font-bold block mb-1">Subseção 01</span>
            <h3 class="font-title-lg text-xl font-bold text-ink-primary group-hover:text-primary transition-colors">
              Nossa História
            </h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2.5 leading-relaxed">
              Origem, marcos de articulação, trajetória e a construção coletiva que deu vida à Aliança Jurídica pela Amazônia.
            </p>
          </div>
          <div class="pt-6 mt-6 border-t border-border-subtle flex items-center gap-1.5 text-secondary font-bold text-xs uppercase tracking-wider">
            <span>Acessar História</span>
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </div>
        </a>

        <!-- Subseção 2: Atuação & GTs -->
        <a href="<?php echo esc_url(home_url('/atuacao/')); ?>"
           class="p-8 rounded-2xl bg-surface-container-lowest border border-border-subtle hover:border-tertiary hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
          <div>
            <div class="w-12 h-12 rounded-xl bg-tertiary/15 text-tertiary flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
              <span class="material-symbols-outlined text-[26px]">groups</span>
            </div>
            <span class="font-label-sm text-[11px] uppercase tracking-wider text-tertiary font-bold block mb-1">Subseção 02</span>
            <h3 class="font-title-lg text-xl font-bold text-ink-primary group-hover:text-primary transition-colors">
              Nossa Atuação &amp; GTs
            </h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2.5 leading-relaxed">
              Reuniões plenárias e os três Grupos Temáticos: Território &amp; Segurança, Litigância Judicial e Finanças Sustentáveis.
            </p>
          </div>
          <div class="pt-6 mt-6 border-t border-border-subtle flex items-center gap-1.5 text-tertiary font-bold text-xs uppercase tracking-wider">
            <span>Conhecer Atuação</span>
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </div>
        </a>

        <!-- Subseção 3: Estrutura -->
        <a href="<?php echo esc_url(home_url('/estrutura/')); ?>"
           class="p-8 rounded-2xl bg-surface-container-lowest border border-border-subtle hover:border-primary hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
          <div>
            <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
              <span class="material-symbols-outlined text-[26px]">account_tree</span>
            </div>
            <span class="font-label-sm text-[11px] uppercase tracking-wider text-primary font-bold block mb-1">Subseção 03</span>
            <h3 class="font-title-lg text-xl font-bold text-ink-primary group-hover:text-primary transition-colors">
              Estrutura &amp; Governança
            </h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2.5 leading-relaxed">
              Comitê Executivo, Conselho Consultivo, Líderes de GTs e Equipe Técnica que conduzem as frentes de trabalho.
            </p>
          </div>
          <div class="pt-6 mt-6 border-t border-border-subtle flex items-center gap-1.5 text-primary font-bold text-xs uppercase tracking-wider">
            <span>Ver Estrutura</span>
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- SEÇÃO 2: NOSSOS PRINCÍPIOS -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle" id="principios">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <div class="flex items-center gap-3 mb-2">
        <span class="w-8 h-[2px] bg-secondary"></span>
        <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Diretrizes Fundamentais</span>
      </div>
      <h2 class="font-headline-lg text-2xl sm:text-3xl lg:text-4xl font-bold text-ink-primary mb-4">
        Nossos Princípios
      </h2>
      <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl mb-8 leading-relaxed">
        A atuação da Aliança Jurídica pela Amazônia é orientada pelos seguintes princípios fundamentais:
      </p>

      <!-- Banner Visual de Identidade: Dignidade e Povos da Floresta -->
      <div class="relative w-full h-52 sm:h-64 lg:h-72 rounded-2xl overflow-hidden mb-12 shadow-md border border-border-subtle group bg-earth-dark">
        <img src="<?php echo esc_url(aja_asset('fotos/pexels-billsalazar-27010820.jpg')); ?>"
             alt="Mulher indígena sorrindo sob a copa da floresta amazônica"
             class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
        <div class="absolute inset-0 bg-gradient-to-r from-earth-dark/90 via-earth-dark/40 to-transparent flex items-center p-6 sm:p-10">
          <div class="max-w-xl text-white">
            <span class="px-2.5 py-1 rounded bg-secondary text-white font-label-sm text-[11px] font-bold uppercase tracking-wider inline-block mb-2">Pacto Ético &amp; Jurídico</span>
            <h3 class="text-xl sm:text-2xl font-bold font-headline-md leading-tight text-white">
              Compromisso com o Futuro e a Dignidade dos Povos da Floresta
            </h3>
            <p class="text-xs sm:text-sm text-surface-container-high mt-2 font-body-sm hidden sm:block leading-relaxed">
              Princípios que orientam cada plenária, grupo temático e ação estratégica da Aliança Jurídica pela Amazônia.
            </p>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="p-6 bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-xs flex flex-col justify-between relative overflow-hidden group hover:border-primary/40 hover:shadow-md transition-all duration-300">
          <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-03.png')); ?>" alt="" class="absolute -right-3 -bottom-3 w-20 h-20 opacity-[0.06] group-hover:opacity-[0.14] transition-opacity pointer-events-none select-none object-contain" />
          <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
              <span class="w-8 h-8 rounded-lg bg-primary/10 text-primary font-bold text-sm flex items-center justify-center">01</span>
              <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-03.png')); ?>" alt="Ícone de Autonomia e Natureza" class="w-6 h-6 object-contain opacity-60 group-hover:opacity-90 transition-opacity" />
            </div>
            <h4 class="font-title-md text-base font-bold text-ink-primary mb-2">Autonomia e protagonismo amazônida</h4>
          </div>
          <p class="font-body-sm text-xs text-outline italic mt-2 relative z-10">[Descrição a preencher]</p>
        </div>

        <div class="p-6 bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-xs flex flex-col justify-between relative overflow-hidden group hover:border-primary/40 hover:shadow-md transition-all duration-300">
          <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-11.png')); ?>" alt="" class="absolute -right-3 -bottom-3 w-20 h-20 opacity-[0.06] group-hover:opacity-[0.14] transition-opacity pointer-events-none select-none object-contain" />
          <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
              <span class="w-8 h-8 rounded-lg bg-primary/10 text-primary font-bold text-sm flex items-center justify-center">02</span>
              <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-11.png')); ?>" alt="Ícone de Diversidade e Redes" class="w-6 h-6 object-contain opacity-60 group-hover:opacity-90 transition-opacity" />
            </div>
            <h4 class="font-title-md text-base font-bold text-ink-primary mb-2">Diversidade, equidade e inclusão</h4>
          </div>
          <p class="font-body-sm text-xs text-outline italic mt-2 relative z-10">[Descrição a preencher]</p>
        </div>

        <div class="p-6 bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-xs flex flex-col justify-between relative overflow-hidden group hover:border-primary/40 hover:shadow-md transition-all duration-300">
          <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-04.png')); ?>" alt="" class="absolute -right-3 -bottom-3 w-20 h-20 opacity-[0.06] group-hover:opacity-[0.14] transition-opacity pointer-events-none select-none object-contain" />
          <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
              <span class="w-8 h-8 rounded-lg bg-primary/10 text-primary font-bold text-sm flex items-center justify-center">03</span>
              <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-04.png')); ?>" alt="Ícone de Responsabilidade e Rios" class="w-6 h-6 object-contain opacity-60 group-hover:opacity-90 transition-opacity" />
            </div>
            <h4 class="font-title-md text-base font-bold text-ink-primary mb-2">Responsabilidade socioambiental e intergeracional</h4>
          </div>
          <p class="font-body-sm text-xs text-outline italic mt-2 relative z-10">[Descrição a preencher]</p>
        </div>

        <div class="p-6 bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-xs flex flex-col justify-between relative overflow-hidden group hover:border-primary/40 hover:shadow-md transition-all duration-300">
          <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-09.png')); ?>" alt="" class="absolute -right-3 -bottom-3 w-20 h-20 opacity-[0.06] group-hover:opacity-[0.14] transition-opacity pointer-events-none select-none object-contain" />
          <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
              <span class="w-8 h-8 rounded-lg bg-primary/10 text-primary font-bold text-sm flex items-center justify-center">04</span>
              <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-09.png')); ?>" alt="Ícone de Justiça Social e Direito" class="w-6 h-6 object-contain opacity-60 group-hover:opacity-90 transition-opacity" />
            </div>
            <h4 class="font-title-md text-base font-bold text-ink-primary mb-2">Compromisso com justiça social, climática e racial</h4>
          </div>
          <p class="font-body-sm text-xs text-outline italic mt-2 relative z-10">[Descrição a preencher]</p>
        </div>

        <div class="p-6 bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-xs flex flex-col justify-between relative overflow-hidden group hover:border-secondary/40 hover:shadow-md transition-all duration-300">
          <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-12.png')); ?>" alt="" class="absolute -right-3 -bottom-3 w-20 h-20 opacity-[0.06] group-hover:opacity-[0.14] transition-opacity pointer-events-none select-none object-contain" />
          <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
              <span class="w-8 h-8 rounded-lg bg-secondary/10 text-secondary font-bold text-sm flex items-center justify-center">05</span>
              <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-12.png')); ?>" alt="Ícone de Direitos Humanos e Visão" class="w-6 h-6 object-contain opacity-60 group-hover:opacity-90 transition-opacity" />
            </div>
            <h4 class="font-title-md text-base font-bold text-ink-primary mb-2">Defesa dos direitos humanos</h4>
          </div>
          <p class="font-body-sm text-xs text-outline italic mt-2 relative z-10">[Descrição a preencher]</p>
        </div>

        <div class="p-6 bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-xs flex flex-col justify-between relative overflow-hidden group hover:border-secondary/40 hover:shadow-md transition-all duration-300">
          <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-02.png')); ?>" alt="" class="absolute -right-3 -bottom-3 w-20 h-20 opacity-[0.06] group-hover:opacity-[0.14] transition-opacity pointer-events-none select-none object-contain" />
          <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
              <span class="w-8 h-8 rounded-lg bg-secondary/10 text-secondary font-bold text-sm flex items-center justify-center">06</span>
              <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-02.png')); ?>" alt="Ícone de Fortalecimento do Sistema de Justiça" class="w-6 h-6 object-contain opacity-60 group-hover:opacity-90 transition-opacity" />
            </div>
            <h4 class="font-title-md text-base font-bold text-ink-primary mb-2">Fortalecimento do sistema de justiça</h4>
          </div>
          <p class="font-body-sm text-xs text-outline italic mt-2 relative z-10">[Descrição a preencher]</p>
        </div>

        <div class="p-6 bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-xs flex flex-col justify-between relative overflow-hidden group hover:border-secondary/40 hover:shadow-md transition-all duration-300">
          <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-13.png')); ?>" alt="" class="absolute -right-3 -bottom-3 w-20 h-20 opacity-[0.06] group-hover:opacity-[0.14] transition-opacity pointer-events-none select-none object-contain" />
          <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
              <span class="w-8 h-8 rounded-lg bg-secondary/10 text-secondary font-bold text-sm flex items-center justify-center">07</span>
              <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-13.png')); ?>" alt="Ícone de Saberes Tradicionais e Raiz" class="w-6 h-6 object-contain opacity-60 group-hover:opacity-90 transition-opacity" />
            </div>
            <h4 class="font-title-md text-base font-bold text-ink-primary mb-2">Valorização dos saberes tradicionais</h4>
          </div>
          <p class="font-body-sm text-xs text-outline italic mt-2 relative z-10">[Descrição a preencher]</p>
        </div>

        <div class="p-6 bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-xs flex flex-col justify-between relative overflow-hidden group hover:border-secondary/40 hover:shadow-md transition-all duration-300">
          <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-08.png')); ?>" alt="" class="absolute -right-3 -bottom-3 w-20 h-20 opacity-[0.06] group-hover:opacity-[0.14] transition-opacity pointer-events-none select-none object-contain" />
          <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
              <span class="w-8 h-8 rounded-lg bg-secondary/10 text-secondary font-bold text-sm flex items-center justify-center">08</span>
              <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-08.png')); ?>" alt="Ícone de Participação Cidadã e União" class="w-6 h-6 object-contain opacity-60 group-hover:opacity-90 transition-opacity" />
            </div>
            <h4 class="font-title-md text-base font-bold text-ink-primary mb-2">Democracia ambiental e participação cidadã</h4>
          </div>
          <p class="font-body-sm text-xs text-outline italic mt-2 relative z-10">[Descrição a preencher]</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>

</main>

<?php get_footer(); ?>
