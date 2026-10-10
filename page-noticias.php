<?php
/**
 * Template Name: Página - Notícias
 * Description: Página dedicada a notícias, comunicados, coberturas institucionais e ações em territórios da AJA.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- HERO DAS NOTÍCIAS -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle relative overflow-hidden">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
        <div class="lg:col-span-7 flex flex-col justify-center">
          <div class="flex items-center gap-2.5 mb-3">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
            <span class="text-xs text-outline">/</span>
            <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Notícias</span>
          </div>

          <div class="flex items-center gap-3 mb-2">
            <span class="w-8 h-[2px] bg-secondary"></span>
            <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Comunicação &amp; Atualidades</span>
          </div>

          <h1 class="font-headline-lg text-3xl sm:text-4xl lg:text-5xl text-ink-primary font-bold leading-tight max-w-3xl">
            Notícias e Comunicados da AJA
          </h1>

          <p class="font-body-lg text-body-md text-on-surface-variant max-w-2xl mt-4 leading-relaxed">
            Acompanhe as ações, coberturas institucionais, eventos nos territórios e manifestações públicas da Aliança Jurídica pela Amazônia.
          </p>

          <div class="flex flex-wrap items-center gap-2.5 mt-8 pt-6 border-t border-border-subtle/80">
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              📰 Atualidades da Rede
            </span>
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              📢 Manifestações Públicas
            </span>
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              🌿 Cobertura Territorial
            </span>
          </div>
        </div>

        <div class="lg:col-span-5">
          <div class="relative rounded-2xl overflow-hidden shadow-lg border border-border-subtle group h-[360px] sm:h-[400px] lg:h-[420px] bg-earth-dark">
            <img src="<?php echo esc_url(aja_asset('fotos/canoa-no-por-do-sol-2.jpg')); ?>"
                 alt="Pôr do sol no rio amazônico com embarcação"
                 class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/30 to-transparent flex flex-col justify-end p-6 sm:p-7">
              <span class="px-2.5 py-1 rounded bg-secondary text-white font-label-sm text-[11px] font-bold uppercase tracking-wider w-fit mb-2">Comunicação Territorial</span>
              <p class="text-white font-title-sm text-sm sm:text-base font-semibold leading-snug">
                "Visibilidade para as pautas socioambientais e defesa de direitos nos territórios amazônicos."
              </p>
              <p class="text-surface-container-high text-xs mt-1 font-body-sm opacity-90">
                Aliança Jurídica pela Amazônia • Imprensa
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEÇÃO PRINCIPAL DE NOTÍCIAS COM FILTROS E BUSCA -->
  <section class="w-full py-16 lg:py-20 bg-surface border-b border-border-subtle" id="noticias-feed">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">

      <?php
      $noticias_query = new WP_Query([
          'category_name'  => 'noticias',
          'posts_per_page' => 24,
          'post_status'    => 'publish',
          'orderby'        => 'date',
          'order'          => 'DESC'
      ]);
      $has_news = $noticias_query->have_posts();
      ?>

      <?php if ($has_news) : ?>
        <!-- Sistema de Filtros e Busca Rápida de Notícias -->
        <div class="mb-10 flex flex-col gap-4 bg-surface-container-lowest rounded-2xl p-5 sm:p-6 border border-border-subtle shadow-sm" id="noticias-filter-system">
          <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
            <!-- Abas de Filtro de Notícias -->
            <div class="flex items-center gap-2 overflow-x-auto pb-2 lg:pb-0 text-nowrap" id="noticias-tabs">
              <button type="button" class="noticias-filter-btn active px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider transition-all duration-200 shadow-sm font-semibold" data-filter="all">
                Todas as Notícias
              </button>
              <button type="button" class="noticias-filter-btn px-4 py-2 rounded-lg bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-all duration-200 shadow-sm font-semibold" data-filter="cobertura">
                🌐 Coberturas & Eventos
              </button>
              <button type="button" class="noticias-filter-btn px-4 py-2 rounded-lg bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-all duration-200 shadow-sm font-semibold" data-filter="comunicado">
                📜 Comunicados Oficiais
              </button>
              <button type="button" class="noticias-filter-btn px-4 py-2 rounded-lg bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-all duration-200 shadow-sm font-semibold" data-filter="territorio">
                📍 Ações em Territórios
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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter" id="noticias-cards-grid">
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
              $news_thumb    = has_post_thumbnail($news_id) 
                               ? get_the_post_thumbnail_url($news_id, 'large') 
                               : aja_asset('fotos/corredeira-floresta-pedras.jpg');

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
                <div class="h-48 overflow-hidden relative">
                  <img alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?php echo esc_url($news_thumb); ?>" />
                  <span class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/95 backdrop-blur text-secondary font-label-sm text-[11px] font-bold uppercase tracking-wider shadow-sm">
                    <?php echo esc_html($news_badge); ?>
                  </span>
                </div>
                <div class="p-6 flex flex-col flex-1 justify-between">
                  <div>
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
            Fique atento às nossas próximas atualizações. Novas coberturas, ações nos territórios e comunicados oficiais da AJA serão divulgados aqui.
          </p>
          <div class="mt-8 pt-6 border-t border-border-subtle flex items-center justify-center gap-3">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-xs uppercase tracking-wider font-semibold hover:bg-primary/90 transition-colors shadow-sm">
              <span class="material-symbols-outlined text-[16px]">arrow_back</span>
              Voltar ao Início
            </a>
            <a href="<?php echo esc_url(home_url('/publicacoes/')); ?>" class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-lg bg-surface-container-low border border-border-subtle text-ink-primary font-label-md text-xs uppercase tracking-wider font-semibold hover:bg-surface-container transition-colors shadow-sm">
              <span class="material-symbols-outlined text-[16px]">article</span>
              Ver Publicações
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
          var cardCategory = card.getAttribute('data-category') || '';
          var cardSearch = card.getAttribute('data-search') || '';

          var matchesCategory = (currentFilter === 'all') || (cardCategory === currentFilter);
          var matchesSearch = (currentSearch === '') || (cardSearch.indexOf(currentSearch) !== -1);

          if (matchesCategory && matchesSearch) {
            card.classList.remove('hidden');
            visibleCount++;
          } else {
            card.classList.add('hidden');
          }
        });

        if (countDisplay) {
          if (visibleCount === 0) {
            countDisplay.textContent = 'Nenhuma notícia encontrada';
          } else if (visibleCount === 1) {
            countDisplay.textContent = '1 notícia exibida';
          } else {
            countDisplay.textContent = visibleCount + ' notícias exibidas';
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

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>

</main>

<?php get_footer(); ?>
