<?php
require_once 'vendor/autoload.php';
use Sunriseqf\JunitLaravel\Http\Controllers\JunitController;
$junit = new JunitController();
$junit->index();
