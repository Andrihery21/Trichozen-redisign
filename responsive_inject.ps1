$responsiveCSS = @"

        /* ===== RESPONSIVE SYSTEM ===== */
        *, *::before, *::after { box-sizing: border-box; }
        body { overflow-x: hidden; }
        img, video { max-width: 100%; height: auto; }

        .hero-title { font-size: clamp(1.8rem, 5vw, 4rem) !important; }
        .sur-titre { font-size: clamp(0.8rem, 1.8vw, 1.5rem) !important; }
        .quote-style { font-size: clamp(0.95rem, 1.8vw, 1.4rem) !important; }

        #mobile-menu {
            display: none;
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(255,255,255,0.98);
            z-index: 200;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1.75rem;
            padding: 2rem;
        }
        #mobile-menu.open { display: flex; }
        #mobile-menu-close {
            position: absolute;
            top: 1.25rem; right: 1.25rem;
            background: none; border: none;
            cursor: pointer; color: #1F455E;
        }

        @layer base {
            h1 { font-size: clamp(1.75rem, 4.5vw, 3rem) !important; }
            h2 { font-size: clamp(1.4rem, 3.5vw, 2.5rem) !important; }
            h3 { font-size: clamp(1rem, 2.5vw, 2rem) !important; }
            h4 { font-size: clamp(0.9rem, 2vw, 1.5rem) !important; }
        }

        @media (max-width: 1024px) {
            .text-7xl { font-size: clamp(2.5rem, 8vw, 4.5rem) !important; }
            .text-8xl { font-size: clamp(2.5rem, 8vw, 4.5rem) !important; }
            .text-9xl { font-size: clamp(3rem, 10vw, 6rem) !important; }
            .leading-snug.border-l-4 { padding-left: 1.5rem !important; padding-right: 1.5rem !important; }
        }

        @media (max-width: 768px) {
            .text-7xl { font-size: clamp(1.8rem, 7vw, 2.8rem) !important; }
            .text-8xl { font-size: clamp(1.8rem, 7vw, 2.8rem) !important; }
            .text-9xl { font-size: clamp(2rem, 8vw, 3rem) !important; }
            .text-5xl { font-size: clamp(1.5rem, 6vw, 2.2rem) !important; }
            .leading-snug.border-l-4 { padding-left: 1rem !important; padding-right: 1rem !important; }
            .absolute.-bottom-10.-left-10 { bottom: -0.5rem !important; left: 0 !important; }
            .absolute.-top-10.-right-10 { display: none !important; }
            .absolute.-top-10.-left-10 { display: none !important; }
            .whitespace-nowrap { white-space: normal !important; }
            .brand-logo { width: 100px !important; margin: 0 20px !important; }
        }

        @media (max-width: 480px) {
            .hero-title { font-size: clamp(1.4rem, 7vw, 2rem) !important; }
            .sur-titre { font-size: clamp(0.75rem, 3.5vw, 1rem) !important; }
            .w-72 { max-width: 8rem !important; }
        }
"@

$mobileMenu = @"

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" role="dialog" aria-modal="true" aria-label="Menu de navigation">
        <button id="mobile-menu-close" onclick="document.getElementById('mobile-menu').classList.remove('open')" aria-label="Fermer">
            <span class="material-symbols-outlined" style="font-size:2rem;color:#1F455E">close</span>
        </button>
        <a href="home.html" style="color:#1F455E;font-family:Montserrat,sans-serif;font-size:0.875rem;text-transform:uppercase;letter-spacing:0.1em;font-weight:500;text-decoration:none;">Home</a>
        <a href="particulier.html" style="color:#1F455E;font-family:Montserrat,sans-serif;font-size:0.875rem;text-transform:uppercase;letter-spacing:0.1em;font-weight:500;text-decoration:none;">Particuliers</a>
        <a href="professionnel.html" style="color:#1F455E;font-family:Montserrat,sans-serif;font-size:0.875rem;text-transform:uppercase;letter-spacing:0.1em;font-weight:500;text-decoration:none;">Professionnels</a>
        <a href="a-propos.html" style="color:#1F455E;font-family:Montserrat,sans-serif;font-size:0.875rem;text-transform:uppercase;letter-spacing:0.1em;font-weight:500;text-decoration:none;">A propos</a>
        <a href="blog.html" style="color:#1F455E;font-family:Montserrat,sans-serif;font-size:0.875rem;text-transform:uppercase;letter-spacing:0.1em;font-weight:500;text-decoration:none;">Blog</a>
        <a href="contact.html" style="color:#1F455E;font-family:Montserrat,sans-serif;font-size:0.875rem;text-transform:uppercase;letter-spacing:0.1em;font-weight:500;text-decoration:none;">Contact</a>
        <a href="contact.html" style="background:#CFA674;color:#fff;padding:0.75rem 2rem;font-family:Montserrat,sans-serif;font-size:0.8125rem;text-transform:uppercase;letter-spacing:0.05em;font-weight:500;text-decoration:none;border-radius:0.25rem;">RDV Expertise</a>
    </div>
"@

$files = @(
    'marque.html',
    'marque-2.html',
    'particulier.html',
    'professionnel.html',
    'professionnel-template.html',
    'programme-essentiel.html',
    'diagnostique.html',
    'blog-article.html'
)

foreach ($file in $files) {
    $path = "d:\Stitch\$file"
    $content = [System.IO.File]::ReadAllText($path)
    
    # 1. Inject responsive CSS before </style>
    $styleCloseTag = "    </style>"
    $content = $content.Replace($styleCloseTag, "$responsiveCSS`r`n    </style>")
    
    # 2. Replace CTA button div with hamburger version
    $oldCTA = @"
        <!-- CTA Button (Right) -->
        <div class="flex justify-end">
            <button
                class="bg-[#CFA674] text-white px-4 py-3 text-[13px] font-sans uppercase tracking-wide font-medium transition-all hover:opacity-80 rounded">
                RDV Expertise
            </button>
        </div>
    </nav>
"@

    $newCTA = @"
        <!-- CTA Button (Right) -->
        <div class="flex justify-end items-center gap-3">
            <button
                class="hidden md:block bg-[#CFA674] text-white px-4 py-3 text-[13px] font-sans uppercase tracking-wide font-medium transition-all hover:opacity-80 rounded">
                RDV Expertise
            </button>
            <button id="burger-btn" class="lg:hidden flex flex-col gap-1.5 p-2" aria-label="Menu" onclick="document.getElementById('mobile-menu').classList.add('open')">
                <span class="block w-6 h-0.5 bg-[#1F455E]"></span>
                <span class="block w-6 h-0.5 bg-[#1F455E]"></span>
                <span class="block w-5 h-0.5 bg-[#1F455E]"></span>
            </button>
        </div>
    </nav>$mobileMenu
"@

    $content = $content.Replace($oldCTA, $newCTA)
    
    [System.IO.File]::WriteAllText($path, $content)
    Write-Output "OK: $file"
}

Write-Output "ALL DONE"
