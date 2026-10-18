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

  /* ==========================================================================
   * REGRA DE TRADUÇÃO PERSONALIZADA: GTRANSLATE / GOOGLE TRANSLATE
   * Padroniza "Aliança Jurídica pela Amazônia" para "Amazon Legal Alliance"
   * ========================================================================== */
  (function initAjaTranslationRule() {
    // Captura todas as variações literais imperfeitas geradas pelo Google Tradutor
    const englishVariantsRegex = /\b(?:(?:Legal|Juridical|Judicial)\s+Alliance\s+(?:for\s+the|for|of\s+the|of|by\s+the|by|through\s+the|through)\s+(?:the\s+)?Amazon(?:ia)?)\b/gi;
    const ptRegex = /\bAliança\s+Jurídica\s+pela\s+Amazônia\b/gi;
    const enRegex = /\bAmazon\s+Legal\s+Alliance\b/gi;

    function isEnglishActive() {
      // 1. Cookie do GTranslate/Google Translate (ex: /pt/en ou /auto/en)
      if (/(?:^|;\s*)googtrans=(?:\/pt|\/auto)?\/en\b/i.test(document.cookie)) return true;

      // 2. Atributo lang do elemento <html>
      const lang = (document.documentElement.getAttribute('lang') || '').toLowerCase();
      if (lang === 'en' || lang.startsWith('en-') || lang.startsWith('en_')) return true;

      // 3. Classe injetada pelo Google Tradutor no <html>
      if (document.documentElement.classList.contains('translated-ltr') || document.documentElement.classList.contains('translated-rtl')) {
        if (lang !== 'pt' && lang !== 'pt-br') return true;
      }

      // 4. Seletor de idioma do GTranslate com valor em inglês
      const gtSelect = document.querySelector('.goog-te-combo, select.gt_selector, .gtranslate_wrapper select');
      if (gtSelect && gtSelect.value && gtSelect.value.toLowerCase().endsWith('en')) return true;

      return false;
    }

    function replacer(match) {
      // Preserva maiúsculas se o texto original estava totalmente em maiúsculas
      if (match === match.toUpperCase() && match.length > 5) {
        return 'AMAZON LEGAL ALLIANCE';
      }
      return 'Amazon Legal Alliance';
    }

    function processTextNode(node, isEng) {
      if (!node || node.nodeType !== Node.TEXT_NODE) return;
      const text = node.nodeValue;
      if (!text) return;

      let updated = text;

      // 1. Sempre corrige as traduções literais inadequadas geradas pelo Google Translate
      if (englishVariantsRegex.test(updated)) {
        englishVariantsRegex.lastIndex = 0;
        updated = updated.replace(englishVariantsRegex, replacer);
      }

      // 2. Se a página estiver em inglês, traduz também o termo original em português
      if (isEng && ptRegex.test(updated)) {
        ptRegex.lastIndex = 0;
        updated = updated.replace(ptRegex, replacer);
      }

      // 3. Se a página voltou para português e ainda contém a tradução manual em inglês
      if (!isEng && !/(?:^|;\s*)googtrans=/i.test(document.cookie) && enRegex.test(updated)) {
        // Se o documento estiver claramente em PT, restaura quando acionado
        if (document.documentElement.lang === 'pt' || document.documentElement.lang === 'pt-BR') {
          enRegex.lastIndex = 0;
          updated = updated.replace(enRegex, function(m) {
            return (m === m.toUpperCase()) ? 'ALIANÇA JURÍDICA PELA AMAZÔNIA' : 'Aliança Jurídica pela Amazônia';
          });
        }
      }

      if (updated !== text) {
        node.nodeValue = updated;
      }
    }

    function processAttributes(el, isEng) {
      if (!el || el.nodeType !== Node.ELEMENT_NODE) return;
      const tag = el.tagName;
      if (tag === 'SCRIPT' || tag === 'STYLE' || tag === 'NOSCRIPT' || tag === 'TEXTAREA') return;

      ['title', 'alt', 'aria-label', 'placeholder'].forEach(attr => {
        if (el.hasAttribute(attr)) {
          const val = el.getAttribute(attr);
          if (val) {
            let updated = val;
            if (englishVariantsRegex.test(updated)) {
              englishVariantsRegex.lastIndex = 0;
              updated = updated.replace(englishVariantsRegex, replacer);
            }
            if (isEng && ptRegex.test(updated)) {
              ptRegex.lastIndex = 0;
              updated = updated.replace(ptRegex, replacer);
            }
            if (updated !== val) {
              el.setAttribute(attr, updated);
            }
          }
        }
      });
    }

    function scanTree(root) {
      if (!root) return;
      const isEng = isEnglishActive();

      if (root.nodeType === Node.TEXT_NODE) {
        processTextNode(root, isEng);
        return;
      }

      if (root.nodeType === Node.ELEMENT_NODE) {
        processAttributes(root, isEng);
      }

      const walker = document.createTreeWalker(root, NodeFilter.SHOW_TEXT, null, false);
      let currentNode = walker.nextNode();
      while (currentNode) {
        processTextNode(currentNode, isEng);
        currentNode = walker.nextNode();
      }

      if (document.title) {
        let t = document.title;
        let newT = t;
        if (englishVariantsRegex.test(newT)) {
          englishVariantsRegex.lastIndex = 0;
          newT = newT.replace(englishVariantsRegex, replacer);
        }
        if (isEng && ptRegex.test(newT)) {
          ptRegex.lastIndex = 0;
          newT = newT.replace(ptRegex, replacer);
        }
        if (newT !== t) {
          document.title = newT;
        }
      }
    }

    let observer = null;

    function startObserver() {
      if (observer) return;

      observer = new MutationObserver(mutations => {
        observer.disconnect();

        const isEng = isEnglishActive();
        for (let i = 0; i < mutations.length; i++) {
          const m = mutations[i];
          if (m.type === 'characterData') {
            processTextNode(m.target, isEng);
          } else if (m.type === 'childList') {
            for (let j = 0; j < m.addedNodes.length; j++) {
              scanTree(m.addedNodes[j]);
            }
          }
        }

        observer.observe(document.documentElement, {
          childList: true,
          subtree: true,
          characterData: true
        });
      });

      observer.observe(document.documentElement, {
        childList: true,
        subtree: true,
        characterData: true
      });
    }

    // Varredura inicial e início da observação
    scanTree(document.body || document.documentElement);
    startObserver();

    // Ouvintes para eventos e trocas do GTranslate
    document.addEventListener('change', function(e) {
      if (e.target && (e.target.classList.contains('goog-te-combo') || e.target.classList.contains('gt_selector') || e.target.closest('.gtranslate_wrapper'))) {
        setTimeout(() => scanTree(document.body), 250);
        setTimeout(() => scanTree(document.body), 800);
      }
    });

    window.addEventListener('aja-language-change', function() {
      setTimeout(() => scanTree(document.body), 50);
      setTimeout(() => scanTree(document.body), 400);
    });

    // Decora ou inicializa a função global doGTranslate
    const existingDoGTranslate = window.doGTranslate;
    window.doGTranslate = function(pair) {
      if (typeof pair === 'string') {
        const parts = pair.split('|');
        const targetLang = parts[1] || 'pt';
        document.cookie = 'googtrans=/pt/' + targetLang + '; path=/;';
        document.documentElement.lang = targetLang;
        if (targetLang === 'en') {
          document.documentElement.classList.add('translated-ltr');
        } else {
          document.documentElement.classList.remove('translated-ltr');
        }
        window.dispatchEvent(new Event('aja-language-change'));
      }

      if (existingDoGTranslate) {
        return existingDoGTranslate.apply(this, arguments);
      }
    };
  })();
});

