<?php
/**
 * Template Name: Página - Estrutura
 * Description: Subseção de Sobre Nós dedicada à estrutura de governança da AJA: Comitê Executivo, Conselho Consultivo e Líderes de GTs.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- SEÇÃO PRINCIPAL: ESTRUTURA (EXATAMENTE IGUAL À HOME #estrutura) -->
  <section class="w-full py-space-xl bg-surface border-b border-border-subtle relative overflow-hidden" id="estrutura">
    <!-- Marca d'água oficial da identidade visual AJA -->
    <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-03.png')); ?>" alt="" class="hidden lg:block absolute -left-16 top-16 w-80 h-80 opacity-[0.04] pointer-events-none select-none object-contain" />
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">

      <!-- Breadcrumb -->
      <div class="flex items-center gap-2.5 mb-4">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
        <span class="text-xs text-outline">/</span>
        <a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Sobre nós</a>
        <span class="text-xs text-outline">/</span>
        <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Estrutura</span>
      </div>

      <!-- Cabeçalho Principal da Estrutura -->
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
        <div>
          <div class="flex items-center gap-3 mb-2">
            <span class="w-8 h-[2px] bg-secondary"></span>
            <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Governança &amp; Estrutura</span>
          </div>
          <h1 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg font-medium text-ink-primary leading-tight">
            Estrutura da Aliança Jurídica pela Amazônia
          </h1>
        </div>
      </div>
      
      <!-- MENU DE ABAS INTERATIVAS -->
      <div class="flex items-center gap-2 sm:gap-3 overflow-x-auto pb-4 mb-10 border-b border-border-subtle" id="estrutura-tabs-nav">
        <button type="button" class="estrutura-tab-btn px-4 py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-xs uppercase tracking-wider font-bold transition-all duration-200 shadow-sm" data-target="all">
          📋 Toda a Estrutura
        </button>
        <button type="button" class="estrutura-tab-btn px-4 py-2.5 rounded-lg bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-xs uppercase tracking-wider font-bold hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-target="comite">
          🏛️ Comitê Executivo
        </button>
        <button type="button" class="estrutura-tab-btn px-4 py-2.5 rounded-lg bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-xs uppercase tracking-wider font-bold hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-target="conselho">
          ⚖️ Conselho Consultivo
        </button>
        <button type="button" class="estrutura-tab-btn px-4 py-2.5 rounded-lg bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-xs uppercase tracking-wider font-bold hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-target="lideres">
          🌳 Líderes de GTs
        </button>
      </div>

      <?php
      // Busca posts reais na categoria 'equipe'
      $all_team_query = new WP_Query(array(
          'post_type'      => 'post',
          'category_name'  => 'equipe',
          'posts_per_page' => 24,
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

      // Função para renderizar Card de Membro Real
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
          <div class="aja-member-card cursor-pointer bg-surface-container-lowest border border-border-subtle rounded-xl p-5 flex flex-col justify-between hover:-translate-y-1 hover:shadow-lg hover:border-secondary/60 transition-all duration-300 ease-out group"
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
                  <div class="w-full h-full rounded-full flex flex-col items-center justify-center text-outline bg-surface-container transition-transform duration-300 ease-out group-hover:-translate-y-1">
                    <svg class="w-16 h-16 opacity-40 mb-1" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-outline">AJA • Membro</span>
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

      // Função para renderizar Card Placeholder Padronizado
      $render_placeholder_card = function($item) {
          $badge_style = !empty($item['badge_style']) ? $item['badge_style'] : 'bg-primary-fixed/40 text-primary border-primary-fixed';
          $card_border_style = !empty($item['card_border_style']) ? $item['card_border_style'] : '';
          $badge_inline_style = !empty($item['badge_inline_style']) ? $item['badge_inline_style'] : '';
          $subtitle_inline_style = !empty($item['subtitle_inline_style']) ? $item['subtitle_inline_style'] : '';
          $btn_inline_style = !empty($item['btn_inline_style']) ? $item['btn_inline_style'] : $subtitle_inline_style;
          $dot_color = !empty($item['dot_color']) ? $item['dot_color'] : '';
          ?>
          <div class="aja-member-card cursor-pointer bg-surface-container-lowest/80 border-2 border-dashed border-border-subtle hover:border-primary/50 rounded-xl p-5 flex flex-col justify-between hover:-translate-y-1 hover:shadow-lg transition-all duration-300 ease-out group"
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
                  <?php echo esc_html(!empty($item['status']) ? $item['status'] : 'A preencher'); ?>
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
        
        <!-- BLOCO 1: COMITÊ EXECUTIVO -->
        <div class="estrutura-instance-block" data-instance="comite" id="bloco-comite">
          <div class="p-6 bg-surface-container-low border border-border-subtle rounded-2xl mb-6 flex flex-col md:flex-row md:items-center justify-between gap-4">
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

          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php
            if (!empty($comite_posts)) {
                foreach ($comite_posts as $cp) {
                    $render_team_card($cp, 'bg-primary-fixed/40 text-primary border-primary-fixed');
                }
            }

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

        <!-- BLOCO 2: CONSELHO CONSULTIVO -->
        <div class="estrutura-instance-block" data-instance="conselho" id="bloco-conselho">
          <div class="p-6 bg-surface-container-low border border-border-subtle rounded-2xl mb-6 flex flex-col md:flex-row md:items-center justify-between gap-4">
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

          <div class="bg-surface-container-lowest border border-border-subtle rounded-2xl p-6 sm:p-8 flex flex-col gap-5 shadow-xs">
            <div class="flex flex-wrap items-center justify-between gap-3">
              <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-fixed/40 text-secondary border border-secondary-fixed text-xs font-bold uppercase tracking-wider">
                <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                Conselho em processo de formação
              </span>
            </div>

            <div class="font-body-md text-body-md text-on-surface-variant leading-relaxed space-y-4">
              <p>
                Pensar o Direito a partir da Amazônia exige reunir saberes que raramente se encontram. Por isso o Conselho Consultivo da Aliança Jurídica pela Amazônia (AJA), sua instância de aconselhamento estratégico, reúne juristas, pesquisadores, representantes da sociedade civil e lideranças territoriais de credibilidade reconhecida. O Conselho orienta as prioridades da AJA, emite pareceres sobre temas relevantes e fortalece a atuação da rede em defesa do Estado Democrático de Direito na Amazônia.
              </p>
              <div class="p-4 rounded-xl bg-surface-container-low border border-border-subtle/80 flex items-center gap-3">
                <span class="material-symbols-outlined text-secondary text-[22px] shrink-0">info</span>
                <p class="text-xs text-on-surface-variant font-medium leading-snug">
                  O Conselho Consultivo está em processo de formação, e sua composição será divulgada em breve.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- BLOCO 3: LÍDERES DE CADA GT -->
        <div class="estrutura-instance-block" data-instance="lideres" id="bloco-lideres">
          <div class="p-6 bg-surface-container-low border border-border-subtle rounded-2xl mb-6 flex flex-col md:flex-row md:items-center justify-between gap-4">
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

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $julia_gt02_placeholder = array(
                'role'                  => 'Co-liderança • GT 02',
                'name'                  => 'Júlia Soares',
                'subtitle'              => 'GT Litigância e Ativismo Judicial',
                'desc'                  => 'Advogada, mestre e doutoranda em Direito pela USP. Pesquisadora vinculada à FLACSO Argentina e Advocacy na Amazon Underworld. Coordenadora Jurídica do Instituto Internacional ARAYARA e do NDCCult/USP.',
                'location'              => 'São Paulo - SP',
                'badge_style'           => 'text-[#406284] border-[#A6BEE4] bg-[#A6BEE4]',
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

            $gt_placeholders = array(
                array(
                    'role'                  => 'Liderança • GT 01',
                    'name'                  => '[Nome a preencher]',
                    'subtitle'              => 'GT Território, Segurança e Acesso à Justiça',
                    'desc'                  => '[Descrição a preencher]',
                    'location'              => '[A preencher]',
                    'badge_style'           => 'text-[#7C1F1F] border-[#F2B950] bg-[#F2B950]',
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
                    'badge_style'           => 'text-[#406284] border-[#A6BEE4] bg-[#A6BEE4]',
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
                    'badge_style'           => 'text-white border-[#6E7642] bg-[#6E7642]',
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

      <!-- NAVEGAÇÃO ENTRE SUBSEÇÕES DE SOBRE NÓS -->
      <div class="mt-16 p-6 rounded-2xl bg-surface-container-low border border-border-subtle flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-3">
          <a href="<?php echo esc_url(home_url('/atuacao/')); ?>"
             class="px-4 py-2.5 rounded-lg bg-surface-container-lowest border border-border-subtle hover:border-tertiary text-ink-primary hover:text-tertiary font-bold text-xs uppercase tracking-wider transition-colors inline-flex items-center gap-1.5">
            <span class="material-symbols-outlined text-[16px]">arrow_back</span>
            <span>Nossa Atuação</span>
          </a>
        </div>
        <div class="flex items-center gap-3">
          <a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>"
             class="px-4 py-2.5 rounded-lg bg-surface-container-lowest border border-border-subtle hover:border-secondary text-ink-primary hover:text-secondary font-bold text-xs uppercase tracking-wider transition-colors inline-flex items-center gap-1.5">
            <span>Sobre nós</span>
          </a>
          <a href="<?php echo esc_url(home_url('/nossa-historia/')); ?>"
             class="px-4 py-2.5 rounded-lg bg-surface-container-lowest border border-border-subtle hover:border-secondary text-ink-primary hover:text-secondary font-bold text-xs uppercase tracking-wider transition-colors inline-flex items-center gap-1.5">
            <span>Nossa História</span>
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- SCRIPT INTERATIVO PARA AS ABAS DA SEÇÃO ESTRUTURA -->
  <script>
  (function() {
    function initEstruturaTabs() {
      var tabs = document.querySelectorAll('.estrutura-tab-btn');
      var blocks = document.querySelectorAll('.estrutura-instance-block');

      if (!tabs.length || !blocks.length) return;

      tabs.forEach(function(tab) {
        tab.addEventListener('click', function(e) {
          e.preventDefault();
          var target = this.getAttribute('data-target');

          tabs.forEach(function(t) {
            t.classList.remove('bg-primary', 'text-on-primary');
            t.classList.add('bg-surface-container', 'border', 'border-border-subtle', 'text-on-surface-variant');
          });

          this.classList.remove('bg-surface-container', 'border', 'border-border-subtle', 'text-on-surface-variant');
          this.classList.add('bg-primary', 'text-on-primary');

          blocks.forEach(function(block) {
            if (target === 'all' || block.getAttribute('data-instance') === target) {
              block.style.display = 'block';
              block.classList.add('animate-fadeIn');
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

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>

</main>

<?php get_footer(); ?>
