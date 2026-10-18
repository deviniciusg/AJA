<?php
/**
 * Aliança Jurídica pela Amazônia (AJA) - index.php
 *
 * Modelo padrão de fallback do tema WordPress.
 */

get_header();
?>

<main class="w-full pt-28 pb-20 bg-surface min-h-[calc(100vh-80px)]">
  <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
    
    <div class="mb-12 border-b border-border-subtle pb-8">
      <div class="flex items-center gap-3 mb-2">
        <span class="w-8 h-[2px] bg-secondary"></span>
        <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Publicações da Rede</span>
      </div>
      <h1 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-bold">
        Blog & Notícias
      </h1>
    </div>

    <?php if (have_posts()) : ?>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter mb-12">
        <?php while (have_posts()) : the_post(); 
            $post_id     = get_the_ID();
            $badge       = aja_get_post_badge($post_id, 'AJA');
            $subtitle    = aja_get_post_subtitle($post_id, '');
            $action_link = aja_get_post_action_link($post_id);
            $action_lbl  = aja_get_post_action_label($post_id, 'Ler Artigo');
        ?>
          <div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between border border-border-subtle group">
            <div class="flex flex-col">
              <?php if (has_post_thumbnail()) : ?>
                <div class="h-48 overflow-hidden relative bg-surface-container">
                  <?php the_post_thumbnail('aja-card-thumb', array('class' => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105')); ?>
                  <span class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider shadow-sm">
                    <?php echo esc_html($badge); ?>
                  </span>
                </div>
              <?php endif; ?>
              <div class="p-6">
                <?php if (!has_post_thumbnail()) : ?>
                  <div class="mb-3">
                    <span class="inline-flex px-2.5 py-1 rounded bg-surface-container font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider shadow-2xs">
                      <?php echo esc_html($badge); ?>
                    </span>
                  </div>
                <?php endif; ?>
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

      <div class="pt-8 border-t border-border-subtle flex justify-center">
        <?php the_posts_pagination(); ?>
      </div>

    <?php else : ?>
      <div class="p-12 bg-surface-container-lowest rounded-2xl border border-border-subtle text-center">
        <p class="font-body-md text-body-md text-on-surface-variant">Nenhuma publicação encontrada.</p>
      </div>
    <?php endif; ?>

  </div>
</main>

<?php
get_footer();
