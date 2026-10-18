<?php
/**
 * Template Part: Chamada de Ação "Faça Parte" (CTA)
 * Exibido no final de todas as seções e páginas do site, inspirado no modelo PPA.
 */
?>
<section class="w-full py-space-xl bg-surface-container border-t border-border-subtle cta-faca-parte-section" id="faca-parte-cta">
  <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin reveal">
    
    <!-- Caixa Destaque de Conversão -->
    <div class="bg-surface-container-lowest rounded-3xl p-8 lg:p-14 border border-border-subtle shadow-md relative overflow-hidden interactive-card">
      <!-- Elemento Decorativo Sutil de Fundo -->
      <div class="absolute -right-20 -top-20 w-80 h-80 rounded-full bg-primary/5 pointer-events-none blur-3xl"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 rounded-full bg-secondary/5 pointer-events-none blur-3xl"></div>
      <!-- Elementos Oficiais da Identidade Visual AJA -->
      <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-11.png')); ?>" alt="" class="absolute -right-12 -bottom-12 w-80 h-80 opacity-[0.06] pointer-events-none select-none object-contain" />
      <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-04.png')); ?>" alt="" class="absolute -left-12 -top-12 w-64 h-64 opacity-[0.05] pointer-events-none select-none object-contain" />

      <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        
        <!-- Coluna de Texto e Apresentação -->
        <div class="lg:col-span-7 flex flex-col gap-4">
          <div class="flex items-center gap-2.5">
            <span class="w-7 h-[2px] bg-secondary accent-line-expand"></span>
            <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">
              Seja Membro
            </span>
          </div>

          <h2 class="font-headline-lg text-2xl sm:text-3xl lg:text-4xl text-ink-primary font-bold leading-tight">
            Faça Parte da Aliança Jurídica pela Amazônia
          </h2>

          <div class="flex flex-col gap-3 font-body-md text-body-md text-on-surface-variant leading-relaxed">
            <p>
              A Aliança Jurídica pela Amazônia é um espaço aberto à colaboração de advogados(as), pesquisadores(as), organizações da sociedade civil, escritórios de advocacia, coletivos jurídicos e clínicas de direitos que compartilham do nosso propósito e dos princípios que orientam nossa atuação.
            </p>
            <p>
              Se você acredita em uma Amazônia com justiça, integridade territorial e protagonismo dos povos, queremos caminhar junto com você.
            </p>
            <p class="font-medium text-ink-primary">
              Preencha o formulário de adesão e venha contribuir com esta rede.
            </p>
          </div>
        </div>

        <!-- Coluna de Ação Direta (Card de Conversão) -->
        <div class="lg:col-span-5 flex flex-col gap-4 bg-surface-container-low p-6 lg:p-8 rounded-2xl border border-border-subtle shadow-xs">
          <div class="flex items-center justify-between pb-3 border-b border-border-subtle">
            <span class="px-3 py-1 rounded bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-xs font-bold uppercase tracking-wider">
              Adesão Aberta
            </span>
            <span class="text-xs font-semibold text-outline">Formulário Oficial</span>
          </div>

          <p class="text-xs text-on-surface-variant leading-relaxed">
            Preencha o formulário de adesão e venha contribuir com esta rede.
          </p>

          <div class="flex flex-col gap-3 pt-1">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeAuZ5N3FxsVX0HrQ9dhrCqyEPuAmWgR-IOEXm1m35Z_Nxjhg/viewform?usp=send_form"
               target="_blank" rel="noopener noreferrer"
               class="w-full py-3.5 px-5 rounded-xl bg-primary hover:bg-moss-light text-on-primary font-label-md text-sm uppercase tracking-wider font-bold transition-all duration-200 flex items-center justify-center gap-2 shadow-sm hover:shadow text-center">
              <span>Preencher Formulário de Adesão</span>
              <span class="material-symbols-outlined text-[18px]">open_in_new</span>
            </a>

            <div class="flex items-center gap-2">
              <a href="<?php echo esc_url(home_url('/faca-parte/')); ?>"
                 class="flex-1 py-2.5 px-3 rounded-lg border border-border-subtle hover:border-primary bg-surface-container-lowest text-ink-primary hover:text-primary font-label-sm text-xs font-bold uppercase tracking-wider text-center transition-colors">
                Saiba Mais
              </a>
              <a href="<?php echo esc_url(home_url('/contato/')); ?>"
                 class="flex-1 py-2.5 px-3 rounded-lg border border-border-subtle hover:border-primary bg-surface-container-lowest text-ink-primary hover:text-primary font-label-sm text-xs font-bold uppercase tracking-wider text-center transition-colors">
                Fale Conosco
              </a>
            </div>
          </div>

          <div class="pt-3 border-t border-border-subtle text-center">
            <p class="text-[11px] text-outline">
              Em caso de dúvidas, entre em contato pelo e-mail <a href="mailto:info@ajamazonia.org" class="text-primary font-semibold hover:underline">info@ajamazonia.org</a>
            </p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
