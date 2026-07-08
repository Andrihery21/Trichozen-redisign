$files = Get-ChildItem "d:\Stitch\*.html"

$tiktokSVG = @"
                        </a>
                        <a class="hover:text-white transition-colors" href="#" aria-label="TikTok">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 15.68a6.34 6.34 0 0 0 6.26 6.32 6.33 6.33 0 0 0 6.31-6.32V10.22a8.21 8.21 0 0 0 5.77 2.21V8.9a5.2 5.2 0 0 1-3.75-2.21z"/>
                            </svg>
                        </a>
                        <a class="hover:text-white transition-colors mb-3" href="#" aria-label="LinkedIn">
"@

foreach ($file in $files) {
    if ($file.Name -eq "home.html") { continue } # Already did home.html
    
    $content = [System.IO.File]::ReadAllText($file.FullName)
    
    $target = @"
                        </a>
                        <a class="hover:text-white transition-colors mb-3" href="#" aria-label="LinkedIn">
"@
    
    if ($content -match "aria-label=`"LinkedIn`"") {
        if ($content -notmatch "aria-label=`"TikTok`"") {
            $content = $content.Replace($target, $tiktokSVG)
            [System.IO.File]::WriteAllText($file.FullName, $content)
            Write-Output "Added TikTok to $($file.Name)"
        }
    }
}
Write-Output "Done adding TikTok to all pages."
