$files = Get-ChildItem "d:\Stitch\*.html"

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

$burgerHTML = @"
        <div class="flex justify-end items-center gap-3">
            <button
                class="hidden md:block bg-[#CFA674] text-white px-4 py-3 text-[13px] font-sans uppercase tracking-wide font-medium transition-all hover:opacity-80 rounded">
                RDV Expertise
            </button>
            <button id="burger-btn" class="lg:hidden flex flex-col gap-1.5 p-2" aria-label="Menu" onclick="document.getElementById('mobile-menu').classList.add('open')">
                <span class="block w-6 h-0.5 bg-[#1F455E]"></span>
                <span class="block w-6 h-0.5 bg-[#1F455E]"></span>
                <span class="block w-6 h-0.5 bg-[#1F455E]"></span>
            </button>
        </div>
    </nav>$mobileMenu
"@

foreach ($file in $files) {
    $content = [System.IO.File]::ReadAllText($file.FullName)
    $modified = $false

    # 1. Fix the nav class for mobile space-between
    if ($content -match "grid grid-cols-\[1fr_auto_1fr\]") {
        $content = $content -replace "grid grid-cols-\[1fr_auto_1fr\]", "flex justify-between lg:grid lg:grid-cols-[1fr_auto_1fr]"
        $modified = $true
    }

    # 2. Fix existing burger icon length
    if ($content -match '<span class="block w-5 h-0.5 bg-\[#1F455E\]"></span>') {
        $content = $content -replace '<span class="block w-5 h-0.5 bg-\[#1F455E\]"></span>', '<span class="block w-6 h-0.5 bg-[#1F455E]"></span>'
        $modified = $true
    }

    # 3. Inject burger into files that missed it
    if ($content -notmatch "burger-btn") {
        # Find the CTA div and replace it
        # Note: RegEx to replace the old CTA block up to </nav>
        $pattern = '(?s)<div class="flex justify-end">\s*<button[^>]*>.*?RDV Expertise.*?</button>\s*</div>\s*</nav>'
        if ($content -match $pattern) {
            $content = $content -replace $pattern, $burgerHTML
            $modified = $true
        } else {
            Write-Warning "Could not find CTA block in $($file.Name)"
        }
    }

    if ($modified) {
        [System.IO.File]::WriteAllText($file.FullName, $content)
        Write-Output "Updated: $($file.Name)"
    }
}
Write-Output "Done"
