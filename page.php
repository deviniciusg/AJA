<?php
/**
 * Aliança Jurídica pela Amazônia (AJA) - page.php
 *
 * Modelo padrão para páginas estáticas do WordPress.
 */

get_header();

while (have_posts()) : the_post();
?>

<main class="w-full pt-28 pb-20 bg-surface min-h-[calc(100vh-80px)]">
  <article class="max-w-[1000px] mx-auto px-margin-mobile lg:px-margin">
    
    <header class="mb-10 border-b border-border-subtle pb-6">
      <h1 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-bold">
        <?php the_title(); ?>
      </h1>
    </header>

    <?php if (has_post_thumbnail()) : ?>
      <div class="rounded-2xl overflow-hidden shadow-md mb-10 max-h-[460px]">
        <?php the_post_thumbnail('aja-banner', array('class' => 'w-full h-full object-cover')); ?>
      </div>
    <?php endif; ?>

    <div class="prose-aja font-body-lg text-body-md text-on-surface-variant leading-relaxed bg-surface-container-lowest p-8 lg:p-12 rounded-2xl border border-border-subtle shadow-sm">
      <?php the_content(); ?>
    </div>

  </article>

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>
</main>

<?php
endwhile;

get_footer();

