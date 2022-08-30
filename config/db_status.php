<?php
//Verify or Terminate
    if($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    echo 'Database connected...';