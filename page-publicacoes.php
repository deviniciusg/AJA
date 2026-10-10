<?php
/**
 * Template Name: Página - Publicações
 * Description: Página dedicada ao repositório de publicações, notas técnicas, dossiês e teses da AJA.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- HERO DAS PUBLICAÇÕES -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle relative overflow-hidden">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
        <div class="lg:col-span-7 flex flex-col justify-center">
          <div class="flex items-center gap-2.5 mb-3">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
            <span class="text-xs text-outline">/</span>
            <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Publicações</span>
          </div>

          <div class="flex items-center gap-3 mb-2">
            <span class="w-8 h-[2px] bg-secondary"></span>
            <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Repositório de Conhecimento</span>
          </div>

          <h1 class="font-headline-lg text-3xl sm:text-4xl lg:text-5xl text-ink-primary font-bold leading-tight max-w-3xl">
            Publicações, Notas Técnicas e Dossiês Jurídicos
          </h1>

          <p class="font-body-lg text-body-md text-on-surface-variant max-w-2xl mt-4 leading-relaxed">
            Acesse e baixe gratuitamente os estudos, teses socioambientais, pareceres e orientações técnicas produzidos pela rede da Aliança Jurídica pela Amazônia.
          </p>

          <div class="flex flex-wrap items-center gap-2.5 mt-8 pt-6 border-t border-border-subtle/80">
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              📖 Dossiês Jurídicos
            </span>
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              📑 Notas Técnicas
            </span>
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              📥 Acesso Aberto &amp; Gratuito
            </span>
          </div>
        </div>

        <div class="lg:col-span-5">
          <div class="relative rounded-2xl overflow-hidden shadow-lg border border-border-subtle group h-[360px] sm:h-[400px] lg:h-[420px] bg-earth-dark">
            <img src="<?php echo esc_url(aja_asset('fotos/canoa-no-rio.jpg')); ?>"
                 alt="Canoa tradicional no leito do rio amazônico"
                 class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/30 to-transparent flex flex-col justify-end p-6 sm:p-7">
              <span class="px-2.5 py-1 rounded bg-secondary text-white font-label-sm text-[11px] font-bold uppercase tracking-wider w-fit mb-2">Conhecimento Aberto</span>
              <p class="text-white font-title-sm text-sm sm:text-base font-semibold leading-snug">
                "Produção técnico-jurídica para orientar decisões estratégicas e qualificar o debate público."
              </p>
              <p class="text-surface-container-high text-xs mt-1 font-body-sm opacity-90">
                Aliança Jurídica pela Amazônia • Repositório
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VITRINE DE PUBLICAÇÕES -->
  <section class="w-full py-16 lg:py-20 bg-surface border-b border-border-subtle" id="grade-publicacoes">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <?php
      if (function_exists('aja_render_publicacoes_grid')) {
          echo aja_render_publicacoes_grid(24);
      } else {
          echo do_shortcode('[aja_publicacoes limit="24"]');
      }
      ?>
    </div>
  </section>

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>

</main>

<?php get_footer(); ?>
