<?php
/**
 * Template Name: Página - Faça Parte
 * Description: Página dedicada ao processo de adesão, diretrizes de membros e integração aos Grupos Temáticos da AJA.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- HERO DO FAÇA PARTE -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle relative overflow-hidden">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">
      <div class="flex items-center gap-2.5 mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
        <span class="text-xs text-outline">/</span>
        <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Faça Parte</span>
      </div>

      <div class="flex items-center gap-3 mb-2">
        <span class="w-8 h-[2px] bg-secondary"></span>
        <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Adesão & Membresia</span>
      </div>

      <h1 class="font-headline-lg text-3xl sm:text-4xl lg:text-5xl text-ink-primary font-bold leading-tight max-w-4xl">
        Seja Membro da Aliança Jurídica pela Amazônia
      </h1>

      <p class="font-body-lg text-body-md text-on-surface-variant max-w-3xl mt-4 leading-relaxed">
        A Aliança Jurídica pela Amazônia é um espaço aberto à colaboração de advogados(as), pesquisadores(as), organizações da sociedade civil, escritórios de advocacia, coletivos jurídicos e clínicas de direitos que compartilham do nosso propósito e dos princípios que orientam nossa atuação.
      </p>
    </div>
  </section>

  <!-- SEÇÃO PRINCIPAL DE DIRETRIZES E FORMULÁRIO -->
  <section class="w-full py-16 lg:py-20 bg-surface border-b border-border-subtle" id="processo-adesao">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        
        <!-- Coluna da Esquerda: Apresentação da Adesão -->
        <div class="lg:col-span-7 flex flex-col gap-8">
          <div>
            <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Adesão à Rede</span>
            <h2 class="font-headline-md text-2xl sm:text-3xl text-ink-primary font-bold mt-1">
              Junte-se à Aliança
            </h2>
          </div>

          <div class="flex flex-col gap-5 font-body-lg text-body-md text-on-surface-variant leading-relaxed">
            <p>
              A Aliança Jurídica pela Amazônia é um espaço aberto à colaboração de advogados(as), pesquisadores(as), organizações da sociedade civil, escritórios de advocacia, coletivos jurídicos e clínicas de direitos que compartilham do nosso propósito e dos princípios que orientam nossa atuação.
            </p>
            <p>
              Se você acredita em uma Amazônia com justiça, integridade territorial e protagonismo dos povos, queremos caminhar junto com você.
            </p>
            <div class="p-6 bg-surface-container-low rounded-2xl border border-border-subtle flex flex-col gap-2">
              <h3 class="font-title-md text-lg font-bold text-ink-primary">Preencha o formulário de adesão e venha contribuir com esta rede.</h3>
              <p class="text-sm text-on-surface-variant">
                O formulário oficial reúne informações sobre sua trajetória e áreas de interesse técnico para integração aos Grupos Temáticos da AJA.
              </p>
            </div>
            <div class="p-4 bg-surface-container-lowest border border-border-subtle rounded-xl flex items-center gap-3 text-body-sm text-on-surface shadow-xs">
              <span class="material-symbols-outlined text-[22px] text-primary shrink-0">mail</span>
              <span>Em caso de dúvidas, entre em contato pelo e-mail: <a href="mailto:info@ajamazonia.org" class="font-semibold text-primary hover:underline">info@ajamazonia.org</a></span>
            </div>
          </div>
        </div>

        <!-- Coluna da Direita: Card de Conversão / Formulário -->
        <div class="lg:col-span-5 sticky top-28">
          <div class="bg-surface-container-lowest p-8 lg:p-10 rounded-3xl border border-border-subtle shadow-md flex flex-col gap-6">
            <div class="flex items-center justify-between">
              <span class="px-3.5 py-1.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-xs font-bold uppercase tracking-wider">
                Inscrição Aberta
              </span>
              <span class="text-xs text-outline font-semibold">Ciclo Contínuo</span>
            </div>

            <div>
              <h3 class="font-headline-sm text-2xl font-bold text-ink-primary">
                Formulário de Adesão à AJA
              </h3>
              <p class="font-body-sm text-xs sm:text-sm text-on-surface-variant mt-2 leading-relaxed">
                Clique no botão abaixo para preencher o formulário seguro do Google Forms. O preenchimento leva cerca de 5 minutos.
              </p>
            </div>

            <!-- Quem pode se associar -->
            <div class="p-5 bg-surface-container-low rounded-2xl border border-border-subtle/80 flex flex-col gap-3">
              <div class="flex items-center gap-2 font-label-md text-xs font-bold uppercase tracking-wider text-ink-primary">
                <span class="material-symbols-outlined text-[18px] text-primary">verified</span>
                Quem pode integrar a rede:
              </div>
              <ul class="text-xs text-on-surface-variant space-y-2 list-disc pl-5 leading-relaxed">
                <li>Advogados(as) socioambientais e populares</li>
                <li>Pesquisadores(as) e docentes universitários</li>
                <li>Clínicas jurídicas de faculdades de direito</li>
                <li>Organizações Não Governamentais (ONGs)</li>
                <li>Coletivos comunitários e entidades de classe</li>
                <li>Escritórios de advocacia parceiros</li>
              </ul>
            </div>

            <!-- Botão de Ação -->
            <a class="w-full py-4 px-6 rounded-xl bg-primary hover:bg-moss-light text-on-primary font-label-lg text-sm uppercase tracking-wider font-bold transition-all duration-200 flex items-center justify-center gap-2 shadow-md hover:shadow-lg text-center"
              href="https://docs.google.com/forms/d/e/1FAIpQLSeAuZ5N3FxsVX0HrQ9dhrCqyEPuAmWgR-IOEXm1m35Z_Nxjhg/viewform?usp=send_form"
              target="_blank" rel="noopener noreferrer">
              <span>Acessar Formulário Oficial</span>
              <span class="material-symbols-outlined text-[20px]">open_in_new</span>
            </a>

            <div class="text-center pt-2 border-t border-border-subtle">
              <p class="text-xs text-on-surface-variant">
                Dúvidas sobre o cadastro? Fale conosco em <br />
                <a href="mailto:info@ajamazonia.org" class="text-primary font-semibold hover:underline">info@ajamazonia.org</a>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>

</main>

<?php get_footer(); ?>
