<?php
/**
 * Plugin Name: AJA Elementor Dynamic Posts Integration
 * Description: Integrates WordPress posts (Publicações, Editais, Portfólio) with Elementor, enabling dynamic queries and independent visual editing.
 * Author: Antigravity / AJA
 * Version: 2.3.0
 */

if (!defined('ABSPATH')) exit;

/**
 * Helper to resolve asset URLs (Theme assets or Uploads)
 */
function aja_get_asset_url($relative_path) {
    $relative_path = ltrim($relative_path, '/');
    if (file_exists(get_template_directory() . '/assets/' . $relative_path)) {
        return get_template_directory_uri() . '/assets/' . $relative_path;
    }
    $upload_dir = wp_upload_dir();
    if (file_exists($upload_dir['basedir'] . '/aja-assets/' . $relative_path)) {
        return $upload_dir['baseurl'] . '/aja-assets/' . $relative_path;
    }
    return home_url('/wp-content/themes/aja-tema/assets/' . $relative_path);
}

/**
 * 1. Register Categories and Subcategories
 */
add_action('init', function() {
    $categories = [
        'portfolio'   => 'Portfólio',
        'editais'     => 'Editais',
        'publicacoes' => 'Publicações'
    ];

    foreach ($categories as $slug => $name) {
        if (!term_exists($slug, 'category')) {
            wp_insert_term($name, 'category', ['slug' => $slug]);
        }
    }

    $portfolio_term = get_term_by('slug', 'portfolio', 'category');
    $parent_id = $portfolio_term ? $portfolio_term->term_id : 0;

    $sub_cats = [
        'advocacia'   => 'Advocacia Popular & Coletivos',
        'diretoria'   => 'Articulação & Conselho',
        'pesquisa'    => 'Pesquisa & Clínicas Jurídicas',
        'sociedade'   => 'Organizações da Sociedade Civil'
    ];

    foreach ($sub_cats as $slug => $name) {
        if (!term_exists($slug, 'category')) {
            wp_insert_term($name, 'category', [
                'slug'   => $slug,
                'parent' => $parent_id
            ]);
        }
    }
});

/**
 * 2. Enqueue Tailwind, Google Fonts & Scripts in Frontend & Elementor Editor
 */
add_action('wp_enqueue_scripts', 'aja_enqueue_elementor_assets', 15);
add_action('elementor/preview/enqueue_styles', 'aja_enqueue_elementor_assets');
add_action('elementor/editor/after_enqueue_scripts', 'aja_enqueue_elementor_assets');

function aja_enqueue_elementor_assets() {
    wp_enqueue_style(
        'google-fonts-epilogue-icons',
        'https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap',
        [],
        null
    );

    wp_enqueue_script(
        'tailwindcss',
        'https://cdn.tailwindcss.com',
        [],
        '3.4.0',
        false
    );

    // Inline Tailwind Brand Tokens Configuration
    $tw_config = "
    if (typeof tailwind !== 'undefined') {
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                                        colors: {
                        'primary': '#416284',
                        'on-primary': '#ffffff',
                        'primary-container': '#2d4663',
                        'on-primary-container': '#d4e3f5',
                        'primary-fixed': '#a6bfe2',
                        'primary-fixed-dim': '#8eaed7',
                        'on-primary-fixed': '#0c2138',
                        'on-primary-fixed-variant': '#2a4666',
                        'surface-tint': '#416284',
                        'inverse-primary': '#a6bfe2',

                        'river-sky': '#a6bfe2',
                        'cyan-accent': '#a6bfe2',

                        'secondary': '#771f1f',
                        'on-secondary': '#ffffff',
                        'secondary-container': '#963232',
                        'on-secondary-container': '#ffdada',
                        'secondary-fixed': '#fbdcd9',
                        'secondary-fixed-dim': '#e59b95',
                        'on-secondary-fixed': '#3b0707',
                        'on-secondary-fixed-variant': '#5c1313',

                        'tertiary': '#f2b84c',
                        'on-tertiary': '#241800',
                        'tertiary-container': '#705011',
                        'on-tertiary-container': '#fbe3ab',
                        'tertiary-fixed': '#fae2b1',
                        'tertiary-fixed-dim': '#f2b84c',
                        'on-tertiary-fixed': '#291800',
                        'on-tertiary-fixed-variant': '#6b4600',

                        'forest-olive': '#52562c',
                        'moss-light': '#6f7740',
                        'earth-dark': '#431d11',
                        'clay-warm': '#825748',

                        'canvas-paper': '#f7f4f0',
                        'surface': '#fcfbf9',
                        'background': '#fcfbf9',
                        'surface-dim': '#d9d5ce',
                        'surface-bright': '#fcfbf9',
                        'surface-container-lowest': '#ffffff',
                        'surface-container-low': '#f5f2ed',
                        'surface-container': '#eeeae3',
                        'surface-container-high': '#e8e3dc',
                        'surface-container-highest': '#e2ddd5',
                        'border-subtle': '#ded8cf',
                        'outline': '#737c86',
                        'outline-variant': '#c2c9d1',

                        'ink-primary': '#172330',
                        'on-surface': '#1c2630',
                        'on-surface-variant': '#455260',
                        'on-background': '#1c2630',
                        'inverse-surface': '#2b3744',
                        'inverse-on-surface': '#f1f4f8',

                        'error': '#ba1a1a',
                        'on-error': '#ffffff',
                        'error-container': '#ffdad6',
                        'on-error-container': '#93000a'
                    },
                    borderRadius: {
                        'DEFAULT': '0.125rem',
                        'lg': '0.25rem',
                        'xl': '0.5rem',
                        'full': '0.75rem'
                    },
                    spacing: {
                        'space-xl': '3rem',
                        'margin': '3rem',
                        'space-xs': '0.25rem',
                        'space-sm': '0.5rem',
                        'gutter-mobile': '1rem',
                        'space-md': '1rem',
                        'margin-mobile': '1.25rem',
                        'gutter': '1.5rem',
                        'space-lg': '1.75rem'
                    },
                    fontFamily: {
                        'body-lg': ['Epilogue', 'sans-serif'],
                        'body-sm': ['Epilogue', 'sans-serif'],
                        'display-lg': ['Epilogue', 'sans-serif'],
                        'label-lg': ['Epilogue', 'sans-serif'],
                        'label-md': ['Epilogue', 'sans-serif'],
                        'headline-md': ['Epilogue', 'sans-serif'],
                        'display-lg-mobile': ['Epilogue', 'sans-serif'],
                        'headline-lg': ['Epilogue', 'sans-serif'],
                        'title-lg': ['Epilogue', 'sans-serif'],
                        'headline-lg-mobile': ['Epilogue', 'sans-serif'],
                        'body-md': ['Epilogue', 'sans-serif'],
                        'title-md': ['Epilogue', 'sans-serif'],
                        'label-sm': ['Epilogue', 'sans-serif'],
                        'headline-sm': ['Epilogue', 'sans-serif']
                    }
                }
            }
        };
    }
    ";
    wp_add_inline_script('tailwindcss', $tw_config);

    // Override Elementor resets for object-cover
    $custom_css = "
    .elementor img.object-cover,
    .elementor img.h-full,
    .elementor .object-cover,
    .elementor .h-full > img,
    img.object-cover {
        height: 100% !important;
        max-width: none !important;
        object-fit: cover !important;
    }
    .hero-bg-cover,
    .elementor .hero-bg-cover {
        position: absolute !important;
        inset: 0 !important;
        width: 100% !important;
        height: 100% !important;
        min-height: 100% !important;
        max-width: none !important;
        object-fit: cover !important;
    }
    ";
    wp_add_inline_style('google-fonts-epilogue-icons', $custom_css);
}

/**
 * 3. Register Custom Meta Fields for Posts (AJA Custom Box)
 */
add_action('add_meta_boxes', function() {
    add_meta_box(
        'aja_post_settings',
        '🌿 Configurações da Publicação / Edital / Portfólio (AJA)',
        'aja_render_post_meta_box',
        'post',
        'normal',
        'high'
    );
});

