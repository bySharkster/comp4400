<?php

require 'constants.php';

 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

 if ($conn->connect_error) {
     die('Database error:' . $conn->connect_error);
 }