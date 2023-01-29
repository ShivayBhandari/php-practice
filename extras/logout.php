<?php

session_start();

session_destroy();
header('Location: /test-code/13_sessions.php');

?>