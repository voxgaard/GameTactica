<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'GTdev');
    define('DB_PASS', 'G@M3tactica');
    define('DB_NAME', 'GameTactica');

//Create Connection to database
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/*Verify or Terminate
    if($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    echo 'Database connected...';*/