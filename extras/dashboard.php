<?php

session_start();

if(isset($_SESSION['username'])) {
    echo '<h1>Welcome ' . $_SESSION['username'] . '</h1>';
    echo '<a href="/test-code/extras/logout.php">Logout</a>';
}
else {
    echo '<h1>Welcome Guest</h1>';
    echo '<a href="/test-code/13_sessions.php">Home</a>';
}

?>