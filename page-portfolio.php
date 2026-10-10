<?php
/**
 * Template Name: Página - Portfólio
 * Description: Página dedicada ao portfólio de membros, coletivos, clínicas e organizações da AJA.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- HERO DO PORTFÓLIO -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle relative overflow-hidden">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
        <div class="lg:col-span-7 flex flex-col justify-center">
          <div class="flex items-center gap-2.5 mb-3">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
            <span class="text-xs text-outline">/</span>
            <span class="font-label-sm text-xs text-primary font-bold uppercase tracking-wider">Portfólio da Rede</span>
          </div>

          <div class="flex items-center gap-3 mb-2">
            <span class="w-8 h-[2px] bg-primary"></span>
            <span class="font-label-md text-label-md text-primary uppercase tracking-widest font-bold">Quem Faz Parte</span>
          </div>

          <h1 class="font-headline-lg text-3xl sm:text-4xl lg:text-5xl text-ink-primary font-bold leading-tight max-w-3xl">
            Membros da Rede &amp; Portfólio de Atuação
          </h1>

          <p class="font-body-lg text-body-md text-on-surface-variant max-w-2xl mt-4 leading-relaxed">
            Uma rede viva e capilarizada que conecta advogados populares, pesquisadores acadêmicos, clínicas de direitos e organizações comprometidas com a defesa dos povos e territórios da Amazônia.
          </p>

          <div class="flex flex-wrap items-center gap-2.5 mt-8 pt-6 border-t border-border-subtle/80">
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              Advocacia Popular
            </span>
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              Pesquisa &amp; Clínicas
            </span>
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              Sociedade Civil
            </span>
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              Defesa Territorial
            </span>
          </div>
        </div>

        <div class="lg:col-span-5">
          <div class="relative rounded-2xl overflow-hidden shadow-lg border border-border-subtle group h-[360px] sm:h-[420px] lg:h-[440px] bg-earth-dark">
            <img src="<?php echo esc_url(aja_asset('fotos/crianca-na-canoa.jpg')); ?>"
                 alt="Criança ribeirinha em canoa de madeira às margens do rio na Amazônia"
                 class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/30 to-transparent flex flex-col justify-end p-6 sm:p-7">
              <span class="px-2.5 py-1 rounded bg-primary text-white font-label-sm text-[11px] font-bold uppercase tracking-wider w-fit mb-2">Futuro dos Territórios</span>
              <p class="text-white font-title-sm text-sm sm:text-base font-semibold leading-snug">
                "Nossa articulação jurídica existe para salvaguardar o futuro das presentes e próximas gerações amazônidas."
              </p>
              <p class="text-surface-container-high text-xs mt-1 font-body-sm opacity-90">
                Aliança Jurídica pela Amazônia • Membros &amp; Coletivos
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEÇÃO INTERATIVA DO PORTFÓLIO -->
  <section class="w-full py-16 lg:py-20 bg-surface-container border-b border-border-subtle" id="portfolio-grid">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      
      <!-- Network Interactive Tabs Filter -->
      <div class="flex items-center gap-2 overflow-x-auto pb-4 mb-8 text-nowrap" id="network-filter-tabs">
        <button
          class="network-tab active px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-xs uppercase tracking-wider transition-colors shadow-sm font-bold"
          data-target="all" type="button">Todos os Membros</button>
        <button
          class="network-tab px-4 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface-variant font-label-md text-xs uppercase tracking-wider hover:bg-surface-container-high transition-colors shadow-sm font-bold"
          data-target="advocacia" type="button">Advocacia Popular &amp; Coletivos</button>
        <button
          class="network-tab px-4 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface-variant font-label-md text-xs uppercase tracking-wider hover:bg-surface-container-high transition-colors shadow-sm font-bold"
          data-target="pesquisa" type="button">Pesquisa &amp; Clínicas Jurídicas</button>
        <button
          class="network-tab px-4 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface-variant font-label-md text-xs uppercase tracking-wider hover:bg-surface-container-high transition-colors shadow-sm font-bold"
          data-target="sociedade" type="button">Organizações da Sociedade Civil</button>
        <button
          class="network-tab px-4 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface-variant font-label-md text-xs uppercase tracking-wider hover:bg-surface-container-high transition-colors shadow-sm font-bold"
          data-target="diretoria" type="button">Articulação &amp; Conselho</button>
      </div>

      <!-- Grid of Leaders & Nodes -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter mb-space-xl">
        <?php
        $portfolio_query = new WP_Query(array(
            'category_name'  => 'portfolio',
            'posts_per_page' => 24,
            'post_status'    => 'publish',
        ));

        if ($portfolio_query->have_posts()) :
            while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                $post_id        = get_the_ID();
                $cat_filter     = aja_get_portfolio_cat($post_id);
                $badge          = aja_get_post_badge($post_id, 'Membro da Rede');
                $subtitle       = aja_get_post_subtitle($post_id, '');
                $location       = get_post_meta($post_id, '_aja_location', true);
                
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
                          AJA • Integrante
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
            ?>
            <div class="col-span-full p-8 text-center bg-surface-container-lowest rounded-xl border border-dashed border-border-subtle">
              <span class="material-symbols-outlined text-4xl text-outline mb-2">folder_open</span>
              <p class="text-sm font-semibold text-ink-primary">Nenhum membro cadastrado nesta categoria no momento.</p>
              <p class="text-xs text-on-surface-variant mt-1">Cadastre posts na categoria "Portfólio" pelo painel administrativo.</p>
            </div>
        <?php endif; ?>
      </div>

      <!-- BANCO DE MAPEAMENTO & CAPILARIDADE TERRITORIAL -->
      <div class="p-8 lg:p-12 rounded-2xl bg-surface-container-low border border-border-subtle flex flex-col lg:flex-row items-center justify-between gap-8 mb-12">
        <div class="flex flex-col gap-3 max-w-2xl">
          <span class="font-label-sm text-xs uppercase tracking-widest text-primary font-bold">
            Mapeamento Colaborativo
          </span>
          <h3 class="font-headline-md text-2xl font-bold text-ink-primary">
            Cadastre sua Iniciativa na Rede da AJA
          </h3>
          <p class="font-body-md text-sm text-on-surface-variant leading-relaxed">
            A AJA está estruturando o mapeamento colaborativo de iniciativas, litígios estratégicos, notas técnicas e pareceres produzidos pelos seus membros para conectar demandas territoriais a especialistas.
          </p>
        </div>
        <div class="flex flex-col sm:flex-row gap-4 shrink-0 w-full lg:w-auto">
          <a class="px-6 py-3.5 rounded-lg bg-primary hover:bg-moss-light text-on-primary font-label-lg text-xs uppercase tracking-wider transition-colors text-center font-bold"
            href="<?php echo esc_url(home_url('/faca-parte/')); ?>">
            Cadastrar Iniciativa na Rede
          </a>
        </div>
      </div>

      <!-- Territorial Geographic Banner -->
      <div class="w-full bg-surface-container-lowest rounded-2xl p-8 border border-border-subtle shadow-sm flex flex-col lg:flex-row items-center justify-between gap-8">
        <div class="flex flex-col gap-2 max-w-xl">
          <span class="font-label-sm text-xs uppercase tracking-widest text-secondary font-bold">Capilaridade Territorial</span>
          <h3 class="font-headline-md text-xl font-bold text-ink-primary">Capilaridade Territorial & Articulação Ampla</h3>
          <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed">
            Presença ativa e conectada em múltiplos territórios da Amazônia e centros estratégicos do país, articulando defensores populares, centros de pesquisa e incidência direta perante tribunais e órgãos federais.
          </p>
        </div>
        <div class="flex items-center gap-3 flex-wrap justify-end">
          <div class="px-4 py-3 rounded-lg bg-surface-container-low border border-border-subtle flex items-center gap-3">
            <span class="w-3 h-3 rounded-full bg-moss-light"></span>
            <div class="flex flex-col">
              <span class="font-label-md text-xs font-bold text-on-surface">Polo Norte</span>
              <span class="font-label-sm text-[11px] text-on-surface-variant">Belém &amp; Macapá</span>
            </div>
          </div>
          <div class="px-4 py-3 rounded-lg bg-surface-container-low border border-border-subtle flex items-center gap-3">
            <span class="w-3 h-3 rounded-full bg-clay-warm"></span>
            <div class="flex flex-col">
              <span class="font-label-md text-xs font-bold text-on-surface">Polo Ocidental</span>
              <span class="font-label-sm text-[11px] text-on-surface-variant">Manaus &amp; Rio Branco</span>
            </div>
          </div>
          <div class="px-4 py-3 rounded-lg bg-surface-container-low border border-border-subtle flex items-center gap-3">
            <span class="w-3 h-3 rounded-full bg-secondary"></span>
            <div class="flex flex-col">
              <span class="font-label-md text-xs font-bold text-on-surface">Polo Institucional</span>
              <span class="font-label-sm text-[11px] text-on-surface-variant">Brasília (DF)</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- SCRIPT PARA AS ABAS DO PORTFÓLIO -->
  <script>
  (function() {
    function initPortfolioTabs() {
      var tabs = document.querySelectorAll('.network-tab');
      var cards = document.querySelectorAll('.network-card');

      if (!tabs.length || !cards.length) return;

      tabs.forEach(function(tab) {
        tab.addEventListener('click', function(e) {
          e.preventDefault();
          var target = this.getAttribute('data-target');

          tabs.forEach(function(t) {
            t.classList.remove('active', 'bg-primary', 'text-on-primary');
            t.classList.add('bg-surface-container-lowest', 'border', 'border-border-subtle', 'text-on-surface-variant');
          });

          this.classList.remove('bg-surface-container-lowest', 'border', 'border-border-subtle', 'text-on-surface-variant');
          this.classList.add('active', 'bg-primary', 'text-on-primary');

          cards.forEach(function(card) {
            var cat = card.getAttribute('data-category');
            if (target === 'all' || cat === target) {
              card.style.display = 'flex';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initPortfolioTabs);
    } else {
      initPortfolioTabs();
    }
  })();
  </script>

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>

</main>

<?php get_footer(); ?>
