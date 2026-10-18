  <!-- RODAPÉ INSTITUCIONAL -->
  <footer class="w-full bg-earth-dark text-surface-container-lowest border-t border-border-subtle/20">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin pt-space-xl pb-space-lg">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-gutter mb-space-xl">
        <div class="lg:col-span-5 flex flex-col gap-space-md">
          <div class="flex items-center gap-space-md">
            <img alt="Logotipo AJA" class="w-9 h-9 object-contain rounded" src="<?php echo esc_url(aja_asset('logos/logo-azul.png')); ?>" />
            <div class="flex flex-col">
              <span class="font-title-lg text-title-lg text-surface-container-lowest font-bold">AJA</span>
              <span class="font-label-sm text-label-sm uppercase tracking-wider text-river-sky">Aliança Jurídica pela Amazônia</span>
            </div>
          </div>
          <p class="font-body-md text-body-md text-surface-container-high max-w-md">
            Rede Jurídica voltada à articulação e colaboração de diversos atores em prol do fortalecimento do Estado de Direito, da governança territorial e da justiça socioambiental na Amazônia brasileira.
          </p>
          <div class="flex items-center gap-2 mt-2">
            <span class="w-2 h-2 rounded-full bg-cyan-accent inline-block"></span>
            <span class="font-label-sm text-label-sm text-surface-container-high tracking-wider uppercase">Plataforma de Articulação Ativa</span>
          </div>

          <!-- Social Media Links -->
          <div class="flex items-center gap-3 mt-3">
            <a href="https://www.instagram.com/ajamazonia/" target="_blank" rel="noopener noreferrer"
              class="w-9 h-9 rounded-lg bg-surface-container-lowest/10 hover:bg-surface-container-lowest/20 flex items-center justify-center text-surface-container-lowest hover:text-white transition-colors"
              aria-label="Instagram da AJA" title="Instagram">
              <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
              </svg>
            </a>
            <a href="https://www.linkedin.com/company/alian%C3%A7a-jur%C3%ADdica-pela-amaz%C3%B4nia/?originalSubdomain=br" target="_blank" rel="noopener noreferrer"
              class="w-9 h-9 rounded-lg bg-surface-container-lowest/10 hover:bg-surface-container-lowest/20 flex items-center justify-center text-surface-container-lowest hover:text-white transition-colors"
              aria-label="LinkedIn da AJA" title="LinkedIn">
              <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
              </svg>
            </a>
          </div>
        </div>

        <!-- Coluna 1: Quem somos & Estrutura -->
        <div class="lg:col-span-2 flex flex-col gap-space-sm">
          <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary-fixed-dim font-bold mb-2">Quem Somos</span>
          <ul class="flex flex-col gap-2 font-body-sm text-body-sm text-surface-container-high">
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/sobre-nos/')); ?>">Sobre a Aliança</a></li>
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/nossa-historia/')); ?>">Nossa História</a></li>
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/atuacao/')); ?>">Atuação & GTs</a></li>
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/estrutura/')); ?>">Estrutura</a></li>
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/elementos/')); ?>">Identidade &amp; Elementos</a></li>
          </ul>
        </div>

        <!-- Coluna 2: Quem faz parte & Conhecimento -->
        <div class="lg:col-span-2 flex flex-col gap-space-sm">
          <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary-fixed-dim font-bold mb-2">Rede & Produção</span>
          <ul class="flex flex-col gap-2 font-body-sm text-body-sm text-surface-container-high">
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/portfolio/')); ?>">Portfólio / Membros</a></li>
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/parcerias/')); ?>">Parceiros Estratégicos</a></li>
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/publicacoes/')); ?>">Publicações</a></li>
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/editais/')); ?>">Editais</a></li>
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/noticias/')); ?>">Notícias</a></li>
          </ul>
        </div>

        <!-- Coluna 3: Engajamento & Adesão -->
        <div class="lg:col-span-3 flex flex-col gap-space-md">
          <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary-fixed-dim font-bold">Faça Parte</span>
          <p class="font-body-sm text-body-sm text-surface-container-high">
            Espaço aberto para advogados(as), pesquisadores(as), coletivos, clínicas e entidades socioambientais.
          </p>
          <div class="flex flex-col gap-2">
            <a class="inline-flex items-center justify-center px-4 py-2.5 bg-primary text-on-primary font-label-md text-label-md rounded-lg uppercase tracking-wider hover:bg-moss-light transition-colors font-bold text-center shadow-sm"
              href="<?php echo esc_url(home_url('/faca-parte/')); ?>">
              Adesão à Rede AJA
            </a>
            <a class="inline-flex items-center justify-center px-4 py-2 bg-surface-container-lowest/10 text-surface-container-lowest font-label-sm text-xs rounded-lg uppercase tracking-wider hover:bg-surface-container-lowest/20 transition-colors font-medium text-center"
              href="<?php echo esc_url(home_url('/contato/')); ?>">
              Fale Conosco
            </a>
          </div>
        </div>
      </div>

      <div
        class="pt-space-md flex flex-col sm:flex-row items-center justify-between gap-space-md text-surface-container text-body-sm font-body-sm border-t border-surface-container-high/20">
        <p>© <?php echo date('Y'); ?> Aliança Jurídica pela Amazônia. Todos os direitos reservados.</p>
        <div class="flex items-center gap-space-md font-label-sm text-label-sm">
          <a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/')); ?>">Início</a>
          <span class="opacity-30">|</span>
          <a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/sobre-nos/')); ?>">Sobre</a>
          <span class="opacity-30">|</span>
          <a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/faca-parte/')); ?>">Adesão</a>
          <span class="opacity-30">|</span>
          <a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/contato/')); ?>">Contato</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- MODAL GLOBAL DE BIO COMPLETA DOS MEMBROS (COMITÊ, CONSELHO E LÍDERES DE GT) -->
  <div id="aja-member-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 sm:p-6 bg-ink-primary/65 backdrop-blur-xs transition-opacity duration-200" role="dialog" aria-modal="true" aria-labelledby="aja-modal-member-name">
    <div id="aja-member-modal-dialog" class="relative w-full max-w-xl bg-surface-container-lowest border border-border-subtle rounded-2xl shadow-2xl overflow-hidden flex flex-col max-h-[90vh] animate-fadeIn">

      <!-- Botão de fechar ( canto superior direito ) -->
      <button type="button" id="aja-member-modal-close" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-ink-primary flex items-center justify-center transition-colors z-10" aria-label="Fechar janela">
        <span class="material-symbols-outlined text-[20px]">close</span>
      </button>

      <!-- Cabeçalho do Perfil -->
      <div class="p-6 sm:p-7 pb-5 border-b border-border-subtle/80 flex flex-col sm:flex-row items-center sm:items-start gap-5 text-center sm:text-left bg-surface-container-low/50">
        <div id="aja-modal-member-avatar-wrap" class="w-24 h-24 sm:w-28 sm:h-28 shrink-0 bg-transparent flex items-center justify-center">
          <img id="aja-modal-member-img" src="" alt="" class="w-full h-full object-contain object-center drop-shadow-sm hidden" />
          <svg id="aja-modal-member-fallback" class="w-12 h-12 text-outline opacity-50" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
        </div>

        <div class="flex flex-col items-center sm:items-start flex-1 pr-0 sm:pr-8">
          <span id="aja-modal-member-badge" class="inline-block text-[11px] font-bold uppercase tracking-wider px-2.5 py-1 rounded border mb-2 bg-primary-fixed/40 text-primary border-primary-fixed">
            Integrante AJA
          </span>

          <h3 id="aja-modal-member-name" class="font-headline-sm text-xl sm:text-2xl font-bold text-ink-primary leading-tight">
            Nome do Integrante
          </h3>

          <p id="aja-modal-member-subtitle" class="text-xs sm:text-sm font-semibold text-secondary mt-1">
          </p>

          <div id="aja-modal-member-location-wrap" class="hidden items-center gap-1.5 text-xs text-outline mt-2">
            <svg class="w-3.5 h-3.5 text-secondary shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            <span id="aja-modal-member-location"></span>
          </div>
        </div>
      </div>

      <!-- Corpo com a Bio Completa (Rolável se muito extensa) -->
      <div class="p-6 sm:p-7 overflow-y-auto flex-1">
        <span class="font-label-sm text-[10px] uppercase tracking-widest text-outline font-bold block mb-2.5">
          Trajetória &amp; Atuação
        </span>
        <div id="aja-modal-member-bio" class="font-body-md text-sm sm:text-[15px] text-on-surface-variant leading-relaxed space-y-3">
        </div>
      </div>

      <!-- Rodapé do Modal -->
      <div class="px-6 py-4 bg-surface-container-low border-t border-border-subtle flex items-center justify-between gap-3">
        <a id="aja-modal-member-link" href="#" target="_blank" rel="noopener noreferrer" class="hidden items-center gap-1.5 px-4 py-2 rounded-lg bg-primary text-on-primary hover:bg-moss-light font-label-md text-xs uppercase tracking-wider font-bold transition-colors shadow-xs">
          <span>Acessar Perfil / Currículo</span>
          <span class="material-symbols-outlined text-[15px]">open_in_new</span>
        </a>
        <button type="button" id="aja-member-modal-close-btn" class="ml-auto px-4 py-2 rounded-lg bg-surface-container hover:bg-surface-container-high border border-border-subtle text-ink-primary font-label-md text-xs uppercase tracking-wider font-bold transition-colors">
          Fechar
        </button>
      </div>
    </div>
  </div>

  <script>
  (function() {
    function initAjaMemberModal() {
      var modal = document.getElementById('aja-member-modal');
      var dialog = document.getElementById('aja-member-modal-dialog');
      var closeBtn = document.getElementById('aja-member-modal-close');
      var closeFooterBtn = document.getElementById('aja-member-modal-close-btn');
      if (!modal) return;

      var imgEl = document.getElementById('aja-modal-member-img');
      var fallbackEl = document.getElementById('aja-modal-member-fallback');
      var badgeEl = document.getElementById('aja-modal-member-badge');
      var nameEl = document.getElementById('aja-modal-member-name');
      var subtitleEl = document.getElementById('aja-modal-member-subtitle');
      var locWrap = document.getElementById('aja-modal-member-location-wrap');
      var locEl = document.getElementById('aja-modal-member-location');
      var bioEl = document.getElementById('aja-modal-member-bio');
      var linkEl = document.getElementById('aja-modal-member-link');

      function openMemberModal(card) {
        var name = card.getAttribute('data-member-name') || '';
        if (!name) {
          var h4 = card.querySelector('h4');
          if (h4) name = h4.textContent.trim();
        }

        var badge = card.getAttribute('data-member-badge') || '';
        if (!badge) {
          var bSpan = card.querySelector('span.inline-block');
          if (bSpan) badge = bSpan.textContent.trim();
        }

        var badgeStyle = card.getAttribute('data-member-badge-style') || 'bg-primary-fixed/40 text-primary border-primary-fixed';
        var badgeInline = card.getAttribute('data-member-badge-inline') || '';
        var subtitle = card.getAttribute('data-member-subtitle') || '';
        var subtitleInline = card.getAttribute('data-member-subtitle-inline') || '';
        var location = card.getAttribute('data-member-location') || '';
        var link = card.getAttribute('data-member-link') || '';
        var imgSrc = card.getAttribute('data-member-img') || '';
        if (!imgSrc) {
          var cardImg = card.querySelector('img');
          if (cardImg) imgSrc = cardImg.getAttribute('src') || '';
        }

        var bioHtml = '';
        var tpl = card.querySelector('template.aja-member-bio-content');
        if (tpl) {
          bioHtml = tpl.innerHTML.trim();
        } else {
          var bioP = card.querySelector('p.line-clamp-3');
          if (bioP) {
            bioHtml = '<p>' + bioP.innerHTML.trim() + '</p>';
          }
        }

        nameEl.textContent = name;
        badgeEl.textContent = badge || 'Integrante AJA';
        badgeEl.className = 'inline-block text-[11px] font-bold uppercase tracking-wider px-2.5 py-1 rounded border mb-2 ' + (badgeInline ? '' : badgeStyle);
        badgeEl.setAttribute('style', badgeInline);

        if (subtitle) {
          subtitleEl.textContent = subtitle;
          subtitleEl.className = 'text-xs sm:text-sm font-semibold mt-1 ' + (subtitleInline ? '' : 'text-secondary');
          subtitleEl.setAttribute('style', subtitleInline);
        } else {
          subtitleEl.textContent = '';
          subtitleEl.className = 'text-xs sm:text-sm font-semibold text-secondary mt-1 hidden';
          subtitleEl.setAttribute('style', '');
        }

        if (location && location !== '[A preencher]') {
          locEl.textContent = location;
          locWrap.classList.remove('hidden');
          locWrap.classList.add('flex');
        } else {
          locEl.textContent = '';
          locWrap.classList.add('hidden');
          locWrap.classList.remove('flex');
        }

        if (imgSrc) {
          imgEl.src = imgSrc;
          imgEl.alt = name;
          imgEl.classList.remove('hidden');
          fallbackEl.classList.add('hidden');
        } else {
          imgEl.src = '';
          imgEl.classList.add('hidden');
          fallbackEl.classList.remove('hidden');
        }

        bioEl.innerHTML = bioHtml || '<p>Integrante da Aliança Jurídica pela Amazônia (AJA).</p>';

        if (link && link !== '#') {
          linkEl.href = link;
          linkEl.classList.remove('hidden');
          linkEl.classList.add('inline-flex');
        } else {
          linkEl.href = '#';
          linkEl.classList.add('hidden');
          linkEl.classList.remove('inline-flex');
        }

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
      }

      function closeMemberModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
      }

      document.addEventListener('click', function(e) {
        var card = e.target.closest('.aja-member-card');
        if (card && !e.target.closest('a[href]')) {
          e.preventDefault();
          openMemberModal(card);
        }
      });

      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
          closeMemberModal();
          return;
        }
        if ((e.key === 'Enter' || e.key === ' ') && document.activeElement && document.activeElement.classList.contains('aja-member-card')) {
          e.preventDefault();
          openMemberModal(document.activeElement);
        }
      });

      if (closeBtn) closeBtn.addEventListener('click', closeMemberModal);
      if (closeFooterBtn) closeFooterBtn.addEventListener('click', closeMemberModal);

      modal.addEventListener('click', function(e) {
        if (dialog && !dialog.contains(e.target)) {
          closeMemberModal();
        }
      });
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initAjaMemberModal);
    } else {
      initAjaMemberModal();
    }
  })();

  // -------------------------------------------------------------
  // ANIMAÇÕES INSTITUCIONAIS AJA (Scroll Reveal & Hero Effects)
  // -------------------------------------------------------------
  (function initAjaAnimations() {
    function onHeroReady() {
      var heroGarca = document.querySelector('.hero-garca-img');
      if (heroGarca) {
        if (heroGarca.complete) {
          heroGarca.classList.add('hero-garca-loaded');
        } else {
          heroGarca.addEventListener('load', function() {
            heroGarca.classList.add('hero-garca-loaded');
          });
        }
      }
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', onHeroReady);
    } else {
      onHeroReady();
    }

    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function(entries, obs) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-revealed');
            obs.unobserve(entry.target);
          }
        });
      }, {
        root: null,
        rootMargin: '0px 0px -40px 0px',
        threshold: 0.08
      });

      var revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-fade, .accent-line-expand, .stagger-grid');
      revealElements.forEach(function(el) {
        observer.observe(el);
      });
    } else {
      document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-fade, .accent-line-expand, .stagger-grid').forEach(function(el) {
        el.classList.add('is-revealed');
      });
    }

    var header = document.querySelector('header');
    if (header) {
      window.addEventListener('scroll', function() {
        if (window.scrollY > 20) {
          header.classList.add('header-scrolled');
        } else {
          header.classList.remove('header-scrolled');
        }
      }, { passive: true });
    }
  })();
  </script>

  <?php wp_footer(); ?>
</body>

</html>
