<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DB', 'sensordb');

// Create connection
$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DB)
        or die("Connection failed: " . $con->connect_error);

?>