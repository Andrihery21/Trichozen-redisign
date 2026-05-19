/**
 * blog-article-gutemberg.js
 * Animations d'entrée (scroll reveal) — miroir exact du blog-article.html
 * Aucun CSS inline, aucun style injecté — uniquement des classes CSS.
 */

(function () {
  'use strict';

  /* ── Intersection Observer ────────────────────────────────── */
  function initScrollReveal() {
    var options = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    };

    var observer = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          obs.unobserve(entry.target);
        }
      });
    }, options);

    /* Cibler tous les éléments animables */
    var targets = document.querySelectorAll('.ba-reveal, .ba-fadein');
    targets.forEach(function (el) {
      observer.observe(el);
    });
  }

  /* ── DOM Ready ────────────────────────────────────────────── */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initScrollReveal);
  } else {
    initScrollReveal();
  }

})();
