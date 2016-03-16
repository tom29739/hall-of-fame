<html>
<body>
<?php
$wiki = $_POST['wikicode'];
$wikic =  $_POST['wikiarticle'];
$wikia = file_get_contents("https://en.wikipedia.org/w/index.php?title=User:Tom29739&action=raw");
$br = '<br>';
echo $wiki;
echo $br;
echo $wikic;
echo $br;
echo $wikia;
// $wikicode =
// $wikiarticle =
// $wikiarticleraw = file_get_contents ()
?>
</body>
</html>
