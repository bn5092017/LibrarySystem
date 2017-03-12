<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Doc\MainController;
$mainController = new MainController();

$mainController->indexAction();
