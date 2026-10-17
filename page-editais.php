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
            <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Editais &amp; Oportunidades</span>
          </div>

          <div class="flex items-center gap-3 mb-2">
            <span class="w-8 h-[2px] bg-secondary"></span>
            <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Editais Institucionais</span>
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
                Aliança Jurídica pela Amazônia • Editais &amp; Oportunidades
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
              Não há editais ou chamadas públicas para submissão de artigos abertas no momento e não há previsão de novas aberturas. Acompanhe os canais oficiais da Aliança Jurídica pela Amazônia para futuras oportunidades e editais institucionais.
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
