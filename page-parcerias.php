<?php
/**
 * Template Name: Página - Parcerias
 * Description: Página dedicada a parceiros estratégicos, redes conectadas, apoiadores institucionais e critérios de cooperação da AJA.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- HERO DAS PARCERIAS -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle relative overflow-hidden">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">
      <div class="flex items-center gap-2.5 mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
        <span class="text-xs text-outline">/</span>
        <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Parcerias</span>
      </div>

      <div class="flex items-center gap-3 mb-2">
        <span class="w-8 h-[2px] bg-secondary"></span>
        <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Articulação Coletiva & Redes</span>
      </div>

      <h1 class="font-headline-lg text-3xl sm:text-4xl lg:text-5xl text-ink-primary font-bold leading-tight max-w-4xl">
        Parceiros Estratégicos e Redes Conectadas
      </h1>

      <p class="font-body-lg text-body-md text-on-surface-variant max-w-3xl mt-4 leading-relaxed">
        A Aliança Jurídica pela Amazônia articula e fortalece alianças estratégicas com organizações da sociedade civil, redes de advocacia popular, centros de pesquisa e institutos internacionais comprometidos com a integridade territorial e climática da Amazônia.
      </p>
    </div>
  </section>

  <!-- GRADE DE PARCEIROS ESTRATÉGICOS -->
  <section class="w-full py-16 lg:py-20 bg-surface border-b border-border-subtle" id="redes-parceiras">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <div class="flex flex-col items-start mb-12">
        <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Conexões Ativas</span>
        <h2 class="font-headline-md text-2xl sm:text-3xl text-ink-primary font-bold mt-1">
          Organizações e Redes Articuladas
        </h2>
        <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-2 leading-relaxed">
          Iniciativas que constroem conosco pesquisas aplicadas, trocas periciais, salvaguardas regulatórias e apoio técnico aos Grupos Temáticos da AJA.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- 1. Amazon Investor Coalition -->
        <div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-8 border border-border-subtle shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="h-24 flex items-center justify-center p-2 mb-6 bg-surface-container-low rounded-xl border border-border-subtle/50">
              <img alt="Amazon Investor Coalition" class="max-h-16 max-w-full object-contain" src="<?php echo esc_url(aja_asset('parceiros/amazon investor coalition.png')); ?>" />
            </div>
            <h3 class="font-title-lg text-lg font-bold text-ink-primary mb-2">Amazon Investor Coalition</h3>
            <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed mb-4">
              Aliança global de investidores e filantropos que canaliza recursos para a conservação florestal, bioeconomia inclusiva e o fortalecimento de salvaguardas socioambientais na Bacia Amazônica.
            </p>
          </div>
          <div class="pt-4 border-t border-border-subtle flex items-center justify-between">
            <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold">Investimento & Bioeconomia</span>
            <a href="https://amazoninvestor.org/" target="_blank" rel="noopener noreferrer" class="text-xs font-label-md text-primary font-bold hover:underline inline-flex items-center gap-1">
              Conhecer <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
          </div>
        </div>

        <!-- 2. Center for Climate Crime Analysis (CCCA) -->
        <div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-8 border border-border-subtle shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="h-24 flex items-center justify-center p-2 mb-6 bg-surface-container-low rounded-xl border border-border-subtle/50">
              <img alt="Center for Climate Crime Analysis" class="max-h-16 max-w-full object-contain" src="<?php echo esc_url(aja_asset('parceiros/center for climate crime analysis.png')); ?>" />
            </div>
            <h3 class="font-title-lg text-lg font-bold text-ink-primary mb-2">Center for Climate Crime Analysis (CCCA)</h3>
            <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed mb-4">
              Organização pericial e investigativa sem fins lucrativos que mapeia e produz evidências criminais sobre desmatamento ilegal, invasão de terras públicas e crimes climáticos transnacionais.
            </p>
          </div>
          <div class="pt-4 border-t border-border-subtle flex items-center justify-between">
            <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold">Perícia & Crimes Climáticos</span>
            <a href="https://climatecrimeanalysis.org/" target="_blank" rel="noopener noreferrer" class="text-xs font-label-md text-primary font-bold hover:underline inline-flex items-center gap-1">
              Conhecer <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
          </div>
        </div>

        <!-- 3. LACLIMA -->
        <div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-8 border border-border-subtle shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="h-24 flex items-center justify-center p-2 mb-6 bg-surface-container-low rounded-xl border border-border-subtle/50">
              <img alt="LACLIMA" class="max-h-16 max-w-full object-contain" src="<?php echo esc_url(aja_asset('parceiros/lacilma.png')); ?>" />
            </div>
            <h3 class="font-title-lg text-lg font-bold text-ink-primary mb-2">LACLIMA</h3>
            <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed mb-4">
              Primeira rede de advogados(as) climáticos da América Latina, conectando especialistas para construir estratégias jurídicas transformadoras, cooperação regional e governança climática sólida.
            </p>
          </div>
          <div class="pt-4 border-t border-border-subtle flex items-center justify-between">
            <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold">Advocacia Climática Regional</span>
            <a href="https://www.laclima.org/" target="_blank" rel="noopener noreferrer" class="text-xs font-label-md text-primary font-bold hover:underline inline-flex items-center gap-1">
              Conhecer <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
          </div>
        </div>

        <!-- 4. Maparajuba Advocacia Popular -->
        <div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-8 border border-border-subtle shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="h-24 flex items-center justify-center p-2 mb-6 bg-surface-container-low rounded-xl border border-border-subtle/50">
              <img alt="Maparajuba Advocacia Popular" class="max-h-16 max-w-full object-contain" src="<?php echo esc_url(aja_asset('parceiros/maparajuba.png')); ?>" />
            </div>
            <h3 class="font-title-lg text-lg font-bold text-ink-primary mb-2">Maparajuba Advocacia Popular</h3>
            <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed mb-4">
              Coletivo de advocacia popular sediado no Pará que assessora juridicamente povos indígenas, comunidades quilombolas e ribeirinhas na defesa de seus territórios e modos tradicionais de vida.
            </p>
          </div>
          <div class="pt-4 border-t border-border-subtle flex items-center justify-between">
            <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold">Advocacia Popular & Direitos</span>
            <a href="https://maparajuba.org/" target="_blank" rel="noopener noreferrer" class="text-xs font-label-md text-primary font-bold hover:underline inline-flex items-center gap-1">
              Conhecer <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
          </div>
        </div>

        <!-- 5. Rede Amazonidas pelo Clima -->
        <div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-8 border border-border-subtle shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="h-24 flex items-center justify-center p-2 mb-6 bg-surface-container-low rounded-xl border border-border-subtle/50">
              <img alt="Rede Amazonidas pelo Clima" class="max-h-16 max-w-full object-contain" src="<?php echo esc_url(aja_asset('parceiros/rede anazonidas pelo clima.png')); ?>" />
            </div>
            <h3 class="font-title-lg text-lg font-bold text-ink-primary mb-2">Rede Amazonidas pelo Clima</h3>
            <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed mb-4">
              Articulação pan-amazônica liderada por atores locais, cientistas, comunicadores e juventudes que pauta a centralidade dos direitos humanos e territoriais na agenda climática.
            </p>
          </div>
          <div class="pt-4 border-t border-border-subtle flex items-center justify-between">
            <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold">Articulação Comunitária</span>
            <a href="https://www.rac-br.org/" target="_blank" rel="noopener noreferrer" class="text-xs font-label-md text-primary font-bold hover:underline inline-flex items-center gap-1">
              Conhecer <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
          </div>
        </div>

        <!-- 6. Rede Liberdade -->
        <div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-8 border border-border-subtle shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="h-24 flex items-center justify-center p-2 mb-6 bg-surface-container-low rounded-xl border border-border-subtle/50">
              <img alt="Rede Liberdade" class="max-h-16 max-w-full object-contain" src="<?php echo esc_url(aja_asset('parceiros/rede liberdade.png')); ?>" />
            </div>
            <h3 class="font-title-lg text-lg font-bold text-ink-primary mb-2">Rede Liberdade</h3>
            <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed mb-4">
              Rede de defesa jurídica e proteção legal de defensores de direitos humanos, ativistas e comunicadores sob ameaça ou criminalização no Brasil.
            </p>
          </div>
          <div class="pt-4 border-t border-border-subtle flex items-center justify-between">
            <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold">Proteção de Defensores</span>
            <a href="https://redeliberdade.org.br/" target="_blank" rel="noopener noreferrer" class="text-xs font-label-md text-primary font-bold hover:underline inline-flex items-center gap-1">
              Conhecer <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
          </div>
        </div>

        <!-- 7. Portal Migalhas (Parceria Editorial) -->
        <div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-8 border border-border-subtle shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="h-24 flex items-center justify-center p-2 mb-6 bg-surface-container-low rounded-xl border border-border-subtle/50">
              <div class="flex items-center gap-2">
                <span class="w-9 h-9 rounded-xl bg-[#8C1D24] text-white flex items-center justify-center text-lg font-serif font-bold shadow-sm select-none">M</span>
                <span class="font-serif text-2xl font-bold tracking-tight text-[#8C1D24]">Migalhas</span>
              </div>
            </div>
            <h3 class="font-title-lg text-lg font-bold text-ink-primary mb-2">Portal Migalhas</h3>
            <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed mb-4">
              Maior portal jurídico do Brasil. Parceria editorial estratégica para veiculação periódica de artigos de opinião, teses socioambientais e notas doutrinárias de membros da AJA na coluna Migalhas de Peso.
            </p>
          </div>
          <div class="pt-4 border-t border-border-subtle flex items-center justify-between">
            <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold">Parceria Editorial &amp; Mídia</span>
            <a href="https://www.migalhas.com.br/depeso" target="_blank" rel="noopener noreferrer" class="text-xs font-label-md text-primary font-bold hover:underline inline-flex items-center gap-1">
              Conhecer <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRINCÍPIOS DE COOPERAÇÃO E SALVAGUARDAS -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-6 flex flex-col gap-4">
          <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Salvaguardas Institucionais</span>
          <h2 class="font-headline-lg text-2xl sm:text-3xl lg:text-4xl text-ink-primary font-bold leading-tight">
            Como Estruturamos Nossas Parcerias
          </h2>
          <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            As relações de parceria da AJA são pautadas por estritos critérios éticos, transparência e compromisso incondicional com as populações da floresta e o Estado de Direito ecológico.
          </p>
          <div class="flex flex-col gap-3 pt-2">
            <div class="flex items-start gap-3">
              <span class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-[16px]">check</span>
              </span>
              <div>
                <h4 class="font-title-md text-sm font-bold text-ink-primary">Autonomia Técnica e Política</h4>
                <p class="text-xs text-on-surface-variant leading-relaxed">Garantia total de independência em nossas notas técnicas, manifestações e pesquisas jurídicas.</p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <span class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-[16px]">check</span>
              </span>
              <div>
                <h4 class="font-title-md text-sm font-bold text-ink-primary">Consentimento e Protagonismo Local</h4>
                <p class="text-xs text-on-surface-variant leading-relaxed">Respeito irrestrito ao Consentimento Livre, Prévio e Informado (Convenção 169 da OIT) em todas as frentes de campo.</p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <span class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-[16px]">check</span>
              </span>
              <div>
                <h4 class="font-title-md text-sm font-bold text-ink-primary">Transparência e Compliance Rigoroso</h4>
                <p class="text-xs text-on-surface-variant leading-relaxed">Todas as cooperações institucionais e apoios financeiros passam por análise prévia de governança do Comitê Executivo.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="lg:col-span-6 bg-surface-container-lowest p-8 lg:p-10 rounded-3xl border border-border-subtle shadow-sm flex flex-col gap-5">
          <div class="flex items-center gap-3">
            <span class="w-10 h-10 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center">
              <span class="material-symbols-outlined text-[24px]">handshake</span>
            </span>
            <div>
              <span class="text-xs font-label-sm uppercase tracking-wider text-secondary font-bold">Cooperação Institucional</span>
              <h3 class="font-title-lg text-lg font-bold text-ink-primary">Quer Propor uma Parceria?</h3>
            </div>
          </div>

          <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed">
            Se sua organização atua na defesa socioambiental, no Sistema de Justiça ou no fomento filantrópico sustentável na Amazônia Legal e deseja construir uma agenda conjunta conosco, entre em contato com nossa equipe institucional.
          </p>

          <div class="flex flex-col sm:flex-row gap-3 pt-2">
            <a href="<?php echo esc_url(home_url('/contato/')); ?>" class="py-3 px-5 rounded-xl bg-primary hover:bg-moss-light text-on-primary font-label-md text-xs uppercase tracking-wider font-bold text-center transition-all shadow-sm">
              Falar com Coordenação
            </a>
            <a href="mailto:info@ajamazonia.org" class="py-3 px-5 rounded-xl border border-border-subtle hover:border-primary text-ink-primary hover:text-primary font-label-md text-xs uppercase tracking-wider font-bold text-center transition-colors">
              info@ajamazonia.org
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>

</main>

<?php get_footer(); ?>
