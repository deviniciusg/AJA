  <!-- RODAPÉ INSTITUCIONAL -->
  <footer class="w-full bg-earth-dark text-surface-container-lowest border-t border-border-subtle/20">
    <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin pt-space-xl pb-space-lg">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-gutter mb-space-xl">
        <div class="lg:col-span-5 flex flex-col gap-space-md">
          <div class="flex items-center gap-space-md">
            <img alt="Logotipo AJA" class="w-9 h-9 object-contain rounded" src="<?php echo esc_url(aja_asset('logos/Prancheta 7@3x-8.png')); ?>" />
            <div class="flex flex-col">
              <span class="font-title-lg text-title-lg text-surface-container-lowest font-bold">AJA</span>
              <span class="font-label-sm text-label-sm uppercase tracking-wider text-river-sky">Aliança Jurídica pela Amazônia</span>
            </div>
          </div>
          <p class="font-body-md text-body-md text-surface-container-high max-w-md">
            Rede articuladora e colaborativa voltada ao fortalecimento do Estado de Direito, à governança territorial e à justiça socioambiental na Amazônia brasileira.
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
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/sobre-nos/#principios')); ?>">Carta de Princípios</a></li>
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
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/publicacoes/')); ?>">Publicações & Notas</a></li>
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/editais/')); ?>">Editais & Chamadas</a></li>
            <li><a class="hover:text-surface-container-lowest transition-colors" href="<?php echo esc_url(home_url('/noticias/')); ?>">Notícias & Mídia</a></li>
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

  <?php wp_footer(); ?>
</body>

</html>