function aja_render_post_meta_box($post) {
    wp_nonce_field('aja_save_post_settings', 'aja_meta_nonce');

    $badge     = get_post_meta($post->ID, '_aja_badge', true);
    $subtitle  = get_post_meta($post->ID, '_aja_subtitle', true);
    $location  = get_post_meta($post->ID, '_aja_location', true);
    $pdf_url   = get_post_meta($post->ID, '_aja_pdf_url', true);
    $featured  = get_post_meta($post->ID, '_aja_featured', true);
    $type      = get_post_meta($post->ID, '_aja_type', true);
    $territory = get_post_meta($post->ID, '_aja_territory', true);
    $theme     = get_post_meta($post->ID, '_aja_theme', true);
    ?>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; padding: 8px 0;">
        <div>
            <label style="display:block; font-weight: 600; margin-bottom: 4px;">🏷️ Badge / Tag Superior:</label>
            <input type="text" name="aja_badge" value="<?php echo esc_attr($badge); ?>" placeholder="Ex: Nota Técnica 04/25, Coletivo, Advocacia Popular" style="width: 100%; padding: 6px 10px;" />
            <small style="color: #666;">Aparece no canto do card ou acima do título.</small>
        </div>

        <div>
            <label style="display:block; font-weight: 600; margin-bottom: 4px;">💼 Cargo / Subtítulo / Eixo:</label>
            <input type="text" name="aja_subtitle" value="<?php echo esc_attr($subtitle); ?>" placeholder="Ex: Defesa Territorial & Salvaguardas, GT 03 Finanças, Coordenação Geral" style="width: 100%; padding: 6px 10px;" />
            <small style="color: #666;">Para Portfólio (cargo/eixo) ou Publicações (GT de referência).</small>
        </div>

        <div>
            <label style="display:block; font-weight: 600; margin-bottom: 4px;">📍 Localização / Prazo / Info:</label>
            <input type="text" name="aja_location" value="<?php echo esc_attr($location); ?>" placeholder="Ex: Belém / Pará, Manaus / AM, Prazo: 30 de Outubro de 2026" style="width: 100%; padding: 6px 10px;" />
            <small style="color: #666;">Exibido no rodapé do card.</small>
        </div>

        <div>
            <label style="display:block; font-weight: 600; margin-bottom: 4px;">🔗 Link do Documento / Site / Inscrição:</label>
            <input type="text" name="aja_pdf_url" value="<?php echo esc_attr($pdf_url); ?>" placeholder="https://... ou mailto:..." style="width: 100%; padding: 6px 10px;" />
            <small style="color: #666;">Link para baixar o PDF, inscrição ou site do membro.</small>
        </div>

        <!-- FILTROS ESPECÍFICOS DE PORTFÓLIO -->
        <div>
            <label style="display:block; font-weight: 600; margin-bottom: 4px;">👤 Tipo de Membro (Filtro Portfólio):</label>
            <select name="aja_type" style="width: 100%; padding: 6px 10px;">
                <option value="" <?php selected($type, ''); ?>>-- Selecione o Tipo --</option>
                <option value="organizacao" <?php selected($type, 'organizacao'); ?>>🏢 Organização da Sociedade Civil / Coletivo</option>
                <option value="profissional" <?php selected($type, 'profissional'); ?>>⚖️ Profissional / Advocacia Popular</option>
                <option value="pesquisador" <?php selected($type, 'pesquisador'); ?>>🎓 Pesquisador / Clínica Jurídica / Universidade</option>
            </select>
            <small style="color: #666;">Usado nas abas de tipo do Portfólio.</small>
        </div>

        <div>
            <label style="display:block; font-weight: 600; margin-bottom: 4px;">🗺️ Território / Estado (Filtro Portfólio):</label>
            <select name="aja_territory" style="width: 100%; padding: 6px 10px;">
                <option value="" <?php selected($territory, ''); ?>>-- Selecione o Território --</option>
                <option value="pa" <?php selected($territory, 'pa'); ?>>Pará (PA)</option>
                <option value="am" <?php selected($territory, 'am'); ?>>Amazonas (AM)</option>
                <option value="mt" <?php selected($territory, 'mt'); ?>>Mato Grosso (MT)</option>
                <option value="ma" <?php selected($territory, 'ma'); ?>>Maranhão (MA)</option>
                <option value="ro" <?php selected($territory, 'ro'); ?>>Rondônia (RO)</option>
                <option value="ac" <?php selected($territory, 'ac'); ?>>Acre (AC)</option>
                <option value="ap" <?php selected($territory, 'ap'); ?>>Amapá (AP)</option>
                <option value="rr" <?php selected($territory, 'rr'); ?>>Roraima (RR)</option>
                <option value="to" <?php selected($territory, 'to'); ?>>Tocantins (TO)</option>
                <option value="df" <?php selected($territory, 'df'); ?>>Distrito Federal / Nacional (DF)</option>
                <option value="pan-amazonia" <?php selected($territory, 'pan-amazonia'); ?>>Pan-Amazônia / Internacional</option>
            </select>
            <small style="color: #666;">Filtro geográfico na Amazônia Legal.</small>
        </div>

        <div style="grid-column: 1 / -1;">
            <label style="display:block; font-weight: 600; margin-bottom: 4px;">🌿 Tema / GT de Atuação (Filtro Portfólio):</label>
            <select name="aja_theme" style="width: 100%; padding: 6px 10px;">
                <option value="" <?php selected($theme, ''); ?>>-- Selecione o Tema / GT --</option>
                <option value="gt-01" <?php selected($theme, 'gt-01'); ?>>GT 01 • Territórios & PIQCTs</option>
                <option value="gt-02" <?php selected($theme, 'gt-02'); ?>>GT 02 • Litigância Estratégica & Clima</option>
                <option value="gt-03" <?php selected($theme, 'gt-03'); ?>>GT 03 • Finanças Sustentáveis & Bioeconomia</option>
                <option value="direitos-humanos" <?php selected($theme, 'direitos-humanos'); ?>>Direitos Humanos & Salvaguardas</option>
            </select>
            <small style="color: #666;">Filtro temático da rede.</small>
        </div>
    </div>

    <div style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #eee;">
        <label style="font-weight: 600; cursor: pointer;">
            <input type="checkbox" name="aja_featured" value="1" <?php checked($featured, '1'); ?> />
            ⭐ Destacar no Topo da Seção (Aparece como banner grande em Editais)
        </label>
    </div>
    <?php
}

add_action('save_post', function($post_id) {
    if (!isset($_POST['aja_meta_nonce']) || !wp_verify_nonce($_POST['aja_meta_nonce'], 'aja_save_post_settings')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $fields = ['aja_badge', 'aja_subtitle', 'aja_location', 'aja_pdf_url', 'aja_type', 'aja_territory', 'aja_theme'];
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }

    $featured = isset($_POST['aja_featured']) ? '1' : '0';
    update_post_meta($post_id, '_aja_featured', $featured);
});

/**
 * 4. Dynamic Rendering Functions
 */

