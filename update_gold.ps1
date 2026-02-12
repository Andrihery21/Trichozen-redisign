$files = @(
    "d:\Stitch\a-propos.html",
    "d:\Stitch\blog-article.html",
    "d:\Stitch\blog.html",
    "d:\Stitch\contact.html",
    "d:\Stitch\home.html",
    "d:\Stitch\particulier.html",
    "d:\Stitch\professionnel.html"
)

$search = @("#E6C15C", "#FFE6A2", "#C9A43D", "#B8860B", "#D4AF37")
$replace = "#CFA674"

foreach ($file in $files) {
    if (Test-Path $file) {
        $content = Get-Content $file -Raw -Encoding UTF8
        $original = $content
        foreach ($s in $search) {
            $content = $content.Replace($s, $replace)
        }
        if ($content -ne $original) {
            Set-Content -Path $file -Value $content -Encoding UTF8
            Write-Host "Updated $file"
        } else {
             Write-Host "No changes for $file"
        }
    } else {
        Write-Host "File not found: $file"
    }
}
