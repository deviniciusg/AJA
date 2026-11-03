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
        Parceiros Institucionais
      </h1>

      <p class="font-body-lg text-body-md text-on-surface-variant max-w-3xl mt-4 leading-relaxed">
        A Aliança Jurídica pela Amazônia articula e fortalece alianças estratégicas com organizações da sociedade civil, redes de advocacia popular, centros de pesquisa e institutos internacionais comprometidos com a integridade territorial e climática da Amazônia.
      </p>
    </div>
  </section>

  <!-- GRADE DE PARCEIROS ESTRATÉGICOS -->
  <section class="w-full py-16 lg:py-20 bg-surface border-b border-border-subtle" id="redes-parceiras">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <div class="flex flex-col items-center text-center mb-12 max-w-3xl mx-auto">
        <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Conexões Ativas</span>
        <h2 class="font-headline-md text-2xl sm:text-3xl text-ink-primary font-bold mt-1">
          Organizações e Redes Articuladas
        </h2>
        <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-2 leading-relaxed">
          Iniciativas que constroem conosco pesquisas aplicadas, trocas periciais, salvaguardas regulatórias e apoio técnico aos Grupos Temáticos da AJA.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto items-stretch justify-center">
        <?php
        $partners_page_query = new WP_Query(array(
            'category_name'  => 'parceiros',
            'posts_per_page' => -1,
            'orderby'        => array('menu_order' => 'ASC', 'date' => 'DESC'),
            'post_status'    => 'publish',
        ));

        $rendered_page_partner_count = 0;

        if ($partners_page_query->have_posts()) :
            while ($partners_page_query->have_posts()) :
                $partners_page_query->the_post();
                $p_id       = get_the_ID();
                $p_title    = get_the_title();
                $p_badge    = get_post_meta($p_id, '_aja_badge', true) ?: 'Parceiro Institucional';
                $p_link     = get_post_meta($p_id, '_aja_action_link', true) ?: '#';
                $p_logo     = aja_get_partner_logo($p_id);
                $p_desc     = get_the_excerpt();
                if (empty($p_desc)) {
                    $p_desc = wp_strip_all_tags(get_the_content());
                }
                $rendered_page_partner_count++;
                ?>
                <div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-8 border border-border-subtle shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
                  <div>
                    <div class="h-24 flex items-center justify-center p-2 mb-6 bg-surface-container-low rounded-xl border border-border-subtle/50">
                      <?php if (!empty($p_logo)) : ?>
                        <img alt="<?php echo esc_attr($p_title); ?>" class="max-h-16 max-w-full object-contain" src="<?php echo esc_url($p_logo); ?>" />
                      <?php else : ?>
                        <span class="font-serif text-2xl font-bold tracking-tight text-primary"><?php echo esc_html($p_title); ?></span>
                      <?php endif; ?>
                    </div>
                    <h3 class="font-title-lg text-lg font-bold text-ink-primary mb-2"><?php echo esc_html($p_title); ?></h3>
                    <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed mb-4">
                      <?php echo esc_html($p_desc); ?>
                    </p>
                  </div>
                  <div class="pt-4 border-t border-border-subtle flex items-center justify-between">
                    <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold"><?php echo esc_html($p_badge); ?></span>
                    <a href="<?php echo esc_url($p_link); ?>" target="_blank" rel="noopener noreferrer" class="text-xs font-label-md text-primary font-bold hover:underline inline-flex items-center gap-1">
                      Conhecer <span class="material-symbols-outlined text-[14px]">open_in_new</span>
                    </a>
                  </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;

        // Fallback gracioso com os 7 parceiros iniciais caso nenhum post tenha sido publicado ainda
        if ($rendered_page_partner_count === 0) :
            $fallback_full_partners = array(
                array(
                    'title' => 'Amazon Investor Coalition',
                    'desc'  => 'Aliança global de investidores e filantropos que canaliza recursos para a conservação florestal, bioeconomia inclusiva e o fortalecimento de salvaguardas socioambientais na Bacia Amazônica.',
                    'badge' => 'Investimento & Bioeconomia',
                    'link'  => 'https://amazoninvestor.org/',
                    'logo'  => 'parceiros/amazon investor coalition.png',
                ),
                array(
                    'title' => 'Center for Climate Crime Analysis (CCCA)',
                    'desc'  => 'Organização pericial e investigativa sem fins lucrativos que mapeia e produz evidências criminais sobre desmatamento ilegal, invasão de terras públicas e crimes climáticos transnacionais.',
                    'badge' => 'Perícia & Crimes Climáticos',
                    'link'  => 'https://climatecrimeanalysis.org/',
                    'logo'  => 'parceiros/center for climate crime analysis.png',
                ),
                array(
                    'title' => 'LACLIMA',
                    'desc'  => 'Primeira rede de advogados(as) climáticos da América Latina, conectando especialistas para construir estratégias jurídicas transformadoras, cooperação regional e governança climática sólida.',
                    'badge' => 'Advocacia Climática Regional',
                    'link'  => 'https://www.laclima.org/',
                    'logo'  => 'parceiros/lacilma.png',
                ),
                array(
                    'title' => 'Maparajuba Advocacia Popular',
                    'desc'  => 'Coletivo de advocacia popular sediado no Pará que assessora juridicamente povos indígenas, comunidades quilombolas e ribeirinhas na defesa de seus territórios e modos tradicionais de vida.',
                    'badge' => 'Advocacia Popular & Direitos',
                    'link'  => 'https://maparajuba.org/',
                    'logo'  => 'parceiros/maparajuba.png',
                ),
                array(
                    'title' => 'Rede Amazonidas pelo Clima',
                    'desc'  => 'Articulação pan-amazônica liderada por atores locais, cientistas, comunicadores e juventudes que pauta a centralidade dos direitos humanos e territoriais na agenda climática.',
                    'badge' => 'Articulação Comunitária',
                    'link'  => 'https://www.rac-br.org/',
                    'logo'  => 'parceiros/rede anazonidas pelo clima.png',
                ),
                array(
                    'title' => 'Rede Liberdade',
                    'desc'  => 'Rede de defesa jurídica e proteção legal de defensores de direitos humanos, ativistas e comunicadores sob ameaça ou criminalização no Brasil.',
                    'badge' => 'Proteção de Defensores',
                    'link'  => 'https://redeliberdade.org.br/',
                    'logo'  => 'parceiros/rede liberdade.png',
                ),
                array(
                    'title' => 'Portal Migalhas',
                    'desc'  => 'Maior portal jurídico do Brasil. Parceria editorial estratégica para veiculação periódica de artigos de opinião, teses socioambientais e notas doutrinárias de membros da AJA na coluna Migalhas de Peso.',
                    'badge' => 'Parceria Editorial & Mídia',
                    'link'  => 'https://www.migalhas.com.br/depeso',
                    'logo'  => 'parceiros/migalhas.svg',
                ),
            );
            foreach ($fallback_full_partners as $fbp) :
                ?>
                <div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-8 border border-border-subtle shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
                  <div>
                    <div class="h-24 flex items-center justify-center p-2 mb-6 bg-surface-container-low rounded-xl border border-border-subtle/50">
                      <img alt="<?php echo esc_attr($fbp['title']); ?>" class="max-h-16 max-w-full object-contain" src="<?php echo esc_url(aja_asset($fbp['logo'])); ?>" />
                    </div>
                    <h3 class="font-title-lg text-lg font-bold text-ink-primary mb-2"><?php echo esc_html($fbp['title']); ?></h3>
                    <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed mb-4">
                      <?php echo esc_html($fbp['desc']); ?>
                    </p>
                  </div>
                  <div class="pt-4 border-t border-border-subtle flex items-center justify-between">
                    <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold"><?php echo esc_html($fbp['badge']); ?></span>
                    <a href="<?php echo esc_url($fbp['link']); ?>" target="_blank" rel="noopener noreferrer" class="text-xs font-label-md text-primary font-bold hover:underline inline-flex items-center gap-1">
                      Conhecer <span class="material-symbols-outlined text-[14px]">open_in_new</span>
                    </a>
                  </div>
                </div>
                <?php
            endforeach;
        endif;
        ?>
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
