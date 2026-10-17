<?php
/**
 * Aliança Jurídica pela Amazônia (AJA) - functions.php
 *
 * Configurações do tema, suporte a recursos do WordPress,
 * criação automática das 3 categorias (portfolio, editais, publicações),
 * metaboxes para campos personalizados e enfileiramento de scripts/estilos.
 */

if (!defined('ABSPATH')) {
    exit; // Segurança contra acesso direto
}

/**
 * 1. Configurações iniciais do tema
 */
function aja_theme_setup() {
    // Suporte ao título dinâmico na aba do navegador
    add_theme_support('title-tag');

    // Suporte a miniaturas (Featured Images) em postagens e páginas
    add_theme_support('post-thumbnails');

    // Suporte a logo personalizada
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 80,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Suporte a HTML5 para formulários e galerias
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // Suporte a blocos responsivos
    add_theme_support('responsive-embeds');

    // Registro de Menus de Navegação
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'aja'),
        'footer'  => __('Menu Rodapé', 'aja'),
    ));

    // Tamanhos de imagem personalizados para os cards do tema
    add_image_size('aja-card-thumb', 600, 420, true);
    add_image_size('aja-square-thumb', 400, 400, true);
    add_image_size('aja-banner', 1200, 600, true);

    // Suporte a atributos de página (ordem) para posts
    add_post_type_support('post', 'page-attributes');
}
add_action('after_setup_theme', 'aja_theme_setup');

/**
 * 2. Enfileiramento de Scripts e Estilos
 */
function aja_enqueue_assets() {
    // Ícones oficiais: Material Symbols Outlined (A tipografia principal é Neuething Sans, carregada localmente)
    wp_enqueue_style(
        'material-symbols-icons',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap',
        array(),
        null
    );

    // Tailwind CSS via CDN oficial
    wp_enqueue_script(
        'tailwindcss',
        'https://cdn.tailwindcss.com',
        array(),
        '3.4.0',
        false // Carrega no <head> para que as classes Tailwind sejam interpretadas
    );

    // Folha de estilos principal do tema
    wp_enqueue_style(
        'aja-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // Script customizado do tema (Menu mobile, filtros de abas, smooth scroll)
    wp_enqueue_script(
        'aja-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'aja_enqueue_assets');

/**
 * 3. Injeção da Configuração do Tailwind no <head>
 */
function aja_tailwind_inline_config() {
    ?>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
                        colors: {
              "primary": "#416284",
              "on-primary": "#ffffff",
              "primary-container": "#2d4663",
              "on-primary-container": "#d4e3f5",
              "primary-fixed": "#a6bfe2",
              "primary-fixed-dim": "#8eaed7",
              "on-primary-fixed": "#0c2138",
              "on-primary-fixed-variant": "#2a4666",
              "surface-tint": "#416284",
              "inverse-primary": "#a6bfe2",

              "river-sky": "#a6bfe2",
              "cyan-accent": "#a6bfe2",

              "secondary": "#771f1f",
              "on-secondary": "#ffffff",
              "secondary-container": "#963232",
              "on-secondary-container": "#ffdada",
              "secondary-fixed": "#fbdcd9",
              "secondary-fixed-dim": "#e59b95",
              "on-secondary-fixed": "#3b0707",
              "on-secondary-fixed-variant": "#5c1313",

              "tertiary": "#f2b84c",
              "on-tertiary": "#241800",
              "tertiary-container": "#705011",
              "on-tertiary-container": "#fbe3ab",
              "tertiary-fixed": "#fae2b1",
              "tertiary-fixed-dim": "#f2b84c",
              "on-tertiary-fixed": "#291800",
              "on-tertiary-fixed-variant": "#6b4600",

              "forest-olive": "#52562c",
              "moss-light": "#6f7740",
              "earth-dark": "#431d11",
              "clay-warm": "#825748",

              "canvas-paper": "#f7f4f0",
              "surface": "#fcfbf9",
              "background": "#fcfbf9",
              "surface-dim": "#d9d5ce",
              "surface-bright": "#fcfbf9",
              "surface-container-lowest": "#ffffff",
              "surface-container-low": "#f5f2ed",
              "surface-container": "#eeeae3",
              "surface-container-high": "#e8e3dc",
              "surface-container-highest": "#e2ddd5",
              "border-subtle": "#ded8cf",
              "outline": "#737c86",
              "outline-variant": "#c2c9d1",

              "ink-primary": "#172330",
              "on-surface": "#1c2630",
              "on-surface-variant": "#455260",
              "on-background": "#1c2630",
              "inverse-surface": "#2b3744",
              "inverse-on-surface": "#f1f4f8",

              "error": "#ba1a1a",
              "on-error": "#ffffff",
              "error-container": "#ffdad6",
              "on-error-container": "#93000a"
            },
            borderRadius: {
              "DEFAULT": "0.125rem",
              "lg": "0.25rem",
              "xl": "0.5rem",
              "full": "0.75rem"
            },
            spacing: {
              "space-xl": "3rem",
              "margin": "3rem",
              "space-xs": "0.25rem",
              "space-sm": "0.5rem",
              "gutter-mobile": "1rem",
              "space-md": "1rem",
              "margin-mobile": "1.25rem",
              "gutter": "1.5rem",
              "space-lg": "1.75rem"
            },
            fontFamily: {
              "body-lg": ["'Neuething Sans'", "sans-serif"],
              "body-sm": ["'Neuething Sans'", "sans-serif"],
              "display-lg": ["'Neuething Sans'", "sans-serif"],
              "label-lg": ["'Neuething Sans'", "sans-serif"],
              "label-md": ["'Neuething Sans'", "sans-serif"],
              "headline-md": ["'Neuething Sans'", "sans-serif"],
              "display-lg-mobile": ["'Neuething Sans'", "sans-serif"],
              "headline-lg": ["'Neuething Sans'", "sans-serif"],
              "title-lg": ["'Neuething Sans'", "sans-serif"],
              "headline-lg-mobile": ["'Neuething Sans'", "sans-serif"],
              "body-md": ["'Neuething Sans'", "sans-serif"],
              "title-md": ["'Neuething Sans'", "sans-serif"],
              "label-sm": ["'Neuething Sans'", "sans-serif"],
              "headline-sm": ["'Neuething Sans'", "sans-serif"],
              "sans": ["'Neuething Sans'", "sans-serif"]
            },
            fontSize: {
              "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
              "body-sm": ["13px", { lineHeight: "20px", fontWeight: "400" }],
              "display-lg": ["56px", { lineHeight: "64px", letterSpacing: "-0.03em", fontWeight: "600" }],
              "label-lg": ["13px", { lineHeight: "18px", letterSpacing: "0.04em", fontWeight: "600" }],
              "label-md": ["11px", { lineHeight: "16px", letterSpacing: "0.08em", fontWeight: "600" }],
              "headline-md": ["28px", { lineHeight: "36px", letterSpacing: "-0.01em", fontWeight: "500" }],
              "display-lg-mobile": ["38px", { lineHeight: "44px", letterSpacing: "-0.02em", fontWeight: "600" }],
              "headline-lg": ["40px", { lineHeight: "48px", letterSpacing: "-0.02em", fontWeight: "500" }],
              "title-lg": ["19px", { lineHeight: "26px", fontWeight: "600" }],
              "headline-lg-mobile": ["30px", { lineHeight: "36px", letterSpacing: "-0.01em", fontWeight: "500" }],
              "body-md": ["15px", { lineHeight: "24px", fontWeight: "400" }],
              "title-md": ["17px", { lineHeight: "24px", fontWeight: "500" }],
              "label-sm": ["10px", { lineHeight: "14px", letterSpacing: "0.1em", fontWeight: "600" }],
              "headline-sm": ["22px", { lineHeight: "28px", fontWeight: "600" }]
            }
          }
        }
      };
    </script>
    <?php
}
add_action('wp_head', 'aja_tailwind_inline_config', 20);

/**
 * 4. Criação e Configuração Automática das 3 Categorias Solicitadas
 *    - "portfolio"  (Nome: Portfólio, Slug: portfolio)
 *    - "editais"    (Nome: Editais, Slug: editais)
 *    - "publicacoes" (Nome: Publicações, Slug: publicacoes)
 */
function aja_register_required_categories() {
    $required_categories = array(
        'portfolio' => array(
            'cat_name'             => 'Portfólio',
            'category_description' => 'Membros da rede, coletivos, clínicas e iniciativas do portfólio da AJA',
            'category_nicename'    => 'portfolio',
        ),
        'editais' => array(
            'cat_name'             => 'Editais',
            'category_description' => 'Editais institucionais e oportunidades contínuas da AJA',
            'category_nicename'    => 'editais',
        ),
        'publicacoes' => array(
            'cat_name'             => 'Publicações',
            'category_description' => 'Notas técnicas, dossiês jurídicos, manuais, artigos e pareceres da AJA',
            'category_nicename'    => 'publicacoes',
        ),
        'equipe' => array(
            'cat_name'             => 'Equipe',
            'category_description' => 'Membros da coordenação e equipe técnica do projeto AJA',
            'category_nicename'    => 'equipe',
        ),
        'noticias' => array(
            'cat_name'             => 'Notícias',
            'category_description' => 'Notícias, comunicados, reportagens e novidades da Aliança Jurídica pela Amazônia',
            'category_nicename'    => 'noticias',
        ),
    );

    foreach ($required_categories as $slug => $data) {
        $term_by_slug = get_term_by('slug', $slug, 'category');
        $term_by_name = get_term_by('name', $data['cat_name'], 'category');

        if (!$term_by_slug && !$term_by_name) {
            wp_insert_term(
                $data['cat_name'],
                'category',
                array(
                    'description' => $data['category_description'],
                    'slug'        => $data['category_nicename'],
                )
            );
        }
    }
}
add_action('init', 'aja_register_required_categories');

