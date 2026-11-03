<?php
/**
 * Template Name: Página - Editais
 * Description: Página dedicada a editais institucionais e oportunidades da AJA.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- HERO DOS EDITAIS -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle relative overflow-hidden">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
        <div class="lg:col-span-7 flex flex-col justify-center">
          <div class="flex items-center gap-2.5 mb-3">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
            <span class="text-xs text-outline">/</span>
            <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Editais</span>
          </div>

          <div class="flex items-center gap-3 mb-2">
            <span class="w-8 h-[2px] bg-secondary"></span>
            <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Editais</span>
          </div>

          <h1 class="font-headline-lg text-3xl sm:text-4xl lg:text-5xl text-ink-primary font-bold leading-tight max-w-3xl">
            Editais da Aliança Jurídica pela Amazônia
          </h1>

          <p class="font-body-lg text-body-md text-on-surface-variant max-w-2xl mt-4 leading-relaxed">
            Mecanismos públicos e transparentes para mobilização de inteligência jurídica, parcerias institucionais e fortalecimento do Estado de Direito na Amazônia.
          </p>

          <div class="flex flex-wrap items-center gap-2.5 mt-8 pt-6 border-t border-border-subtle/80">
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              📋 Transparência &amp; Governança
            </span>
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              ⚖️ Estado de Direito na Amazônia
            </span>
          </div>
        </div>

        <div class="lg:col-span-5">
          <div class="relative rounded-2xl overflow-hidden shadow-lg border border-border-subtle group h-[360px] sm:h-[400px] lg:h-[420px] bg-earth-dark">
            <img src="<?php echo esc_url(aja_asset('fotos/garca.jpeg')); ?>"
                 alt="Garça branca em habitat natural na bacia amazônica"
                 class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/30 to-transparent flex flex-col justify-end p-6 sm:p-7">
              <span class="px-2.5 py-1 rounded bg-secondary text-white font-label-sm text-[11px] font-bold uppercase tracking-wider w-fit mb-2">Editais AJA</span>
              <p class="text-white font-title-sm text-sm sm:text-base font-semibold leading-snug">
                "Fortalecendo o debate sobre justiça, democracia socioambiental e Estado de Direito na Amazônia."
              </p>
              <p class="text-surface-container-high text-xs mt-1 font-body-sm opacity-90">
                Aliança Jurídica pela Amazônia • Editais
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEÇÃO PRINCIPAL DE EDITAIS -->
  <section class="w-full py-16 lg:py-20 bg-surface border-b border-border-subtle" id="lista-editais">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <?php
      $editais_query = new WP_Query(array(
          'category_name'  => 'editais',
          'posts_per_page' => -1,
          'orderby'        => array('menu_order' => 'ASC', 'date' => 'DESC'),
          'post_status'    => 'publish',
      ));

      if ($editais_query->have_posts()) :
      ?>
        <div class="flex flex-col gap-3 mb-8">
          <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Processos Seletivos</span>
          <h2 class="font-headline-md text-2xl sm:text-3xl text-ink-primary font-bold">
            Chamadas &amp; Oportunidades Abertas
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-stretch mb-14">
          <?php
          while ($editais_query->have_posts()) :
              $editais_query->the_post();
              $e_id       = get_the_ID();
              $e_title    = get_the_title();
              $e_badge    = aja_get_post_badge($e_id, 'Chamada Pública Aberta');
              $e_subtitle = aja_get_post_subtitle($e_id);
              $e_deadline = aja_get_post_location($e_id);
              $e_link     = aja_get_post_action_link($e_id);
              $e_btn      = aja_get_post_action_label($e_id, 'Acessar Edital');
              $e_featured = get_post_meta($e_id, '_aja_featured', true) ?: get_post_meta($e_id, '_aja_featured_edital', true);
              $e_desc     = get_the_excerpt();
              if (empty($e_desc)) {
                  $e_desc = wp_strip_all_tags(get_the_content());
              }
              ?>
              <article class="bg-surface-container-lowest rounded-2xl p-6 sm:p-8 border <?php echo ($e_featured === '1') ? 'border-secondary/60 shadow-md ring-1 ring-secondary/20' : 'border-border-subtle shadow-sm'; ?> flex flex-col justify-between hover:shadow-lg transition-all duration-300 group relative overflow-hidden">
                <?php if ($e_featured === '1') : ?>
                  <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-secondary via-tertiary to-primary"></div>
                <?php endif; ?>

                <div>
                  <!-- Badges & Deadline -->
                  <div class="flex flex-wrap items-center justify-between gap-2.5 mb-4">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-label-sm font-bold uppercase tracking-wider bg-secondary-fixed/40 text-secondary border border-secondary-fixed">
                      <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                      <?php echo esc_html($e_badge); ?>
                    </span>

                    <?php if (!empty($e_deadline)) : ?>
                      <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-outline" title="Prazo limite">
                        <span class="material-symbols-outlined text-[16px] text-primary">schedule</span>
                        <span><?php echo esc_html($e_deadline); ?></span>
                      </span>
                    <?php endif; ?>
                  </div>

                  <!-- Title -->
                  <h3 class="font-title-lg text-lg sm:text-xl font-bold text-ink-primary group-hover:text-primary transition-colors leading-snug mb-2">
                    <a href="<?php echo esc_url($e_link); ?>" <?php echo (filter_var($e_link, FILTER_VALIDATE_URL) && strpos($e_link, home_url()) === false) ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>>
                      <?php echo esc_html($e_title); ?>
                    </a>
                  </h3>

                  <!-- Subtitle / Público-alvo -->
                  <?php if (!empty($e_subtitle)) : ?>
                    <p class="font-body-sm text-xs sm:text-sm font-semibold text-primary/90 mb-3 flex items-center gap-1.5">
                      <span class="material-symbols-outlined text-[16px]">groups</span>
                      <span><?php echo esc_html($e_subtitle); ?></span>
                    </p>
                  <?php endif; ?>

                  <!-- Excerpt / Descrição -->
                  <p class="font-body-sm text-sm text-on-surface-variant leading-relaxed line-clamp-3 mb-6">
                    <?php echo esc_html($e_desc); ?>
                  </p>
                </div>

                <!-- Footer / Action Button -->
                <div class="pt-4 border-t border-border-subtle flex flex-wrap items-center justify-between gap-3">
                  <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold">
                    Edital Oficial AJA
                  </span>
                  <a href="<?php echo esc_url($e_link); ?>"
                     <?php echo (filter_var($e_link, FILTER_VALIDATE_URL) && strpos($e_link, home_url()) === false) ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>
                     class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary hover:bg-moss-light text-on-primary font-bold text-xs uppercase tracking-wider transition-all shadow-sm group-hover:shadow">
                    <span><?php echo esc_html($e_btn); ?></span>
                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                  </a>
                </div>
              </article>
              <?php
          endwhile;
          wp_reset_postdata();
          ?>
        </div>
      <?php else : ?>
        <!-- Estado Informativo Oficial: Sem chamadas abertas para artigos -->
        <div class="p-8 lg:p-12 rounded-3xl bg-surface-container-low border border-border-subtle flex flex-col md:flex-row items-center justify-between gap-6 mb-12">
          <div class="flex items-start gap-4">
            <div class="w-14 h-14 rounded-2xl bg-surface-container text-outline flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[32px]">folder_open</span>
            </div>
            <div>
              <span class="px-3 py-1 rounded-md bg-surface-container text-on-surface-variant font-label-sm text-xs font-bold uppercase tracking-wider inline-block mb-2">
                Status Atual
              </span>
              <h2 class="font-headline-md text-2xl sm:text-3xl font-bold text-ink-primary leading-tight">
                Nenhuma chamada aberta no momento
              </h2>
              <p class="font-body-md text-base text-on-surface-variant mt-2 max-w-2xl leading-relaxed">
                Não há editais ou chamadas públicas para artigos com inscrições abertas no momento. Novas oportunidades serão comunicadas oportunamente através dos canais oficiais da Aliança.
              </p>
            </div>
          </div>
          <div class="shrink-0 w-full md:w-auto">
            <a href="<?php echo esc_url(home_url('/contato/')); ?>"
               class="w-full md:w-auto px-6 py-3.5 rounded-xl bg-primary hover:bg-moss-light text-on-primary font-label-md text-xs uppercase tracking-wider font-bold transition-all shadow-sm inline-flex items-center justify-center gap-2">
              <span class="material-symbols-outlined text-[18px]">mail</span>
              <span>Fale Conosco</span>
            </a>
          </div>
        </div>
      <?php endif; ?>


      <!-- INFORMAÇÕES INSTITUCIONAIS -->
      <div class="p-8 lg:p-10 rounded-2xl bg-surface-container-low border border-border-subtle">
        <span class="font-label-sm text-xs uppercase tracking-widest text-primary font-bold">Transparência &amp; Critérios</span>
        <h3 class="font-headline-md text-xl sm:text-2xl font-bold text-ink-primary mt-1 mb-3">
          Processos e Diretrizes Institucionais
        </h3>
        <div class="space-y-4 font-body-md text-sm text-on-surface-variant leading-relaxed max-w-3xl">
          <p>
            A Aliança Jurídica pela Amazônia (AJA) preza pela transparência e pelo rigor técnico na condução de seus processos e parcerias institucionais. Quando abertos, os editais estabelecem critérios claros e alinhados à defesa do Estado de Direito e dos direitos socioambientais no bioma.
          </p>
          <p>
            Para propor parcerias institucionais, pesquisas colaborativas ou manifestar interesse institucional, utilize os canais de contato oficiais.
          </p>
        </div>
        <div class="flex flex-wrap items-center gap-4 mt-8 pt-6 border-t border-border-subtle">
          <a href="<?php echo esc_url(home_url('/contato/')); ?>" class="px-5 py-3 rounded-xl bg-surface-container-lowest hover:bg-surface-container text-ink-primary border border-border-subtle font-label-md text-xs uppercase tracking-wider font-bold transition-all shadow-xs inline-flex items-center gap-2">
            <span class="material-symbols-outlined text-[18px]">contact_support</span>
            <span>Contato Institucional</span>
          </a>
          <span class="text-xs text-on-surface-variant flex items-center gap-1.5 ml-auto">
            <span class="material-symbols-outlined text-[18px] text-secondary">mail</span>
            <span>Dúvidas: <strong>info@ajamazonia.org</strong></span>
          </span>
        </div>
      </div>

    </div>
  </section>

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>

</main>

<?php get_footer(); ?>
