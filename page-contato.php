<?php
/**
 * Template Name: Página - Contato
 * Description: Página dedicada aos canais oficiais de comunicação, e-mails setoriais, polos e boletim da AJA.
 */

get_header();
?>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">

  <!-- HERO DO CONTATO -->
  <section class="w-full py-16 lg:py-20 bg-surface-container-low border-b border-border-subtle relative overflow-hidden">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
        <div class="lg:col-span-7 flex flex-col justify-center">
          <div class="flex items-center gap-2.5 mb-3">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="font-label-sm text-xs text-on-surface-variant hover:text-primary transition-colors">Início</a>
            <span class="text-xs text-outline">/</span>
            <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider">Contato</span>
          </div>

          <div class="flex items-center gap-3 mb-2">
            <span class="w-8 h-[2px] bg-secondary"></span>
            <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Canais Institucionais</span>
          </div>

          <h1 class="font-headline-lg text-3xl sm:text-4xl lg:text-5xl text-ink-primary font-bold leading-tight max-w-3xl">
            Contato
          </h1>

          <p class="font-body-lg text-body-md text-on-surface-variant max-w-2xl mt-4 leading-relaxed">
            A Aliança Jurídica pela Amazônia (AJA) valoriza o diálogo e a colaboração com profissionais, organizações e instituições comprometidas com a justiça socioambiental e o fortalecimento do Estado de Direito na Amazônia.
          </p>
          <p class="font-body-lg text-body-md text-on-surface-variant max-w-2xl mt-2 leading-relaxed">
            Entre em contato conosco para saber mais sobre nossas iniciativas, parcerias e formas de atuação.
          </p>

          <div class="flex flex-wrap items-center gap-2.5 mt-8 pt-6 border-t border-border-subtle/80">
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              📬 Diálogo Contínuo
            </span>
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              🌿 Articulação em Rede
            </span>
            <span class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-border-subtle text-xs font-bold text-ink-primary">
              ⚖️ Parcerias &amp; Apoio
            </span>
          </div>
        </div>

        <div class="lg:col-span-5">
          <div class="relative rounded-2xl overflow-hidden shadow-lg border border-border-subtle group h-[360px] sm:h-[400px] lg:h-[420px] bg-earth-dark">
            <img src="<?php echo esc_url(aja_asset('fotos/canoas-na-curva-do-rio.jpg')); ?>"
                 alt="Canoas na curva de rio amazônico"
                 class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-earth-dark/90 via-earth-dark/30 to-transparent flex flex-col justify-end p-6 sm:p-7">
              <span class="px-2.5 py-1 rounded bg-secondary text-white font-label-sm text-[11px] font-bold uppercase tracking-wider w-fit mb-2">Presença Amazônica</span>
              <p class="text-white font-title-sm text-sm sm:text-base font-semibold leading-snug">
                "Canais de diálogo abertos para conectar causas e soluções nos territórios."
              </p>
              <p class="text-surface-container-high text-xs mt-1 font-body-sm opacity-90">
                Aliança Jurídica pela Amazônia • Canais Oficiais
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEÇÃO PRINCIPAL DE CONTATO E CANAIS -->
  <section class="w-full py-16 lg:py-20 bg-surface border-b border-border-subtle" id="canais-contato">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

        <!-- Coluna da Esquerda: Canais e Polos -->
        <div class="lg:col-span-6 flex flex-col gap-8">
          <div>
            <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Comunicação Direta</span>
            <h2 class="font-headline-md text-2xl sm:text-3xl text-ink-primary font-bold mt-1">
              Canais Oficiais
            </h2>
            <p class="font-body-md text-body-md text-on-surface-variant mt-2 leading-relaxed">
              Consulte nossos canais de contato institucional e relacionamento com a rede.
            </p>
          </div>

          <!-- Cards de Canais -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Email Sede -->
            <div class="p-5 rounded-2xl bg-surface-container-lowest border border-border-subtle shadow-xs flex flex-col justify-between">
              <div>
                <span class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-3">
                  <span class="material-symbols-outlined text-[20px]">mail</span>
                </span>
                <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold">Institucional</span>
                <h4 class="font-title-md text-base font-bold text-ink-primary mt-0.5">Contato Geral</h4>
                <p class="text-xs text-on-surface-variant mt-1">Iniciativas, parcerias e formas de atuação da Aliança.</p>
              </div>
              <a href="mailto:sede@ajamazonia.org" class="mt-4 pt-3 border-t border-border-subtle text-xs font-bold text-primary hover:underline">
                sede@ajamazonia.org
              </a>
            </div>

            <!-- Email Adesões e Dúvidas -->
            <div class="p-5 rounded-2xl bg-surface-container-lowest border border-border-subtle shadow-xs flex flex-col justify-between">
              <div>
                <span class="w-10 h-10 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center mb-3">
                  <span class="material-symbols-outlined text-[20px]">help_outline</span>
                </span>
                <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold">Dúvidas &amp; Informações</span>
                <h4 class="font-title-md text-base font-bold text-ink-primary mt-0.5">Adesões &amp; Editais</h4>
                <p class="text-xs text-on-surface-variant mt-1">Dúvidas sobre o formulário de adesão, editais ou contato institucional.</p>
              </div>
              <a href="mailto:info@ajamazonia.org" class="mt-4 pt-3 border-t border-border-subtle text-xs font-bold text-secondary hover:underline">
                info@ajamazonia.org
              </a>
            </div>

            <!-- Redes Sociais -->
            <div class="p-5 rounded-2xl bg-surface-container-lowest border border-border-subtle shadow-xs flex flex-col justify-between">
              <div>
                <span class="w-10 h-10 rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center mb-3">
                  <span class="material-symbols-outlined text-[20px]">share</span>
                </span>
                <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold">Redes Oficiais</span>
                <h4 class="font-title-md text-base font-bold text-ink-primary mt-0.5">Instagram &amp; LinkedIn</h4>
                <p class="text-xs text-on-surface-variant mt-1">Acompanhe manifestações públicas e notícias da rede.</p>
              </div>
              <div class="mt-4 pt-3 border-t border-border-subtle flex items-center gap-4 text-xs font-bold">
                <a href="https://www.instagram.com/ajamazonia/" target="_blank" rel="noopener noreferrer" class="text-primary hover:underline">
                  Instagram
                </a>
                <a href="https://www.linkedin.com/company/alian%C3%A7a-jur%C3%ADdica-pela-amaz%C3%B4nia/?originalSubdomain=br" target="_blank" rel="noopener noreferrer" class="text-primary hover:underline">
                  LinkedIn
                </a>
              </div>
            </div>

            <!-- Sede / Endereço Físico Placeholder -->
            <div class="p-5 rounded-2xl bg-surface-container-lowest border border-dashed border-border-subtle shadow-xs flex flex-col justify-between">
              <div>
                <span class="w-10 h-10 rounded-xl bg-surface-container text-on-surface-variant flex items-center justify-center mb-3">
                  <span class="material-symbols-outlined text-[20px]">pin_drop</span>
                </span>
                <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline font-semibold">Sede Institucional</span>
                <h4 class="font-title-md text-base font-bold text-ink-primary mt-0.5">[Endereço a preencher]</h4>
                <p class="text-xs text-on-surface-variant mt-1">[Espaço para endereço físico ou representação territorial a preencher].</p>
              </div>
              <span class="mt-4 pt-3 border-t border-border-subtle text-xs font-semibold text-outline">
                Amazônia Brasileira
              </span>
            </div>
          </div>

          <!-- Caixa do Boletim / Newsletter -->
          <div class="bg-surface-container-low p-6 lg:p-8 rounded-2xl border border-border-subtle shadow-sm flex flex-col gap-4">
            <div class="flex items-center gap-3">
              <span class="w-9 h-9 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                <span class="material-symbols-outlined text-[22px]">forward_to_inbox</span>
              </span>
              <div>
                <span class="text-[11px] font-label-sm uppercase tracking-wider text-primary font-bold">Boletim Territorial</span>
                <h3 class="font-title-lg text-base font-bold text-ink-primary">Assine Nossa Newsletter</h3>
              </div>
            </div>
            <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed">
              Receba análises jurídicas exclusivas, notas técnicas sobre julgamentos ambientais e comunicados institucionais da rede.
            </p>
            <div class="flex flex-col sm:flex-row gap-2 mt-1">
              <input
                class="flex-1 h-11 px-4 rounded-xl bg-surface-container-lowest text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary border border-border-subtle text-xs"
                placeholder="Seu e-mail institucional" type="email" id="contact-newsletter-input" />
              <button
                class="h-11 px-5 rounded-xl bg-primary hover:bg-moss-light text-on-primary font-label-md text-xs uppercase tracking-wider transition-colors shrink-0 font-bold shadow-sm"
                type="button" onclick="alert('Obrigado pelo interesse! Seu cadastro no Boletim foi recebido.');">
                Cadastrar
              </button>
            </div>
          </div>
        </div>

        <!-- Coluna da Direita: Formulário de Mensagem Direta -->
        <div class="lg:col-span-6 bg-surface-container-lowest p-8 lg:p-10 rounded-3xl border border-border-subtle shadow-sm flex flex-col gap-6">
          <div>
            <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Fale Conosco</span>
            <h3 class="font-headline-sm text-2xl font-bold text-ink-primary mt-1">
              Envie uma Mensagem
            </h3>
            <p class="font-body-sm text-xs text-on-surface-variant mt-2 leading-relaxed">
              Preencha os campos abaixo para enviar sua mensagem diretamente à nossa equipe de coordenação.
            </p>
          </div>

          <form id="contact-form" onsubmit="event.preventDefault(); alert('Mensagem enviada com sucesso! Nossa equipe retornará em breve.'); this.reset();" class="flex flex-col gap-4">
            <div>
              <label class="block text-xs font-label-md font-bold uppercase tracking-wider text-ink-primary mb-1.5" for="c-name">
                Nome Completo *
              </label>
              <input type="text" id="c-name" required placeholder="Seu nome"
                     class="w-full h-11 px-4 rounded-xl bg-surface-container-low border border-border-subtle text-xs text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" />
            </div>

            <div>
              <label class="block text-xs font-label-md font-bold uppercase tracking-wider text-ink-primary mb-1.5" for="c-email">
                E-mail Institucional *
              </label>
              <input type="email" id="c-email" required placeholder="seu.email@exemplo.org"
                     class="w-full h-11 px-4 rounded-xl bg-surface-container-low border border-border-subtle text-xs text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" />
            </div>

            <div>
              <label class="block text-xs font-label-md font-bold uppercase tracking-wider text-ink-primary mb-1.5" for="c-org">
                Organização / Coletivo / Universidade
              </label>
              <input type="text" id="c-org" placeholder="Nome da sua instituição (opcional)"
                     class="w-full h-11 px-4 rounded-xl bg-surface-container-low border border-border-subtle text-xs text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" />
            </div>

            <div>
              <label class="block text-xs font-label-md font-bold uppercase tracking-wider text-ink-primary mb-1.5" for="c-subject">
                Assunto *
              </label>
              <select id="c-subject" required
                      class="w-full h-11 px-4 rounded-xl bg-surface-container-low border border-border-subtle text-xs text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary">
                <option value="">Selecione o assunto...</option>
                <option value="adesao">Dúvidas sobre Adesão à Rede</option>
                <option value="gt1">GT Território, Segurança e Acesso à Justiça</option>
                <option value="gt2">GT Litigância e Ativismo Judicial</option>
                <option value="gt3">GT Finanças Sustentáveis & Sociobiodiversidade</option>
                <option value="parceria">Proposta de Parceria ou Apoio</option>
                <option value="imprensa">Imprensa / Comunicação</option>
                <option value="outro">Outros Assuntos</option>
              </select>
            </div>

            <div>
              <label class="block text-xs font-label-md font-bold uppercase tracking-wider text-ink-primary mb-1.5" for="c-message">
                Mensagem *
              </label>
              <textarea id="c-message" rows="4" required placeholder="Escreva sua mensagem aqui..."
                        class="w-full p-4 rounded-xl bg-surface-container-low border border-border-subtle text-xs text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary"></textarea>
            </div>

            <button type="submit"
                    class="w-full py-3.5 px-6 rounded-xl bg-primary hover:bg-moss-light text-on-primary font-label-md text-xs uppercase tracking-wider font-bold transition-all shadow-sm flex items-center justify-center gap-2">
              <span>Enviar Mensagem</span>
              <span class="material-symbols-outlined text-[18px]">send</span>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA FAÇA PARTE NO FINAL DA PÁGINA (PADRÃO PPA) -->
  <?php get_template_part('template-parts/cta-faca-parte'); ?>

</main>

<?php get_footer(); ?>
