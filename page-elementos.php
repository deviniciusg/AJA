<?php
/**
 * Template Name: Página - Elementos e Identidade Visual
 * Description: Página institucional dedicada à apresentação dos elementos gráficos da identidade visual e tipografia oficial (Neuething Sans) da AJA.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- HERO SECTION: IDENTIDADE VISUAL & ELEMENTOS -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle relative overflow-hidden">
    <!-- Marca d'água sutil -->
    <div class="absolute -right-16 -bottom-16 w-96 h-96 opacity-[0.05] pointer-events-none select-none">
      <img src="<?php echo esc_url(aja_asset('elementos_web/elemento-escuro-01.png')); ?>" alt="" class="w-full h-full object-contain" />
    </div>

    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">
      <div class="flex items-center gap-2.5 mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
        <span class="text-xs text-outline">/</span>
        <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Identidade Visual</span>
      </div>

      <div class="flex items-center gap-3 mb-2">
        <span class="w-8 h-[2px] bg-secondary"></span>
        <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Manual de Marca &amp; Design System</span>
      </div>

      <h1 class="font-headline-lg text-3xl sm:text-4xl lg:text-5xl text-ink-primary font-bold leading-tight max-w-4xl">
        Elementos Gráficos &amp; Tipografia da Aliança Jurídica pela Amazônia
      </h1>

      <p class="font-body-lg text-body-md text-on-surface-variant max-w-3xl mt-4 leading-relaxed">
        O sistema de identidade visual da AJA articula a precisão e solidez institucional da prática jurídica com a organicidade, diversidade e pulsação viva dos territórios, bacias hidrográficas e povos da Amazônia.
      </p>

      <!-- Badges de atalho -->
      <div class="flex flex-wrap items-center gap-3 mt-8 pt-6 border-t border-border-subtle/80">
        <a href="#tipografia" class="px-4 py-2 rounded-xl bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary hover:border-primary hover:text-primary transition-all flex items-center gap-2">
          <span class="material-symbols-outlined text-base text-primary">text_fields</span>
          Tipografia Oficial (Neuething Sans)
        </a>
        <a href="#paleta" class="px-4 py-2 rounded-xl bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary hover:border-secondary hover:text-secondary transition-all flex items-center gap-2">
          <span class="material-symbols-outlined text-base text-secondary">palette</span>
          Paleta Institucional de Cores
        </a>
        <a href="#elementos" class="px-4 py-2 rounded-xl bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary hover:border-tertiary hover:text-ink-primary transition-all flex items-center gap-2">
          <span class="material-symbols-outlined text-base text-tertiary">shapes</span>
          14 Elementos da Marca
        </a>
      </div>
    </div>
  </section>

  <!-- SEÇÃO 1: TIPOGRAFIA OFICIAL (NEUETHING SANS) -->
  <section class="w-full py-16 lg:py-20 bg-surface border-b border-border-subtle" id="tipografia">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <div class="flex items-center gap-3 mb-2">
        <span class="w-8 h-[2px] bg-primary"></span>
        <span class="font-label-md text-label-md text-primary uppercase tracking-widest font-bold">Tipografia Oficial</span>
      </div>
      <h2 class="font-headline-lg text-2xl sm:text-3xl font-bold text-ink-primary mb-3">
        Neuething Sans
      </h2>
      <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl mb-10 leading-relaxed">
        Fonte institucional primária definida no Manual de Marca da AJA. Uma família sem serifa contemporânea, geométrica e humanista, com excelente legibilidade tanto em manchetes imponentes quanto em textos analíticos de alta densidade técnica.
      </p>

      <!-- Amostras de Pesos Tipográficos -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        <div class="p-6 rounded-2xl bg-surface-container-lowest border border-border-subtle shadow-xs">
          <div class="flex items-center justify-between mb-4">
            <span class="px-2.5 py-1 rounded bg-surface-container text-xs font-bold text-on-surface-variant">Regular 400</span>
            <span class="text-xs text-outline">Corpo de texto</span>
          </div>
          <div class="text-3xl text-ink-primary font-normal mb-2">Aa Bb Cc 1 2 3</div>
          <p class="text-sm text-on-surface-variant font-normal leading-relaxed">
            Aliança Jurídica pela Amazônia — Fortalecimento do Estado de Direito e governança territorial.
          </p>
        </div>

        <div class="p-6 rounded-2xl bg-surface-container-lowest border border-border-subtle shadow-xs">
          <div class="flex items-center justify-between mb-4">
            <span class="px-2.5 py-1 rounded bg-surface-container text-xs font-bold text-on-surface-variant">Medium 500</span>
            <span class="text-xs text-outline">Subtítulos &amp; Ênfases</span>
          </div>
          <div class="text-3xl text-ink-primary font-medium mb-2">Aa Bb Cc 1 2 3</div>
          <p class="text-sm text-on-surface-variant font-medium leading-relaxed">
            Rede colaborativa de advogados, clínicas jurídicas e centros de pesquisa socioambiental.
          </p>
        </div>

        <div class="p-6 rounded-2xl bg-surface-container-lowest border border-border-subtle shadow-xs">
          <div class="flex items-center justify-between mb-4">
            <span class="px-2.5 py-1 rounded bg-surface-container text-xs font-bold text-on-surface-variant">SemiBold 600</span>
            <span class="text-xs text-outline">Títulos &amp; Navegação</span>
          </div>
          <div class="text-3xl text-ink-primary font-semibold mb-2">Aa Bb Cc 1 2 3</div>
          <p class="text-sm text-on-surface-variant font-semibold leading-relaxed">
            Inteligência jurídica coletiva voltada à proteção da floresta e dos povos tradicionais.
          </p>
        </div>

        <div class="p-6 rounded-2xl bg-surface-container-lowest border border-border-subtle shadow-xs">
          <div class="flex items-center justify-between mb-4">
            <span class="px-2.5 py-1 rounded bg-surface-container text-xs font-bold text-on-surface-variant">Bold 700</span>
            <span class="text-xs text-outline">Manchetes &amp; Destaques</span>
          </div>
          <div class="text-3xl text-ink-primary font-bold mb-2">Aa Bb Cc 1 2 3</div>
          <p class="text-sm text-on-surface-variant font-bold leading-relaxed">
            Direitos territoriais, justiça climática e bioeconomia da sociobiodiversidade.
          </p>
        </div>

        <div class="p-6 rounded-2xl bg-surface-container-lowest border border-border-subtle shadow-xs">
          <div class="flex items-center justify-between mb-4">
            <span class="px-2.5 py-1 rounded bg-surface-container text-xs font-bold text-on-surface-variant">ExtraBold 800</span>
            <span class="text-xs text-outline">Grandes Chamadas</span>
          </div>
          <div class="text-3xl text-ink-primary font-extrabold mb-2">Aa Bb Cc 1 2 3</div>
          <p class="text-sm text-on-surface-variant font-extrabold leading-relaxed">
            Construção de respostas integradas para os desafios socioambientais.
          </p>
        </div>

        <div class="p-6 rounded-2xl bg-surface-container-lowest border border-border-subtle shadow-xs">
          <div class="flex items-center justify-between mb-4">
            <span class="px-2.5 py-1 rounded bg-surface-container text-xs font-bold text-on-surface-variant">Black 900</span>
            <span class="text-xs text-outline">Display &amp; Impacto</span>
          </div>
          <div class="text-3xl text-ink-primary font-black mb-2">Aa Bb Cc 1 2 3</div>
          <p class="text-sm text-on-surface-variant font-black leading-relaxed">
            ALIANÇA JURÍDICA PELA AMAZÔNIA — REDE ATIVA
          </p>
        </div>
      </div>

      <!-- Espécime do Alfabeto -->
      <div class="p-8 rounded-2xl bg-surface-container-low border border-border-subtle">
        <span class="text-xs uppercase font-bold tracking-wider text-outline block mb-3">Alfabeto &amp; Glifos</span>
        <div class="text-xl sm:text-2xl text-ink-primary font-medium tracking-wide mb-3 leading-relaxed break-words">
          A B C D E F G H I J K L M N O P Q R S T U V W X Y Z<br>
          a b c d e f g h i j k l m n o p q r s t u v w x y z
        </div>
        <div class="text-lg sm:text-xl text-on-surface-variant tracking-wider leading-relaxed">
          0 1 2 3 4 5 6 7 8 9 • ! @ # $ % &amp; * ( ) — + = / \ ? &lt; &gt; § ¶ © ®
        </div>
      </div>
    </div>
  </section>

  <!-- SEÇÃO 2: PALETA DE CORES INSTITUCIONAL -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle" id="paleta">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <div class="flex items-center gap-3 mb-2">
        <span class="w-8 h-[2px] bg-secondary"></span>
        <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Cores da Identidade</span>
      </div>
      <h2 class="font-headline-lg text-2xl sm:text-3xl font-bold text-ink-primary mb-3">
        Paleta Institucional de Cores
      </h2>
      <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl mb-10 leading-relaxed">
        As cores da Aliança Jurídica pela Amazônia refletem as águas profundas dos rios amazônicos, os tons terrosos das argilas e a luminosidade da copa da floresta.
      </p>

      <!-- Cores Primárias -->
      <div class="mb-10">
        <h3 class="text-sm uppercase font-bold tracking-wider text-outline mb-4">Cores Primárias da Marca</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
          <div class="bg-surface-container-lowest rounded-2xl border border-border-subtle overflow-hidden shadow-xs">
            <div class="h-28 w-full" style="background-color: #416284;"></div>
            <div class="p-4">
              <span class="font-bold text-ink-primary block text-sm">Azul Institucional (Primary)</span>
              <span class="text-xs text-outline font-mono">#416284</span>
              <p class="text-xs text-on-surface-variant mt-1">Solidez jurídica, confiança e rios navegáveis.</p>
            </div>
          </div>

          <div class="bg-surface-container-lowest rounded-2xl border border-border-subtle overflow-hidden shadow-xs">
            <div class="h-28 w-full" style="background-color: #771F1F;"></div>
            <div class="p-4">
              <span class="font-bold text-ink-primary block text-sm">Vinho Amazônico (Secondary)</span>
              <span class="text-xs text-outline font-mono">#771F1F</span>
              <p class="text-xs text-on-surface-variant mt-1">Urgência climática, vitalidade e raízes ancestrais.</p>
            </div>
          </div>

          <div class="bg-surface-container-lowest rounded-2xl border border-border-subtle overflow-hidden shadow-xs">
            <div class="h-28 w-full" style="background-color: #F2B84C;"></div>
            <div class="p-4">
              <span class="font-bold text-ink-primary block text-sm">Amarelo Ouro Solar (Tertiary)</span>
              <span class="text-xs text-outline font-mono">#F2B84C</span>
              <p class="text-xs text-on-surface-variant mt-1">Energia solar, esperança e bioeconomia viva.</p>
            </div>
          </div>

          <div class="bg-surface-container-lowest rounded-2xl border border-border-subtle overflow-hidden shadow-xs">
            <div class="h-28 w-full" style="background-color: #172330;"></div>
            <div class="p-4">
              <span class="font-bold text-ink-primary block text-sm">Preto Tinta (Ink Primary)</span>
              <span class="text-xs text-outline font-mono">#172330</span>
              <p class="text-xs text-on-surface-variant mt-1">Tipografia e contrastes de alta legibilidade.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Paletas dos Grupos Temáticos (GTs) -->
      <div>
        <h3 class="text-sm uppercase font-bold tracking-wider text-outline mb-4">Cores de Identificação dos Grupos Temáticos (GTs)</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="p-6 rounded-2xl bg-surface-container-lowest border border-border-subtle shadow-xs">
            <div class="flex items-center gap-3 mb-4">
              <div class="w-10 h-10 rounded-xl" style="background-color: #F2B950;"></div>
              <div class="w-10 h-10 rounded-xl" style="background-color: #7C1F1F;"></div>
              <div>
                <span class="font-bold text-ink-primary text-sm block">GT 01: Território &amp; Segurança</span>
                <span class="text-xs text-outline font-mono">#F2B950 • #7C1F1F</span>
              </div>
            </div>
            <p class="text-xs text-on-surface-variant leading-relaxed">
              Direitos territoriais, governança fundiária, povos tradicionais e segurança pública.
            </p>
          </div>

          <div class="p-6 rounded-2xl bg-surface-container-lowest border border-border-subtle shadow-xs">
            <div class="flex items-center gap-3 mb-4">
              <div class="w-10 h-10 rounded-xl" style="background-color: #A6BEE4;"></div>
              <div class="w-10 h-10 rounded-xl" style="background-color: #406284;"></div>
              <div>
                <span class="font-bold text-ink-primary text-sm block">GT 02: Litigância &amp; Ativismo Judicial</span>
                <span class="text-xs text-outline font-mono">#A6BEE4 • #406284</span>
              </div>
            </div>
            <p class="text-xs text-on-surface-variant leading-relaxed">
              Estratégias jurídicas de justiça climática, direito socioambiental e direitos difusos.
            </p>
          </div>

          <div class="p-6 rounded-2xl bg-surface-container-lowest border border-border-subtle shadow-xs">
            <div class="flex items-center gap-3 mb-4">
              <div class="w-10 h-10 rounded-xl" style="background-color: #6E7642;"></div>
              <div class="w-10 h-10 rounded-xl" style="background-color: #761F20;"></div>
              <div>
                <span class="font-bold text-ink-primary text-sm block">GT 03: Finanças &amp; Sociobiodiversidade</span>
                <span class="text-xs text-outline font-mono">#6E7642 • #761F20</span>
              </div>
            </div>
            <p class="text-xs text-on-surface-variant leading-relaxed">
              Direito intelectual e cultural, bioeconomia justa, carbono, PSA e estruturação econômica.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEÇÃO 3: OS 14 ELEMENTOS GRÁFICOS DA IDENTIDADE VISUAL -->
  <section class="w-full py-16 lg:py-20 bg-surface border-b border-border-subtle" id="elementos">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <div class="flex items-center gap-3 mb-2">
        <span class="w-8 h-[2px] bg-tertiary"></span>
        <span class="font-label-md text-label-md text-tertiary uppercase tracking-widest font-bold">Elementos da Marca</span>
      </div>
      <h2 class="font-headline-lg text-2xl sm:text-3xl font-bold text-ink-primary mb-3">
        Os 14 Elementos da Identidade Visual da AJA
      </h2>
      <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl mb-12 leading-relaxed">
        Cada elemento representa um vetor conceitual da atuação da Aliança: o equilíbrio entre a norma jurídica e a força viva do bioma amazônico. Apresentados em versões escuras sobre fundo claro e versões claras sobre fundo escuro.
      </p>

      <?php
      $elementos_info = array(
          1 => array('nome' => 'Sol &amp; Centro Irradiador', 'desc' => 'Convergência, calor solar e iluminação estratégica.'),
          2 => array('nome' => 'Portal &amp; Marco Institucional', 'desc' => 'Acesso à justiça, estabilidade institucional e marcos jurídicos.'),
          3 => array('nome' => 'Folha &amp; Biodiversidade', 'desc' => 'Vida vegetal, soberania alimentar e regeneração florestal.'),
          4 => array('nome' => 'Onda &amp; Meandros do Rio', 'desc' => 'Bacias hidrográficas, mobilidade fluvial e tempo das águas.'),
          5 => array('nome' => 'Círculos &amp; Foco de Impacto', 'desc' => 'Ações direcionadas e expansão contínua da rede.'),
          6 => array('nome' => 'Grade &amp; Articulação Territorial', 'desc' => 'Estruturação fundiária e ordenamento territorial justo.'),
          7 => array('nome' => 'Conexão &amp; Aliança Comunitária', 'desc' => 'Laços de solidariedade e fortalecimento dos povos.'),
          8 => array('nome' => 'Anéis &amp; Interseção Social', 'desc' => 'Diálogo multissetorial e inteligência coletiva.'),
          9 => array('nome' => 'Balança &amp; Código do Direito', 'desc' => 'Fundamento normativo e defesa dos direitos humanos.'),
          10 => array('nome' => 'Documento &amp; Memória Coletiva', 'desc' => 'Produção técnica, notas, pareceres e editais.'),
          11 => array('nome' => 'Rede &amp; Teia de Saberes', 'desc' => 'Conexão entre centros acadêmicos, clínicas e comunidades.'),
          12 => array('nome' => 'Visão &amp; Vigília Ambiental', 'desc' => 'Olhar atento e combate sistemático a crimes ambientais.'),
          13 => array('nome' => 'Semente &amp; Germinação Ancestral', 'desc' => 'Saberes tradicionais, preservação e futuro das novas gerações.'),
          14 => array('nome' => 'Chuva &amp; Fluxos Amazônicos', 'desc' => 'Ciclos climáticos, rios voadores e equilíbrio planetário.')
      );
      ?>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php foreach ($elementos_info as $idx => $el) : 
            $num_fmt = sprintf('%02d', $idx);
            $img_escuro = "elementos_web/elemento-escuro-{$num_fmt}.png";
            $img_claro  = "elementos_web/elemento-claro-{$num_fmt}.png";
        ?>
          <div class="bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-xs overflow-hidden flex flex-col justify-between hover:border-primary/40 hover:shadow-md transition-all duration-300 group">
            
            <!-- Mostruário Visual Duplo (Claro e Escuro) -->
            <div class="grid grid-cols-2 border-b border-border-subtle bg-surface-container-low">
              <!-- Versão Escura em Fundo Claro -->
              <div class="p-6 flex flex-col items-center justify-center bg-white border-r border-border-subtle/60">
                <img src="<?php echo esc_url(aja_asset($img_escuro)); ?>"
                     alt="<?php echo esc_attr(strip_tags($el['nome'])); ?> - Versão Escura"
                     class="w-16 h-16 object-contain group-hover:scale-105 transition-transform duration-300" />
                <span class="text-[10px] text-outline font-mono mt-3 uppercase">Escuro</span>
              </div>

              <!-- Versão Clara em Fundo Escuro -->
              <div class="p-6 flex flex-col items-center justify-center bg-[#416284]">
                <img src="<?php echo esc_url(aja_asset($img_claro)); ?>"
                     alt="<?php echo esc_attr(strip_tags($el['nome'])); ?> - Versão Clara"
                     class="w-16 h-16 object-contain group-hover:scale-105 transition-transform duration-300" />
                <span class="text-[10px] text-surface-container font-mono mt-3 uppercase">Claro</span>
              </div>
            </div>

            <!-- Dados Textuais do Elemento -->
            <div class="p-5 flex flex-col gap-2">
              <div class="flex items-center justify-between">
                <span class="px-2 py-0.5 rounded text-[11px] font-bold uppercase tracking-wider bg-primary/10 text-primary">
                  Elemento <?php echo esc_html($num_fmt); ?>
                </span>
                <span class="text-[11px] text-outline font-mono">PNG / Vetor</span>
              </div>
              <h3 class="font-title-md text-base font-bold text-ink-primary leading-snug">
                <?php echo wp_kses_post($el['nome']); ?>
              </h3>
              <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed">
                <?php echo esc_html($el['desc']); ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA GLOBAL: FAÇA PARTE (Inspirado no modelo PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>

</main>

<?php get_footer(); ?>
