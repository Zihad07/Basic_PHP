
<?php 
$name = "Nahid";

$string1 = 'hi $name\n';
$string1 = "hi $name\n";

echo $string1;

$herDoc = <<<EOD
------------
hi $name
how are
you
------------
EOD;

echo $herDoc;