// A) Portfólio / Membros da Rede Grid com Filtro Avançado e Busca
function aja_render_portfolio_grid($limit = 24) {
    $query = new WP_Query([
        'category_name'  => 'portfolio',
        'posts_per_page' => $limit,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC'
    ]);

    ob_start();
    ?>
    <!-- SISTEMA DE FILTRAGEM AVANÇADA DO PORTFÓLIO: TIPO + TERRITÓRIO + TEMA + BUSCA -->
    <div class="mb-8 flex flex-col gap-4 bg-surface-container-lowest/90 backdrop-blur-md rounded-2xl p-5 sm:p-6 border border-border-subtle shadow-sm" id="portfolio-filter-system">
        
        <!-- 1. Barra de Busca Instantânea -->
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
                <span class="material-symbols-outlined text-[22px]">search</span>
            </div>
            <input 
                type="text" 
                id="portfolio-search-input"
                placeholder="Buscar por nome, organização, cidade, estado, GT ou palavra-chave..." 
                class="w-full pl-12 pr-10 py-3 bg-surface rounded-xl border border-border-subtle text-ink-primary font-body-md text-body-md placeholder:text-on-surface-variant/60 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all shadow-inner"
            />
            <button 
                type="button" 
                id="portfolio-search-clear" 
                class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-outline hover:text-ink-primary transition-colors hidden"
                aria-label="Limpar busca">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>

        <!-- 2. Linha de Controles: Tipo de Membro (Pills) + Dropdowns (Território e Tema) -->
        <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-4 pt-1">
            
            <!-- Pílulas de Tipo de Membro -->
            <div class="flex items-center gap-1.5 overflow-x-auto pb-1 lg:pb-0 text-nowrap" id="portfolio-type-tabs">
                <button 
                    type="button" 
                    class="portfolio-type-pill active px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider transition-all shadow-sm font-bold flex items-center gap-1.5" 
                    data-type="all">
                    <span>Todos</span>
                </button>
                <button 
                    type="button" 
                    class="portfolio-type-pill px-4 py-2 rounded-lg bg-surface hover:bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider transition-all shadow-sm flex items-center gap-1.5" 
                    data-type="organizacao">
                    <span class="material-symbols-outlined text-[16px]">apartment</span>
                    <span>Organizações</span>
                </button>
                <button 
                    type="button" 
                    class="portfolio-type-pill px-4 py-2 rounded-lg bg-surface hover:bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider transition-all shadow-sm flex items-center gap-1.5" 
                    data-type="profissional">
                    <span class="material-symbols-outlined text-[16px]">gavel</span>
                    <span>Profissionais</span>
                </button>
                <button 
                    type="button" 
                    class="portfolio-type-pill px-4 py-2 rounded-lg bg-surface hover:bg-surface-container border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider transition-all shadow-sm flex items-center gap-1.5" 
                    data-type="pesquisador">
                    <span class="material-symbols-outlined text-[16px]">school</span>
                    <span>Pesquisadores</span>
                </button>
            </div>

            <!-- Dropdowns de Território e Tema -->
            <div class="flex flex-wrap sm:flex-nowrap items-center gap-3">
                
                <!-- Select Território -->
                <div class="relative w-full sm:w-auto min-w-[190px]">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary">
                        <span class="material-symbols-outlined text-[18px]">location_on</span>
                    </div>
                    <select 
                        id="portfolio-territory-select" 
                        class="w-full pl-9 pr-8 py-2.5 bg-surface rounded-lg border border-border-subtle text-ink-primary font-label-md text-label-md font-medium focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors cursor-pointer appearance-none">
                        <option value="all">Todos os Territórios</option>
                        <option value="pa">Pará (PA)</option>
                        <option value="am">Amazonas (AM)</option>
                        <option value="mt">Mato Grosso (MT)</option>
                        <option value="ma">Maranhão (MA)</option>
                        <option value="ro">Rondônia (RO)</option>
                        <option value="ac">Acre (AC)</option>
                        <option value="ap">Amapá (AP)</option>
                        <option value="rr">Roraima (RR)</option>
                        <option value="to">Tocantins (TO)</option>
                        <option value="df">Distrito Federal (DF)</option>
                        <option value="pan-amazonia">Pan-Amazônia</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 pr-2.5 flex items-center pointer-events-none text-outline">
                        <span class="material-symbols-outlined text-[18px]">expand_more</span>
                    </div>
                </div>

                <!-- Select Tema / GT -->
                <div class="relative w-full sm:w-auto min-w-[210px]">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-tertiary">
                        <span class="material-symbols-outlined text-[18px]">hub</span>
                    </div>
                    <select 
                        id="portfolio-theme-select" 
                        class="w-full pl-9 pr-8 py-2.5 bg-surface rounded-lg border border-border-subtle text-ink-primary font-label-md text-label-md font-medium focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors cursor-pointer appearance-none">
                        <option value="all">Todos os Temas / GTs</option>
                        <option value="gt-01">GT 01 • Territórios &amp; PIQCTs</option>
                        <option value="gt-02">GT 02 • Litigância &amp; Clima</option>
                        <option value="gt-03">GT 03 • Finanças &amp; Bioeconomia</option>
                        <option value="direitos-humanos">Direitos Humanos &amp; Salvaguardas</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 pr-2.5 flex items-center pointer-events-none text-outline">
                        <span class="material-symbols-outlined text-[18px]">expand_more</span>
                    </div>
                </div>

                <!-- Botão Limpar Filtros -->
                <button 
                    type="button" 
                    id="portfolio-reset-all" 
                    class="hidden px-3.5 py-2.5 rounded-lg text-secondary hover:bg-secondary/10 font-label-md text-label-md font-semibold transition-colors flex items-center gap-1 shrink-0" 
                    title="Limpar todos os filtros">
                    <span class="material-symbols-outlined text-[16px]">restart_alt</span>
                    <span class="hidden sm:inline">Limpar</span>
                </button>
            </div>

        </div>

        <!-- 3. Barra de Contagem de Resultados Ativa -->
        <div class="flex items-center justify-between text-xs text-on-surface-variant/80 border-t border-border-subtle/60 pt-3">
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-cyan-accent"></span>
                <span id="portfolio-results-counter" class="font-medium">Carregando membros...</span>
            </div>
        </div>

    </div>

    <!-- Grid of Leaders & Nodes -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter mb-space-xl" id="network-cards-container">
        <?php
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $id = get_the_ID();
                $badge     = get_post_meta($id, '_aja_badge', true);
                $subtitle  = get_post_meta($id, '_aja_subtitle', true);
                $location  = get_post_meta($id, '_aja_location', true) ?: 'Estado / Região • GT';
                $pdf_url   = get_post_meta($id, '_aja_pdf_url', true);
                $thumb     = get_the_post_thumbnail_url($id, 'large');

                $type_meta      = get_post_meta($id, '_aja_type', true);
                $territory_meta = get_post_meta($id, '_aja_territory', true);
                $theme_meta     = get_post_meta($id, '_aja_theme', true);

                // Determine filter category slug and badge color
                $cats = get_the_category($id);
                $cat_slugs = [];
                foreach ($cats as $c) { $cat_slugs[] = $c->slug; }

                // Inferred Type if not set
                if (empty($type_meta)) {
                    if (in_array('sociedade', $cat_slugs)) $type_meta = 'organizacao';
                    elseif (in_array('pesquisa', $cat_slugs)) $type_meta = 'pesquisador';
                    elseif (in_array('advocacia', $cat_slugs) || in_array('diretoria', $cat_slugs)) $type_meta = 'profissional';
                    else $type_meta = 'all';
                }

                // Inferred Territory if not set
                if (empty($territory_meta)) {
                    $loc_lower = mb_strtolower($location . ' ' . get_the_content() . ' ' . get_the_title());
                    if (strpos($loc_lower, 'pará') !== false || strpos($loc_lower, 'para') !== false || strpos($loc_lower, 'pa') !== false || strpos($loc_lower, 'belém') !== false || strpos($loc_lower, 'santarém') !== false) $territory_meta = 'pa';
                    elseif (strpos($loc_lower, 'amazonas') !== false || strpos($loc_lower, 'manaus') !== false || strpos($loc_lower, 'am') !== false) $territory_meta = 'am';
                    elseif (strpos($loc_lower, 'mato grosso') !== false || strpos($loc_lower, 'cuiabá') !== false || strpos($loc_lower, 'mt') !== false) $territory_meta = 'mt';
                    elseif (strpos($loc_lower, 'maranhão') !== false || strpos($loc_lower, 'maranhao') !== false || strpos($loc_lower, 'ma') !== false) $territory_meta = 'ma';
                    elseif (strpos($loc_lower, 'rondônia') !== false || strpos($loc_lower, 'rondonia') !== false || strpos($loc_lower, 'ro') !== false) $territory_meta = 'ro';
                    elseif (strpos($loc_lower, 'acre') !== false || strpos($loc_lower, 'ac') !== false) $territory_meta = 'ac';
                    elseif (strpos($loc_lower, 'amapá') !== false || strpos($loc_lower, 'amapa') !== false || strpos($loc_lower, 'ap') !== false) $territory_meta = 'ap';
                    elseif (strpos($loc_lower, 'roraima') !== false || strpos($loc_lower, 'rr') !== false) $territory_meta = 'rr';
                    elseif (strpos($loc_lower, 'tocantins') !== false || strpos($loc_lower, 'to') !== false) $territory_meta = 'to';
                    elseif (strpos($loc_lower, 'distrito federal') !== false || strpos($loc_lower, 'brasília') !== false || strpos($loc_lower, 'brasilia') !== false || strpos($loc_lower, 'df') !== false) $territory_meta = 'df';
                    else $territory_meta = 'all';
                }

                // Inferred Theme if not set
                if (empty($theme_meta)) {
                    $theme_lower = mb_strtolower($subtitle . ' ' . $badge . ' ' . get_the_content() . ' ' . get_the_title());
                    if (strpos($theme_lower, 'gt 01') !== false || strpos($theme_lower, 'territóri') !== false || strpos($theme_lower, 'piqct') !== false || strpos($theme_lower, 'indígena') !== false || strpos($theme_lower, 'demarcação') !== false) $theme_meta = 'gt-01';
                    elseif (strpos($theme_lower, 'gt 02') !== false || strpos($theme_lower, 'litigância') !== false || strpos($theme_lower, 'clima') !== false || strpos($theme_lower, 'climátic') !== false) $theme_meta = 'gt-02';
                    elseif (strpos($theme_lower, 'gt 03') !== false || strpos($theme_lower, 'finanças') !== false || strpos($theme_lower, 'bioeconomia') !== false) $theme_meta = 'gt-03';
                    elseif (strpos($theme_lower, 'direitos humanos') !== false || strpos($theme_lower, 'salvaguarda') !== false) $theme_meta = 'direitos-humanos';
                    else $theme_meta = 'all';
                }

                // Visual styling based on Type
                $badge_color = 'text-primary';
                $default_badge = 'Membro da Rede';

                if ($type_meta === 'profissional') {
                    $badge_color = 'text-secondary';
                    $default_badge = 'Advocacia Popular';
                } elseif ($type_meta === 'organizacao') {
                    $badge_color = 'text-clay-warm';
                    $default_badge = 'Organização Social';
                } elseif ($type_meta === 'pesquisador') {
                    $badge_color = 'text-moss-light';
                    $default_badge = 'Pesquisa & Clínicas';
                }

                $badge_text = $badge ?: $default_badge;
                $excerpt = get_the_excerpt() ?: wp_trim_words(get_the_content(), 24);
                $search_text = esc_attr(mb_strtolower(get_the_title() . ' ' . $badge_text . ' ' . $subtitle . ' ' . $location . ' ' . $excerpt . ' ' . $territory_meta . ' ' . $theme_meta));
                ?>
                <div class="network-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group border border-border-subtle" 
                     data-type="<?php echo esc_attr($type_meta); ?>"
                     data-territory="<?php echo esc_attr($territory_meta); ?>"
                     data-theme="<?php echo esc_attr($theme_meta); ?>"
                     data-search="<?php echo esc_attr($search_text); ?>">
                    <?php if ($thumb) : ?>
                        <div class="h-56 overflow-hidden relative border-b border-border-subtle">
                            <img alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?php echo esc_url($thumb); ?>"/>
                        </div>
                    <?php else : ?>
                        <div class="h-56 bg-surface-container flex flex-col items-center justify-center p-6 text-center border-b border-border-subtle select-none">
                            <span class="material-symbols-outlined text-4xl text-outline mb-1.5 opacity-60">image</span>
                            <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant font-medium">Imagem a ser colocada</span>
                        </div>
                    <?php endif; ?>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm <?php echo esc_attr($badge_color); ?> font-bold uppercase tracking-wider"><?php echo esc_html($badge_text); ?></span>
                            <h3 class="font-title-lg text-title-lg text-ink-primary font-bold mt-1">
                                <?php if ($pdf_url) : ?>
                                    <a href="<?php echo esc_url($pdf_url); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-primary transition-colors"><?php echo esc_html(get_the_title()); ?></a>
                                <?php else : ?>
                                    <?php echo esc_html(get_the_title()); ?>
                                <?php endif; ?>
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">
                                <?php echo esc_html($excerpt); ?>
                            </p>
                        </div>
                        <div class="mt-4 pt-3.5 border-t border-surface-container flex flex-col gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                            <?php if ($location) : ?>
                                <div class="flex items-center gap-1.5 text-on-surface-variant" title="<?php echo esc_attr($location); ?>">
                                    <span class="material-symbols-outlined text-[16px] text-primary shrink-0">location_on</span>
                                    <span class="leading-tight"><?php echo esc_html($location); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ($subtitle) : ?>
                                <div class="flex items-center gap-1.5 text-[11px] uppercase font-bold text-clay-warm" title="<?php echo esc_attr($subtitle); ?>">
                                    <span class="material-symbols-outlined text-[15px] text-clay-warm shrink-0">work</span>
                                    <span class="leading-tight"><?php echo esc_html($subtitle); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            // 8 Rich Fallback Cards para Testagem Imediata
            $fallback_cards = [
                [
                    'title' => 'Coletivo de Advocacia Popular Tapajós',
                    'badge' => 'Advocacia Popular',
                    'type'  => 'profissional',
                    'territory' => 'pa',
                    'theme' => 'gt-01',
                    'color' => 'text-secondary',
                    'loc'   => 'Santarém / Pará • Baixo Tapajós',
                    'sub'   => 'Defesa Territorial & PIQCTs',
                    'desc'  => 'Atuação jurídica em litígios estratégicos, demarcação e assessoria comunitária a povos indígenas e ribeirinhos na bacia do Tapajós.'
                ],
                [
                    'title' => 'Instituto Sociedade, População e Família (ISPN)',
                    'badge' => 'Organizações da Sociedade Civil',
                    'type'  => 'organizacao',
                    'territory' => 'df',
                    'theme' => 'gt-03',
                    'color' => 'text-clay-warm',
                    'loc'   => 'Brasília / DF • Articulação Nacional',
                    'sub'   => 'Finanças & Bioeconomia',
                    'desc'  => 'Fortalecimento da sociedade civil organizada, incentivo a cadeias socioprodutivas justas e incidência jurídica em políticas públicas ambientais.'
                ],
                [
                    'title' => 'Clínica de Direitos Humanos da Amazônia (UFPA)',
                    'badge' => 'Pesquisa & Clínicas Jurídicas',
                    'type'  => 'pesquisador',
                    'territory' => 'pa',
                    'theme' => 'direitos-humanos',
                    'color' => 'text-moss-light',
                    'loc'   => 'Belém / Pará • Universidade Federal',
                    'sub'   => 'Direitos Humanos & Salvaguardas',
                    'desc'  => 'Pesquisa empírica aplicada, elaboração de amicus curiae em tribunais superiores e monitoramento de salvaguardas de populações tradicionais.'
                ],
                [
                    'title' => 'Observatório de Justiça Socioambiental do Xingu',
                    'badge' => 'Organizações da Sociedade Civil',
                    'type'  => 'organizacao',
                    'territory' => 'pa',
                    'theme' => 'gt-02',
                    'color' => 'text-clay-warm',
                    'loc'   => 'Altamira / Pará • Bacia do Xingu',
                    'sub'   => 'Litigância & Clima',
                    'desc'  => 'Monitoramento territorial independente, denúncia de violações e litígios estratégicos contra o desmatamento ilegal na bacia do Xingu.'
                ],
                [
                    'title' => 'Rede de Defensoras Populares e Tradicionais',
                    'badge' => 'Advocacia Popular',
                    'type'  => 'profissional',
                    'territory' => 'ro',
                    'theme' => 'gt-01',
                    'color' => 'text-secondary',
                    'loc'   => 'Porto Velho / Rondônia • Rio Madeira',
                    'sub'   => 'Territórios & Salvaguardas',
                    'desc'  => 'Rede de advogadas e lideranças comunitárias dedicadas à defesa de mulheres indígenas e comunidades extrativistas ameaçadas por conflitos agrários.'
                ],
                [
                    'title' => 'Centro de Estudos de Litigância Climática da Amazônia',
                    'badge' => 'Pesquisa & Clínicas Jurídicas',
                    'type'  => 'pesquisador',
                    'territory' => 'am',
                    'theme' => 'gt-02',
                    'color' => 'text-moss-light',
                    'loc'   => 'Manaus / Amazonas • Rio Negro',
                    'sub'   => 'Litigância Estratégica & Clima',
                    'desc'  => 'Produção acadêmica e pareceres técnicos sobre precedentes jurisprudenciais do STF, justiça climática e responsabilidade civil ambiental.'
                ],
                [
                    'title' => 'Coletivo Jurídico Maparajuba',
                    'badge' => 'Advocacia Popular',
                    'type'  => 'profissional',
                    'territory' => 'pa',
                    'theme' => 'gt-01',
                    'color' => 'text-secondary',
                    'loc'   => 'Belém / Pará • Amazônia Oriental',
                    'sub'   => 'Advocacia Popular & PIQCTs',
                    'desc'  => 'Assessoria jurídica popular aos povos da floresta, quilombolas e ribeirinhos na garantia de seus direitos originários e posse da terra.'
                ],
                [
                    'title' => 'Aliança pelos Rios Vivos e Territórios do Guaporé',
                    'badge' => 'Organizações da Sociedade Civil',
                    'type'  => 'organizacao',
                    'territory' => 'mt',
                    'theme' => 'gt-03',
                    'color' => 'text-clay-warm',
                    'loc'   => 'Cuiabá / Mato Grosso • Bacia do Guaporé',
                    'sub'   => 'Finanças & Bioeconomia',
                    'desc'  => 'Articulação de cooperativas e entidades de base para proteção das águas, fomento à bioeconomia comunitária e governança climática.'
                ]
            ];

            foreach ($fallback_cards as $c) :
                $search_text = esc_attr(mb_strtolower($c['title'] . ' ' . $c['badge'] . ' ' . $c['sub'] . ' ' . $c['loc'] . ' ' . $c['desc'] . ' ' . $c['territory'] . ' ' . $c['theme']));
                ?>
                <div class="network-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group border border-border-subtle" 
                     data-type="<?php echo esc_attr($c['type']); ?>"
                     data-territory="<?php echo esc_attr($c['territory']); ?>"
                     data-theme="<?php echo esc_attr($c['theme']); ?>"
                     data-search="<?php echo esc_attr($search_text); ?>">
                    <div class="h-56 bg-surface-container flex flex-col items-center justify-center p-6 text-center border-b border-border-subtle select-none">
                        <span class="material-symbols-outlined text-4xl text-outline mb-1.5 opacity-60">image</span>
                        <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant font-medium">Imagem a ser colocada</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm <?php echo esc_attr($c['color']); ?> font-bold uppercase tracking-wider"><?php echo esc_html($c['badge']); ?></span>
                            <h3 class="font-title-lg text-title-lg text-ink-primary font-bold mt-1"><?php echo esc_html($c['title']); ?></h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">
                                <?php echo esc_html($c['desc']); ?>
                            </p>
                        </div>
                        <div class="mt-4 pt-3.5 border-t border-surface-container flex flex-col gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                            <div class="flex items-center gap-1.5 text-on-surface-variant" title="<?php echo esc_attr($c['loc']); ?>">
                                <span class="material-symbols-outlined text-[16px] text-primary shrink-0">location_on</span>
                                <span class="leading-tight"><?php echo esc_html($c['loc']); ?></span>
                            </div>
                            <div class="flex items-center gap-1.5 text-[11px] uppercase font-bold text-clay-warm" title="<?php echo esc_attr($c['sub']); ?>">
                                <span class="material-symbols-outlined text-[15px] text-clay-warm shrink-0">work</span>
                                <span class="leading-tight"><?php echo esc_html($c['sub']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
        endif;
        ?>

        <!-- Empty State (Nenhum Resultado Encontrado) -->
        <div id="portfolio-empty-state" class="hidden col-span-full py-16 px-6 text-center bg-surface-container-lowest rounded-2xl border border-border-subtle flex flex-col items-center justify-center">
            <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center text-outline mb-4">
                <span class="material-symbols-outlined text-4xl text-outline">search_off</span>
            </div>
            <h3 class="font-title-lg text-title-lg text-ink-primary font-bold">Nenhum membro encontrado</h3>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-md mt-2">
                Não encontramos nenhum membro com os critérios e filtros selecionados. Tente ajustar o termo de pesquisa ou limpar os filtros.
            </p>
            <button type="button" id="portfolio-empty-reset-btn" class="mt-6 px-6 py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider font-bold shadow-sm hover:bg-moss-light transition-colors">
                Limpar Filtros e Ver Todos
            </button>
        </div>
    </div>

    <!-- Script de Filtragem Multidimensional em Tempo Real -->
    <script>
    (function() {
        function initPortfolioAdvancedFilter() {
            var container = document.getElementById('portfolio-filter-system');
            var cardsContainer = document.getElementById('network-cards-container');
            if (!container || !cardsContainer) return;

            var searchInput      = document.getElementById('portfolio-search-input');
            var searchClear      = document.getElementById('portfolio-search-clear');
            var typePills        = document.querySelectorAll('.portfolio-type-pill');
            var territorySelect  = document.getElementById('portfolio-territory-select');
            var themeSelect      = document.getElementById('portfolio-theme-select');
            var resetAllBtn      = document.getElementById('portfolio-reset-all');
            var counter          = document.getElementById('portfolio-results-counter');
            var emptyState       = document.getElementById('portfolio-empty-state');
            var emptyResetBtn    = document.getElementById('portfolio-empty-reset-btn');
            var cards            = cardsContainer.querySelectorAll('.network-card');

            var currentType      = 'all';
            var currentTerritory = 'all';
            var currentTheme     = 'all';
            var currentSearch    = '';

            function normalize(str) {
                return (str || '').normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase().trim();
            }

            function applyFilters() {
                var visibleCount = 0;
                var totalCount = cards.length;
                var term = normalize(currentSearch);

                cards.forEach(function(card) {
                    var cardType      = card.getAttribute('data-type') || 'all';
                    var cardTerritory = card.getAttribute('data-territory') || 'all';
                    var cardTheme     = card.getAttribute('data-theme') || 'all';
                    var cardSearch    = normalize(card.getAttribute('data-search') || card.textContent);

                    var matchType      = (currentType === 'all' || cardType === currentType);
                    var matchTerritory = (currentTerritory === 'all' || cardTerritory === currentTerritory);
                    var matchTheme     = (currentTheme === 'all' || cardTheme === currentTheme);
                    var matchSearch    = (!term || cardSearch.indexOf(term) !== -1);

                    if (matchType && matchTerritory && matchTheme && matchSearch) {
                        card.style.display = 'flex';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Atualizar contador
                if (counter) {
                    counter.textContent = 'Exibindo ' + visibleCount + ' de ' + totalCount + ' membros da rede';
                }

                // Estado vazio
                if (emptyState) {
                    if (visibleCount === 0) {
                        emptyState.classList.remove('hidden');
                        emptyState.style.display = 'flex';
                    } else {
                        emptyState.classList.add('hidden');
                        emptyState.style.display = 'none';
                    }
                }

                // Botão de reset
                var hasActiveFilters = (currentType !== 'all' || currentTerritory !== 'all' || currentTheme !== 'all' || term.length > 0);
                if (resetAllBtn) {
                    if (hasActiveFilters) {
                        resetAllBtn.classList.remove('hidden');
                    } else {
                        resetAllBtn.classList.add('hidden');
                    }
                }

                // Botão de limpar busca
                if (searchClear) {
                    if (term.length > 0) {
                        searchClear.classList.remove('hidden');
                    } else {
                        searchClear.classList.add('hidden');
                    }
                }
            }

            // Clique nas Pílulas de Tipo
            typePills.forEach(function(pill) {
                pill.addEventListener('click', function() {
                    typePills.forEach(function(p) {
                        p.classList.remove('bg-primary', 'text-on-primary', 'active', 'font-bold');
                        p.classList.add('bg-surface', 'text-on-surface-variant');
                    });
                    this.classList.add('bg-primary', 'text-on-primary', 'active', 'font-bold');
                    this.classList.remove('bg-surface', 'text-on-surface-variant');
                    currentType = this.getAttribute('data-type') || 'all';
                    applyFilters();
                });
            });

            // Input de Busca
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    currentSearch = this.value;
                    applyFilters();
                });
            }

            if (searchClear) {
                searchClear.addEventListener('click', function() {
                    if (searchInput) searchInput.value = '';
                    currentSearch = '';
                    applyFilters();
                    if (searchInput) searchInput.focus();
                });
            }

            // Select Território
            if (territorySelect) {
                territorySelect.addEventListener('change', function() {
                    currentTerritory = this.value;
                    applyFilters();
                });
            }

            // Select Tema
            if (themeSelect) {
                themeSelect.addEventListener('change', function() {
                    currentTheme = this.value;
                    applyFilters();
                });
            }

            // Reset Completo
            function resetAll() {
                currentType      = 'all';
                currentTerritory = 'all';
                currentTheme     = 'all';
                currentSearch    = '';

                if (searchInput) searchInput.value = '';
                if (territorySelect) territorySelect.value = 'all';
                if (themeSelect) themeSelect.value = 'all';

                typePills.forEach(function(p) {
                    if (p.getAttribute('data-type') === 'all') {
                        p.classList.add('bg-primary', 'text-on-primary', 'active', 'font-bold');
                        p.classList.remove('bg-surface', 'text-on-surface-variant');
                    } else {
                        p.classList.remove('bg-primary', 'text-on-primary', 'active', 'font-bold');
                        p.classList.add('bg-surface', 'text-on-surface-variant');
                    }
                });

                applyFilters();
            }

            if (resetAllBtn) resetAllBtn.addEventListener('click', resetAll);
            if (emptyResetBtn) emptyResetBtn.addEventListener('click', resetAll);

            // Executar na inicialização
            applyFilters();
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initPortfolioAdvancedFilter);
        } else {
            initPortfolioAdvancedFilter();
        }
    })();
    </script>
    <?php
    return ob_get_clean();
}

