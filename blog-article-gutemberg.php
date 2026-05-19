<?php
/**
 * Template Name: Blog Article — Gutenberg Spectra
 * CSS → blog-article-gutemberg.css  (enqueued via functions.php)
 * JS  → blog-article-gutemberg.js   (enqueued via functions.php)
 *
 * Tous les blocs sont natifs Gutenberg (wp:cover, wp:group, wp:heading,
 * wp:paragraph, wp:image, wp:columns, wp:buttons).
 * wp:html est utilisé UNIQUEMENT là où Material Symbols est requis.
 * Zéro CSS inline — tout passe par blog-article-gutemberg.css via !important.
 */

/* Charge le CSS/JS via le template (fallback si functions.php non configuré) */
add_action( 'wp_head', function () {
    echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/blog-article-gutemberg.css">' . "\n";
    echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap">' . "\n";
} );
add_action( 'wp_footer', function () {
    echo '<script src="' . get_stylesheet_directory_uri() . '/blog-article-gutemberg.js" defer></script>' . "\n";
} );
?>

<!-- ═══════════════════════════════════════════════════════════
     HERO — wp:cover (rendu visuel dans l'éditeur)
     ═══════════════════════════════════════════════════════════ -->
<!-- wp:cover {"url":"https://lh3.googleusercontent.com/d/1T4e8ocyJebBiKjOar7E58qkT73Wk7_I3","dimRatio":50,"isFullHeight":true,"isDark":true,"className":"ba-hero ba-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-cover ba-hero ba-reveal" style="min-height:100vh">
  <span aria-hidden="true" class="wp-block-cover__background has-background-dim-50 has-background-dim"></span>
  <img class="wp-block-cover__image-background" alt="Trichologie Moderne" src="https://lh3.googleusercontent.com/d/1T4e8ocyJebBiKjOar7E58qkT73Wk7_I3" data-object-fit="cover"/>
  <div class="wp-block-cover__inner-container">

    <!-- wp:group {"className":"ba-hero__inner","layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group ba-hero__inner">

      <!-- wp:heading {"level":1,"className":"ba-hero__title"} -->
      <h1 class="wp-block-heading ba-hero__title">Les Fondamentaux de la Trichologie Moderne</h1>
      <!-- /wp:heading -->

      <!-- wp:html -->
      <div class="ba-hero__meta">
        <span class="ba-hero__meta-item">
          <span class="ba-hero__meta-icon material-symbols-outlined">person</span>
          PAR DR. ELÉONORE S.
        </span>
        <span class="ba-hero__meta-item">
          <span class="ba-hero__meta-icon material-symbols-outlined">calendar_today</span>
          24 JANVIER 2024
        </span>
        <span class="ba-hero__meta-item">
          <span class="ba-hero__meta-icon material-symbols-outlined">schedule</span>
          8 MIN DE LECTURE
        </span>
      </div>
      <!-- /wp:html -->

    </div>
    <!-- /wp:group -->

  </div>
</div>
<!-- /wp:cover -->


<!-- ═══════════════════════════════════════════════════════════
     CORPS DE L'ARTICLE — fond #EEF5FD
     ═══════════════════════════════════════════════════════════ -->
<!-- wp:group {"className":"ba-body","style":{"color":{"background":"#EEF5FD"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group ba-body has-background" style="background-color:#EEF5FD">

  <!-- Share sidebar (icônes Material → wp:html) -->
  <!-- wp:html -->
  <aside class="ba-share">
    <span class="ba-share__label">SHARE</span>
    <a href="#" class="ba-share__btn" aria-label="Facebook">
      <span class="material-symbols-outlined">facebook</span>
    </a>
    <a href="#" class="ba-share__btn" aria-label="Partager">
      <span class="material-symbols-outlined">share</span>
    </a>
    <a href="#" class="ba-share__btn" aria-label="Lien">
      <span class="material-symbols-outlined">link</span>
    </a>
  </aside>
  <!-- /wp:html -->

  <!-- wp:group {"className":"ba-article ba-fadein","layout":{"type":"constrained","contentSize":"900px"}} -->
  <div class="wp-block-group ba-article ba-fadein">

    <!-- §1 Drop cap -->
    <!-- wp:paragraph {"className":"ba-dropcap"} -->
    <p class="ba-dropcap">La trichologie, du grec « trichos » signifiant cheveu, s'impose aujourd'hui comme la clé de voûte de la dermatologie esthétique et fonctionnelle. Cette discipline rigoureuse se consacre à l'étude approfondie du système pileux et du cuir chevelu, considéré non plus comme une simple surface de soin, mais comme un organe vivant et complexe. Le follicule pileux est l'une des structures les plus métaboliquement actives du corps humain, capable de régénérer une fibre de kératine avec une précision biologique fascinante. Comprendre sa physiologie moléculaire, ses interactions permanentes avec les systèmes endocrinien et vasculaire, ainsi que sa sensibilité aux variations de l'homéostasie, est indispensable pour quiconque souhaite préserver durablement son capital capillaire.</p>
    <!-- /wp:paragraph -->

    <!-- §2 -->
    <!-- wp:paragraph -->
    <p>Le cycle de vie du cheveu est une chorégraphie biologique orchestrée en trois phases immuables, dont l'équilibre dicte la densité et la pérennité de votre chevelure. La phase anagène, période de croissance active s'étalant sur plusieurs années, voit la matrice pilaire se diviser à une vitesse record, alimentée par un réseau capillaire dense. Elle est suivie de la phase catagène, une transition brève mais critique où le follicule subit une involution programmée, se détachant de la papille dermique. Enfin, la phase télogène marque le repos et la chute inéluctable de la tige ancienne, préparant le terrain pour la naissance d'un nouveau follicule.</p>
    <!-- /wp:paragraph -->

    <!-- Image inline -->
    <!-- wp:group {"className":"ba-img-wrap"} -->
    <div class="wp-block-group ba-img-wrap">
      <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ba-img"} -->
      <figure class="wp-block-image size-full ba-img">
        <img src="https://lh3.googleusercontent.com/d/1WbNbos-zgmFNgj7ocKbcG1WPuo2AyYDP" alt="Analyse microscopique de l'organe folliculaire en phase anagène" loading="lazy"/>
      </figure>
      <!-- /wp:image -->
      <!-- wp:paragraph {"className":"ba-img-caption"} -->
      <p class="ba-img-caption">Analyse microscopique de l'organe folliculaire en phase anagène.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- §3 heading + paragraphs -->
    <!-- wp:heading {"level":2} -->
    <h2 class="wp-block-heading">L'Unicité de votre Capital Capillaire</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Votre patrimoine capillaire est une entité dynamique, sculptée par votre héritage génétique mais continuellement modulée par votre environnement direct. Ce que la science moderne appelle l'exposome — l'ensemble des agressions extérieures telles que la pollution atmosphérique, les rayons UV, le stress oxydatif et les radicaux libres — exerce une pression constante sur la gaine épithéliale et la structure cutanée. Ce stress environnemental peut induire une sénescence prématurée des cellules souches logées dans le « bulge » du follicule, altérant ainsi la qualité des futurs cycles.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p>L'approche TrichoZen redéfinit les standards de l'expertise capillaire en intégrant une dimension prédictive, préventive et résolument holistique. Par l'usage systématique de la trichoscopie numérique à haute résolution, nos experts sont en mesure de visualiser des marqueurs biométriques invisibles à l'œil nu. Ces données quantitatives, croisées avec une analyse rigoureuse de vos antécédents, de vos habitudes de vie et de votre profil métabolique, nous permettent de concevoir des protocoles de soins d'exception réellement personnalisés.</p>
    <!-- /wp:paragraph -->

    <!-- §4 -->
    <!-- wp:heading {"level":2} -->
    <h2 class="wp-block-heading">L'Équilibre du Microbiome Scalpaire</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Le cuir chevelu n'est pas une zone isolée ; c'est un biome riche abritant des milliards de micro-organismes essentiels. Ce microbiome, composé de bactéries et de levures vivant en symbiose, constitue la première ligne de défense contre les agressions pathogènes et joue un rôle crucial dans la modulation immunitaire cutanée. Une dysbiose — ou déséquilibre de cet écosystème délicat — peut générer des micro-inflammations invisibles mais chroniques qui affaiblissent directement l'ancrage du cheveu.</p>
    <!-- /wp:paragraph -->

    <!-- §5 -->
    <!-- wp:heading {"level":2} -->
    <h2 class="wp-block-heading">Nutrition et Métabolisme de la Kératine</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>La kératine, cette protéine fibreuse structurante constituant plus de 90 % de la tige capillaire, est le fruit d'une biosynthèse exigeante nécessitant un apport constant en nutriments spécifiques. Les acides aminés soufrés, tels que la cystine et la méthionine, constituent les ponts disulfures qui assureront la solidité et l'élasticité du cheveu. Une carence, même légère ou infra-clinique, impacte immédiatement la vitesse de mitose des cellules de la matrice, résultant en une fibre plus fine, plus fragile et moins résistante.</p>
    <!-- /wp:paragraph -->

    <!-- CTA Box -->
    <!-- wp:group {"className":"ba-cta-box ba-fadein ba-delay-1","style":{"color":{"background":"#FBF5F0"},"border":{"color":"rgba(207,166,116,0.2)","width":"1px","radius":"12px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group ba-cta-box ba-fadein ba-delay-1 has-background" style="background-color:#FBF5F0;border:1px solid rgba(207,166,116,0.2);border-radius:12px">

      <!-- wp:heading {"level":4,"className":"ba-cta-box-title"} -->
      <h4 class="wp-block-heading ba-cta-box-title">Besoin d'un accompagnement sur mesure ?</h4>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
      <p style="font-size:14px">Nos experts vous accueillent en présentiel ou en téléconsultation pour réaliser votre bilan trichologique complet et définir votre protocole d'exception.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"ba-btn","style":{"color":{"background":"#CFA674","text":"#ffffff"},"border":{"radius":"4px"}}} -->
        <div class="wp-block-button ba-btn">
          <a class="wp-block-button__link has-text-color has-background" href="<?php echo esc_url( home_url( '/contact' ) ); ?>" style="background-color:#CFA674;color:#ffffff;border-radius:4px">Prendre Rendez-vous</a>
        </div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->

    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group (ba-article) -->

</div>
<!-- /wp:group (ba-body) -->


<!-- ═══════════════════════════════════════════════════════════
     ARTICLES LIÉS
     ═══════════════════════════════════════════════════════════ -->
<!-- wp:group {"className":"ba-related","style":{"color":{"background":"#ffffff"},"border":{"top":{"color":"rgba(31,69,94,0.05)","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group ba-related has-background" style="background-color:#ffffff;border-top:1px solid rgba(31,69,94,0.05)">

  <!-- wp:paragraph {"className":"ba-sur-titre ba-reveal"} -->
  <p class="ba-sur-titre ba-reveal">À découvrir également</p>
  <!-- /wp:paragraph -->

  <!-- wp:columns {"className":"ba-cards-grid"} -->
  <div class="wp-block-columns ba-cards-grid">

    <!-- wp:column {"className":"ba-card ba-fadein ba-delay-1"} -->
    <div class="wp-block-column ba-card ba-fadein ba-delay-1">

      <!-- wp:group {"className":"ba-card__img-wrap"} -->
      <div class="wp-block-group ba-card__img-wrap">
        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full">
          <img src="https://lh3.googleusercontent.com/d/1ooepodjUD4m4olQKg4N9O8yZmCrfIl6_" alt="Les rituels de soin premium en 2024" loading="lazy"/>
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"className":"ba-card__body"} -->
      <div class="wp-block-group ba-card__body">
        <!-- wp:heading {"level":3,"className":"ba-card__title"} -->
        <h3 class="wp-block-heading ba-card__title">Les rituels de soin premium en 2024</h3>
        <!-- /wp:heading -->
        <!-- wp:separator {"className":"ba-card__divider","style":{"color":{"background":"#CFA674"}}} -->
        <hr class="wp-block-separator ba-card__divider has-text-color has-background" style="background-color:#CFA674;color:#CFA674"/>
        <!-- /wp:separator -->
        <!-- wp:paragraph {"className":"ba-card__text"} -->
        <p class="ba-card__text">Découvrez les dernières innovations en matière de soins capillaires de luxe et les protocoles d'exception TrichoZen.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"className":"ba-card__footer"} -->
      <div class="wp-block-group ba-card__footer">
        <!-- wp:html -->
        <a href="#" class="ba-card__link">
          LIRE <span class="material-symbols-outlined" style="font-size:1rem;vertical-align:middle;">arrow_right_alt</span>
        </a>
        <!-- /wp:html -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->

</div>
<!-- /wp:group (ba-related) -->


<!-- ═══════════════════════════════════════════════════════════
     FOOTER — wp:html (structure complexe : grid 4 col + SVG socials)
     ═══════════════════════════════════════════════════════════ -->
<!-- wp:html -->
<footer class="ba-footer ba-reveal">
  <div class="ba-footer__container">
    <div class="ba-footer__grid ba-fadein ba-delay-1">

      <!-- Col 1 — Logo + texte + socials -->
      <div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="ba-footer__logo"
            src="https://lh3.googleusercontent.com/d/1JkhhnP0DEKJYBUBLCBPOwqqJN625VQTc"
            alt="TRICHOZEN"
            style="filter:brightness(0) saturate(100%) invert(73%) sepia(49%) saturate(271%) hue-rotate(345deg) brightness(88%) contrast(88%);">
        </a>
        <p>TrichoZen — Expertise trichologique au service de la santé de votre cuir chevelu et de vos cheveux. Diagnostic · Formation · Conseil · Sensibilisation.</p>
        <div class="ba-footer__socials">
          <a href="#" aria-label="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <a href="#" aria-label="TikTok">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.06-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.59-1.01V14.5a7.5 7.5 0 1 1-7.5-7.5c.34 0 .68.04 1.01.12v4.01a3.5 3.5 0 1 0 2.49 3.37V0L12.525.02z"/></svg>
          </a>
          <a href="#" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 2 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
          </a>
          <a href="#" aria-label="YouTube">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
          </a>
        </div>
      </div>

      <!-- Col 2 — Navigation -->
      <div>
        <span class="ba-footer__col-title">NAVIGATION</span>
        <ul class="ba-footer__nav">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="<?php echo esc_url( home_url( '/particuliers' ) ); ?>">Particuliers</a></li>
          <li><a href="<?php echo esc_url( home_url( '/professionnels' ) ); ?>">Professionnels</a></li>
          <li><a href="#">Ressources</a></li>
        </ul>
      </div>

      <!-- Col 3 — Société -->
      <div>
        <span class="ba-footer__col-title">SOCIÉTÉ</span>
        <ul class="ba-footer__nav">
          <li><a href="<?php echo esc_url( home_url( '/a-propos' ) ); ?>">Qui sommes-nous</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
          <li><a href="#">Presse</a></li>
          <li><a href="#">Mentions Légales</a></li>
        </ul>
      </div>

      <!-- Col 4 — Newsletter -->
      <div>
        <span class="ba-footer__col-title">NEWSLETTER</span>
        <p>Recevez nos conseils d'experte en santé capillaire et les actualités TrichoZen directement dans votre boîte mail.</p>
        <div class="ba-footer__newsletter-input">
          <input type="email" placeholder="Votre email" aria-label="Votre adresse email">
          <button type="submit" aria-label="S'abonner">arrow_forward</button>
        </div>
      </div>

    </div>

    <div class="ba-footer__bottom">
      <p>2026 TrichoZen — Tous droits réservés.</p>
      <div class="ba-footer__bottom-links">
        <a href="#">POLITIQUE DE CONFIDENTIALITÉ</a>
        <a href="#">CGV</a>
      </div>
    </div>

  </div>
</footer>
<!-- /wp:html -->
