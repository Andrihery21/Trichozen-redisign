# Fix button hover effects: remove color changes, add opacity decrease
$files = Get-ChildItem -Path 'd:\Stitch' -Filter '*.html' -File

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw -Encoding UTF8
    $original = $content

    # Replace hover:bg-[#1F455E] with hover:opacity-80 (gold button hovers to blue)
    $content = $content -replace 'hover:bg-\[#1F455E\]', 'hover:opacity-80'

    # Replace non-group hover:bg-[#CFA674] hover:text-black
    $content = $content -replace '(?<!group-)hover:bg-\[#CFA674\] hover:text-black', 'hover:opacity-80'

    # Replace non-group hover:bg-[#CFA674] hover:text-white  
    $content = $content -replace '(?<!group-)hover:bg-\[#CFA674\] hover:text-white', 'hover:opacity-80'

    # Replace remaining non-group hover:bg-[#CFA674] on buttons (not preceded by group-)
    $content = $content -replace '(?<!group-)hover:bg-\[#CFA674\](?!\s)', 'hover:opacity-80'
    $content = $content -replace '(?<!group-)hover:bg-\[#CFA674\]$', 'hover:opacity-80'

    # Also remove paired hover text changes that may remain
    $content = $content -replace '\s+hover:text-white(?=\s|")', ''
    $content = $content -replace '\s+hover:text-black(?=\s|")', ''

    if ($content -ne $original) {
        Set-Content $file.FullName -Value $content -Encoding UTF8 -NoNewline
        Write-Host "Updated: $($file.Name)"
    } else {
        Write-Host "No changes: $($file.Name)"
    }
}
Write-Host 'Done!'
