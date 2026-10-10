<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="web_standard" name="shell-type" />
  <link rel="icon" type="image/png" href="<?php echo esc_url(aja_asset('logos/logo-azul.png')); ?>" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-surface font-body-md text-on-surface antialiased selection:bg-primary-container selection:text-on-primary'); ?>>
<?php 
wp_body_open(); 

// Detecção de página ativa para estilos de navegação
$is_cur_sobre       = is_page(array('sobre-nos', 'historia', 'nossa-historia', 'atuacao', 'estrutura'));
$is_cur_portfolio   = is_page('portfolio');
$is_cur_editais     = is_page('editais');
$is_cur_publicacoes = is_page(array('publicacoes', 'conhecimento'));
$is_cur_noticias    = is_page('noticias');
$is_cur_faca_parte  = is_page(array('faca-parte', 'seja-membro'));
?>

  <!-- HEADER COM NAVEGAÇÃO INSTITUCIONAL -->
  <header class="fixed top-0 left-0 w-full z-50 bg-surface/90 backdrop-blur-md shadow-[0_1px_8px_rgba(0,0,0,0.04)] border-b border-border-subtle/50">
    <div class="h-20 max-w-[1440px] mx-auto px-margin-mobile lg:px-margin flex items-center justify-between">
      <a class="flex items-center gap-space-md group" data-path="inicio" href="<?php echo esc_url(home_url('/')); ?>">
        <img alt="Logotipo AJA" class="w-9 h-9 object-contain rounded" src="<?php echo esc_url(aja_asset('logos/logo-azul.png')); ?>" />
        <div class="flex flex-col">
          <span class="font-title-lg text-title-lg tracking-tight text-ink-primary font-bold">AJA</span>
          <span class="font-label-sm text-label-sm tracking-widest uppercase text-clay-warm">Aliança Jurídica pela Amazônia</span>
        </div>
      </a>

      <!-- Menu Principal (Desktop) -->
      <nav class="hidden lg:flex items-center gap-1 xl:gap-2">
        <!-- 1. Sobre nós com Submenu (Nossa História, Atuação e Estrutura) -->
        <div class="relative group">
          <a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>" 
             class="flex items-center gap-1 px-3.5 py-2 font-label-lg text-label-lg rounded-lg transition-colors group-hover:text-primary <?php echo $is_cur_sobre ? 'text-primary font-bold bg-surface-container/80' : 'text-on-surface-variant hover:text-ink-primary hover:bg-surface-container/60'; ?>">
            <span>Sobre nós</span>
            <span class="material-symbols-outlined text-[18px] transition-transform duration-200 group-hover:rotate-180">expand_more</span>
          </a>
          <!-- Dropdown Submenu contendo Nossa História, Atuação e Estrutura -->
          <div class="absolute top-full left-0 pt-1.5 hidden group-hover:block z-50">
            <div class="bg-surface-container-lowest rounded-xl shadow-xl border border-border-subtle py-2 min-w-[210px] flex flex-col">
              <a class="px-4 py-2.5 font-label-md text-label-md uppercase tracking-wider text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors flex items-center gap-2.5"
                href="<?php echo esc_url(home_url('/nossa-historia/')); ?>">
                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                <span>Nossa História</span>
              </a>
              <a class="px-4 py-2.5 font-label-md text-label-md uppercase tracking-wider text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors flex items-center gap-2.5"
                href="<?php echo esc_url(home_url('/atuacao/')); ?>">
                <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                <span>Atuação</span>
              </a>
              <a class="px-4 py-2.5 font-label-md text-label-md uppercase tracking-wider text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors flex items-center gap-2.5"
                href="<?php echo esc_url(home_url('/estrutura/')); ?>">
                <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                <span>Estrutura</span>
              </a>
            </div>
          </div>
        </div>

        <!-- 2. Portfólio (Página dedicada: /portfolio/) -->
        <a class="px-3.5 py-2 font-label-lg text-label-lg rounded-lg transition-colors <?php echo $is_cur_portfolio ? 'text-primary font-bold bg-surface-container/80' : 'text-on-surface-variant hover:text-ink-primary hover:bg-surface-container/60'; ?>"
          href="<?php echo esc_url(home_url('/portfolio/')); ?>">Portfólio</a>

        <!-- 3. Editais (Página dedicada: /editais/) -->
        <a class="px-3.5 py-2 font-label-lg text-label-lg rounded-lg transition-colors <?php echo $is_cur_editais ? 'text-primary font-bold bg-surface-container/80' : 'text-on-surface-variant hover:text-ink-primary hover:bg-surface-container/60'; ?>"
          href="<?php echo esc_url(home_url('/editais/')); ?>">Editais</a>

        <!-- 4. Publicações (Página dedicada: /publicacoes/) -->
        <a class="px-3.5 py-2 font-label-lg text-label-lg rounded-lg transition-colors <?php echo $is_cur_publicacoes ? 'text-primary font-bold bg-surface-container/80' : 'text-on-surface-variant hover:text-ink-primary hover:bg-surface-container/60'; ?>"
          href="<?php echo esc_url(home_url('/publicacoes/')); ?>">Publicações</a>

        <!-- 5. Notícias (Página dedicada: /noticias/) -->
        <a class="px-3.5 py-2 font-label-lg text-label-lg rounded-lg transition-colors <?php echo $is_cur_noticias ? 'text-primary font-bold bg-surface-container/80' : 'text-on-surface-variant hover:text-ink-primary hover:bg-surface-container/60'; ?>"
          href="<?php echo esc_url(home_url('/noticias/')); ?>">Notícias</a>
      </nav>

      <!-- 6. FAÇA PARTE (Porta de entrada para quem quer integrar os Grupos Temáticos) -->
      <div class="flex items-center gap-3">
        <div class="hidden sm:flex flex-col items-end">
          <a class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg tracking-wider uppercase transition-colors hover:bg-moss-light shadow-sm font-bold group/btn"
            href="<?php echo esc_url(home_url('/faca-parte/')); ?>" title="Porta de entrada para quem quer integrar os Grupos Temáticos">
            <span>FAÇA PARTE</span>
            <span class="material-symbols-outlined ml-1.5 text-[18px] group-hover/btn:translate-x-0.5 transition-transform">arrow_forward</span>
          </a>
          <span class="text-[10px] text-on-surface-variant font-label-sm tracking-tight mt-0.5">
            Porta de entrada para integrar os Grupos Temáticos
          </span>
        </div>
        <div class="flex sm:hidden items-center">
          <a class="inline-flex items-center justify-center px-4 py-2 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg tracking-wider uppercase font-bold"
            href="<?php echo esc_url(home_url('/faca-parte/')); ?>">
            <span>FAÇA PARTE</span>
          </a>
        </div>
        <button id="mobile-menu-toggle" class="lg:hidden p-2 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" aria-label="Abrir menu de navegação">
          <span class="material-symbols-outlined text-[26px]">menu</span>
        </button>
      </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden lg:hidden bg-surface-container-lowest border-b border-border-subtle px-margin-mobile py-4 shadow-lg flex flex-col gap-2">
      <!-- 1. Sobre nós (com Submenu: Nossa História, Atuação e Estrutura) -->
      <div class="flex flex-col">
        <a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>" class="py-2.5 px-3 rounded-lg text-ink-primary font-bold font-label-lg text-label-lg hover:bg-surface-container transition-colors flex items-center justify-between">
          <span>Sobre nós</span>
          <span class="material-symbols-outlined text-[18px] text-outline">expand_more</span>
        </a>
        <div class="pl-4 flex flex-col border-l-2 border-primary/20 ml-3 my-1 gap-1">
          <a class="py-2 px-3 rounded-md text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:text-primary hover:bg-surface-container transition-colors"
            href="<?php echo esc_url(home_url('/nossa-historia/')); ?>">Nossa História</a>
          <a class="py-2 px-3 rounded-md text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:text-primary hover:bg-surface-container transition-colors"
            href="<?php echo esc_url(home_url('/atuacao/')); ?>">Atuação</a>
          <a class="py-2 px-3 rounded-md text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:text-primary hover:bg-surface-container transition-colors"
            href="<?php echo esc_url(home_url('/estrutura/')); ?>">Estrutura</a>
        </div>
      </div>

      <!-- 2. Portfólio -->
      <a class="py-2.5 px-3 rounded-lg text-on-surface font-label-lg text-label-lg hover:bg-surface-container transition-colors"
        href="<?php echo esc_url(home_url('/portfolio/')); ?>">Portfólio</a>

      <!-- 3. Editais -->
      <a class="py-2.5 px-3 rounded-lg text-on-surface font-label-lg text-label-lg hover:bg-surface-container transition-colors"
        href="<?php echo esc_url(home_url('/editais/')); ?>">Editais</a>

      <!-- 4. Publicações -->
      <a class="py-2.5 px-3 rounded-lg text-on-surface font-label-lg text-label-lg hover:bg-surface-container transition-colors"
        href="<?php echo esc_url(home_url('/publicacoes/')); ?>">Publicações</a>

      <!-- 5. Notícias -->
      <a class="py-2.5 px-3 rounded-lg text-on-surface font-label-lg text-label-lg hover:bg-surface-container transition-colors"
        href="<?php echo esc_url(home_url('/noticias/')); ?>">Notícias</a>

      <!-- 6. FAÇA PARTE (Destaque mobile com subtítulo: Porta de entrada para integrar os GTs) -->
      <div class="pt-2 border-t border-border-subtle mt-1 flex flex-col gap-1.5">
        <a class="w-full inline-flex items-center justify-center py-3 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg tracking-wider uppercase font-bold shadow-sm"
          href="<?php echo esc_url(home_url('/faca-parte/')); ?>">
          FAÇA PARTE
        </a>
        <span class="text-[11px] font-label-sm text-center text-on-surface-variant">
          Porta de entrada para quem quer integrar os Grupos Temáticos
        </span>
    </div>
  </header>

