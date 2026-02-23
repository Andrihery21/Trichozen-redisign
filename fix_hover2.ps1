# Fix hover:bg-white on buttons - replace with hover:opacity-80
$files = Get-ChildItem -Path 'd:\Stitch' -Filter '*.html' -File | Where-Object { $_.Name -ne 'carousel.html' -and $_.Name -ne 'design.html' }

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw -Encoding UTF8
    $original = $content

    # Replace "hover:bg-white hover:text-[#1F455E]" with hover:opacity-80
    $content = $content -replace 'hover:bg-white hover:text-\[#1F455E\]', 'hover:opacity-80'

    # Replace "hover:bg-white hover:text-primary" with hover:opacity-80
    $content = $content -replace 'hover:bg-white hover:text-primary', 'hover:opacity-80'

    # Replace remaining "hover:bg-white" that are on CTA/form buttons (not carousel indicators)
    # Only replace when on a line that has bg-[#CFA674] or bg-[#1F455E] (actual brand buttons)
    # We process line by line for precision
    $lines = $content -split "`r?`n"
    $changed = $false
    for ($i = 0; $i -lt $lines.Count; $i++) {
        $line = $lines[$i]
        if ($line -match 'hover:bg-white' -and ($line -match 'bg-\[#CFA674\]' -or $line -match 'bg-\[#1F455E\]' -or $line -match 'bg-primary')) {
            $lines[$i] = $line -replace '(?<!/)hover:bg-white', 'hover:opacity-80'
            $changed = $true
        }
    }
    if ($changed) {
        $content = $lines -join "`r`n"
    }

    if ($content -ne $original) {
        Set-Content $file.FullName -Value $content -Encoding UTF8 -NoNewline
        Write-Host "Updated: $($file.Name)"
    } else {
        Write-Host "No changes: $($file.Name)"
    }
}
Write-Host 'Done!'
