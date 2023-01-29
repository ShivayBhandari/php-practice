<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $minimum = 5;
    if(strlen($username) < $minimum) {
        echo "Username has to be longer than " . $minimum;
    }
}

?>