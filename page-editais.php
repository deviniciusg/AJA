<?php
/**
 * Template Name: Página - Editais
 * Description: Página dedicada a editais, chamadas públicas de submissão e oportunidades da AJA.
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
            <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Editais &amp; Chamadas</span>
          </div>

          <div class="flex items-center gap-3 mb-2">
            <span class="w-8 h-[2px] bg-secondary"></span>
            <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Submissões</span>
          </div>

          <h1 class="font-headline-lg text-3xl sm:text-4xl lg:text-5xl text-ink-primary font-bold leading-tight max-w-3xl">
            Chamada para Submissão de Artigos
          </h1>

          <p class="font-body-lg text-body-md text-on-surface-variant max-w-2xl mt-4 leading-relaxed">
            A Aliança Jurídica pela Amazônia (AJA) torna pública a chamada para submissão de artigos de opinião jurídicos voltados ao fortalecimento do debate sobre justiça, democracia socioambiental e Estado de Direito na Amazônia.
          </p>

          <div class="flex flex-wrap items-center gap-2.5 mt-8 pt-6 border-t border-border-subtle/80">
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              📄 Chamada Aberta
            </span>
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              📚 Artigos de Opinião Jurídicos
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
              <span class="px-2.5 py-1 rounded bg-secondary text-white font-label-sm text-[11px] font-bold uppercase tracking-wider w-fit mb-2">Submissões AJA</span>
              <p class="text-white font-title-sm text-sm sm:text-base font-semibold leading-snug">
                "Fortalecendo o debate sobre justiça, democracia socioambiental e Estado de Direito na Amazônia."
              </p>
              <p class="text-surface-container-high text-xs mt-1 font-body-sm opacity-90">
                Aliança Jurídica pela Amazônia • Chamada de Artigos
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
          'posts_per_page' => 12,
          'post_status'    => 'publish',
      ));

      if ($editais_query->have_posts()) :
          $featured_post = null;
          $other_posts   = array();

          while ($editais_query->have_posts()) {
              $editais_query->the_post();
              $is_featured = get_post_meta(get_the_ID(), '_aja_featured_edital', true);
              if ($is_featured === '1' && !$featured_post) {
                  $featured_post = get_post();
              } else {
                  $other_posts[] = get_post();
              }
          }
          wp_reset_postdata();

          if (!$featured_post && !empty($other_posts)) {
              $featured_post = array_shift($other_posts);
          }

          if ($featured_post) :
              $feat_id     = $featured_post->ID;
              $feat_badge  = aja_get_post_badge($feat_id, 'Chamada Pública Aberta');
              $feat_sub    = aja_get_post_subtitle($feat_id, 'Destinada aos Membros da AJA');
              $feat_link   = aja_get_post_action_link($feat_id);
              $feat_label  = aja_get_post_action_label($feat_id, 'Acessar Edital & Submissão');
              $feat_thumb  = has_post_thumbnail($feat_id) 
                             ? get_the_post_thumbnail_url($feat_id, 'aja-banner') 
                             : aja_asset('fotos/corredeira-floresta-pedras.jpg');
              ?>
              <!-- Featured Callout Card Dinâmico -->
              <div class="w-full relative overflow-hidden text-surface-container-lowest rounded-3xl p-8 lg:p-12 mb-12 shadow-sm flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8 group">
                <div class="absolute inset-0 z-0">
                  <img alt="<?php echo esc_attr($featured_post->post_title); ?>"
                    class="w-full h-full object-cover opacity-25 mix-blend-luminosity scale-105 transition-transform duration-700 group-hover:scale-110"
                    src="<?php echo esc_url($feat_thumb); ?>" />
                  <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/95 to-primary-container/90"></div>
                </div>
                <div class="relative z-10 flex flex-col gap-4 max-w-3xl">
                  <div class="flex items-center gap-3">
                    <span class="px-3 py-1 rounded bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-xs uppercase tracking-wider font-bold">
                      <?php echo esc_html($feat_badge); ?>
                    </span>
                    <span class="font-label-sm text-xs text-primary-fixed-dim">
                      <?php echo esc_html($feat_sub); ?>
                    </span>
                  </div>
                  <h2 class="font-headline-md text-2xl sm:text-3xl font-bold leading-tight">
                    <?php echo esc_html($featured_post->post_title); ?>
                  </h2>
                  <div class="font-body-md text-sm text-surface-container leading-relaxed">
                    <?php echo apply_filters('the_excerpt', $featured_post->post_excerpt ?: wp_trim_words($featured_post->post_content, 45)); ?>
                  </div>
                  <div class="flex items-center gap-2 pt-1 text-primary-fixed text-xs">
                    <span class="material-symbols-outlined text-[18px]">info</span>
                    <span>Dúvidas sobre a chamada: <strong>info@ajamazonia.org</strong></span>
                  </div>
                </div>
                <div class="relative z-10 flex flex-col sm:flex-row items-center gap-4 shrink-0 w-full lg:w-auto">
                  <a class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-surface-container-lowest text-primary hover:bg-surface-container font-label-lg text-xs uppercase tracking-wider transition-colors font-bold text-center shadow-md flex items-center justify-center gap-2"
                    href="<?php echo esc_url($feat_link); ?>">
                    <span><?php echo esc_html($feat_label); ?></span>
                    <span class="material-symbols-outlined text-[18px]">download</span>
                  </a>
                </div>
              </div>
          <?php endif; ?>

          <!-- Secondary Continuous Opportunities Dinâmicos -->
          <?php if (!empty($other_posts)) : ?>
              <div class="mb-6">
                <span class="font-label-md text-xs uppercase tracking-widest text-secondary font-bold">Demais Oportunidades</span>
                <h3 class="font-headline-md text-xl font-bold text-ink-primary mt-1">Chamadas em Fluxo Contínuo &amp; Editais Anteriores</h3>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach ($other_posts as $index => $op_post) : 
                    $op_id    = $op_post->ID;
                    $op_badge = aja_get_post_badge($op_id, 'Fluxo Contínuo');
                    $op_sub   = aja_get_post_subtitle($op_id, 'Credenciamento de Membros');
                    $op_link  = aja_get_post_action_link($op_id);
                    $op_label = aja_get_post_action_label($op_id, 'Manifestar Interesse');
                    $badge_class = ($index % 2 === 0) ? 'bg-secondary-fixed text-on-secondary-fixed' : 'bg-primary-fixed text-on-primary-fixed';
                    ?>
                    <div class="p-8 rounded-2xl bg-surface-container-low shadow-sm flex flex-col justify-between border border-border-subtle">
                      <div>
                        <div class="flex items-center justify-between mb-4">
                          <span class="px-2.5 py-1 rounded <?php echo esc_attr($badge_class); ?> font-label-sm text-xs font-semibold uppercase tracking-wider">
                            <?php echo esc_html($op_badge); ?>
                          </span>
                          <span class="font-label-sm text-xs text-on-surface-variant">Fluxo Contínuo</span>
                        </div>
                        <h4 class="font-title-lg text-lg text-ink-primary font-bold mb-2">
                          <a href="<?php echo esc_url(get_permalink($op_id)); ?>" class="hover:text-primary transition-colors">
                            <?php echo esc_html($op_post->post_title); ?>
                          </a>
                        </h4>
                        <div class="font-body-md text-sm text-on-surface-variant leading-relaxed">
                          <?php echo apply_filters('the_excerpt', $op_post->post_excerpt ?: wp_trim_words($op_post->post_content, 30)); ?>
                        </div>
                      </div>
                      <div class="mt-6 pt-4 border-t border-surface-container flex items-center justify-between">
                        <span class="font-label-sm text-xs text-clay-warm font-semibold"><?php echo esc_html($op_sub); ?></span>
                        <a class="font-label-md text-xs text-primary font-bold hover:underline inline-flex items-center gap-1"
                          href="<?php echo esc_url($op_link); ?>">
                          <?php echo esc_html($op_label); ?> <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                        </a>
                      </div>
                    </div>
                <?php endforeach; ?>
              </div>
          <?php endif; ?>

      <?php else : ?>
          <!-- Destaque Oficial Conforme Documento Guia -->
          <div class="w-full relative overflow-hidden text-surface-container-lowest rounded-3xl p-8 lg:p-12 mb-12 shadow-sm flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8 group">
            <div class="absolute inset-0 z-0">
              <img alt="Floresta e rio na Amazônia"
                class="w-full h-full object-cover opacity-25 mix-blend-luminosity scale-105 transition-transform duration-700 group-hover:scale-110"
                src="<?php echo esc_url(aja_asset('fotos/corredeira-floresta-pedras.jpg')); ?>" />
              <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/95 to-primary-container/90"></div>
            </div>
            <div class="relative z-10 flex flex-col gap-4 max-w-3xl">
              <div class="flex items-center gap-3">
                <span class="px-3 py-1 rounded bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-xs uppercase tracking-wider font-bold">
                  Chamada Pública
                </span>
                <span class="font-label-sm text-xs text-primary-fixed-dim">
                  Destinada aos Membros da AJA
                </span>
              </div>
              <h2 class="font-headline-md text-2xl sm:text-3xl font-bold leading-tight">
                1ª Chamada para Submissão de Artigos
              </h2>
              <div class="font-body-md text-sm text-surface-container leading-relaxed space-y-2">
                <p>
                  A Aliança Jurídica pela Amazônia (AJA) torna pública a chamada para submissão de artigos de opinião jurídicos voltados ao fortalecimento do debate sobre justiça, democracia socioambiental e Estado de Direito na Amazônia.
                </p>
                <p>
                  A iniciativa é destinada aos membros da AJA e busca reunir contribuições inéditas sobre temas jurídicos contemporâneos relacionados à Amazônia, aos direitos humanos e à proteção socioambiental.
                </p>
              </div>
              <div class="flex items-center gap-2 pt-1 text-primary-fixed text-xs">
                <span class="material-symbols-outlined text-[18px]">info</span>
                <span>Em caso de dúvidas, entre em contato pelo e-mail: <strong>info@ajamazonia.org</strong></span>
              </div>
            </div>
            <div class="relative z-10 flex flex-col sm:flex-row items-center gap-4 shrink-0 w-full lg:w-auto">
              <a class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-surface-container-lowest text-primary hover:bg-surface-container font-label-lg text-xs uppercase tracking-wider transition-colors font-bold text-center shadow-md flex items-center justify-center gap-2"
                href="#submissao-detalhes">
                <span>Edital &amp; Submissão</span>
                <span class="material-symbols-outlined text-[18px]">arrow_downward</span>
              </a>
            </div>
          </div>
      <?php endif; ?>

      <!-- INFORMAÇÕES SOBRE A CHAMADA (TEXTO DO DOCUMENTO GUIA) -->
      <div class="mt-12 p-8 lg:p-10 rounded-2xl bg-surface-container-low border border-border-subtle" id="submissao-detalhes">
        <span class="font-label-sm text-xs uppercase tracking-widest text-primary font-bold">Submissões</span>
        <h3 class="font-headline-md text-xl sm:text-2xl font-bold text-ink-primary mt-1 mb-3">
          Chamada para Submissão de Artigos
        </h3>
        <div class="space-y-4 font-body-md text-sm text-on-surface-variant leading-relaxed max-w-3xl">
          <p>
            A Aliança Jurídica pela Amazônia (AJA) torna pública a chamada para submissão de artigos de opinião jurídicos voltados ao fortalecimento do debate sobre justiça, democracia socioambiental e Estado de Direito na Amazônia.
          </p>
          <p>
            A iniciativa é destinada aos membros da AJA e busca reunir contribuições inéditas sobre temas jurídicos contemporâneos relacionados à Amazônia, aos direitos humanos e à proteção socioambiental.
          </p>
          <p>
            O edital e formulário completo contém informações sobre critérios, eixos temáticos, prazos e orientações para submissão.
          </p>
        </div>
        <div class="flex flex-wrap items-center gap-4 mt-8 pt-6 border-t border-border-subtle">
          <a href="#" class="px-5 py-3 rounded-xl bg-primary hover:bg-moss-light text-on-primary font-label-md text-xs uppercase tracking-wider font-bold transition-all shadow-sm inline-flex items-center gap-2">
            <span>Edital da 1ª Chamada para Submissão de Artigos</span>
            <span class="material-symbols-outlined text-[18px]">download</span>
          </a>
          <a href="#" class="px-5 py-3 rounded-xl bg-surface-container-lowest hover:bg-surface-container text-ink-primary border border-border-subtle font-label-md text-xs uppercase tracking-wider font-bold transition-all shadow-xs inline-flex items-center gap-2">
            <span>Formulário de Submissão</span>
            <span class="material-symbols-outlined text-[18px]">open_in_new</span>
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