/**
 * 5. Metabox para Campos Personalizados dos Posts AJA
 *    Permite configurar os campos específicos de cada seção:
 *    - Portfólio: Categoria de filtro (advocacia, pesquisa, sociedade, diretoria) e Localização/GT
 *    - Editais: Selo de status, Destinatário, Link/E-mail do edital
 *    - Publicações: Tipo/Selo (Nota Técnica, Dossiê, Guia), GT associado, Link do arquivo/artigo
 */
function aja_register_post_metaboxes() {
    add_meta_box(
        'aja_post_settings',
        '🌿 Configurações da Publicação AJA (Portfólio, Editais ou Publicações)',
        'aja_render_post_metabox',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'aja_register_post_metaboxes');

function aja_render_post_metabox($post) {
    wp_nonce_field('aja_save_post_meta', 'aja_post_meta_nonce');

    // Resgata os valores salvos
    $badge           = get_post_meta($post->ID, '_aja_badge', true);
    $subtitle        = get_post_meta($post->ID, '_aja_subtitle', true);
    if (empty($subtitle)) {
        $subtitle = get_post_meta($post->ID, '_aja_subtitle_gt', true);
    }
    $location        = get_post_meta($post->ID, '_aja_location', true);
    $action_link     = get_post_meta($post->ID, '_aja_action_link', true);
    if (empty($action_link)) {
        $action_link = get_post_meta($post->ID, '_aja_pdf_url', true);
    }
    $action_label    = get_post_meta($post->ID, '_aja_action_label', true);
    $featured        = get_post_meta($post->ID, '_aja_featured', true);
    if ($featured === '') {
        $featured = get_post_meta($post->ID, '_aja_featured_edital', true);
    }

    // 3 Filtros do Portfólio
    $type            = get_post_meta($post->ID, '_aja_type', true);
    if (empty($type)) {
        $legacy_cat = get_post_meta($post->ID, '_aja_portfolio_category', true);
        if ($legacy_cat === 'advocacia') $type = 'profissional';
        elseif ($legacy_cat === 'sociedade') $type = 'organizacao';
        elseif ($legacy_cat === 'pesquisa') $type = 'pesquisador';
    }
    $territory       = get_post_meta($post->ID, '_aja_territory', true);
    $theme           = get_post_meta($post->ID, '_aja_theme', true);
    $pub_axis        = get_post_meta($post->ID, '_aja_pub_axis', true);
    $team_instance   = get_post_meta($post->ID, '_aja_team_instance', true) ?: 'comite';

    // Detecta a aba inicial com base nas categorias do post
    $post_categories = wp_get_post_categories($post->ID, ['fields' => 'slugs']);
    $initial_tab = 'portfolio';
    if (in_array('noticias', $post_categories)) {
        $initial_tab = 'noticias';
    } elseif (in_array('equipe', $post_categories)) {
        $initial_tab = 'equipe';
    } elseif (in_array('editais', $post_categories) || !empty($featured)) {
        $initial_tab = 'editais';
    } elseif (in_array('publicacoes', $post_categories)) {
        $initial_tab = 'publicacoes';
    } elseif (in_array('portfolio', $post_categories) || !empty($type)) {
        $initial_tab = 'portfolio';
    }
    ?>
    <div id="aja-metabox-wrapper" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; line-height: 1.5; padding: 6px 0;">
        
        <!-- Campo oculto da aba ativa -->
        <input type="hidden" id="aja_active_tab" name="aja_active_tab" value="<?php echo esc_attr($initial_tab); ?>" />

        <!-- CABEÇALHO COM ABAS DE NAVEGAÇÃO -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 12px 16px; margin-bottom: 18px;">
            <div style="margin-bottom: 10px; font-size: 13px; color: #475569; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 8px;">
                <span><strong>Escolha o tipo desta postagem:</strong> Os campos abaixo mudam automaticamente para facilitar o preenchimento.</span>
                <span style="font-size: 11px; background: #e2e8f0; padding: 2px 8px; border-radius: 4px; color: #64748b;">Dica: Ao marcar a Categoria na lateral direita, a aba troca sozinha!</span>
            </div>
            
            <div style="display: flex; gap: 8px; flex-wrap: wrap;" id="aja-tabs-nav">
                <button type="button" class="aja-tab-button" data-target="tab-portfolio" style="display: inline-flex; align-items: center; gap: 6px; padding: 10px 18px; border-radius: 6px; font-weight: 600; font-size: 13px; cursor: pointer; border: 1px solid transparent; transition: all 0.2s;">
                    <span style="font-size: 16px;">👤</span> Portfólio (Membros da Rede)
                </button>
                <button type="button" class="aja-tab-button" data-target="tab-equipe" style="display: inline-flex; align-items: center; gap: 6px; padding: 10px 18px; border-radius: 6px; font-weight: 600; font-size: 13px; cursor: pointer; border: 1px solid transparent; transition: all 0.2s;">
                    <span style="font-size: 16px;">🏛️</span> Estrutura (Comitê, Conselho, GTs & Equipe)
                </button>
                <button type="button" class="aja-tab-button" data-target="tab-editais" style="display: inline-flex; align-items: center; gap: 6px; padding: 10px 18px; border-radius: 6px; font-weight: 600; font-size: 13px; cursor: pointer; border: 1px solid transparent; transition: all 0.2s;">
                    <span style="font-size: 16px;">📢</span> Editais (Chamadas & Oportunidades)
                </button>
                <button type="button" class="aja-tab-button" data-target="tab-publicacoes" style="display: inline-flex; align-items: center; gap: 6px; padding: 10px 18px; border-radius: 6px; font-weight: 600; font-size: 13px; cursor: pointer; border: 1px solid transparent; transition: all 0.2s;">
                    <span style="font-size: 16px;">📚</span> Publicações (Estudos & Notas Técnicas)
                </button>
                <button type="button" class="aja-tab-button" data-target="tab-noticias" style="display: inline-flex; align-items: center; gap: 6px; padding: 10px 18px; border-radius: 6px; font-weight: 600; font-size: 13px; cursor: pointer; border: 1px solid transparent; transition: all 0.2s;">
                    <span style="font-size: 16px;">📰</span> Notícias (Atualidades & Comunicados)
                </button>
            </div>
        </div>

        <!-- ========================================== -->
        <!-- ABA 1: PORTFÓLIO (MEMBROS DA REDE AJA)     -->
        <!-- ========================================== -->
        <div id="tab-portfolio" class="aja-tab-content" style="display: none;">
            <div style="background: #f0fdf4; border-left: 4px solid #16a34a; padding: 12px 16px; border-radius: 4px; margin-bottom: 16px;">
                <strong style="color: #166534; font-size: 13px;">👤 Cadastrando Membro do Portfólio AJA</strong>
                <p style="margin: 4px 0 0 0; font-size: 12px; color: #15803d;">
                    Preencha os dados do advogado popular, pesquisador, clínica jurídica ou instituição parceira.
                </p>
            </div>

            <!-- FILTROS OBRIGATÓRIOS DO PORTFÓLIO (DESTAQUE NO TOPO DA ABA) -->
            <div style="background: #ffffff; border: 2px solid #86efac; border-radius: 8px; padding: 16px; margin-bottom: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                    <span style="font-size: 20px;">🎯</span>
                    <strong style="color: #14532d; font-size: 14px;">Classificação do Membro (Obrigatório para os Filtros da Galeria):</strong>
                </div>
                <p style="margin: 0 0 14px 0; font-size: 12px; color: #166534;">
                    Estes 3 menus suspensos definem exatamente como os visitantes encontrarão este membro na galeria interativa:
                </p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 14px;">
                    <!-- 1. Tipo de Membro -->
                    <div>
                        <label for="aja_type" style="display:block; font-weight:700; margin-bottom:5px; font-size: 13px; color: #14532d;">
                            1. Tipo de Membro:
                        </label>
                        <select id="aja_type" name="aja_type" style="width: 100%; padding: 8px 10px; border-radius: 4px; border: 1px solid #86efac; background: #fff; font-size: 13px;">
                            <option value="" <?php selected($type, ''); ?>>-- Selecione o Tipo --</option>
                            <option value="organizacao" <?php selected($type, 'organizacao'); ?>>🏢 Organização da Sociedade Civil / Coletivo</option>
                            <option value="profissional" <?php selected($type, 'profissional'); ?>>⚖️ Profissional / Advocacia Popular</option>
                            <option value="pesquisador" <?php selected($type, 'pesquisador'); ?>>🎓 Pesquisador / Clínica Jurídica / Universidade</option>
                        </select>
                        <span style="display:block; font-size:11px; color:#166534; margin-top:3px;">Define a aba principal de atuação na rede.</span>
                    </div>

                    <!-- 2. Território / Estado -->
                    <div>
                        <label for="aja_territory" style="display:block; font-weight:700; margin-bottom:5px; font-size: 13px; color: #14532d;">
                            2. Território / Estado:
                        </label>
                        <select id="aja_territory" name="aja_territory" style="width: 100%; padding: 8px 10px; border-radius: 4px; border: 1px solid #86efac; background: #fff; font-size: 13px;">
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
                        <span style="display:block; font-size:11px; color:#166534; margin-top:3px;">Estado de base na Amazônia Legal.</span>
                    </div>

                    <!-- 3. Tema / GT -->
                    <div>
                        <label for="aja_theme" style="display:block; font-weight:700; margin-bottom:5px; font-size: 13px; color: #14532d;">
                            3. Tema / GT de Atuação:
                        </label>
                        <select id="aja_theme" name="aja_theme" style="width: 100%; padding: 8px 10px; border-radius: 4px; border: 1px solid #86efac; background: #fff; font-size: 13px;">
                            <option value="" <?php selected($theme, ''); ?>>-- Selecione o Tema / GT --</option>
                            <option value="gt-01" <?php selected($theme, 'gt-01'); ?>>GT 01 • Territórios & PIQCTs</option>
                            <option value="gt-02" <?php selected($theme, 'gt-02'); ?>>GT 02 • Litigância Estratégica & Clima</option>
                            <option value="gt-03" <?php selected($theme, 'gt-03'); ?>>GT 03 • Finanças Sustentáveis & Bioeconomia</option>
                            <option value="direitos-humanos" <?php selected($theme, 'direitos-humanos'); ?>>Direitos Humanos & Salvaguardas</option>
                        </select>
                        <span style="display:block; font-size:11px; color:#166534; margin-top:3px;">Eixo de incidência dentro da AJA.</span>
                    </div>
                </div>
            </div>

            <!-- DEMAIS CAMPOS DO PORTFÓLIO -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;">
                <div>
                    <label for="portfolio_badge" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px;">
                        🏷️ Selo / Segmento do Membro:
                    </label>
                    <input type="text" id="portfolio_badge" name="portfolio_badge" value="<?php echo esc_attr($badge); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Advocacia Popular, Clínica Jurídica, Coletivo Tapajós">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Aparece no topo do card (em destaque).</span>
                </div>

                <div>
                    <label for="portfolio_subtitle" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px;">
                        💼 Cargo / Função / Eixo Principal:
                    </label>
                    <input type="text" id="portfolio_subtitle" name="portfolio_subtitle" value="<?php echo esc_attr($subtitle); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Defesa Territorial & Salvaguardas, Litigância Climática">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Função ou foco prático de trabalho.</span>
                </div>

                <div>
                    <label for="portfolio_location" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px;">
                        📍 Cidade / Região / Bacia:
                    </label>
                    <input type="text" id="portfolio_location" name="portfolio_location" value="<?php echo esc_attr($location); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Santarém / Pará • Baixo Tapajós, Manaus / AM • Rio Negro">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Exibido no rodapé do card com ícone de localização.</span>
                </div>

                <div>
                    <label for="portfolio_link" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px;">
                        🔗 Site Institucional / Currículo / Perfil:
                    </label>
                    <input type="text" id="portfolio_link" name="portfolio_link" value="<?php echo esc_attr($action_link); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: https://coletivotapajos.org ou link do currículo">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Se em branco, o clique abrirá a própria página do post.</span>
                </div>

                <div style="grid-column: 1 / -1;">
                    <label for="portfolio_btn" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px;">
                        🔘 Texto do Botão do Card:
                    </label>
                    <input type="text" id="portfolio_btn" name="portfolio_btn" value="<?php echo esc_attr($action_label); ?>" style="width: 100%; max-width: 400px; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Conhecer Atuação, Ver Perfil, Acessar Site">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Padrão caso deixe em branco: "Ver Detalhes".</span>
                </div>
            </div>
        </div>

        <!-- ========================================== -->
        <!-- ABA 4: ESTRUTURA (GOVERNANÇA & MEMBROS)   -->
        <!-- ========================================== -->
        <div id="tab-equipe" class="aja-tab-content" style="display: none;">
            <div style="background: #eff6ff; border-left: 4px solid #2563eb; padding: 12px 16px; border-radius: 4px; margin-bottom: 16px;">
                <strong style="color: #1e40af; font-size: 13px;">🏛️ Cadastrando Integrante da Estrutura / Governança AJA</strong>
                <p style="margin: 4px 0 0 0; font-size: 12px; color: #1d4ed8;">
                    Preencha os dados do integrante. Este membro aparecerá automaticamente na seção <strong>Estrutura</strong> dentro de <em>Sobre nós</em> na página inicial, na aba correspondente à sua instância.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;">
                <div style="grid-column: 1 / -1; background: #f8fafc; border: 1px solid #cbd5e1; padding: 12px 14px; border-radius: 6px;">
                    <label for="equipe_instance" style="display:block; font-weight:700; margin-bottom:6px; font-size: 13px; color: #1e40af;">
                        🏛️ Instância / Órgão da Estrutura:
                    </label>
                    <select id="equipe_instance" name="equipe_instance" style="width: 100%; max-width: 420px; padding: 8px 12px; border-radius: 4px; border: 1px solid #94a3b8; font-weight: 600; font-size: 13px; background: #fff;">
                        <option value="comite" <?php selected($team_instance, 'comite'); ?>>🏛️ Comitê Executivo</option>
                        <option value="conselho" <?php selected($team_instance, 'conselho'); ?>>⚖️ Conselho Consultivo</option>
                        <option value="lideres" <?php selected($team_instance, 'lideres'); ?>>🌳 Líderes de GT (Grupos Temáticos)</option>
                        <option value="equipe" <?php selected($team_instance, 'equipe'); ?>>👥 Equipe Técnica & Coordenação</option>
                    </select>
                    <span style="display:block; font-size:12px; color:#64748b; margin-top:4px;">Define em qual aba ou bloco da seção "Estrutura" este integrante será apresentado na página inicial.</span>
                </div>

                <div>
                    <label for="equipe_role" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #1e40af;">
                        💼 Cargo / Papel no Projeto:
                    </label>
                    <input type="text" id="equipe_role" name="equipe_role" value="<?php echo esc_attr($badge); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Coordenação Geral, Articulador Territorial, Assessoria Jurídica">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Exibido como badge de destaque no card do membro.</span>
                </div>

                <div>
                    <label for="equipe_area" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #1e40af;">
                        🏛️ Eixo / GT ou Área de Atuação:
                    </label>
                    <input type="text" id="equipe_area" name="equipe_area" value="<?php echo esc_attr($subtitle); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: GT 01 • Territórios & PIQCTs, Litigância Estratégica, Gestão">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Subtítulo descritivo da atuação no projeto.</span>
                </div>

                <div>
                    <label for="equipe_location" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #1e40af;">
                        📍 Localização / Polo Regional:
                    </label>
                    <input type="text" id="equipe_location" name="equipe_location" value="<?php echo esc_attr($location); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Belém / Pará • Amazônia Legal, Brasília / DF">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Cidade, estado ou polo onde atua.</span>
                </div>

                <div>
                    <label for="equipe_link" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #1e40af;">
                        🔗 Link Profissional (LinkedIn / Lattes / E-mail):
                    </label>
                    <input type="text" id="equipe_link" name="equipe_link" value="<?php echo esc_attr($action_link); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: https://linkedin.com/in/... ou mailto:contato@ajamazonia.org">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Link externo para contato ou perfil (opcional).</span>
                </div>

                <div>
                    <label for="equipe_order" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #1e40af;">
                        🔢 Ordem de Exibição (Prioridade):
                    </label>
                    <input type="number" id="equipe_order" name="equipe_order" value="<?php echo esc_attr($post->menu_order ?: (get_post_meta($post->ID, '_aja_team_order', true) ?: 0)); ?>" style="width: 100%; max-width: 140px; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="1">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Números menores aparecem primeiro (1, 2, 3...).</span>
                </div>
            </div>

            <div style="margin-top: 16px; padding: 12px 16px; background: #f8fafc; border: 1px dashed #cbd5e1; border-radius: 6px; font-size: 12px; color: #475569; display: flex; align-items: center; gap: 10px;">
                <span style="font-size: 20px;">📸</span>
                <span><strong>Foto do Membro:</strong> Defina a foto no quadro <strong>"Imagem Destacada"</strong> na coluna lateral direita. Ela será recortada automaticamente em formato quadrado elegante.</span>
            </div>
        </div>

        <!-- ========================================== -->
        <!-- ABA 2: EDITAIS (CHAMADAS & OPORTUNIDADES)  -->
        <!-- ========================================== -->
        <div id="tab-editais" class="aja-tab-content" style="display: none;">
            <div style="background: #fff7ed; border-left: 4px solid #ea580c; padding: 12px 16px; border-radius: 4px; margin-bottom: 16px;">
                <strong style="color: #9a3412; font-size: 13px;">📢 Cadastrando Edital Institucional AJA</strong>
                <p style="margin: 4px 0 0 0; font-size: 12px; color: #c2410c;">
                    Preencha os prazos e links de inscrição para editais institucionais ou oportunidades.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;">
                <div>
                    <label for="edital_badge" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #9a3412;">
                        🏷️ Status da Chamada / Selo:
                    </label>
                    <input type="text" id="edital_badge" name="edital_badge" value="<?php echo esc_attr($badge); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Edital Institucional, Inscrições Prorrogadas, Edital 01/2026">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Exibido com destaque colorido no card.</span>
                </div>

                <div>
                    <label for="edital_subtitle" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #9a3412;">
                        💼 Público-Alvo / Tema da Chamada:
                    </label>
                    <input type="text" id="edital_subtitle" name="edital_subtitle" value="<?php echo esc_attr($subtitle); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Artigos de Opinião e Teses, Destinado a Coletivos e OSCs">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Aparece abaixo do título do edital.</span>
                </div>

                <div>
                    <label for="edital_location" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #9a3412;">
                        ⏰ Prazo Limite para Inscrição / Submissão:
                    </label>
                    <input type="text" id="edital_location" name="edital_location" value="<?php echo esc_attr($location); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Prazo: 30 de Outubro de 2026, Até 15/11/2026">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Data final para envio das propostas.</span>
                </div>

                <div>
                    <label for="edital_link" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #9a3412;">
                        🔗 Link do Edital (PDF ou Formulário de Inscrição):
                    </label>
                    <input type="text" id="edital_link" name="edital_link" value="<?php echo esc_attr($action_link); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: https://ajamazonia.org/edital.pdf ou link do formulário">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Para onde o usuário vai ao clicar no botão.</span>
                </div>

                <div style="grid-column: 1 / -1;">
                    <label for="edital_btn" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #9a3412;">
                        🔘 Texto do Botão de Ação:
                    </label>
                    <input type="text" id="edital_btn" name="edital_btn" value="<?php echo esc_attr($action_label); ?>" style="width: 100%; max-width: 400px; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Acessar Edital, Baixar Edital (PDF), Inscrever-se">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Padrão: "Acessar Edital".</span>
                </div>
            </div>

            <!-- DESTAQUE NO BANNER DE EDITAIS -->
            <div style="margin-top: 18px; padding: 14px 16px; background: #fff; border: 1px solid #fed7aa; border-radius: 6px;">
                <label style="display:inline-flex; align-items:center; gap:8px; font-weight:700; cursor:pointer; font-size: 13px; color: #9a3412;">
                    <input type="checkbox" name="edital_featured" value="1" <?php checked($featured, '1'); ?>>
                    ⭐ Colocar este Edital em Destaque (Banner Principal no topo da Seção de Editais)
                </label>
                <span style="display:block; font-size:11px; color:#78350f; margin-top:4px; margin-left: 24px;">
                    Se marcado, este edital ganhará um card grande com imagem de fundo no início da lista.
                </span>
            </div>
        </div>

        <!-- ========================================== -->
        <!-- ABA 3: PUBLICAÇÕES (NOTAS, DOSSIÊS, GUIAS) -->
        <!-- ========================================== -->
        <div id="tab-publicacoes" class="aja-tab-content" style="display: none;">
            <div style="background: #f0f9ff; border-left: 4px solid #0284c7; padding: 12px 16px; border-radius: 4px; margin-bottom: 16px;">
                <strong style="color: #0369a1; font-size: 13px;">📚 Cadastrando Publicação ou Estudo AJA</strong>
                <p style="margin: 4px 0 0 0; font-size: 12px; color: #0284c7;">
                    Preencha os dados de notas técnicas, artigos acadêmicos, cartilhas e relatórios jurídicos.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;">
                                <div style="grid-column: 1 / -1; background: #e0f2fe; padding: 12px 14px; border-radius: 6px; border: 1px solid #bae6fd;">
                    <label for="pub_axis" style="display:block; font-weight:700; margin-bottom:5px; font-size: 13px; color: #0369a1;">
                        🧭 Eixo Temático do Conteúdo (Filtro da Seção):
                    </label>
                    <select id="pub_axis" name="pub_axis" style="width: 100%; max-width: 450px; padding: 8px 10px; border-radius: 4px; border: 1px solid #7dd3fc; background: #fff; font-size: 13px; font-weight: 500;">
                        <option value="" <?php selected($pub_axis, ''); ?>>-- Detecção Automática (baseada no Título/Selo) --</option>
                        <option value="artigos" <?php selected($pub_axis, 'artigos'); ?>>⚖️ Artigos Jurídicos &amp; Teses Acadêmicas</option>
                        <option value="noticias" <?php selected($pub_axis, 'noticias'); ?>>📰 Notícias &amp; Atualidades da Rede</option>
                        <option value="notas" <?php selected($pub_axis, 'notas'); ?>>📑 Notas Técnicas &amp; Pareceres</option>
                        <option value="dossies" <?php selected($pub_axis, 'dossies'); ?>>📚 Dossiês, Manuais &amp; Guias Práticos</option>
                    </select>
                    <span style="display:block; font-size:11px; color:#0369a1; margin-top:4px;">
                        Define em qual aba de navegação esta publicação será exibida na vitrine da página inicial.
                    </span>
                </div>

                <div>
                    <label for="pub_badge" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #0369a1;">
                        🏷️ Formato do Documento / Selo:
                    </label>
                    <input type="text" id="pub_badge" name="pub_badge" value="<?php echo esc_attr($badge); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Nota Técnica 02/26, Dossiê Jurídico, Cartilha Educativa">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Identifica o tipo de documento no card.</span>
                </div>

                <div>
                    <label for="pub_subtitle" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #0369a1;">
                        💼 Grupo Temático (GT) / Eixo / Autoria:
                    </label>
                    <input type="text" id="pub_subtitle" name="pub_subtitle" value="<?php echo esc_attr($subtitle); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: GT 01 • Salvaguardas & Consulta Prévia, GT 02 • Justiça Climática">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">O grupo de trabalho ou linha de pesquisa responsável.</span>
                </div>

                <div>
                    <label for="pub_location" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #0369a1;">
                        📄 Informações da Edição / Páginas:
                    </label>
                    <input type="text" id="pub_location" name="pub_location" value="<?php echo esc_attr($location); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Publicado em Outubro/2026 • 32 páginas, Série Litigância Vol. 1">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Exibido no rodapé do card com metadados da publicação.</span>
                </div>

                <div>
                    <label for="pub_link" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #0369a1;">
                        📥 Link para Download do PDF Completo:
                    </label>
                    <input type="text" id="pub_link" name="pub_link" value="<?php echo esc_attr($action_link); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: https://ajamazonia.org/wp-content/uploads/nota-tecnica.pdf">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Link direto do arquivo PDF na biblioteca de mídia do site.</span>
                </div>

                <div style="grid-column: 1 / -1;">
                    <label for="pub_btn" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #0369a1;">
                        🔘 Texto do Botão de Download:
                    </label>
                    <input type="text" id="pub_btn" name="pub_btn" value="<?php echo esc_attr($action_label); ?>" style="width: 100%; max-width: 400px; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Baixar Nota Técnica (PDF), Ler Publicação, Acessar Estudo">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Padrão: "Baixar Publicação (PDF)".</span>
                </div>
            </div>
        </div>

        <!-- ========================================== -->
        <!-- ABA 5: NOTÍCIAS (ATUALIDADES & COMUNICADOS)-->
        <!-- ========================================== -->
        <div id="tab-noticias" class="aja-tab-content" style="display: none;">
            <div style="background: #fdf4ff; border-left: 4px solid #a855f7; padding: 12px 16px; border-radius: 4px; margin-bottom: 16px;">
                <strong style="color: #7e22ce; font-size: 13px;">📰 Cadastrando Notícia ou Comunicado AJA</strong>
                <p style="margin: 4px 0 0 0; font-size: 12px; color: #9333ea;">
                    Preencha as informações da notícia ou matéria. Esta postagem aparecerá automaticamente na seção <strong>Notícias</strong> na página inicial.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;">
                <div>
                    <label for="noticia_badge" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #7e22ce;">
                        🏷️ Formato / Selo da Notícia:
                    </label>
                    <input type="text" id="noticia_badge" name="noticia_badge" value="<?php echo esc_attr($badge); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Notícia, Comunicado Oficial, Artigo de Opinião, Cobertura">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Exibido no topo do card (destaque colorido).</span>
                </div>

                <div>
                    <label for="noticia_subtitle" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #7e22ce;">
                        💼 Chapéu / Eixo Temático:
                    </label>
                    <input type="text" id="noticia_subtitle" name="noticia_subtitle" value="<?php echo esc_attr($subtitle); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: COP30 • Amazônia, Litigância Climática, Direitos Territoriais">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Subtítulo temático da matéria.</span>
                </div>

                <div>
                    <label for="noticia_location" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #7e22ce;">
                        📍 Local / Fonte / Veículo:
                    </label>
                    <input type="text" id="noticia_location" name="noticia_location" value="<?php echo esc_attr($location); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Belém / PA, Brasília / DF, Agência AJA">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Cidade ou veículo de publicação.</span>
                </div>

                <div>
                    <label for="noticia_link" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #7e22ce;">
                        🔗 Link Externo (Fonte / Veículo Original):
                    </label>
                    <input type="text" id="noticia_link" name="noticia_link" value="<?php echo esc_attr($action_link); ?>" style="width: 100%; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: https://portaldenoticias.com/... (opcional)">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Se em branco, abrirá a própria página do post no site da AJA.</span>
                </div>

                <div style="grid-column: 1 / -1;">
                    <label for="noticia_btn" style="display:block; font-weight:600; margin-bottom:4px; font-size: 13px; color: #7e22ce;">
                        🔘 Texto do Botão do Card:
                    </label>
                    <input type="text" id="noticia_btn" name="noticia_btn" value="<?php echo esc_attr($action_label); ?>" style="width: 100%; max-width: 400px; padding: 7px 10px; border-radius: 4px; border: 1px solid #ccd0d4;" placeholder="Ex: Ler Notícia Completa, Acessar Matéria">
                    <span style="display:block; font-size:12px; color:#666; margin-top:3px;">Padrão caso deixe em branco: "Ler Notícia Completa".</span>
                </div>
            </div>

            <div style="margin-top: 16px; padding: 12px 16px; background: #f8fafc; border: 1px dashed #cbd5e1; border-radius: 6px; font-size: 12px; color: #475569; display: flex; align-items: center; gap: 10px;">
                <span style="font-size: 20px;">📸</span>
                <span><strong>Foto de Capa:</strong> Defina a imagem no quadro <strong>"Imagem Destacada"</strong> na coluna lateral direita. Ela será usada como foto de cabeçalho da notícia.</span>
            </div>
        </div>

    </div>

    <!-- SCRIPT DE INTERAÇÃO DAS ABAS & AUTO-SELEÇÃO POR CATEGORIA -->
    <script>
    (function() {
        function initAjaTabs() {
            var tabsNav = document.getElementById('aja-tabs-nav');
            if (!tabsNav) return;

            var buttons = tabsNav.querySelectorAll('.aja-tab-button');
            var contents = document.querySelectorAll('.aja-tab-content');
            var activeTabInput = document.getElementById('aja_active_tab');

            function switchTab(tabId) {
                // Alterna botões
                buttons.forEach(function(btn) {
                    var isTarget = btn.getAttribute('data-target') === tabId;
                    if (isTarget) {
                        btn.style.background = '#416284';
                        btn.style.color = '#ffffff';
                        btn.style.borderColor = '#202115';
                        btn.style.boxShadow = '0 2px 4px rgba(0,0,0,0.15)';
                    } else {
                        btn.style.background = '#f1f5f9';
                        btn.style.color = '#334155';
                        btn.style.borderColor = '#cbd5e1';
                        btn.style.boxShadow = 'none';
                    }
                });

                // Alterna conteúdos
                contents.forEach(function(content) {
                    if (content.id === tabId) {
                        content.style.display = 'block';
                    } else {
                        content.style.display = 'none';
                    }
                });

                // Atualiza input oculto
                var tabShort = tabId.replace('tab-', '');
                if (activeTabInput) {
                    activeTabInput.value = tabShort;
                }
            }

            buttons.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    switchTab(this.getAttribute('data-target'));
                });
            });

            // Ativa aba inicial
            var currentInitial = 'tab-' + (activeTabInput ? activeTabInput.value : 'portfolio');
            switchTab(currentInitial);

            // Escuta mudanças nos checkboxes de Categoria nativos do WordPress (Gutenberg ou Clássico)
            function listenCategoryCheckboxes() {
                var catCheckboxes = document.querySelectorAll('input[name="post_category[]"], #categorychecklist input[type="checkbox"], .editor-post-taxonomies__hierarchical-terms-list input[type="checkbox"]');
                catCheckboxes.forEach(function(cb) {
                    cb.addEventListener('change', function() {
                        var label = this.parentElement ? this.parentElement.innerText.toLowerCase() : '';
                        if (label.indexOf('notic') !== -1 && this.checked) {
                            switchTab('tab-noticias');
                        } else if (label.indexOf('equip') !== -1 && this.checked) {
                            switchTab('tab-equipe');
                        } else if (label.indexOf('edita') !== -1 && this.checked) {
                            switchTab('tab-editais');
                        } else if (label.indexOf('publica') !== -1 && this.checked) {
                            switchTab('tab-publicacoes');
                        } else if (label.indexOf('portf') !== -1 && this.checked) {
                            switchTab('tab-portfolio');
                        }
                    });
                });
            }

            setTimeout(listenCategoryCheckboxes, 1000);
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initAjaTabs);
        } else {
            initAjaTabs();
        }
    })();
    </script>
    <?php
}

