<?php
/**
 * Template Name: Página - Sobre Nós
 * Description: Página institucional Sobre Nós da Aliança Jurídica pela Amazônia (AJA) com o conteúdo exato da Home.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- SEÇÃO PRINCIPAL: QUEM SOMOS (EXATAMENTE IGUAL À HOME #sobre-nos) -->
  <section class="w-full py-space-xl bg-surface-container-low border-b border-border-subtle relative overflow-hidden" id="sobre-nos">
    <!-- Marca d'água oficial da identidade visual AJA -->
    <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-05.png')); ?>" alt="" class="hidden lg:block absolute -right-12 -bottom-12 w-72 h-72 opacity-[0.04] pointer-events-none select-none object-contain" />
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">

      <!-- Breadcrumb -->
      <div class="flex items-center gap-2.5 mb-4">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
        <span class="text-xs text-outline">/</span>
        <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Sobre nós</span>
      </div>

      <!-- Section Header -->
      <div class="flex items-center gap-3 mb-space-lg">
        <span class="w-8 h-[2px] bg-secondary"></span>
        <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Apresentar Quem Somos</span>
      </div>

      <!-- Split Editorial Layout -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
        <!-- Left Column: Manifesto & Narrative -->
        <div class="lg:col-span-7 flex flex-col gap-space-lg">
          <h1 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg font-medium text-ink-primary leading-tight">
            Uma rede jurídica diversa e representativa pelo fortalecimento do Estado de Direito
          </h1>

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
        <div class="lg:col-span-5 flex flex-col gap-5">
          <!-- Foto Principal: Encontro da Rede AJA -->
          <div class="relative overflow-hidden rounded-2xl bg-surface-container-high h-[300px] lg:h-[320px] shadow-md group">
            <img alt="Integrantes e parceiros da Aliança Jurídica pela Amazônia reunidos em encontro da rede"
              class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105"
              src="<?php echo esc_url(aja_asset('fotos/encontro-rede-aja.jpg')); ?>" />
            <div
              class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/35 to-transparent flex flex-col justify-end p-5 text-surface-container-lowest">
              <span class="font-label-sm text-[11px] uppercase tracking-widest text-primary-fixed-dim font-bold">Plataforma de Articulação</span>
              <p class="font-title-md text-title-md font-bold mt-1">Membros e parceiros em encontro da rede</p>
              <p class="text-xs text-surface-container-highest/90 mt-0.5 leading-snug">Conectando advogados, pesquisadores e organizações pelos direitos territoriais.</p>
            </div>
          </div>

          <!-- Foto Secundária: Diálogos e Debates Estratégicos -->
          <div class="relative overflow-hidden rounded-2xl bg-surface-container-high h-[210px] shadow-sm group">
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

  <!-- ATALHOS PARA AS SUBSEÇÕES DE SOBRE NÓS (COM FRASES EXATAS DA HOME) -->
  <section class="w-full py-12 lg:py-16 bg-surface border-b border-border-subtle">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Subseção 1: Nossa História -->
        <a href="<?php echo esc_url(home_url('/nossa-historia/')); ?>"
           class="p-8 rounded-2xl bg-surface-container-lowest border border-border-subtle hover:border-secondary hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
          <div>
            <div class="w-12 h-12 rounded-xl bg-secondary/15 text-secondary flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
              <span class="material-symbols-outlined text-[26px]">history_edu</span>
            </div>
            <span class="font-label-sm text-[11px] uppercase tracking-wider text-secondary font-bold block mb-1">Origem e Trajetória</span>
            <h2 class="font-title-lg text-xl font-bold text-ink-primary group-hover:text-primary transition-colors">
              Nossa História
            </h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2.5 leading-relaxed">
              Da inquietação compartilhada à construção coletiva de uma aliança permanente pelo Direito na Amazônia.
            </p>
          </div>
          <div class="pt-6 mt-6 border-t border-border-subtle flex items-center gap-1.5 text-secondary font-bold text-xs uppercase tracking-wider">
            <span>Acessar Nossa História</span>
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </div>
        </a>

        <!-- Subseção 2: Nossa Atuação -->
        <a href="<?php echo esc_url(home_url('/atuacao/')); ?>"
           class="p-8 rounded-2xl bg-surface-container-lowest border border-border-subtle hover:border-tertiary hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
          <div>
            <div class="w-12 h-12 rounded-xl bg-tertiary/15 text-tertiary flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
              <span class="material-symbols-outlined text-[26px]">groups</span>
            </div>
            <span class="font-label-sm text-[11px] uppercase tracking-wider text-tertiary font-bold block mb-1">Estrutura Operacional</span>
            <h2 class="font-title-lg text-xl font-bold text-ink-primary group-hover:text-primary transition-colors">
              Nossa Atuação
            </h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2.5 leading-relaxed">
              Espaços de construção contínua: reuniões plenárias e os três Grupos Temáticos (GTs) da rede.
            </p>
          </div>
          <div class="pt-6 mt-6 border-t border-border-subtle flex items-center gap-1.5 text-tertiary font-bold text-xs uppercase tracking-wider">
            <span>Conhecer Nossa Atuação</span>
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </div>
        </a>

        <!-- Subseção 3: Estrutura e Governança -->
        <a href="<?php echo esc_url(home_url('/estrutura/')); ?>"
           class="p-8 rounded-2xl bg-surface-container-lowest border border-border-subtle hover:border-primary hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
          <div>
            <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
              <span class="material-symbols-outlined text-[26px]">account_tree</span>
            </div>
            <span class="font-label-sm text-[11px] uppercase tracking-wider text-primary font-bold block mb-1">Governança &amp; Estrutura</span>
            <h2 class="font-title-lg text-xl font-bold text-ink-primary group-hover:text-primary transition-colors">
              Estrutura da Aliança
            </h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2.5 leading-relaxed">
              Comitê Executivo, Conselho Consultivo e Líderes de Grupos Temáticos (GTs).
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

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>

</main>

<?php get_footer(); ?>