// B) Editais & Submissões Grid
function aja_render_editais_grid() {
    $featured_query = new WP_Query([
        'category_name'  => 'editais',
        'posts_per_page' => 1,
        'post_status'    => 'publish',
        'meta_query'     => [
            [
                'key'     => '_aja_featured',
                'value'   => '1',
                'compare' => '='
            ]
        ]
    ]);

    if (!$featured_query->have_posts()) {
        $featured_query = new WP_Query([
            'category_name'  => 'editais',
            'posts_per_page' => 1,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC'
        ]);
    }

    $featured_id = 0;
    ob_start();

    if ($featured_query->have_posts()) {
        $featured_query->the_post();
        $featured_id = get_the_ID();
        $badge = get_post_meta($featured_id, '_aja_badge', true) ?: 'Edital Institucional';
        $location = get_post_meta($featured_id, '_aja_location', true) ?: 'Destinada aos Membros da AJA';
        $pdf_url = get_post_meta($featured_id, '_aja_pdf_url', true) ?: 'mailto:info@ajamazonia.org?subject=Submissao%20de%20Artigo%20AJA';
        $thumb = get_the_post_thumbnail_url($featured_id, 'full') ?: aja_get_asset_url('fotos/corredeira-floresta-pedras.jpg');
        $content = get_the_excerpt() ?: wp_trim_words(get_the_content(), 45);
        ?>
        <!-- Featured Callout Card: EDITAL INSTITUCIONAL -->
        <div class="w-full relative overflow-hidden text-surface-container-lowest rounded-2xl p-8 lg:p-12 mb-8 shadow-sm flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8 group">
            <div class="absolute inset-0 z-0">
                <img alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover opacity-25 mix-blend-luminosity scale-105 transition-transform duration-700 group-hover:scale-110" src="<?php echo esc_url($thumb); ?>" />
                <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/95 to-primary-container/90"></div>
            </div>
            <div class="relative z-10 flex flex-col gap-4 max-w-3xl">
                <div class="flex items-center gap-3">
                    <span class="px-3 py-1 rounded bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm uppercase tracking-wider font-bold">
                        <?php echo esc_html($badge); ?>
                    </span>
                    <span class="font-label-sm text-label-sm text-primary-fixed-dim"><?php echo esc_html($location); ?></span>
                </div>
                <h3 class="font-headline-md text-headline-md font-bold leading-tight">
                    <?php echo esc_html(get_the_title()); ?>
                </h3>
                <p class="font-body-md text-body-md text-surface-container leading-relaxed">
                    <?php echo esc_html($content); ?>
                </p>
                <div class="flex items-center gap-2 pt-1 text-primary-fixed text-body-sm">
                    <span class="material-symbols-outlined text-[18px]">info</span>
                    <span>Dúvidas sobre a chamada: <strong>info@ajamazonia.org</strong></span>
                </div>
            </div>
            <div class="relative z-10 flex flex-col sm:flex-row items-center gap-4 shrink-0 w-full lg:w-auto">
                <a class="w-full sm:w-auto px-6 py-3.5 rounded-lg bg-surface-container-lowest text-primary hover:bg-surface-container font-label-lg text-label-lg uppercase tracking-wider transition-colors font-bold text-center shadow-md flex items-center justify-center gap-2" href="<?php echo esc_url($pdf_url); ?>" target="_blank" rel="noopener noreferrer">
                    <span>Acessar Edital &amp; Submissão</span>
                    <span class="material-symbols-outlined text-[18px]">download</span>
                </a>
            </div>
        </div>
        <?php
        wp_reset_postdata();
    } else {
        // Fallback banner from code.html
        ?>
        <!-- Estado Informativo: Nenhuma chamada aberta no momento -->
        <div class="p-8 lg:p-12 rounded-2xl bg-surface-container-low border border-border-subtle flex flex-col md:flex-row items-center justify-between gap-6 mb-8">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-surface-container text-outline flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[28px]">folder_open</span>
                </div>
                <div>
                    <span class="px-2.5 py-1 rounded bg-surface-container text-on-surface-variant font-label-sm text-[11px] font-bold uppercase tracking-wider inline-block mb-2">
                        Status Atual
                    </span>
                    <h3 class="font-title-lg text-title-lg text-ink-primary font-bold">
                        Nenhuma chamada aberta no momento
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1 max-w-2xl leading-relaxed">
                        Não há editais ou chamadas públicas para artigos com inscrições abertas no momento e não há previsão de novas chamadas.
                    </p>
                </div>
            </div>
            <div class="shrink-0 w-full md:w-auto">
                <a href="#contato" class="w-full md:w-auto px-5 py-3 rounded-lg bg-surface-container-lowest border border-border-subtle hover:border-primary text-ink-primary hover:text-primary font-bold text-xs uppercase tracking-wider transition-colors inline-flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">mail</span>
                    <span>Fale Conosco</span>
                </a>
            </div>
        </div>
        <?php
    }

    // Secondary Grid
    $secondary_query = new WP_Query([
        'category_name' => 'editais',
        'posts_per_page' => 4,
        'post_status'    => 'publish',
        'post__not_in'   => $featured_id ? [$featured_id] : [],
        'orderby'        => 'date',
        'order'          => 'DESC'
    ]);
    ?>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
        <?php
        if ($secondary_query->have_posts()) :
            $sec_idx = 0;
            while ($secondary_query->have_posts()) : $secondary_query->the_post();
                $id = get_the_ID();
                $badge = get_post_meta($id, '_aja_badge', true) ?: ($sec_idx % 2 === 0 ? 'Perícia & Cartografia' : 'Amicus Curiae');
                $location = get_post_meta($id, '_aja_location', true) ?: 'Fluxo Contínuo';
                $subtitle = get_post_meta($id, '_aja_subtitle', true) ?: ($sec_idx % 2 === 0 ? 'Credenciamento de Membros' : 'Avaliação pelo GT 02');
                $pdf_url = get_post_meta($id, '_aja_pdf_url', true) ?: 'mailto:info@ajamazonia.org?subject=' . urlencode('Interesse: ' . get_the_title());
                $badge_bg = ($sec_idx % 2 === 0) ? 'bg-secondary-fixed text-on-secondary-fixed' : 'bg-primary-fixed text-on-primary-fixed';
                $sec_idx++;
                ?>
                <div class="p-8 rounded-xl bg-surface-container-low shadow-sm flex flex-col justify-between border border-border-subtle">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-2.5 py-1 rounded <?php echo esc_attr($badge_bg); ?> font-label-sm text-label-sm font-semibold uppercase tracking-wider">
                                <?php echo esc_html($badge); ?>
                            </span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant"><?php echo esc_html($location); ?></span>
                        </div>
                        <h4 class="font-title-lg text-title-lg text-ink-primary font-bold mb-2">
                            <?php echo esc_html(get_the_title()); ?>
                        </h4>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            <?php echo esc_html(get_the_excerpt() ?: wp_trim_words(get_the_content(), 28)); ?>
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-surface-container flex items-center justify-between">
                        <span class="font-label-sm text-label-sm text-clay-warm font-semibold"><?php echo esc_html($subtitle); ?></span>
                        <a class="font-label-md text-label-md text-primary font-bold hover:underline inline-flex items-center gap-1" href="<?php echo esc_url($pdf_url); ?>">
                            Manifestar Interesse <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                        </a>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            // Fallback secondary cards from code.html
            ?>
            <div class="p-8 rounded-xl bg-surface-container-low shadow-sm flex flex-col justify-between border border-border-subtle">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-2.5 py-1 rounded bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold uppercase tracking-wider">
                            Perícia &amp; Cartografia
                        </span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Fluxo Contínuo</span>
                    </div>
                    <h4 class="font-title-lg text-title-lg text-ink-primary font-bold mb-2">
                        Chamada Contínua: Banco de Especialistas em Perícia Ambiental
                    </h4>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Credenciamento de peritos independentes, cartógrafos sociais e antropólogos para auxílio pro bono em laudos técnicos de demarcação territorial, licenciamento e combate a crimes ambientais.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-surface-container flex items-center justify-between">
                    <span class="font-label-sm text-label-sm text-clay-warm font-semibold">Credenciamento de Membros</span>
                    <a class="font-label-md text-label-md text-primary font-bold hover:underline inline-flex items-center gap-1" href="mailto:info@ajamazonia.org?subject=Credenciamento%20Banco%20de%20Especialistas">
                        Manifestar Interesse <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    </a>
                </div>
            </div>

            <div class="p-8 rounded-xl bg-surface-container-low shadow-sm flex flex-col justify-between border border-border-subtle">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-2.5 py-1 rounded bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm font-semibold uppercase tracking-wider">
                            Amicus Curiae
                        </span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Fluxo Contínuo</span>
                    </div>
                    <h4 class="font-title-lg text-title-lg text-ink-primary font-bold mb-2">
                        Proposição de Teses e Memoriais para Tribunais Superiores
                    </h4>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Envio de memoriais e notas técnicas fundamentadas para validação e submissão conjunta sob a chancela da AJA perante o Supremo Tribunal Federal (STF) e Superior Tribunal de Justiça (STJ).
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-surface-container flex items-center justify-between">
                    <span class="font-label-sm text-label-sm text-clay-warm font-semibold">Avaliação pelo GT 02</span>
                    <a class="font-label-md text-label-md text-primary font-bold hover:underline inline-flex items-center gap-1" href="mailto:info@ajamazonia.org?subject=Proposicao%20Amicus%20Curiae%20AJA">
                        Submeter Proposição <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    </a>
                </div>
            </div>
            <?php
        endif;
        ?>
    </div>
    <?php
    return ob_get_clean();
}

