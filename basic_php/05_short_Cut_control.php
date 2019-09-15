

<?php

// alternative if else

$number = 5;

if ($number % 2 == 0):
    echo "{$number} is even";
    echo PHP_EOL;
else:
    echo "{$number} is odd";
    echo PHP_EOL;
    echo "Some text";

endif;

?>