<?php

session_name('my-app');
// session_start();
session_start();
// $_SESSION['name'] = 'Blue-Bird';
// $_SESSION['fabcolor'] = 'greem';
// $_SESSION['fabanimal'] = 'cat';

// change session name
$_SESSION['name'] = 'Twitter';
echo $_SESSION['name']."<br>";

?>

<div>
    <pre>
        <?php print_r($_SESSION);?>
    </pre>
</div>
<?php
// session_destroy();