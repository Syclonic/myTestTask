<?php

require 'vendor/autoload.php';
require 'core/boot.php';
require 'views/header.php';

$ceo = Workers::getCeoInfo($pdoConnection);

require 'views/index.view.php';

