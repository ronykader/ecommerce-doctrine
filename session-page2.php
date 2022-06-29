<?php

session_start();

echo $_SESSION['auth_id'] . '<br>';
echo $_SESSION['username'] . '<br>';

?>

<a href="/session-page1.php">Back</a>