<?php
/**
 * Template Name: Página - Atuação
 * Description: Subseção de Sobre Nós dedicada à atuação da AJA, plenárias e os 3 Grupos Temáticos (GTs).
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- HERO DA SUBSEÇÃO ATUAÇÃO -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle relative overflow-hidden">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
        <div class="lg:col-span-7 flex flex-col justify-center">
          <div class="flex items-center gap-2.5 mb-3">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
            <span class="text-xs text-outline">/</span>
            <a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Sobre nós</a>
            <span class="text-xs text-outline">/</span>
            <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Atuação</span>
          </div>

          <div class="flex items-center gap-3 mb-2">
            <span class="w-8 h-[2px] bg-secondary"></span>
            <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Subseção • Espaços de Construção Contínua</span>
          </div>

          <h1 class="font-headline-lg text-3xl sm:text-4xl lg:text-5xl text-ink-primary font-bold leading-tight max-w-3xl">
            Nossa Atuação: Reuniões Plenárias e Grupos Temáticos (GTs)
          </h1>

          <p class="font-body-lg text-body-md text-on-surface-variant max-w-2xl mt-4 leading-relaxed">
            A atuação da AJA é estruturada em espaços de deliberação horizontal e produção técnica contínua. As plenárias reúnem a totalidade da rede para alinhamentos estratégicos, enquanto os GTs atuam como polos vivos de inteligência coletiva para responder aos desafios socioambientais da Amazônia.
          </p>

          <div class="flex flex-wrap items-center gap-3 mt-8 pt-6 border-t border-border-subtle/80">
            <span class="px-3 py-1.5 rounded-lg text-xs font-bold" style="background-color: rgba(242, 185, 80, 0.2); color: #7C1F1F;">
              GT 01 • Território &amp; Segurança
            </span>
            <span class="px-3 py-1.5 rounded-lg text-xs font-bold" style="background-color: rgba(166, 190, 228, 0.3); color: #406284;">
              GT 02 • Litigância Judicial
            </span>
            <span class="px-3 py-1.5 rounded-lg text-xs font-bold" style="background-color: rgba(110, 118, 66, 0.22); color: #761F20;">
              GT 03 • Finanças Sustentáveis
            </span>
          </div>
        </div>

        <div class="lg:col-span-5">
          <div class="relative rounded-2xl overflow-hidden shadow-lg border border-border-subtle group h-[360px] sm:h-[420px] lg:h-[440px] bg-earth-dark">
            <img src="<?php echo esc_url(aja_asset('fotos/pexels-vitoria-matos-2147713895-29722006.jpg')); ?>"
                 alt="Mulher indígena em pintura corporal cerimonial tradicional amazônica"
                 class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/30 to-transparent flex flex-col justify-end p-6 sm:p-7">
              <span class="px-2.5 py-1 rounded bg-secondary text-white font-label-sm text-[11px] font-bold uppercase tracking-wider w-fit mb-2">Saberes Tradicionais &amp; Justiça</span>
              <p class="text-white font-title-sm text-sm sm:text-base font-semibold leading-snug">
                "Inteligência coletiva e saberes ancestrais a serviço do Estado de Direito nos territórios."
              </p>
              <p class="text-surface-container-high text-xs mt-1 font-body-sm opacity-90">
                Aliança Jurídica pela Amazônia • Grupos Temáticos
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEÇÃO DOS 3 GRUPOS TEMÁTICOS (GTS) -->
  <section class="w-full py-16 lg:py-20 bg-surface border-b border-border-subtle" id="grupos-tematicos">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      
      <!-- Highlight Box: Governança Coletiva & Metodologia -->
      <div class="p-8 lg:p-10 bg-surface-container-lowest rounded-3xl shadow-sm border border-border-subtle mb-14 grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
        <div class="md:col-span-8 flex flex-col gap-3">
          <span class="font-label-sm text-xs uppercase tracking-widest text-primary font-bold">Governança Coletiva &amp; Produção Técnica</span>
          <h3 class="font-title-lg text-2xl text-ink-primary font-bold">Reuniões Plenárias e Grupos Temáticos (GTs)</h3>
          <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            As plenárias reúnem a totalidade de membros para alinhamentos estratégicos horizontais, enquanto os GTs atuam como polos vivos de produção de conhecimento, desenho de estratégias e articulações práticas para responder aos desafios centrais da Amazônia Legal.
          </p>
        </div>
        <div class="md:col-span-4 flex flex-col gap-3 border-t md:border-t-0 md:border-l border-border-subtle pt-6 md:pt-0 md:pl-8">
          <span class="font-label-md text-xs uppercase tracking-wider text-secondary font-bold">Como Participar</span>
          <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed">Membros associados integram um ou mais GTs de acordo com sua área técnica de incidência.</p>
          <a class="font-label-md text-xs text-primary font-bold hover:underline inline-flex items-center gap-1 mt-1" href="<?php echo esc_url(home_url('/faca-parte/')); ?>">
            Inscrever-se para um GT <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
          </a>
        </div>
      </div>

      <div class="mb-8">
        <span class="font-label-md text-xs uppercase tracking-widest text-secondary font-bold">Três Frentes de Incidência</span>
        <h2 class="font-headline-lg text-2xl sm:text-3xl font-bold text-ink-primary mt-1">
          Os Grupos Temáticos da Aliança
        </h2>
      </div>

      <!-- CARDS DOS 3 GTS COM PALETAS OFICIAIS -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
        
        <!-- GT 01: Território, Segurança e Acesso à Justiça -->
        <div class="bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden border border-border-subtle group"
             style="border-top: 5px solid #F2B950;">
          <div class="flex flex-col">
            <!-- Top Banner Temático Colorido -->
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
              <h3 class="font-title-lg text-xl text-ink-primary font-bold leading-snug">
                GT de Território, Segurança e Acesso à Justiça
              </h3>

              <!-- Destaque da Liderança -->
              <div class="mt-4 p-3.5 rounded-xl border flex items-start gap-3 bg-surface-container-lowest/90" style="border-color: rgba(242, 185, 80, 0.45);">
                <img src="<?php echo esc_url(aja_asset('Membros/lincon-aguiar.png')); ?>" alt="Lincon Aguiar" class="w-10 h-10 rounded-full object-cover shrink-0" />
                <div class="min-w-0">
                  <span class="text-[10px] uppercase font-bold tracking-wider block" style="color: #7C1F1F;">Liderança do GT</span>
                  <h4 class="text-sm font-bold text-ink-primary leading-tight">Lincon Aguiar</h4>
                  <p class="text-[11px] text-on-surface-variant mt-0.5 leading-snug">Mestre em Educação na Amazônia pela Ufopa e advogado popular do Coletivo Maparajuba.</p>
                </div>
              </div>
            </div>

            <!-- Descrição Editorial Completa -->
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
              <p>
                A partir de uma lógica de inteligência coletiva, conecta profissionais de diferentes áreas para estruturar respostas mais coordenadas, consistentes e eficazes. A atuação é guiada por uma perspectiva de Direitos Humanos, com atenção central a povos indígenas, quilombolas e comunidades tradicionais.
              </p>
              <p class="text-[11.5px] text-outline pt-2 border-t border-border-subtle/70">
                Espaço colaborativo aberto aos membros da rede, reunindo profissionais do Direito, pesquisadores, organizações da sociedade civil, clínicas jurídicas e escritórios pelo fortalecimento do Estado de Direito na Amazônia.
              </p>

              <!-- Tags de Eixos Temáticos -->
              <div class="flex flex-wrap gap-1.5 pt-2">
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(242, 185, 80, 0.18); color: #7C1F1F;">Direitos Territoriais</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(242, 185, 80, 0.18); color: #7C1F1F;">Gestão Fundiária</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(242, 185, 80, 0.18); color: #7C1F1F;">Segurança Pública</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(242, 185, 80, 0.18); color: #7C1F1F;">Crimes Ambientais</span>
              </div>
            </div>
          </div>

          <div class="p-6 pt-4 border-t border-surface-container flex items-center justify-between">
            <a class="font-label-md text-xs uppercase tracking-wider font-bold inline-flex items-center gap-1.5 transition-colors group/link hover:opacity-85"
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
            <!-- Top Banner Temático Colorido -->
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
              <h3 class="font-title-lg text-xl text-ink-primary font-bold leading-snug">
                GT de Litigância e Ativismo Judicial
              </h3>

              <!-- Destaque da Liderança -->
              <div class="mt-4 p-3.5 rounded-xl border flex items-start gap-3 bg-surface-container-lowest/90" style="border-color: rgba(166, 190, 228, 0.55);">
                <img src="<?php echo esc_url(aja_asset('Membros/marina-fiorini.png')); ?>" alt="Marina Fiorini" class="w-10 h-10 rounded-full object-cover shrink-0" />
                <div class="min-w-0">
                  <span class="text-[10px] uppercase font-bold tracking-wider block" style="color: #406284;">Liderança do GT</span>
                  <h4 class="text-sm font-bold text-ink-primary leading-tight">Marina Fiorini</h4>
                  <p class="text-[11px] text-on-surface-variant mt-0.5 leading-snug">Advogada, cofundadora e diretora do Instituto Advocaris, atuando na intersecção entre Direito, Consciência e Regeneração.</p>
                </div>
              </div>
            </div>

            <!-- Descrição Editorial Completa -->
            <div class="p-6 flex flex-col gap-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed text-[13.5px]">
              <p>
                Para construir espaços de coordenação entre profissionais e organizações que atuam estrategicamente no sistema de justiça, o GT de Litigância e Ativismo Judicial fortalece esse campo por meio da troca de experiências, da construção coletiva de estratégias e do fortalecimento da atuação diante dos desafios socioambientais da Amazônia. Embora a AJA não seja uma organização de litigância, entendemos a importância de fomentar esse debate e fortalecer iniciativas que atuam nessa frente.
              </p>
              <p>
                O grupo atua na construção de estratégias jurídicas voltadas à justiça climática, ao direito ambiental e à defesa de direitos difusos e coletivos.
              </p>
              <p>
                A partir de uma lógica de inteligência coletiva, o GT conecta profissionais de diferentes áreas para estruturar respostas mais coordenadas, consistentes e eficazes. A atuação é guiada por uma perspectiva de Direitos Humanos, com atenção central a povos indígenas, quilombolas e comunidades tradicionais.
              </p>
              <p class="text-[11.5px] text-outline pt-2 border-t border-border-subtle/70">
                Espaço colaborativo aberto aos membros da rede, reunindo profissionais do Direito, pesquisadores, organizações da sociedade civil, clínicas jurídicas e escritórios pelo fortalecimento do Estado de Direito na Amazônia.
              </p>

              <!-- Tags de Eixos Temáticos -->
              <div class="flex flex-wrap gap-1.5 pt-2">
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(166, 190, 228, 0.25); color: #406284;">Justiça Climática</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(166, 190, 228, 0.25); color: #406284;">Direito Ambiental</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(166, 190, 228, 0.25); color: #406284;">Direitos Difusos</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(166, 190, 228, 0.25); color: #406284;">STF / STJ</span>
              </div>
            </div>
          </div>

          <div class="p-6 pt-4 border-t border-surface-container flex items-center justify-between">
            <a class="font-label-md text-xs uppercase tracking-wider font-bold inline-flex items-center gap-1.5 transition-colors group/link hover:opacity-85"
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
            <!-- Top Banner Temático Colorido -->
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
              <h3 class="font-title-lg text-xl text-ink-primary font-bold leading-snug">
                GT de Finanças Sustentáveis e Economias da Sociobiodiversidade
              </h3>

              <!-- Destaque da Liderança -->
              <div class="mt-4 p-3.5 rounded-xl border flex items-start gap-3 bg-surface-container-lowest/90" style="border-color: rgba(110, 118, 66, 0.45);">
                <img src="<?php echo esc_url(aja_asset('Membros/isayana-silva.png')); ?>" alt="Isayana Silva" class="w-10 h-10 rounded-full object-cover shrink-0" />
                <div class="min-w-0">
                  <span class="text-[10px] uppercase font-bold tracking-wider block" style="color: #761F20;">Liderança do GT</span>
                  <h4 class="text-sm font-bold text-ink-primary leading-tight">Isayana Silva</h4>
                  <p class="text-[11px] text-on-surface-variant mt-0.5 leading-snug">Bacharel em Direito, socioambientalista, ativista climática, Líder G_DeZ 2026, Alumni IVLP 2024 e consultora em projetos de sociobioeconomia.</p>
                </div>
              </div>
            </div>

            <!-- Descrição Editorial Completa -->
            <div class="p-6 flex flex-col gap-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed text-[13.5px]">
              <p>
                Na Aliança Jurídica pela Amazônia, os Grupos Temáticos conectam diferentes áreas para enfrentar desafios estratégicos da região. Um deles é o GT de Finanças Sustentáveis e Economias da Sociobiodiversidade, que atua com direito intelectual e cultural associado à sociobiodiversidade, negócios justos, uso da biodiversidade e do conhecimento tradicional, além de bioeconomia e bens ambientais, como carbono, água e PSA.
              </p>
              <p>
                O grupo articula o campo jurídico com a realidade econômica dos povos e comunidades tradicionais, construindo estratégias para que a bioeconomia também seja uma economia de justiça. Parte do reconhecimento de que a floresta tem valor e trabalha para que esse valor se traduza em direitos, prosperidade e proteção.
              </p>
              <p>
                A partir de uma lógica de inteligência coletiva, o GT conecta profissionais de diferentes áreas para estruturar respostas mais coordenadas, consistentes e eficazes. A atuação é guiada por uma perspectiva de Direitos Humanos, com atenção central a povos indígenas, quilombolas e comunidades tradicionais.
              </p>
              <p class="text-[11.5px] text-outline pt-2 border-t border-border-subtle/70">
                Espaço colaborativo aberto aos membros da rede, reunindo profissionais do Direito, pesquisadores, organizações da sociedade civil, clínicas jurídicas e escritórios pelo fortalecimento do Estado de Direito na Amazônia.
              </p>

              <!-- Tags de Eixos Temáticos -->
              <div class="flex flex-wrap gap-1.5 pt-2">
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(110, 118, 66, 0.18); color: #761F20;">Conhecimento Tradicional</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(110, 118, 66, 0.18); color: #761F20;">Negócios Justos</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(110, 118, 66, 0.18); color: #761F20;">Créditos de Carbono</span>
                <span class="px-2 py-0.5 rounded text-[11px] font-medium" style="background-color: rgba(110, 118, 66, 0.18); color: #761F20;">PSA &amp; Bioeconomia</span>
              </div>
            </div>
          </div>

          <div class="p-6 pt-4 border-t border-surface-container flex items-center justify-between">
            <a class="font-label-md text-xs uppercase tracking-wider font-bold inline-flex items-center gap-1.5 transition-colors group/link hover:opacity-85"
               style="color: #761F20;"
               href="<?php echo esc_url(home_url('/faca-parte/')); ?>">
              <span>Integrar este GT</span>
              <span class="material-symbols-outlined text-[16px] group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            <span class="w-2.5 h-2.5 rounded-full" style="background-color: #761F20;"></span>
          </div>
        </div>

      </div>

      <!-- NAVEGAÇÃO ENTRE SUBSEÇÕES DE SOBRE NÓS -->
      <div class="p-6 rounded-2xl bg-surface-container-low border border-border-subtle flex flex-col sm:flex-row items-center justify-between gap-4">
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-outline block">Continue conhecendo a AJA:</span>
          <h4 class="text-lg font-bold text-ink-primary mt-0.5">Explore as outras subseções institucionais</h4>
        </div>
        <div class="flex items-center gap-3">
          <a href="<?php echo esc_url(home_url('/nossa-historia/')); ?>"
             class="px-4 py-2.5 rounded-lg bg-surface-container-lowest border border-border-subtle hover:border-secondary text-ink-primary hover:text-secondary font-bold text-xs uppercase tracking-wider transition-colors inline-flex items-center gap-1.5">
            <span>Ver Nossa História</span>
            <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
          </a>
          <a href="<?php echo esc_url(home_url('/estrutura/')); ?>"
             class="px-4 py-2.5 rounded-lg bg-surface-container-lowest border border-border-subtle hover:border-primary text-ink-primary hover:text-primary font-bold text-xs uppercase tracking-wider transition-colors inline-flex items-center gap-1.5">
            <span>Ver Estrutura</span>
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
