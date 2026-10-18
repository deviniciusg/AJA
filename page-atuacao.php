<?php
/**
 * Template Name: Página - Atuação
 * Description: Subseção de Sobre Nós dedicada à atuação da AJA, plenárias e os 3 Grupos Temáticos (GTs), com conteúdo estritamente fiel à Home.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- SEÇÃO PRINCIPAL: NOSSA ATUAÇÃO (EXATAMENTE IGUAL À HOME #atuacao) -->
  <section class="w-full py-space-xl bg-surface-container border-b border-border-subtle relative overflow-hidden" id="atuacao">
    <!-- Marca d'água oficial da identidade visual AJA -->
    <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-12.png')); ?>" alt="" class="hidden lg:block absolute -right-12 -top-12 w-72 h-72 opacity-[0.04] pointer-events-none select-none object-contain" />
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">

      <!-- Breadcrumb -->
      <div class="flex items-center gap-2.5 mb-4">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
        <span class="text-xs text-outline">/</span>
        <a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Sobre nós</a>
        <span class="text-xs text-outline">/</span>
        <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Atuação</span>
      </div>

      <div class="flex items-center gap-3 mb-2">
        <span class="w-8 h-[2px] bg-secondary"></span>
        <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Estrutura Operacional</span>
      </div>
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-4">
        <div>
          <h1 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-medium">
            Nossa Atuação: Espaços de Construção Contínua
          </h1>
        </div>
        <p class="font-body-md text-body-md text-on-surface-variant max-w-lg">
          A atuação da AJA é estruturada em espaços de construção contínua: as reuniões plenárias, que reúnem todos os membros para alinhamento estratégico e tomada de decisões coletivas, e os Grupos Temáticos (GTs), que são o coração do trabalho técnico e colaborativo da rede.
        </p>
      </div>

      <!-- Highlight Box: Plenárias & Metodologia com Registro Real -->
      <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-border-subtle mb-10 overflow-hidden grid grid-cols-1 lg:grid-cols-12 items-stretch">
        <div class="lg:col-span-7 p-6 lg:p-8 flex flex-col justify-between gap-6">
          <div class="flex flex-col gap-3">
            <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Governança Coletiva &amp; Produção Técnica</span>
            <h2 class="font-title-lg text-title-lg text-ink-primary font-bold">Reuniões Plenárias e Grupos Temáticos (GTs)</h2>
            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              As plenárias reúnem a totalidade de membros para alinhamentos estratégicos horizontais, enquanto os GTs atuam como polos vivos de produção de conhecimento, desenho de estratégias e articulações práticas para responder aos desafios centrais da Amazônia.
            </p>
          </div>
          <div class="pt-4 border-t border-border-subtle/70 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
            <span class="font-body-sm text-xs text-on-surface-variant">Membros associados integram um ou mais GTs conforme sua área de atuação.</span>
            <a class="font-label-md text-label-md text-primary font-bold hover:text-moss-light inline-flex items-center gap-1 transition-colors whitespace-nowrap shrink-0" href="<?php echo esc_url(home_url('/faca-parte/')); ?>">
              <span>Inscrever-se</span> <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
          </div>
        </div>
        <div class="lg:col-span-5 relative min-h-[220px] lg:min-h-full overflow-hidden bg-surface-container-high group">
          <img src="<?php echo esc_url(aja_asset('fotos/painel-debate-aja.jpg')); ?>" alt="Painel e plenária da Aliança Jurídica pela Amazônia" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
          <div class="absolute inset-0 bg-gradient-to-t from-earth-dark/80 via-transparent to-transparent flex flex-col justify-end p-4 text-surface-container-lowest">
            <span class="font-label-sm text-[10px] uppercase tracking-widest text-tertiary-fixed font-bold">Diálogo &amp; Deliberação</span>
            <p class="text-xs font-medium text-surface-container-lowest">Reuniões plenárias e deliberação coletiva da rede</p>
          </div>
        </div>
      </div>

      <!-- CARDS DOS 3 GTS COM PALETAS OFICIAIS -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter mb-10">
        
        <!-- GT 01: Território, Segurança e Acesso à Justiça -->
        <div class="bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden border border-border-subtle group"
             style="border-top: 5px solid #F2B950;">
          <div class="flex flex-col">
            <div class="p-6 pb-5 border-b border-border-subtle/80 relative overflow-hidden" style="background: linear-gradient(135deg, rgba(242, 185, 80, 0.16) 0%, rgba(124, 31, 31, 0.05) 100%);">
              <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-02.png')); ?>" alt="" class="absolute -right-4 -bottom-4 w-24 h-24 opacity-10 pointer-events-none select-none object-contain" />
              <div class="flex items-center justify-between gap-2 mb-3 relative z-10">
                <span class="px-2.5 py-1 rounded-md text-[11px] font-bold uppercase tracking-wider shadow-2xs"
                      style="background-color: #F2B950; color: #7C1F1F;">
                  GT 01
                </span>
                <span class="text-[11px] font-bold uppercase tracking-wider" style="color: #7C1F1F;">
                  Território &amp; Segurança
                </span>
              </div>
              <h3 class="font-title-lg text-title-lg text-ink-primary font-bold leading-snug">
                GT de Território, Segurança e Acesso à Justiça
              </h3>
            </div>

            <div class="p-6 flex flex-col gap-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed text-[13.5px]">
              <p>
                Entre as frentes estratégicas da Aliança Jurídica pela Amazônia, o GT de Território, Segurança e Acesso à Justiça atua na construção de respostas integradas para os desafios que envolvem direitos territoriais, segurança pública e garantia de direitos na região.
              </p>
              <p>
                O grupo trabalha com temas como direitos territoriais, regularização e gestão fundiária, territórios tradicionais e Amazônia urbana, além de segurança pública e enfrentamento a crimes ambientais.
              </p>
              <p>
                O GT busca discutir e construir estratégias transversais, produzindo conhecimento coletivo, elaborando propostas e articulando respostas integradas. Parte do entendimento de que proteger o território é também proteger vidas e culturas.
              </p>

              <div class="flex flex-wrap gap-1.5 pt-2">
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(242, 185, 80, 0.18); color: #7C1F1F;">Direitos Territoriais</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(242, 185, 80, 0.18); color: #7C1F1F;">Gestão Fundiária</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(242, 185, 80, 0.18); color: #7C1F1F;">Segurança Pública</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(242, 185, 80, 0.18); color: #7C1F1F;">Crimes Ambientais</span>
              </div>
            </div>
          </div>

          <div class="p-6 pt-4 border-t border-surface-container flex items-center justify-between">
            <a class="font-label-md text-label-md uppercase tracking-wider font-bold inline-flex items-center gap-1.5 transition-colors group/link hover:opacity-85"
               style="color: #7C1F1F;"
               href="<?php echo esc_url(home_url('/faca-parte/')); ?>">
              <span>Integrar este GT</span>
              <span class="material-symbols-outlined text-[16px] group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            <span class="w-2.5 h-2.5 rounded-full" style="background-color: #F2B950;"></span>
          </div>
        </div>

        <!-- GT 02: Litigância e Ativismo Judicial -->
        <div class="bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden border border-border-subtle group"
             style="border-top: 5px solid #406284;">
          <div class="flex flex-col">
            <div class="p-6 pb-5 border-b border-border-subtle/80 relative overflow-hidden" style="background: linear-gradient(135deg, rgba(166, 190, 228, 0.22) 0%, rgba(64, 98, 132, 0.06) 100%);">
              <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-12.png')); ?>" alt="" class="absolute -right-4 -bottom-4 w-24 h-24 opacity-10 pointer-events-none select-none object-contain" />
              <div class="flex items-center justify-between gap-2 mb-3 relative z-10">
                <span class="px-2.5 py-1 rounded-md text-[11px] font-bold uppercase tracking-wider shadow-2xs"
                      style="background-color: #A6BEE4; color: #406284;">
                  GT 02
                </span>
                <span class="text-[11px] font-bold uppercase tracking-wider" style="color: #406284;">
                  Incidência Estratégica
                </span>
              </div>
              <h3 class="font-title-lg text-title-lg text-ink-primary font-bold leading-snug">
                GT de Litigância e Ativismo Judicial
              </h3>
            </div>

            <div class="p-6 flex flex-col gap-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed text-[13.5px]">
              <p>
                Para construir espaços de coordenação entre profissionais e organizações que atuam estrategicamente no sistema de justiça, o GT de Litigância e Ativismo Judicial fortalece esse campo por meio da troca de experiências, da construção coletiva de estratégias e do fortalecimento da atuação diante dos desafios socioambientais da Amazônia. Embora a AJA não seja uma organização de litigância, entendemos a importância de fomentar esse debate e fortalecer iniciativas que atuam nessa frente.
              </p>
              <p>
                O grupo atua na construção de estratégias jurídicas voltadas à justiça climática, ao direito ambiental e à defesa de direitos difusos e coletivos.
              </p>

              <div class="flex flex-wrap gap-1.5 pt-2">
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(166, 190, 228, 0.25); color: #406284;">Justiça Climática</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(166, 190, 228, 0.25); color: #406284;">Direito Ambiental</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(166, 190, 228, 0.25); color: #406284;">Direitos Difusos</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(166, 190, 228, 0.25); color: #406284;">STF / STJ</span>
              </div>
            </div>
          </div>

          <div class="p-6 pt-4 border-t border-surface-container flex items-center justify-between">
            <a class="font-label-md text-label-md uppercase tracking-wider font-bold inline-flex items-center gap-1.5 transition-colors group/link hover:opacity-85"
               style="color: #406284;"
               href="<?php echo esc_url(home_url('/faca-parte/')); ?>">
              <span>Integrar este GT</span>
              <span class="material-symbols-outlined text-[16px] group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            <span class="w-2.5 h-2.5 rounded-full" style="background-color: #406284;"></span>
          </div>
        </div>

        <!-- GT 03: Finanças Sustentáveis e Economias da Sociobiodiversidade -->
        <div class="bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden border border-border-subtle group"
             style="border-top: 5px solid #6E7642;">
          <div class="flex flex-col">
            <div class="p-6 pb-5 border-b border-border-subtle/80 relative overflow-hidden" style="background: linear-gradient(135deg, rgba(110, 118, 66, 0.18) 0%, rgba(118, 31, 32, 0.05) 100%);">
              <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-03.png')); ?>" alt="" class="absolute -right-4 -bottom-4 w-24 h-24 opacity-10 pointer-events-none select-none object-contain" />
              <div class="flex items-center justify-between gap-2 mb-3 relative z-10">
                <span class="px-2.5 py-1 rounded-md text-[11px] font-bold uppercase tracking-wider shadow-2xs"
                      style="background-color: #6E7642; color: #ffffff;">
                  GT 03
                </span>
                <span class="text-[11px] font-bold uppercase tracking-wider" style="color: #761F20;">
                  Sociobiodiversidade
                </span>
              </div>
              <h3 class="font-title-lg text-title-lg text-ink-primary font-bold leading-snug">
                GT de Finanças Sustentáveis e Economias da Sociobiodiversidade
              </h3>
            </div>

            <div class="p-6 flex flex-col gap-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed text-[13.5px]">
              <p>
                Na Aliança Jurídica pela Amazônia, os Grupos Temáticos conectam diferentes áreas para enfrentar desafios estratégicos da região. Um deles é o GT de Finanças Sustentáveis e Economias da Sociobiodiversidade, que atua com direito intelectual e cultural associado à sociobiodiversidade, negócios justos, uso da biodiversidade e do conhecimento tradicional, além de bioeconomia e bens ambientais, como carbono, água e PSA.
              </p>
              <p>
                O grupo articula o campo jurídico com a realidade econômica dos povos e comunidades tradicionais, construindo estratégias para que a bioeconomia também seja uma economia de justiça. Parte do reconhecimento de que a floresta tem valor e trabalha para que esse valor se traduza em direitos, prosperidade e proteção.
              </p>

              <div class="flex flex-wrap gap-1.5 pt-2">
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(110, 118, 66, 0.18); color: #761F20;">Conhecimento Tradicional</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(110, 118, 66, 0.18); color: #761F20;">Negócios Justos</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(110, 118, 66, 0.18); color: #761F20;">Créditos de Carbono</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(110, 118, 66, 0.18); color: #761F20;">PSA &amp; Bioeconomia</span>
              </div>
            </div>
          </div>

          <div class="p-6 pt-4 border-t border-surface-container flex items-center justify-between">
            <a class="font-label-md text-label-md uppercase tracking-wider font-bold inline-flex items-center gap-1.5 transition-colors group/link hover:opacity-85"
               style="color: #761F20;"
               href="<?php echo esc_url(home_url('/faca-parte/')); ?>">
              <span>Integrar este GT</span>
              <span class="material-symbols-outlined text-[16px] group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            <span class="w-2.5 h-2.5 rounded-full" style="background-color: #6E7642;"></span>
          </div>
        </div>

      </div>

      <!-- Eixo Transversal Banner (EXATAMENTE IGUAL À HOME #atuacao) -->
      <div class="p-8 bg-earth-dark rounded-xl text-surface-container-lowest flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 border border-border-subtle/20 shadow-lg">
        <div class="flex flex-col gap-2 max-w-3xl">
          <div class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-tertiary"></span>
            <span class="font-label-sm text-label-sm uppercase tracking-widest text-tertiary">Abordagem Transversal Obrigatória</span>
          </div>
          <h3 class="font-headline-sm text-headline-sm text-white">Defesa dos Direitos Humanos e Observância aos Direitos dos PIQCTs</h3>
          <p class="font-body-md text-body-md text-surface-container-high">
            Independentemente do Grupo Temático (Território, Litigância ou Finanças Sustentáveis), toda formulação técnica da AJA observa transversalmente a garantia de direitos de Povos Indígenas, Quilombolas e Comunidades Tradicionais (PIQCTs), a equidade de gênero, raça e geração, e a segurança de defensores ambientais.
          </p>
        </div>
        <a class="px-6 py-3.5 rounded-lg bg-tertiary text-on-tertiary font-label-lg text-label-lg uppercase tracking-wider hover:bg-tertiary-fixed-dim transition-colors shrink-0 font-bold"
          href="<?php echo esc_url(home_url('/faca-parte/')); ?>">
          Participar de um GT
        </a>
      </div>

      <!-- NAVEGAÇÃO ENTRE SUBSEÇÕES DE SOBRE NÓS -->
      <div class="mt-16 p-6 rounded-2xl bg-surface-container-lowest border border-border-subtle flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-3">
          <a href="<?php echo esc_url(home_url('/nossa-historia/')); ?>"
             class="px-4 py-2.5 rounded-lg bg-surface-container-low border border-border-subtle hover:border-secondary text-ink-primary hover:text-secondary font-bold text-xs uppercase tracking-wider transition-colors inline-flex items-center gap-1.5">
            <span class="material-symbols-outlined text-[16px]">arrow_back</span>
            <span>Nossa História</span>
          </a>
        </div>
        <div class="flex items-center gap-3">
          <a href="<?php echo esc_url(home_url('/estrutura/')); ?>"
             class="px-4 py-2.5 rounded-lg bg-surface-container-low border border-border-subtle hover:border-primary text-ink-primary hover:text-primary font-bold text-xs uppercase tracking-wider transition-colors inline-flex items-center gap-1.5">
            <span>Estrutura</span>
            <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>

</main>

<?php get_footer(); ?>