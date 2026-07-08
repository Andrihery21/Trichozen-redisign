$files = Get-ChildItem -Path 'd:\Stitch' -Filter '*.html'

$cssRule = @"

        /* Hero headings: 64px fixe sur toutes les pages */
        .hero-title { font-size: 64px !important; }
        h1.font-display, h1[class*='font-display'] { font-size: 64px !important; }
        h1.text-7xl, h1.text-5xl { font-size: 64px !important; }
"@

$count = 0
foreach ($file in $files) {
    $content = [System.IO.File]::ReadAllText($file.FullName, [System.Text.Encoding]::UTF8)

    # Skip if already injected
    if ($content.Contains('Hero headings: 64px fixe')) {
        Write-Host "SKIP (already done): $($file.Name)"
        continue
    }

    # Inject before first </style> (4-space indent version)
    $styleClose = "    </style>"
    if ($content.Contains($styleClose)) {
        $newContent = $content.Replace($styleClose, "$cssRule`r`n    </style>")
        # Only replace first occurrence
        $idx = $content.IndexOf($styleClose)
        $newContent = $content.Substring(0, $idx) + $cssRule + "`r`n    </style>" + $content.Substring($idx + $styleClose.Length)
        [System.IO.File]::WriteAllText($file.FullName, $newContent, [System.Text.Encoding]::UTF8)
        Write-Host "OK: $($file.Name)"
        $count++
    } else {
        Write-Host "NO MATCH: $($file.Name)"
    }
}

Write-Host "`nDone: $count files updated"
