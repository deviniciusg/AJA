<?php
/**
 * Aliança Jurídica pela Amazônia (AJA) - single.php
 *
 * Modelo de exibição de post individual (Portfólio, Editais ou Publicações).
 */

get_header();

while (have_posts()) : the_post();
    $post_id     = get_the_ID();
    $badge       = aja_get_post_badge($post_id, 'Publicação');
    $subtitle    = aja_get_post_subtitle($post_id, '');
    $action_link = get_post_meta($post_id, '_aja_action_link', true);
    $action_lbl  = aja_get_post_action_label($post_id, 'Acessar Link Externo');
    $categories  = get_the_category($post_id);
    $cat_name    = !empty($categories) ? $categories[0]->name : '';
    $cat_link    = !empty($categories) ? get_category_link($categories[0]->term_id) : '#';

    // Verificação de Parceria Editorial com o Portal Migalhas
    $is_migalhas = (!empty($action_link) && strpos($action_link, 'migalhas.com.br') !== false) || (stripos($badge, 'migalhas') !== false);
?>

<main class="w-full pt-28 bg-surface min-h-[calc(100vh-80px)]">
  <article class="max-w-[1000px] mx-auto px-margin-mobile lg:px-margin mb-10" style="margin-bottom: 40px;">
    
    <!-- Breadcrumb & Categoria -->
    <div class="flex items-center gap-2 text-label-sm font-label-sm uppercase tracking-wider mb-6 text-on-surface-variant">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-primary transition-colors">Início</a>
      <span>/</span>
      <?php if (!empty($cat_name)) : ?>
        <a href="<?php echo esc_url($cat_link); ?>" class="hover:text-primary transition-colors text-primary font-bold">
          <?php echo esc_html($cat_name); ?>
        </a>
      <?php endif; ?>
    </div>

    <!-- Cabeçalho do Post -->
    <header class="mb-10 flex flex-col gap-4">
      <div class="flex flex-wrap items-center gap-3">
        <?php if ($is_migalhas) : ?>
          <span class="px-3 py-1 rounded bg-[#8C1D24]/10 text-[#8C1D24] border border-[#8C1D24]/20 font-label-sm text-label-sm font-bold uppercase tracking-wider flex items-center gap-1.5">
            <span class="w-2 h-2 rounded-full bg-[#8C1D24]"></span>
            <?php echo esc_html(!empty($badge) ? $badge : 'Migalhas de Peso'); ?>
          </span>
        <?php else : ?>
          <span class="px-3 py-1 rounded bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold uppercase tracking-wider">
            <?php echo esc_html($badge); ?>
          </span>
        <?php endif; ?>

        <?php if (!empty($subtitle)) : ?>
          <span class="font-label-sm text-label-sm text-clay-warm font-semibold">
            <?php echo esc_html($subtitle); ?>
          </span>
        <?php endif; ?>
      </div>

      <h1 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-bold leading-tight">
        <?php the_title(); ?>
      </h1>

      <div class="flex items-center gap-4 text-body-sm font-body-sm text-on-surface-variant pt-2 border-t border-border-subtle">
        <span>Publicado em: <strong><?php echo get_the_date('d/m/Y'); ?></strong></span>
        <span>•</span>
        <span>Por: <strong><?php the_author(); ?></strong></span>
      </div>
    </header>

    <!-- Banner Especial de Parceria Editorial Migalhas -->
    <?php if ($is_migalhas) : ?>
      <div class="mb-10 p-5 rounded-2xl bg-surface-container-lowest border border-[#8C1D24]/25 shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="flex items-center gap-3.5">
          <div class="w-11 h-11 rounded-xl bg-[#8C1D24] text-white flex items-center justify-center font-bold text-lg font-serif shrink-0 shadow-sm select-none">
            M
          </div>
          <div>
            <div class="flex items-center gap-2">
              <span class="text-[11px] font-label-sm uppercase tracking-widest text-[#8C1D24] font-bold">
                Parceria Editorial • Migalhas de Peso
              </span>
              <span class="w-1.5 h-1.5 rounded-full bg-[#8C1D24]/40"></span>
              <span class="text-[11px] font-label-sm text-on-surface-variant">Veiculação Nacional</span>
            </div>
            <p class="text-xs sm:text-sm text-ink-primary font-medium mt-0.5">
              Artigo de opinião produzido por membro da rede da <strong>Aliança Jurídica pela Amazônia (AJA)</strong>.
            </p>
          </div>
        </div>
        <?php if (!empty($action_link)) : ?>
          <a href="<?php echo esc_url($action_link); ?>" target="_blank" rel="noopener noreferrer"
             class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-lg bg-[#8C1D24] hover:bg-[#6e141a] text-white text-xs font-bold uppercase tracking-wider transition-colors shrink-0 shadow-sm">
            <span>Acessar no Migalhas</span>
            <span class="material-symbols-outlined text-[16px]">open_in_new</span>
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <!-- Imagem Destacada (se houver) -->
    <?php if (has_post_thumbnail()) : ?>
      <div class="rounded-2xl overflow-hidden shadow-md mb-10 max-h-[500px]">
        <?php the_post_thumbnail('aja-banner', array('class' => 'w-full h-full object-cover')); ?>
      </div>
    <?php endif; ?>

    <!-- Conteúdo do Post -->
    <div class="prose-aja font-body-lg text-body-md text-on-surface-variant leading-relaxed mb-12 bg-surface-container-lowest p-8 lg:p-12 rounded-2xl border border-border-subtle shadow-sm">
      <?php the_content(); ?>

      <!-- Botão de Ação / Link de Edital / PDF / Migalhas (se preenchido) -->
      <?php if (!empty($action_link)) : ?>
        <div class="mt-8 pt-6 border-t border-border-subtle flex flex-col sm:flex-row items-center justify-between gap-4 <?php echo $is_migalhas ? 'bg-[#8C1D24]/5 -mx-4 p-5 sm:p-6 rounded-xl border border-[#8C1D24]/20' : ''; ?>">
          <div>
            <span class="font-label-md text-label-md uppercase tracking-wider <?php echo $is_migalhas ? 'text-[#8C1D24]' : 'text-primary'; ?> font-bold block">
              <?php echo $is_migalhas ? '📰 Matéria Original no Portal Migalhas:' : 'Documento / Link Vinculado:'; ?>
            </span>
            <span class="font-body-sm text-body-sm text-on-surface-variant">
              <?php echo $is_migalhas ? 'Acesse o texto doutrinário completo com notas de rodapé no portal parceiro.' : 'Acesse o material de referência ou canal de submissão oficial.'; ?>
            </span>
          </div>
          <a href="<?php echo esc_url($action_link); ?>" target="_blank" rel="noopener noreferrer"
            class="px-6 py-3 rounded-lg <?php echo $is_migalhas ? 'bg-[#8C1D24] hover:bg-[#6e141a]' : 'bg-primary hover:bg-moss-light'; ?> text-white font-label-md text-label-md uppercase tracking-wider font-bold transition-colors inline-flex items-center gap-2 shrink-0 shadow-sm">
            <span><?php echo esc_html($is_migalhas && empty($action_lbl) ? 'Ler Artigo Completo no Migalhas' : $action_lbl); ?></span>
            <span class="material-symbols-outlined text-[18px]">open_in_new</span>
          </a>
        </div>
      <?php endif; ?>
    </div>

    <!-- Navegação e Voltar -->
    <div class="flex items-center justify-between pt-6 border-t border-border-subtle mb-10" style="margin-bottom: 40px;">
      <a href="<?php echo esc_url(home_url('/')); ?>"
        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-ink-primary font-label-md text-label-md uppercase tracking-wider transition-colors font-bold">
        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
        Voltar à Página Inicial
      </a>

      <?php if (!empty($cat_name)) : ?>
        <a href="<?php echo esc_url($cat_link); ?>"
          class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider hover:bg-moss-light transition-colors font-bold">
          Ver mais em <?php echo esc_html($cat_name); ?>
          <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
        </a>
      <?php endif; ?>
    </div>

  </article>

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>
</main>

<?php
endwhile;

get_footer();
