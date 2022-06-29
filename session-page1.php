<?php

session_start();


// Print session id

// print session_id() . "<br>";

?>
<a href="/session-page2.php">Page two</a>

<?php

// Stoe Session Data

$_SESSION['auth_id'] = 123;
$_SESSION['username'] = 'ronykader';
