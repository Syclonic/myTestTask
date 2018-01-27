<?php

require 'database/config.php';
require 'database/DatabaseConnection.php';
require 'database/Workers.php';

$pdoConnection = DatabaseConnection::connectToDb($dbConfig);

?>