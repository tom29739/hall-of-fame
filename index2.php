<html>
<body>
<?php
$wiki = $_POST['wikicode'];
$wikic =  $_POST['wikiarticle'];
$wikia = 'https://' . urlencode($wiki) . '.wikipedia.org/w/index.php?title=' . urlencode($wikic) . '&action=raw';
$wikiar = file_get_contents('https://' . urlencode($wiki) . '.wikipedia.org/w/index.php?title=' . urlencode($wikic) . '&action=render');
$br = '<br>';
echo $wiki;
echo $br;
echo $wikic;
echo $br;
echo $wikia;
echo $br;
echo $wikiar;
// echo $wikia;
// $wikicode =
// $wikiarticle =
// $wikiarticleraw = file_get_contents ()
?>
</body>
</html>