// C) Publicações, Artigos & Notas Técnicas Grid com Navegação por Eixos e Espaço de Publicações da Rede
function aja_render_publicacoes_grid($limit = 12) {
    $query = new WP_Query([
        'category_name'  => 'publicacoes,publicações',
        'posts_per_page' => $limit,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC'
    ]);

    $get_img = function($path) {
        if (function_exists('aja_get_asset_url')) return aja_get_asset_url($path);
        if (function_exists('aja_asset')) return aja_asset($path);
        return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
    };

    ob_start();
    ?>

    <!-- 2. SISTEMA DE NAVEGAÇÃO ORGANIZADA POR EIXOS & BUSCA EM TEMPO REAL -->
    <div class="mb-8 flex flex-col gap-4 bg-surface-container-lowest/90 backdrop-blur-md rounded-2xl p-5 sm:p-6 border border-border-subtle shadow-sm" id="pub-filter-system">
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
            <!-- Abas de Navegação por Eixos -->
            <div class="flex items-center gap-2 overflow-x-auto pb-2 lg:pb-0 text-nowrap" id="pub-axis-tabs">
                <button type="button" class="pub-axis-btn active px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider transition-all duration-200 shadow-sm" data-axis="all">
                    Todos os Conteúdos
                </button>
                <button type="button" class="pub-axis-btn px-4 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-axis="artigos">
                    ⚖️ Artigos Jurídicos
                </button>
                <button type="button" class="pub-axis-btn px-4 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-axis="noticias">
                    📰 Notícias & Atualidades
                </button>
                <button type="button" class="pub-axis-btn px-4 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-axis="notas">
                    📑 Notas Técnicas
                </button>
                <button type="button" class="pub-axis-btn px-4 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface-variant font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-high transition-all duration-200 shadow-sm" data-axis="dossies">
                    📚 Dossiês & Guias
                </button>
            </div>

            <!-- Campo de Busca Rápida em Tempo Real -->
            <div class="relative w-full lg:w-72 shrink-0">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary">
                    <span class="material-symbols-outlined text-[18px]">search</span>
                </div>
                <input type="text" id="pub-search-input" placeholder="Buscar publicação, GT ou autor..." 
                       class="w-full pl-9 pr-8 py-2 rounded-lg bg-surface-container-lowest border border-border-subtle text-on-surface text-body-sm font-body-sm placeholder:text-outline focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-sm transition-all" />
                <button type="button" id="pub-search-clear" class="absolute inset-y-0 right-0 pr-2.5 flex items-center text-outline hover:text-on-surface hidden">
                    <span class="material-symbols-outlined text-[16px]">cancel</span>
                </button>
            </div>
        </div>

        <!-- Barra de Status e Contador de Resultados -->
        <div class="flex items-center justify-between text-xs text-on-surface-variant pt-2 border-t border-border-subtle/50">
            <span id="pub-count-display">Exibindo publicações da rede</span>
            <button type="button" id="pub-reset-filters" class="text-secondary hover:underline font-semibold hidden">
                Limpar filtros
            </button>
        </div>
    </div>

    <!-- 3. GRADE DE PUBLICAÇÕES FILTRÁVEIS -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter" id="publicacoes-cards-container">
        <?php
        if ($query->have_posts()) :
            $idx = 0;
            while ($query->have_posts()) : $query->the_post();
                $id = get_the_ID();
                $badge     = get_post_meta($id, '_aja_badge', true);
                $subtitle  = get_post_meta($id, '_aja_subtitle', true);
                $location  = get_post_meta($id, '_aja_location', true);
                $pdf_url   = get_post_meta($id, '_aja_action_link', true) ?: (get_post_meta($id, '_aja_pdf_url', true) ?: get_permalink());
                $btn_label = get_post_meta($id, '_aja_action_label', true);
                $thumb     = get_the_post_thumbnail_url($id, 'large');

                // Identifica o Eixo da Publicação
                $axis = get_post_meta($id, '_aja_pub_axis', true);
                if (empty($axis)) {
                    $text_to_check = mb_strtolower(get_the_title() . ' ' . $badge . ' ' . $subtitle);
                    if (strpos($text_to_check, 'notícia') !== false || strpos($text_to_check, 'noticia') !== false || strpos($text_to_check, 'comunicado') !== false) {
                        $axis = 'noticias';
                    } elseif (strpos($text_to_check, 'dossiê') !== false || strpos($text_to_check, 'dossie') !== false || strpos($text_to_check, 'guia') !== false || strpos($text_to_check, 'manual') !== false) {
                        $axis = 'dossies';
                    } elseif (strpos($text_to_check, 'nota técnica') !== false || strpos($text_to_check, 'nota tecnica') !== false || strpos($text_to_check, 'parecer') !== false) {
                        $axis = 'notas';
                    } else {
                        $axis = 'artigos';
                    }
                }

                if (!$thumb) {
                    $fallback_thumbs = [
                        $get_img('fotos/pexels-diego-agudelo-257100874-12577779.jpg'),
                        $get_img('fotos/pexels-eduardo-amorim-2155150050-33570703.jpg'),
                        $get_img('fotos/pexels-eliezer-nunes-300283905-26146919.jpg')
                    ];
                    $thumb = $fallback_thumbs[$idx % count($fallback_thumbs)];
                }

                // Estilo e rótulo do selo de acordo com o eixo
                $axis_badge_style = 'text-primary';
                $default_badge = 'Artigo Jurídico';
                $default_btn = 'Ver Artigo';

                if ($axis === 'noticias') {
                    $axis_badge_style = 'text-secondary';
                    $default_badge = 'Notícia da Rede';
                    $default_btn = 'Ler Notícia Completa';
                } elseif ($axis === 'notas') {
                    $axis_badge_style = 'text-moss-light';
                    $default_badge = 'Nota Técnica';
                    $default_btn = 'Baixar Nota Técnica (PDF)';
                } elseif ($axis === 'dossies') {
                    $axis_badge_style = 'text-earth-dark';
                    $default_badge = 'Dossiê Jurídico';
                    $default_btn = 'Ver Dossiê';
                }

                $badge_text = $badge ?: $default_badge;
                if (stripos($badge_text, 'migalhas') !== false) {
                    $axis_badge_style = 'text-[#8C1D24] font-bold';
                }
                $gt_text = $subtitle ?: 'GT de Atuação • AJA';
                $action_text = $btn_label ?: $default_btn;
                $excerpt = get_the_excerpt() ?: wp_trim_words(get_the_content(), 24);

                $search_text = esc_attr(mb_strtolower(get_the_title() . ' ' . $badge_text . ' ' . $gt_text . ' ' . $excerpt . ' ' . $location . ' ' . $axis));
                $idx++;
                ?>
                <div class="pub-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col border border-border-subtle group"
                     data-axis="<?php echo esc_attr($axis); ?>"
                     data-search="<?php echo esc_attr($search_text); ?>">
                    <div class="h-48 overflow-hidden relative">
                        <img alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?php echo esc_url($thumb); ?>"/>
                        <span class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/95 backdrop-blur <?php echo esc_attr($axis_badge_style); ?> font-label-sm text-[11px] font-bold uppercase tracking-wider shadow-sm">
                            <?php echo esc_html($badge_text); ?>
                        </span>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm text-clay-warm font-semibold"><?php echo esc_html($gt_text); ?></span>
                            <h3 class="font-title-lg text-title-lg text-ink-primary font-bold mt-2">
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="hover:text-primary transition-colors">
                                    <?php echo esc_html(get_the_title()); ?>
                                </a>
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">
                                <?php echo esc_html($excerpt); ?>
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-surface-container flex items-center justify-between gap-2">
                            <span class="font-label-sm text-[11px] text-on-surface-variant/80 uppercase font-medium">
                                <?php echo !empty($location) ? esc_html($location) : 'Produção da Rede'; ?>
                            </span>
                            <a class="font-label-sm text-label-sm text-primary font-bold hover:underline inline-flex items-center gap-1 shrink-0" 
                               href="<?php echo esc_url($pdf_url); ?>">
                                <?php echo esc_html($action_text); ?> <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;

        // Fallback enriquecido: se houver poucos posts reais cadastrados, adiciona demonstração rica de cada eixo
        if ($query->post_count < 4) {
            $fallback_pubs = [
                [
                    'axis'  => 'artigos',
                    'badge' => 'Artigo Jurídico',
                    'color' => 'text-primary',
                    'gt'    => 'GT 03 • Finanças Sustentáveis',
                    'title' => 'Integridade e Salvaguardas Jurídicas para Mercados de Carbono Jurisdicionais',
                    'desc'  => 'Análise crítica sobre a repartição de benefícios e o consentimento livre, prévio e informado (CLPI) de povos indígenas em projetos jurisdicionais de REDD+.',
                    'loc'   => 'Artigo Científico • 28 págs',
                    'btn'   => 'Ver Artigo',
                    'link'  => home_url('/submissoes/'),
                    'img'   => $get_img('fotos/pexels-diego-agudelo-257100874-12577779.jpg')
                ],
                [
                    'axis'  => 'noticias',
                    'badge' => 'Notícia da Rede',
                    'color' => 'text-secondary',
                    'gt'    => 'Comunicação AJA • Amazônia Legal',
                    'title' => 'AJA participa de mesa de debates sobre Litigância Climática e Salvaguardas Indígenas',
                    'desc'  => 'Rede articulou diálogo entre advocacia popular, pesquisadores e ministérios sobre precedentes jurídicos e enfrentamento ao desmatamento ilegal.',
                    'loc'   => 'Notícia • Outubro 2026',
                    'btn'   => 'Ler Notícia Completa',
                    'link'  => home_url('/submissoes/'),
                    'img'   => $get_img('fotos/pexels-eduardo-amorim-2155150050-33570703.jpg')
                ],
                [
                    'axis'  => 'notas',
                    'badge' => 'Nota Técnica 02/26',
                    'color' => 'text-moss-light',
                    'gt'    => 'GT 02 • Litigância Estratégica & Clima',
                    'title' => 'Responsabilidade Civil e Reparação Integral por Danos Climáticos em Queimadas',
                    'desc'  => 'Mapeamento de teses e jurisprudência dos Tribunais Superiores sobre o nexo causal em degradação ambiental de grande escala.',
                    'loc'   => 'Nota Técnica • 42 págs',
                    'btn'   => 'Baixar Nota Técnica (PDF)',
                    'link'  => home_url('/submissoes/'),
                    'img'   => $get_img('fotos/pexels-eliezer-nunes-300283905-26146919.jpg')
                ],
                [
                    'axis'  => 'dossies',
                    'badge' => 'Dossiê Jurídico',
                    'color' => 'text-earth-dark',
                    'gt'    => 'GT 01 • Territórios & PIQCTs',
                    'title' => 'Protocolos Autônomos de Consulta Prévia e Consentimento Livre',
                    'desc'  => 'Sistematização de 18 protocolos comunitários de povos indígenas e quilombolas da bacia amazônica e sua recepção judicial.',
                    'loc'   => 'Dossiê • 64 págs',
                    'btn'   => 'Acessar Dossiê',
                    'link'  => home_url('/submissoes/'),
                    'img'   => $get_img('fotos/corredeira-floresta-pedras.jpg')
                ],
                [
                    'axis'  => 'artigos',
                    'badge' => 'Artigo de Opinião',
                    'color' => 'text-primary',
                    'gt'    => 'Advocacia Popular • Território Tapajós',
                    'title' => 'O Papel da Assessoria Jurídica Comunitária na Defesa da Posse Tradicional',
                    'desc'  => 'Reflexões sobre a atuação de coletivos de base na garantia de direitos originários frente a grandes empreendimentos de infraestrutura.',
                    'loc'   => 'Artigo • 16 págs',
                    'btn'   => 'Ver Artigo',
                    'link'  => home_url('/submissoes/'),
                    'img'   => $get_img('fotos/pexels-diego-agudelo-257100874-12577779.jpg')
                ]
            ];

            foreach ($fallback_pubs as $f) :
                $search_text = esc_attr(mb_strtolower($f['title'] . ' ' . $f['badge'] . ' ' . $f['gt'] . ' ' . $f['desc'] . ' ' . $f['loc'] . ' ' . $f['axis']));
                ?>
                <div class="pub-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col border border-border-subtle group"
                     data-axis="<?php echo esc_attr($f['axis']); ?>"
                     data-search="<?php echo esc_attr($search_text); ?>">
                    <div class="h-48 overflow-hidden relative">
                        <img alt="<?php echo esc_attr($f['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?php echo esc_url($f['img']); ?>" />
                        <span class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-lowest/95 backdrop-blur <?php echo esc_attr($f['color']); ?> font-label-sm text-[11px] font-bold uppercase tracking-wider shadow-sm">
                            <?php echo esc_html($f['badge']); ?>
                        </span>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm text-clay-warm font-semibold"><?php echo esc_html($f['gt']); ?></span>
                            <h3 class="font-title-lg text-title-lg text-ink-primary font-bold mt-2">
                                <a href="<?php echo esc_url($f['link']); ?>" class="hover:text-primary transition-colors">
                                    <?php echo esc_html($f['title']); ?>
                                </a>
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">
                                <?php echo esc_html($f['desc']); ?>
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-surface-container flex items-center justify-between gap-2">
                            <span class="font-label-sm text-[11px] text-on-surface-variant/80 uppercase font-medium">
                                <?php echo esc_html($f['loc']); ?>
                            </span>
                            <a class="font-label-sm text-label-sm text-primary font-bold hover:underline inline-flex items-center gap-1 shrink-0" 
                               href="<?php echo esc_url($f['link']); ?>">
                                <?php echo esc_html($f['btn']); ?> <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
        }
        ?>

        <!-- Estado Vazio (Nenhuma Publicação Encontrada) -->
        <div id="pub-empty-state" class="col-span-full py-12 px-6 bg-surface-container-lowest border border-dashed border-outline-variant rounded-2xl text-center hidden">
            <span class="material-symbols-outlined text-4xl text-outline mb-2">find_in_page</span>
            <h4 class="font-title-lg text-title-lg text-ink-primary font-bold">Nenhuma publicação encontrada</h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 max-w-md mx-auto">
                Não encontramos produções para o eixo selecionado ou termo pesquisado. Tente buscar outras palavras-chave.
            </p>
            <button type="button" id="pub-empty-reset-btn" class="mt-4 px-4 py-2 bg-primary text-on-primary rounded-lg font-label-md text-label-md uppercase tracking-wider hover:bg-primary-container transition-colors shadow-sm">
                Exibir Todos os Conteúdos
            </button>
        </div>
    </div>

    <!-- 4. JAVASCRIPT REATIVO PARA FILTRAGEM INSTANTÂNEA -->
    <script>
    (function() {
        function initPubFilters() {
            var tabs = document.querySelectorAll('.pub-axis-btn');
            var cards = document.querySelectorAll('.pub-card');
            var searchInput = document.getElementById('pub-search-input');
            var searchClear = document.getElementById('pub-search-clear');
            var countDisplay = document.getElementById('pub-count-display');
            var resetBtn = document.getElementById('pub-reset-filters');
            var emptyState = document.getElementById('pub-empty-state');
            var emptyResetBtn = document.getElementById('pub-empty-reset-btn');

            if (!tabs.length || !cards.length) return;

            var currentAxis = 'all';
            var currentSearch = '';

            function filterPublications() {
                var visibleCount = 0;

                cards.forEach(function(card) {
                    var cardAxis = card.getAttribute('data-axis') || 'artigos';
                    var cardSearch = card.getAttribute('data-search') || '';

                    var matchesAxis = (currentAxis === 'all') || (cardAxis === currentAxis);
                    var matchesSearch = (currentSearch === '') || (cardSearch.indexOf(currentSearch) !== -1);

                    if (matchesAxis && matchesSearch) {
                        card.style.display = 'flex';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Atualiza contador
                if (countDisplay) {
                    if (currentAxis === 'all' && currentSearch === '') {
                        countDisplay.textContent = 'Exibindo todas as ' + visibleCount + ' publicações';
                    } else {
                        countDisplay.textContent = 'Encontradas ' + visibleCount + ' publicações';
                    }
                }

                // Exibe ou oculta estado vazio
                if (emptyState) {
                    if (visibleCount === 0) {
                        emptyState.classList.remove('hidden');
                    } else {
                        emptyState.classList.add('hidden');
                    }
                }

                // Exibe botão de limpar filtros se houver filtro ativo
                if (resetBtn) {
                    if (currentAxis !== 'all' || currentSearch !== '') {
                        resetBtn.classList.remove('hidden');
                    } else {
                        resetBtn.classList.add('hidden');
                    }
                }
            }

            // Cliques nas abas
            tabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    tabs.forEach(function(t) {
                        t.classList.remove('active', 'bg-primary', 'text-on-primary');
                        t.classList.add('bg-surface-container-lowest', 'border', 'border-border-subtle', 'text-on-surface-variant');
                    });

                    this.classList.add('active', 'bg-primary', 'text-on-primary');
                    this.classList.remove('bg-surface-container-lowest', 'border', 'border-border-subtle', 'text-on-surface-variant');

                    currentAxis = this.getAttribute('data-axis');
                    filterPublications();
                });
            });

            // Digitação na busca
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    currentSearch = this.value.trim().toLowerCase();
                    if (searchClear) {
                        if (currentSearch !== '') {
                            searchClear.classList.remove('hidden');
                        } else {
                            searchClear.classList.add('hidden');
                        }
                    }
                    filterPublications();
                });
            }

            // Limpar busca
            if (searchClear && searchInput) {
                searchClear.addEventListener('click', function() {
                    searchInput.value = '';
                    currentSearch = '';
                    searchClear.classList.add('hidden');
                    filterPublications();
                });
            }

            function resetAllFilters() {
                currentAxis = 'all';
                currentSearch = '';
                if (searchInput) searchInput.value = '';
                if (searchClear) searchClear.classList.add('hidden');

                tabs.forEach(function(t) {
                    if (t.getAttribute('data-axis') === 'all') {
                        t.classList.add('active', 'bg-primary', 'text-on-primary');
                        t.classList.remove('bg-surface-container-lowest', 'border', 'border-border-subtle', 'text-on-surface-variant');
                    } else {
                        t.classList.remove('active', 'bg-primary', 'text-on-primary');
                        t.classList.add('bg-surface-container-lowest', 'border', 'border-border-subtle', 'text-on-surface-variant');
                    }
                });

                filterPublications();
            }

            if (resetBtn) resetBtn.addEventListener('click', resetAllFilters);
            if (emptyResetBtn) emptyResetBtn.addEventListener('click', resetAllFilters);

            filterPublications();
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initPubFilters);
        } else {
            initPubFilters();
        }
    })();
    </script>
    <?php
    return ob_get_clean();
}

/**
 * 5. Register Shortcodes
 */
add_shortcode('aja_portfolio', function($atts) {
    $a = shortcode_atts(['limit' => 24], $atts);
    return aja_render_portfolio_grid(intval($a['limit']));
});

add_shortcode('aja_editais', function() {
    return aja_render_editais_grid();
});

add_shortcode('aja_publicacoes', function($atts) {
    $a = shortcode_atts(['limit' => 12], $atts);
    return aja_render_publicacoes_grid(intval($a['limit']));
});
