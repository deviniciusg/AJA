<?php
/**
 * Template Name: Página - Nossa História
 * Description: Subseção de Sobre Nós dedicada à trajetória, fundação e marcos históricos da AJA, com conteúdo estritamente fiel à Home.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- SEÇÃO PRINCIPAL: NOSSA HISTÓRIA (EXATAMENTE IGUAL À HOME #historia) -->
  <section class="w-full py-space-xl bg-surface-container-low border-b border-border-subtle relative overflow-hidden" id="historia">
    <!-- Marca d'água oficial da identidade visual AJA -->
    <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-08.png')); ?>" alt="" class="hidden lg:block absolute -left-12 -bottom-12 w-72 h-72 opacity-[0.04] pointer-events-none select-none object-contain" />
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">

      <!-- Breadcrumb -->
      <div class="flex items-center gap-2.5 mb-4">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
        <span class="text-xs text-outline">/</span>
        <a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Sobre nós</a>
        <span class="text-xs text-outline">/</span>
        <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Nossa História</span>
      </div>

      <div class="flex items-center gap-3 mb-2">
        <span class="w-8 h-[2px] bg-secondary"></span>
        <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Origem e Trajetória</span>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start mt-6">
        <div class="lg:col-span-5 flex flex-col gap-6 lg:sticky lg:top-28">
          <h1 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-ink-primary font-medium leading-tight">
            Nossa História: Da inquietação compartilhada à construção coletiva de uma aliança permanente pelo Direito na Amazônia
          </h1>
          <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            A Aliança Jurídica pela Amazônia (AJA) nasce de uma inquietação compartilhada. Uma inquietação que não surgiu de um único lugar, nem de uma única voz, mas de experiências acumuladas no tempo por profissionais que pesquisam, resistem e atuam com o Direito na Amazônia.
          </p>
          <div class="p-6 bg-surface-container-lowest rounded-xl border border-border-subtle flex flex-col gap-3 shadow-sm">
            <span class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold">A Pergunta Fundacional</span>
            <p class="font-body-lg text-ink-primary font-medium italic">
              "O que podemos fazer juntos para fortalecer a atuação jurídica no combate a tantos conflitos socioambientais e violações de direitos na Amazônia?"
            </p>
          </div>
          <!-- Registro Histórico: Coquetel de Lançamento da AJA -->
          <div class="relative rounded-2xl overflow-hidden shadow-md group border border-border-subtle bg-surface-container-high">
            <img alt="Coquetel de lançamento da Aliança Jurídica pela Amazônia"
              class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105"
              src="<?php echo esc_url(aja_asset('fotos/coquetel-lancamento-aja.jpg')); ?>" />
            <div class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/25 to-transparent flex flex-col justify-end p-4 text-surface-container-lowest">
              <span class="font-label-sm text-[10px] uppercase tracking-widest text-secondary-fixed font-bold">Construção Coletiva</span>
              <p class="text-sm font-bold text-surface-container-lowest mt-0.5">Coquetel de Lançamento da AJA</p>
              <p class="text-[11px] text-surface-container-highest/90">Mobilização e integração dos membros fundadores da rede.</p>
            </div>
          </div>
        </div>

        <div class="lg:col-span-7 flex flex-col gap-6 font-body-md text-body-md text-on-surface-variant leading-relaxed">
          <div class="p-6 bg-surface-container-lowest rounded-xl shadow-sm border border-border-subtle flex flex-col gap-4">
            <h2 class="font-title-lg text-title-lg text-ink-primary font-bold">O Diagnóstico Compartilhado e as Assimetrias do Campo</h2>
            <p>
              Antes do seu lançamento, durante a COP 30, a AJA já se manifestava como um diagnóstico compartilhado. Conversas informais e diálogos bilaterais entre advogados, pesquisadoras e organizações que atuam na Amazônia revelavam uma certa recorrência na fragmentação do campo jurídico, na baixa articulação entre diferentes áreas do Direito e na ausência de um espaço capaz de promover convergência estratégica em torno da defesa socioambiental e dos direitos territoriais na região. Essa inquietação não partiu de um único ator, mas de múltiplas trajetórias que se encontravam na percepção de que os desafios amazônicos exigem respostas jurídicas sistêmicas, integradas e de longo prazo.
            </p>
            <p>
              A prática nos territórios evidenciava, também, a necessidade dessa articulação. De um lado, observava-se a pujância da advocacia corporativa privada, estruturada e com alta capacidade de incidência. De outro, observava-se a advocacia voltada à defesa de direitos humanos, ambientais e de povos e comunidades tradicionais marcada por assimetrias profundas de recursos, apoio técnico e proteção institucional. Além disso, a discussão sobre temas estratégicos para o futuro da Amazônia, como restauração ecológica, bioeconomia, financiamento climático e mercados regenerativos, carecem de mais protagonismo e articulação jurídica, limitando a capacidade de incidência em espaços de decisão nacionais e internacionais.
            </p>
          </div>

          <div class="p-6 bg-surface-container-lowest rounded-xl shadow-sm border border-border-subtle flex flex-col gap-4">
            <h2 class="font-title-lg text-title-lg text-ink-primary font-bold">A Janela de Oportunidade e o Processo Coletivo</h2>
            <p>
              Diante desse cenário, um grupo de advogados, pesquisadores e organizações de direitos humanos e ambientais enxergou uma janela de oportunidade política com a realização da COP30 em Belém. A centralidade da Amazônia no debate climático global reforçou a necessidade de garantir uma presença jurídica estratégica, coordenada e alinhada com as lutas dos territórios. Experiências de outros países da Pan-Amazônia, como a Colômbia, já estavam demonstrando que articulações jurídicas bem estruturadas são capazes de influenciar agendas, produzir posicionamentos comuns e ampliar o impacto político da atuação jurídica em contextos multilaterais.
            </p>
            <p>
              Com efeito, em maio de 2025, impulsionado e gerenciado pelo time de “rule of law” da Amazon Investor Coalition, iniciou-se um processo estruturado de construção coletiva da AJA. Pautado por uma metodologia colaborativa, horizontal e plural, durante 7 (sete) meses, mais de 25 profissionais de diferentes áreas do Direito, vinculados a organizações da sociedade civil, coletivos de advocacia popular, entidades de pesquisa acadêmica, escritórios de advocacia e outras frentes de atuação se reuniram para definir propósitos, princípios, formas de governança e estratégias de atuação.
            </p>
          </div>

          <div class="p-6 bg-primary text-surface-container-lowest rounded-xl shadow-sm flex flex-col gap-3">
            <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary-fixed font-bold">O Modelo de Aliança</span>
            <p class="leading-relaxed">
              A escolha pelo modelo de aliança reflete uma decisão estratégica: articular atores autônomos, preservar suas identidades institucionais e potencializar, de forma coordenada, as agendas já existentes. A AJA foi concebida como um catalisador político-jurídico, capaz de validar, conectar e amplificar ações, pesquisas e estratégias desenvolvidas por seus membros, fortalecendo sua incidência sistêmica sem centralizar ou substituir iniciativas.
            </p>
          </div>

          <!-- Registro da Rede: Encontro dos Membros da AJA -->
          <div class="relative rounded-2xl overflow-hidden shadow-md group border border-border-subtle bg-surface-container-high">
            <img alt="Integrantes da Aliança Jurídica pela Amazônia reunidos em encontro da rede"
              class="w-full h-60 object-cover object-center transition-transform duration-700 group-hover:scale-105"
              src="<?php echo esc_url(aja_asset('fotos/encontro-rede-aja.jpg')); ?>" />
            <div class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/25 to-transparent flex flex-col justify-end p-4 text-surface-container-lowest">
              <span class="font-label-sm text-[10px] uppercase tracking-widest text-secondary-fixed font-bold">Rede Articulada</span>
              <p class="text-sm font-bold text-surface-container-lowest mt-0.5">A Aliança em Construção Permanente</p>
              <p class="text-[11px] text-surface-container-highest/90">Espaço articulador e colaborativo que conecta e potencializa atores pela Amazônia.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- NAVEGAÇÃO ENTRE SUBSEÇÕES DE SOBRE NÓS -->
      <div class="mt-16 p-6 rounded-2xl bg-surface-container-lowest border border-border-subtle flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-3">
          <a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>"
             class="px-4 py-2.5 rounded-lg bg-surface-container-low border border-border-subtle hover:border-secondary text-ink-primary hover:text-secondary font-bold text-xs uppercase tracking-wider transition-colors inline-flex items-center gap-1.5">
            <span class="material-symbols-outlined text-[16px]">arrow_back</span>
            <span>Sobre nós</span>
          </a>
        </div>
        <div class="flex items-center gap-3">
          <a href="<?php echo esc_url(home_url('/atuacao/')); ?>"
             class="px-4 py-2.5 rounded-lg bg-surface-container-low border border-border-subtle hover:border-tertiary text-ink-primary hover:text-tertiary font-bold text-xs uppercase tracking-wider transition-colors inline-flex items-center gap-1.5">
            <span>Nossa Atuação</span>
            <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
          </a>
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