$homeContent = Get-Content -Path "d:\Stitch\home.html" -Raw
$diagContent = Get-Content -Path "d:\Stitch\diagnostique.html" -Raw

$footerStart = "<footer class=""bg-[#0E2635] text-white/80 pt-24 pb-12 border-t border-white/15 reveal-text"">"
$footerEnd = "</footer>"

$startIndex = $homeContent.IndexOf($footerStart)
$endIndex = $homeContent.IndexOf($footerEnd, $startIndex) + $footerEnd.Length
$newFooter = $homeContent.Substring($startIndex, $endIndex - $startIndex)

$startIndexDiag = $diagContent.IndexOf($footerStart)
$endIndexDiag = $diagContent.IndexOf($footerEnd, $startIndexDiag) + $footerEnd.Length

$newDiagContent = $diagContent.Substring(0, $startIndexDiag) + $newFooter + $diagContent.Substring($endIndexDiag)

Set-Content -Path "d:\Stitch\diagnostique.html" -Value $newDiagContent
