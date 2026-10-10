<?php
/**
 * Aliança Jurídica pela Amazônia (AJA) - category.php
 *
 * Modelo de arquivo para as categorias (Portfólio, Editais e Publicações).
 */

get_header();

$current_cat = get_queried_object();
$cat_title   = single_cat_title('', false);
$cat_desc    = category_description();
?>

<main class="w-full pt-28 pb-20 bg-surface min-h-[calc(100vh-80px)]">
  <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
    
    <!-- Cabeçalho da Categoria -->
    <div class="mb-12 border-b border-border-subtle pb-8">
      <div class="flex items-center gap-2 text-label-sm font-label-sm uppercase tracking-wider mb-4 text-on-surface-variant">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-primary transition-colors">Início</a>
        <span>/</span>
        <span class="text-primary font-bold">Categorias</span>
      </div>

      <div class="flex items-center gap-3 mb-2">
        <span class="w-8 h-[2px] bg-secondary"></span>
        <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Arquivo da Rede</span>
      </div>

      <h1 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-bold">
        <?php echo esc_html($cat_title); ?>
      </h1>

      <?php if (!empty($cat_desc)) : ?>
        <p class="font-body-md text-body-md text-on-surface-variant mt-2 max-w-2xl leading-relaxed">
          <?php echo esc_html(wp_strip_all_tags($cat_desc)); ?>
        </p>
      <?php endif; ?>
    </div>

    <!-- Grid de Postagens da Categoria -->
    <?php if (have_posts()) : ?>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter mb-12">
        <?php while (have_posts()) : the_post(); 
            $post_id     = get_the_ID();
            $badge       = aja_get_post_badge($post_id, $cat_title);
            $subtitle    = aja_get_post_subtitle($post_id, '');
            $action_link = aja_get_post_action_link($post_id);
            $action_lbl  = aja_get_post_action_label($post_id, 'Ver Detalhes');
        ?>
          <div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between border border-border-subtle group">
            <div class="flex flex-col">
              <div class="h-48 overflow-hidden relative bg-surface-container">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('aja-card-thumb', array('class' => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105')); ?>
                <?php else : ?>
                  <div class="w-full h-full flex flex-col items-center justify-center p-6 text-center select-none">
                    <span class="material-symbols-outlined text-4xl text-outline mb-1 opacity-60">article</span>
                    <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">AJA</span>
                  </div>
                <?php endif; ?>
                <span class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider shadow-sm">
                  <?php echo esc_html($badge); ?>
                </span>
              </div>
              <div class="p-6">
                <?php if (!empty($subtitle)) : ?>
                  <span class="font-label-sm text-label-sm text-clay-warm font-semibold block mb-1">
                    <?php echo esc_html($subtitle); ?>
                  </span>
                <?php endif; ?>
                <h3 class="font-title-lg text-title-lg text-ink-primary font-bold mb-2">
                  <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors">
                    <?php the_title(); ?>
                  </a>
                </h3>
                <div class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
            <div class="p-6 pt-4 border-t border-surface-container flex items-center justify-between">
              <span class="font-label-sm text-label-sm text-outline"><?php echo get_the_date('d/m/Y'); ?></span>
              <a href="<?php echo esc_url($action_link); ?>" class="font-label-md text-label-md text-primary font-bold hover:underline inline-flex items-center gap-1">
                <?php echo esc_html($action_lbl); ?> <span class="material-symbols-outlined text-[16px]">chevron_right</span>
              </a>
            </div>
          </div>
        <?php endwhile; ?>
      </div>

      <!-- Paginação -->
      <div class="pt-8 border-t border-border-subtle flex justify-center">
        <?php
        the_posts_pagination(array(
            'prev_text' => '<span class="material-symbols-outlined">chevron_left</span> Anterior',
            'next_text' => 'Próximo <span class="material-symbols-outlined">chevron_right</span>',
            'class'     => 'inline-flex items-center gap-2 font-label-md text-label-md',
        ));
        ?>
      </div>

    <?php else : ?>
      <div class="p-12 bg-surface-container-lowest rounded-2xl border border-border-subtle text-center">
        <span class="material-symbols-outlined text-5xl text-outline mb-2">inbox</span>
        <h2 class="font-title-lg text-title-lg text-ink-primary font-bold mb-2">Nenhuma publicação encontrada</h2>
        <p class="font-body-md text-body-md text-on-surface-variant max-w-md mx-auto mb-6">
          Ainda não foram publicadas postagens nesta categoria.
        </p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="px-5 py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider font-bold inline-block">
          Voltar ao Início
        </a>
      </div>
    <?php endif; ?>

  </div>

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>
</main>

<?php
get_footer();