function aja_save_post_metabox($post_id) {
    if (!isset($_POST['aja_post_meta_nonce']) || !wp_verify_nonce($_POST['aja_post_meta_nonce'], 'aja_save_post_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $active_tab = isset($_POST['aja_active_tab']) ? sanitize_text_field($_POST['aja_active_tab']) : 'portfolio';

    // Salva com base na aba ativa ou prioridade do formulário
    if ($active_tab === 'editais') {
        $badge    = isset($_POST['edital_badge']) ? sanitize_text_field($_POST['edital_badge']) : '';
        $subtitle = isset($_POST['edital_subtitle']) ? sanitize_text_field($_POST['edital_subtitle']) : '';
        $location = isset($_POST['edital_location']) ? sanitize_text_field($_POST['edital_location']) : '';
        $link     = isset($_POST['edital_link']) ? esc_url_raw($_POST['edital_link']) : '';
        $btn      = isset($_POST['edital_btn']) ? sanitize_text_field($_POST['edital_btn']) : '';
        $featured = isset($_POST['edital_featured']) ? '1' : '0';

        update_post_meta($post_id, '_aja_badge', $badge);
        update_post_meta($post_id, '_aja_subtitle', $subtitle);
        update_post_meta($post_id, '_aja_subtitle_gt', $subtitle);
        update_post_meta($post_id, '_aja_location', $location);
        update_post_meta($post_id, '_aja_action_link', $link);
        update_post_meta($post_id, '_aja_pdf_url', $link);
        update_post_meta($post_id, '_aja_action_label', $btn);
        update_post_meta($post_id, '_aja_featured', $featured);
        update_post_meta($post_id, '_aja_featured_edital', $featured);

    } elseif ($active_tab === 'publicacoes') {
        $badge    = isset($_POST['pub_badge']) ? sanitize_text_field($_POST['pub_badge']) : '';
        $subtitle = isset($_POST['pub_subtitle']) ? sanitize_text_field($_POST['pub_subtitle']) : '';
        $location = isset($_POST['pub_location']) ? sanitize_text_field($_POST['pub_location']) : '';
        $link     = isset($_POST['pub_link']) ? esc_url_raw($_POST['pub_link']) : '';
        $btn      = isset($_POST['pub_btn']) ? sanitize_text_field($_POST['pub_btn']) : '';

        update_post_meta($post_id, '_aja_badge', $badge);
        update_post_meta($post_id, '_aja_subtitle', $subtitle);
        update_post_meta($post_id, '_aja_subtitle_gt', $subtitle);
        update_post_meta($post_id, '_aja_location', $location);
        update_post_meta($post_id, '_aja_action_link', $link);
        update_post_meta($post_id, '_aja_pdf_url', $link);
        update_post_meta($post_id, '_aja_action_label', $btn);
        update_post_meta($post_id, '_aja_featured', '0');
        update_post_meta($post_id, '_aja_featured_edital', '0');
        $pub_axis = isset($_POST['pub_axis']) ? sanitize_text_field($_POST['pub_axis']) : '';
        update_post_meta($post_id, '_aja_pub_axis', $pub_axis);

    } elseif ($active_tab === 'equipe') {
        $badge    = isset($_POST['equipe_role']) ? sanitize_text_field($_POST['equipe_role']) : '';
        $subtitle = isset($_POST['equipe_area']) ? sanitize_text_field($_POST['equipe_area']) : '';
        $location = isset($_POST['equipe_location']) ? sanitize_text_field($_POST['equipe_location']) : '';
        $link     = isset($_POST['equipe_link']) ? esc_url_raw($_POST['equipe_link']) : '';
        $order    = isset($_POST['equipe_order']) ? intval($_POST['equipe_order']) : 0;
        $instance = isset($_POST['equipe_instance']) ? sanitize_key($_POST['equipe_instance']) : 'comite';

        update_post_meta($post_id, '_aja_badge', $badge);
        update_post_meta($post_id, '_aja_subtitle', $subtitle);
        update_post_meta($post_id, '_aja_subtitle_gt', $subtitle);
        update_post_meta($post_id, '_aja_location', $location);
        update_post_meta($post_id, '_aja_action_link', $link);
        update_post_meta($post_id, '_aja_pdf_url', $link);
        update_post_meta($post_id, '_aja_team_order', $order);
        update_post_meta($post_id, '_aja_team_instance', $instance);

        if ($order >= 0) {
            remove_action('save_post', 'aja_save_post_metabox');
            wp_update_post(array('ID' => $post_id, 'menu_order' => $order));
            add_action('save_post', 'aja_save_post_metabox');
        }

    } elseif ($active_tab === 'noticias') {
        $badge    = isset($_POST['noticia_badge']) ? sanitize_text_field($_POST['noticia_badge']) : '';
        $subtitle = isset($_POST['noticia_subtitle']) ? sanitize_text_field($_POST['noticia_subtitle']) : '';
        $location = isset($_POST['noticia_location']) ? sanitize_text_field($_POST['noticia_location']) : '';
        $link     = isset($_POST['noticia_link']) ? esc_url_raw($_POST['noticia_link']) : '';
        $btn      = isset($_POST['noticia_btn']) ? sanitize_text_field($_POST['noticia_btn']) : '';

        update_post_meta($post_id, '_aja_badge', $badge);
        update_post_meta($post_id, '_aja_subtitle', $subtitle);
        update_post_meta($post_id, '_aja_subtitle_gt', $subtitle);
        update_post_meta($post_id, '_aja_location', $location);
        update_post_meta($post_id, '_aja_action_link', $link);
        update_post_meta($post_id, '_aja_pdf_url', $link);
        update_post_meta($post_id, '_aja_action_label', $btn);

    } else { // Portfólio (ou geral)
        $badge    = isset($_POST['portfolio_badge']) ? sanitize_text_field($_POST['portfolio_badge']) : '';
        $subtitle = isset($_POST['portfolio_subtitle']) ? sanitize_text_field($_POST['portfolio_subtitle']) : '';
        $location = isset($_POST['portfolio_location']) ? sanitize_text_field($_POST['portfolio_location']) : '';
        $link     = isset($_POST['portfolio_link']) ? esc_url_raw($_POST['portfolio_link']) : '';
        $btn      = isset($_POST['portfolio_btn']) ? sanitize_text_field($_POST['portfolio_btn']) : '';

        update_post_meta($post_id, '_aja_badge', $badge);
        update_post_meta($post_id, '_aja_subtitle', $subtitle);
        update_post_meta($post_id, '_aja_subtitle_gt', $subtitle);
        update_post_meta($post_id, '_aja_location', $location);
        update_post_meta($post_id, '_aja_action_link', $link);
        update_post_meta($post_id, '_aja_pdf_url', $link);
        update_post_meta($post_id, '_aja_action_label', $btn);

        // 3 Filtros do Portfólio
        if (isset($_POST['aja_type'])) {
            $type = sanitize_text_field($_POST['aja_type']);
            update_post_meta($post_id, '_aja_type', $type);
            $legacy_cat = 'all';
            if ($type === 'profissional') $legacy_cat = 'advocacia';
            elseif ($type === 'organizacao') $legacy_cat = 'sociedade';
            elseif ($type === 'pesquisador') $legacy_cat = 'pesquisa';
            update_post_meta($post_id, '_aja_portfolio_category', $legacy_cat);
        }
        if (isset($_POST['aja_territory'])) {
            update_post_meta($post_id, '_aja_territory', sanitize_text_field($_POST['aja_territory']));
        }
        if (isset($_POST['aja_theme'])) {
            update_post_meta($post_id, '_aja_theme', sanitize_text_field($_POST['aja_theme']));
        }

        update_post_meta($post_id, '_aja_featured', '0');
        update_post_meta($post_id, '_aja_featured_edital', '0');
        $pub_axis = isset($_POST['pub_axis']) ? sanitize_text_field($_POST['pub_axis']) : '';
        update_post_meta($post_id, '_aja_pub_axis', $pub_axis);
    }
}
add_action('save_post', 'aja_save_post_metabox');


/**
 * 6. Funções Utilitárias para Resgate de Informações
 */
function aja_asset($path) {
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

function aja_get_post_badge($post_id, $default = '') {
    $badge = get_post_meta($post_id, '_aja_badge', true);
    if (!empty($badge)) {
        return $badge;
    }
    $categories = get_the_category($post_id);
    if (!empty($categories)) {
        return $categories[0]->name;
    }
    return $default;
}

function aja_get_post_subtitle($post_id, $default = '') {
    $sub = get_post_meta($post_id, '_aja_subtitle', true);
    if (empty($sub)) {
        $sub = get_post_meta($post_id, '_aja_subtitle_gt', true);
    }
    return !empty($sub) ? $sub : $default;
}

function aja_get_post_location($post_id, $default = '') {
    $loc = get_post_meta($post_id, '_aja_location', true);
    return !empty($loc) ? $loc : $default;
}

function aja_get_post_action_link($post_id) {
    $link = get_post_meta($post_id, '_aja_action_link', true);
    if (empty($link)) {
        $link = get_post_meta($post_id, '_aja_pdf_url', true);
    }
    return !empty($link) ? $link : get_permalink($post_id);
}

function aja_get_post_action_label($post_id, $default = 'Ver Detalhes') {
    $label = get_post_meta($post_id, '_aja_action_label', true);
    return !empty($label) ? $label : $default;
}

function aja_get_portfolio_cat($post_id) {
    $type = get_post_meta($post_id, '_aja_type', true);
    if ($type === 'organizacao') return 'sociedade';
    if ($type === 'profissional') return 'advocacia';
    if ($type === 'pesquisador') return 'pesquisa';
    $cat = get_post_meta($post_id, '_aja_portfolio_category', true);
    return !empty($cat) ? $cat : 'all';
}

/**
 * 7. Aviso no Painel do WordPress com Botão de Criação de Postagens de Exemplo
 */
function aja_admin_notice_seeder() {
    if (!current_user_can('manage_options')) {
        return;
    }

    // Processar criação de posts de exemplo quando solicitado pelo botão
    if (isset($_GET['aja_seed_samples']) && $_GET['aja_seed_samples'] === '1') {
        aja_create_sample_posts();
        echo '<div class="notice notice-success is-dismissible"><p><strong>Aliança Jurídica pela Amazônia:</strong> Postagens de exemplo criadas com sucesso nas categorias <em>Portfólio</em>, <em>Editais</em> e <em>Publicações</em>!</p></div>';
        return;
    }

    // Verificar se já existem posts nas 3 categorias
    $portfolio_count = aja_count_category_posts('portfolio');
    $editais_count   = aja_count_category_posts('editais');
    $publicacoes_count = aja_count_category_posts('publicacoes');

    if ($portfolio_count === 0 && $editais_count === 0 && $publicacoes_count === 0) {
        $seed_url = admin_url('index.php?aja_seed_samples=1');
        ?>
        <div class="notice notice-info is-dismissible">
            <p>
                <strong>Bem-vindo ao Tema Aliança Jurídica pela Amazônia (AJA)!</strong><br>
                As 3 categorias (<strong>Portfólio</strong>, <strong>Editais</strong> e <strong>Publicações</strong>) já foram configuradas no seu WordPress.
                Deseja gerar as postagens de demonstração com os textos e imagens originais do modelo?
            </p>
            <p>
                <a href="<?php echo esc_url($seed_url); ?>" class="button button-primary">
                    Gerar Postagens de Demonstração da AJA
                </a>
            </p>
        </div>
        <?php
    }
}
add_action('admin_notices', 'aja_admin_notice_seeder');

function aja_count_category_posts($category_slug) {
    $cat = get_term_by('slug', $category_slug, 'category');
    return $cat ? $cat->count : 0;
}

/**
 * 8. Gerador de Postagens de Exemplo (Turnkey Demo Data)
 */
function aja_create_sample_posts() {
    $portfolio_term = get_term_by('slug', 'portfolio', 'category');
    $editais_term   = get_term_by('slug', 'editais', 'category');
    $publicacoes_term = get_term_by('slug', 'publicacoes', 'category');

    if (!$portfolio_term || !$editais_term || !$publicacoes_term) {
        aja_register_required_categories();
        $portfolio_term = get_term_by('slug', 'portfolio', 'category');
        $editais_term   = get_term_by('slug', 'editais', 'category');
        $publicacoes_term = get_term_by('slug', 'publicacoes', 'category');
    }

    // Amostras de Portfólio
    $portfolio_samples = array(
        array(
            'title'    => '[A preencher]',
            'content'  => '[A preencher]',
            'category' => 'advocacia',
            'badge'    => 'Advocacia Popular',
            'subtitle' => '[A preencher]',
        ),
        array(
            'title'    => '[A preencher]',
            'content'  => '[A preencher]',
            'category' => 'diretoria',
            'badge'    => 'Articulação & Conselho',
            'subtitle' => '[A preencher]',
        ),
        array(
            'title'    => '[A preencher]',
            'content'  => '[A preencher]',
            'category' => 'pesquisa',
            'badge'    => 'Pesquisa & Clínicas Jurídicas',
            'subtitle' => '[A preencher]',
        ),
        array(
            'title'    => '[A preencher]',
            'content'  => '[A preencher]',
            'category' => 'sociedade',
            'badge'    => 'Organizações da Sociedade Civil',
            'subtitle' => '[A preencher]',
        ),
    );

    foreach ($portfolio_samples as $item) {
        $post_id = wp_insert_post(array(
            'post_title'   => $item['title'],
            'post_content' => $item['content'],
            'post_excerpt' => $item['content'],
            'post_status'  => 'publish',
            'post_type'    => 'post',
            'post_category'=> array($portfolio_term->term_id),
        ));
        if ($post_id) {
            update_post_meta($post_id, '_aja_badge', $item['badge']);
            update_post_meta($post_id, '_aja_subtitle_gt', $item['subtitle']);
            update_post_meta($post_id, '_aja_portfolio_category', $item['category']);
        }
    }

    // Amostras de Editais
    $editais_samples = array();

    foreach ($editais_samples as $item) {
        $post_id = wp_insert_post(array(
            'post_title'   => $item['title'],
            'post_content' => $item['content'],
            'post_excerpt' => $item['content'],
            'post_status'  => 'publish',
            'post_type'    => 'post',
            'post_category'=> array($editais_term->term_id),
        ));
        if ($post_id) {
            update_post_meta($post_id, '_aja_badge', $item['badge']);
            update_post_meta($post_id, '_aja_subtitle_gt', $item['subtitle']);
            update_post_meta($post_id, '_aja_action_link', $item['link']);
            update_post_meta($post_id, '_aja_action_label', $item['label']);
            update_post_meta($post_id, '_aja_featured_edital', $item['featured']);
        }
    }

    // Amostras de Publicações (incluindo artigos da parceria institucional com o Portal Migalhas)
    $publicacoes_samples = array(
        array(
            'title'    => 'Empreendedorismo de impacto na Amazônia: quando o capital chega, e a lei não acompanha',
            'content'  => "<p>O investimento de impacto já está chegando à floresta. Mas as regras que organizam esse dinheiro ainda não enxergam quem está na ponta.</p><p>No artigo publicado no Portal Migalhas, <strong>Melquisedec Negrão Correa Jr.</strong>, gestor de projetos socioambientais, profissional quilombola e membro da Aliança Jurídica pela Amazônia (AJA), mostra que esses programas tratam como microempreendedor comum quem também é sujeito coletivo de direito, como indígenas, quilombolas e ribeirinhos, cujo saber e território pertencem ao grupo.</p><p>Como resposta, o artigo propõe reconhecer o empreendedor-comunidade nos editais, garantir repartição de benefícios e governança coletiva nos contratos e consultar as comunidades antes de desenhar os programas.</p><p class=\"text-primary font-semibold\">Reconhecer o empreendedor amazônida como sujeito coletivo é o que faz do capital de impacto um instrumento de justiça, e não apenas de renda.</p><hr class=\"my-6 border-border-subtle\"/><div class=\"p-4 rounded-xl bg-surface-container border border-border-subtle text-xs leading-relaxed\"><strong class=\"block text-ink-primary font-bold mb-1\">Sobre o Autor:</strong><strong>Melquisedec Negrão Correa Jr.</strong> — Gestor de projetos socioambientais e graduando em Direito, membro da Aliança Jurídica pela Amazônia (AJA). Profissional quilombola associado à CAINQUIAMA - Associação dos Caboclos, Indígenas e Quilombolas da Amazônia, com vínculo territorial em Vila dos Cabanos, Barcarena (PA). Há oito anos articula financiadores, empresas e territórios em projetos de bioeconomia e impacto socioambiental na Amazônia, com atuação em iniciativas de BNDES, Suzano, Vale, Petrobras e SEBRAE.</div>",
            'badge'    => 'Migalhas de Peso',
            'subtitle' => 'GT 03 • Bioeconomia & Povos Tradicionais',
            'axis'     => 'artigos',
            'link'     => 'https://www.migalhas.com.br/depeso/465946/empreendedorismo-de-impacto-na-amazonia-quando-o-capital-chega',
            'label'    => 'Ler Artigo no Migalhas',
        ),
        array(
            'title'    => 'Regularização sem contraditório territorial: a grilagem institucional na Amazônia',
            'content'  => "<p>A Amazônia foi tratada por décadas como um grande vazio a ser ocupado. Mas esse vazio nunca existiu: a floresta sempre esteve cheia de povos, comunidades, roças, rotas, cemitérios e formas próprias de ocupar e governar o território.</p><p>No artigo publicado no Portal Migalhas, <strong>José Vargas Junior</strong>, advogado popular e membro da Aliança Jurídica pela Amazônia (AJA), mostra como cadastros, certificações e títulos podem dar aparência de legalidade à grilagem de terras públicas.</p><p>O autor chama esse processo de “grilagem por fluxo”, uma soma de atos administrativos aparentemente regulares (um polígono cadastrado, limites certificados, vistoria dispensada, ocupação considerada consolidada) que, ao final, transforma conflito em título. Cada etapa pode parecer defensável isoladamente. O problema é que ninguém verificou quem ocupava o território e quem foi afastado dele.</p><p>Como resposta, o artigo propõe um ponto de controle obrigatório nos procedimentos de destinação e regularização fundiária, com triagem territorial, escuta e contraditório territorial antes de qualquer decisão, respeito aos protocolos comunitários de consulta e transparência em toda a trilha decisória.</p><p class=\"text-primary font-semibold\">Regularizar ouvindo não é atrasar a política fundiária: é impedir que o próprio Estado conclua a grilagem que deveria combater.</p><hr class=\"my-6 border-border-subtle\"/><div class=\"p-4 rounded-xl bg-surface-container border border-border-subtle text-xs leading-relaxed\"><strong class=\"block text-ink-primary font-bold mb-1\">Sobre o Autor:</strong><strong>Jose Vargas Junior</strong> — Advogado popular, mestre em Ciência e Meio Ambiente pela Universidade Federal do Pará (UFPA), membro da Aliança Jurídica pela Amazônia (AJA), articulador estadual da Rede Nacional de Advogadas e Advogados Populares no Pará (RENAP/PA) e cofundador do Coletivo Veredas. Atua na defesa do direito à terra e socioambientais na Amazônia.</div>",
            'badge'    => 'Migalhas de Peso',
            'subtitle' => 'GT 01 • Territórios & Direito Agrário',
            'axis'     => 'artigos',
            'link'     => 'https://www.migalhas.com.br/depeso/465305/regularizacao-sem-contraditorio-territorial-a-grilagem-institucional',
            'label'    => 'Ler Artigo no Migalhas',
        ),
        array(
            'title'    => 'Gerar energia, negar direitos: a construção do racismo energético na Amazônia',
            'content'  => "<p>No artigo publicado no Portal Migalhas, parceiro da AJA, <strong>Julia Soares</strong>, membro da AJA, mostra que o problema da infraestrutura não termina quando a rede elétrica chega ao território. Há interrupções frequentes, tarifas incompatíveis com a renda das famílias e soluções técnicas desenhadas sem a participação prévia das comunidades locais.</p><p>A autora analisa como o modelo atual reproduz lógicas de exclusão histórica e defende que reconhecer povos indígenas, quilombolas e ribeirinhos como sujeitos legítimos da governança energética é parte fundamental da justiça energética e climática.</p><hr class=\"my-6 border-border-subtle\"/><div class=\"p-4 rounded-xl bg-surface-container border border-border-subtle text-xs leading-relaxed\"><strong class=\"block text-ink-primary font-bold mb-1\">Sobre a Autora:</strong><strong>Julia Soares</strong> — Bacharela em Direito pela Universidade de São Paulo (USP), atua em direitos dos povos indígenas e comunidades tradicionais, participação social e políticas públicas. É Analista de Políticas Públicas Jr. no Instituto de Defesa de Consumidores (IDEC), no Programa Clima e Consumo, e integra a Rede Energia & Comunidades. É membro da Aliança Jurídica pela Amazônia (AJA), no GT Território.</div>",
            'badge'    => 'Migalhas de Peso',
            'subtitle' => 'GT 01 • Territórios & Justiça Energética',
            'axis'     => 'artigos',
            'link'     => 'https://www.migalhas.com.br/depeso/464869/gerar-energia-negar-direitos-a-construcao-do-racismo-energetico',
            'label'    => 'Ler Artigo no Migalhas',
        ),
        array(
            'title'    => 'A Amazônia como problema jurídico: por que a proteção do bioma depende da força das instituições',
            'content'  => "<p>Artigo inaugural que celebra a parceria editorial entre a Aliança Jurídica pela Amazônia (AJA) e o Portal Migalhas.</p><p>A Amazônia é frequentemente compreendida a partir de suas dimensões ambiental, econômica e climática. Mas os desafios da região também são, essencialmente, jurídicos e institucionais.</p><p>A efetividade da proteção do bioma, a garantia de direitos, a segurança dos territórios e a construção de uma governança capaz de responder às complexidades amazônicas dependem de instituições fortes, democráticas e capazes de fazer valer o Estado de Direito.</p><p>É a partir dessa perspectiva que damos início a esta parceria: ampliando o debate sobre a Amazônia e fortalecendo a produção e a circulação de conhecimento jurídico sobre a região.</p><hr class=\"my-6 border-border-subtle\"/><div class=\"p-4 rounded-xl bg-surface-container border border-border-subtle text-xs leading-relaxed\"><strong class=\"block text-ink-primary font-bold mb-1\">Sobre as Autorias:</strong><p class=\"mb-1\"><strong>Yanê Amoras:</strong> Advogada, graduada em Direito pela UFPA. Diretora Executiva da AJA e Head de Pesquisa Jurídica na Amazon Investor Coalition (AIC).</p><p class=\"mb-1\"><strong>Ciro de Souza Brito:</strong> Advogado especialista em Governança Climática e mestre em Desenvolvimento Sustentável. Diretor de Relacionamentos Institucionais da AJA.</p><p><strong>Isayana Silva:</strong> Bacharel em Direito e socioambientalista. Secretária Executiva da AJA, ativista climática e consultora em projetos de sociobioeconomia.</p></div>",
            'badge'    => 'Migalhas de Peso',
            'subtitle' => 'Institucional • Estado de Direito Amazônico',
            'axis'     => 'artigos',
            'link'     => 'https://www.migalhas.com.br/depeso/463655/a-amazonia-como-problema-juridico-por-que-depende-das-instituicoes',
            'label'    => 'Ler Artigo no Migalhas',
        ),
        array(
            'title'    => 'O STF como bússola da política climática: Lições da ADPF 760 para as eleições de 2026',
            'content'  => "<p>Nossa parceria com o Portal Migalhas segue com a publicação de mais um artigo de peso. O que a ADPF 760 revela sobre os limites da judicialização climática é o que você descobre neste texto escrito por <strong>Rafaela Carderone</strong>, membro da AJA.</p><p>O artigo analisa o julgamento histórico da ADPF 760 perante o Supremo Tribunal Federal e o que ele nos ensina sobre até onde o Judiciário pode ir na proteção socioambiental, e onde essa proteção passa a depender de outros caminhos democráticos. Em ano eleitoral, a autora defende que blindar a Amazônia não pode ser tarefa de uma única instituição: exige voto consciente e mobilização permanente da sociedade civil organizada.</p><hr class=\"my-6 border-border-subtle\"/><div class=\"p-4 rounded-xl bg-surface-container border border-border-subtle text-xs leading-relaxed\"><strong class=\"block text-ink-primary font-bold mb-1\">Sobre a Autora:</strong><strong>Rafaela Carderone</strong> — Estudante de graduação na FGV Direito SP, mobilizadora em justiça climática intergeracional e membro da AJA - Aliança Jurídica pela Amazônia.</div>",
            'badge'    => 'Migalhas de Peso',
            'subtitle' => 'GT 02 • Litigância Climática & STF',
            'axis'     => 'artigos',
            'link'     => 'https://www.migalhas.com.br/depeso/464276/o-stf-como-bussola-da-politica-climatica-licoes-da-adpf-760',
            'label'    => 'Ler Artigo no Migalhas',
        ),
        array(
            'title'    => 'As discussões sobre o Direito no Bioeconomy Amazon Summit',
            'content'  => "<p class=\"lead font-medium text-lg text-ink-primary\">No Bioeconomy Amazon Summit (BAS), em Belém, uma das discussões mais potentes do evento não veio da tecnologia ou dos negócios, mas do Direito.</p><p>O artigo de <strong>Isayana Oliveira</strong> e <strong>Yanê Amoras Lima</strong> mostra como a sociobioeconomia amazônica depende de algo muitas vezes invisibilizado: a segurança jurídica dos territórios, o reconhecimento das formas comunitárias de organização e o acesso efetivo à justiça.</p><p>Mais do que um tema técnico, o Direito aparece como base estrutural da bioeconomia: ele define quem pode acessar recursos, como os territórios são protegidos e de que forma as comunidades conseguem permanecer na floresta com autonomia. Sem isso, não há floresta em pé — nem economia sustentável possível.</p><hr class=\"my-6 border-border-subtle\"/><p>O <strong>Bioeconomy Amazon Summit (BAS)</strong> aportou em Belém, entre os dias 12 e 14 de maio, nas estruturas do Parque de Bioeconomia da Amazônia. Quem esteve no BAS presenciou uma grande confluência de experiências, saberes e perspectivas sobre negócios, economias e inovações neste que é o maior evento do mundo sobre Bioeconomia na Amazônia. O evento parte de uma premissa fundamental: sem mudanças profundas nos modelos de negócios, não há trajetória viável para conter a perda de biodiversidade na região.</p><p>Um dos temas que mais chamou atenção foi a discussão sobre o papel do Direito, liderada pela <strong>Aliança Jurídica pela Amazônia</strong>. O que parecia ser um tema periférico acabou tendo grande repercussão, justamente pela visão trazida nas contribuições dos painelistas da sessão <em>“Direito, Povos e Economias da Amazônia: o que sustenta a floresta em pé?”</em>, no último dia 12 de maio.</p><p>O ponto de partida foi reconhecer que não é possível estruturar uma sociobioeconomia forte em territórios fragilizados. A floresta em pé não se sustenta apenas por uma lógica econômica — ela depende de direitos garantidos, segurança territorial, acesso à justiça e instituições capazes de proteger quem vive e produz na Amazônia.</p><hr class=\"my-6 border-border-subtle\"/><div class=\"p-4 rounded-xl bg-surface-container border border-border-subtle text-xs leading-relaxed\"><strong class=\"block text-ink-primary font-bold mb-1\">Sobre as Autorias:</strong><p class=\"mb-1\"><strong>Isayana Oliveira:</strong> Bacharel em Direito, socioambientalista e Secretária Executiva da AJA.</p><p><strong>Yanê Amoras Lima:</strong> Advogada, Diretora Executiva da AJA e Head de Pesquisa Jurídica na Amazon Investor Coalition (AIC).</p></div>",
            'badge'    => 'Amazônia Vox',
            'subtitle' => 'Isayana Oliveira & Yanê Amoras Lima',
            'axis'     => 'artigos',
            'link'     => 'https://www.amazoniavox.com/artigos/view/44/pt-br/as_discussoes_sobre_o_direito_no_bioeconomy_amazon_summit',
            'label'    => 'Ler no Amazônia Vox',
        ),
        array(
            'title'    => 'Salvaguardas Mandatórias para Créditos de Carbono Jurisdicionais na Amazônia',
            'content'  => 'Análise comparativa das regulações estaduais frente aos padrões internacionais de integridade e direitos territoriais dos povos tradicionais e comunidades da floresta.',
            'badge'    => 'Nota Técnica',
            'subtitle' => 'GT 03 • Finanças Sustentáveis',
            'axis'     => 'notas',
            'link'     => '#',
            'label'    => 'Ver Parecer',
        ),
        array(
            'title'    => 'A Litigância Climática Brasileira nos Tribunais Superiores: Mapeamento de Julgados',
            'content'  => 'Compilado de acórdãos com teses fixadas sobre prescrição de ilícitos ambientais, recomposição de áreas e tutela preventiva socioecológica perante o STF e STJ.',
            'badge'    => 'Dossiê Jurídico',
            'subtitle' => 'GT 02 • Litigância Estratégica',
            'axis'     => 'dossies',
            'link'     => '#',
            'label'    => 'Ver Dossiê',
        ),
        array(
            'title'    => 'Protocolos Autônomos de Consulta: Manual de Redação e Validação Jurídica',
            'content'  => 'Instrumento metodológico construído em conjunto com lideranças indígenas para guiar comunidades na formulação de seus próprios protocolos conforme a Convenção 169 da OIT.',
            'badge'    => 'Guia Prático',
            'subtitle' => 'GT 01 • Territórios & PIQCTs',
            'axis'     => 'dossies',
            'link'     => '#',
            'label'    => 'Ver Manual',
        ),
    );

    foreach ($publicacoes_samples as $item) {
        $post_id = wp_insert_post(array(
            'post_title'   => $item['title'],
            'post_content' => $item['content'],
            'post_excerpt' => wp_strip_all_tags(wp_trim_words($item['content'], 30)),
            'post_status'  => 'publish',
            'post_type'    => 'post',
            'post_category'=> array($publicacoes_term->term_id),
        ));
        if ($post_id) {
            update_post_meta($post_id, '_aja_badge', $item['badge']);
            update_post_meta($post_id, '_aja_subtitle_gt', $item['subtitle']);
            update_post_meta($post_id, '_aja_subtitle', $item['subtitle']);
            update_post_meta($post_id, '_aja_action_link', $item['link']);
            update_post_meta($post_id, '_aja_action_label', $item['label']);
            if (!empty($item['axis'])) {
                update_post_meta($post_id, '_aja_pub_axis', $item['axis']);
            }
        }
    }
}

/**
 * Proteção e Resolução Dinâmica de Templates do Tema:
 * Garante que templates customizados do tema (como page-sobre-nos.php, page-atuacao.php, etc.)
 * e páginas por slug sejam renderizados com fidelidade total e nunca sobrescritos pelo Elementor.
 */
add_filter('template_include', function($template) {
    if (is_front_page()) {
        $theme_template = locate_template('front-page.php');
        if (!empty($theme_template) && file_exists($theme_template)) {
            return $theme_template;
        }
    }

    if (is_singular('page')) {
        $post_id = get_the_ID();
        $page_template = get_page_template_slug($post_id);
        if (!empty($page_template) && $page_template !== 'default' && strpos($page_template, 'elementor_') !== 0) {
            $theme_template = locate_template($page_template);
            if (!empty($theme_template) && file_exists($theme_template)) {
                return $theme_template;
            }
        }
        
        // Mapeamento automático de templates por slug da página
        $page_slug = get_post_field('post_name', $post_id);
        $slug_map = array(
            'sobre-nos'      => 'page-sobre-nos.php',
            'historia'       => 'page-historia.php',
            'nossa-historia' => 'page-nossa-historia.php',
            'atuacao'        => 'page-atuacao.php',
            'estrutura'      => 'page-estrutura.php',
            'portfolio'      => 'page-portfolio.php',
            'editais'        => 'page-editais.php',
            'publicacoes'    => 'page-publicacoes.php',
            'conhecimento'   => 'page-conhecimento.php',
            'noticias'       => 'page-noticias.php',
            'parcerias'      => 'page-parcerias.php',
            'faca-parte'     => 'page-faca-parte.php',
            'seja-membro'    => 'page-seja-membro.php',
            'contato'        => 'page-contato.php',
            'contact'        => 'page-contact.php',
        );
        if (isset($slug_map[$page_slug])) {
            $theme_template = locate_template($slug_map[$page_slug]);
            if (!empty($theme_template) && file_exists($theme_template)) {
                return $theme_template;
            }
        }
    }
    return $template;
}, 99);

/**
 * Helper para renderização da Chamada de Ação "Faça Parte" (Padrão PPA)
 */
if (!function_exists('aja_render_faca_parte_cta')) {
    function aja_render_faca_parte_cta() {
        get_template_part('template-parts/cta-faca-parte');
    }
}

/**
 * 8. Suporte Institucional e SEO para Artigos em Parceria (Migalhas & Portais Jurídicos)
 */
if (!function_exists('aja_is_migalhas_post')) {
    function aja_is_migalhas_post($post_id = null) {
        if (!$post_id) $post_id = get_the_ID();
        if (!$post_id) return false;
        $action_link = get_post_meta($post_id, '_aja_action_link', true);
        $badge       = get_post_meta($post_id, '_aja_badge', true);
        return (!empty($action_link) && strpos($action_link, 'migalhas.com.br') !== false) || (stripos($badge, 'migalhas') !== false);
    }
}

add_action('wp_head', function() {
    if (is_singular('post')) {
        $post_id     = get_the_ID();
        $action_link = get_post_meta($post_id, '_aja_action_link', true);
        if (!empty($action_link) && filter_var($action_link, FILTER_VALIDATE_URL)) {
            if (strpos($action_link, 'migalhas.com.br') !== false) {
                echo "\n<!-- Parceria Editorial AJA & Portal Migalhas (Atribuição Canônica e Fonte Original) -->\n";
                echo '<meta name="original-source" content="' . esc_url($action_link) . '" />' . "\n";
                echo '<meta property="og:see_also" content="' . esc_url($action_link) . '" />' . "\n";
            }
        }
    }
}, 5);


