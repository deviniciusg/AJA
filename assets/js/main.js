/**
 * Aliança Jurídica pela Amazônia (AJA) - Scripts Principais
 */
document.addEventListener('DOMContentLoaded', function () {
  // Menu Mobile Toggle
  const menuBtn = document.getElementById('mobile-menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      mobileMenu.classList.toggle('hidden');
    });

    // Fechar menu mobile ao clicar em um link interno
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
      });
    });

    // Fechar menu mobile ao clicar fora
    document.addEventListener('click', function (e) {
      if (!mobileMenu.contains(e.target) && !menuBtn.contains(e.target)) {
        mobileMenu.classList.add('hidden');
      }
    });
  }

  // Filtro de Abas do Portfólio / Membros da Rede
  const tabs = document.querySelectorAll('.network-tab');
  const cards = document.querySelectorAll('.network-card');

  if (tabs.length > 0 && cards.length > 0) {
    tabs.forEach(tab => {
      tab.addEventListener('click', function () {
        // Resetar estilos de todas as abas
        tabs.forEach(t => {
          t.classList.remove('bg-primary', 'text-on-primary', 'active');
          t.classList.add('bg-surface-container-lowest', 'text-on-surface-variant');
        });

        // Ativar aba clicada
        this.classList.add('bg-primary', 'text-on-primary', 'active');
        this.classList.remove('bg-surface-container-lowest', 'text-on-surface-variant');

        const target = this.getAttribute('data-target');

        // Filtrar cards
        cards.forEach(card => {
          const category = card.getAttribute('data-category');
          if (target === 'all' || category === target) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }

  // Smooth scroll para links com âncora
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId !== '#') {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          const headerHeight = 80;
          const elementPosition = targetElement.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerHeight;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      }
    });
  });
});
